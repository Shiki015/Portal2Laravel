<?php


namespace App\Models;

class News{

    public function getNews(){
        return \DB::table("news as n")
            ->join("users as u", "n.id_user", "=","u.id_user")
            ->paginate(4);

    }

    public function latestPostBannerTop4()
    {
        return \DB::table("news")
            ->select("id_news", "title_news", "big_photo", "created_at_news")
            ->orderBy("created_at_news", "desc")
            ->limit(4)
            ->get();
    }
    public function getSearchedNews($value){
        return \DB::table("news as n")->join("users as u", "n.id_user", "=","u.id_user")
            ->whereRaw('LOWER(`title_news`) LIKE ? ',$value)
            ->orWhereRaw('LOWER(`desc_news`) LIKE ? ',$value)
            ->paginate(4);
    }
    public function singleNews($id){
        return \DB::table("news as n")
            ->join("users as u", "n.id_user", "=","u.id_user")
            ->where("n.id_news", "=", $id)
            ->get();
    }
    public function selectOne($id){
        return \DB::table("news as n")
            ->join("news_tags as nt", "n.id_news", "=","nt.id_news")
            ->join("news_categories as nc", "n.id_news", "=","nc.id_news")
            ->where("n.id_news", "=", $id)
            ->get();
    }
    public function postsForTag($id){
        return \DB::table("news as n")
            ->join("news_tags as nt", "n.id_news", "=", "nt.id_news")
            ->join("users as u", "n.id_user", "=", "u.id_user")
            ->where("nt.id_tag", "=", $id)
            ->paginate(4);

    }
    public function getNewsForCategory($id){
        return \DB::table("news as n")
            ->join("news_categories as nc", "n.id_news", "=", "nc.id_news")
            ->join("categories as c", "nc.id_category", "=", "c.id_category")
            ->join("users as u", "n.id_user", "=", "u.id_user")
            ->where("nc.id_category","=",$id)
            ->paginate(4);
    }
    public function selectAll(){
        return \DB::table("news as n")
            ->join("users as u", "n.id_user", "=","u.id_user")
            ->get();
    }
    public function insert($request, $slika, $user){
        return \DB::table("news")
            ->insertGetId([
            "title_news"=>$request->input("title"),
            "desc_news"=>$request->input("description"),
            "desc_less_news"=>$request->input("description_less"),
            "id_user"=>$user,
            "big_photo"=>$slika
        ]);
    }
    public function insertTags($idProizvod, $tag){
        return \DB::table("news_tags")->insert([
            "id_news"=>$idProizvod,
            "id_tag"=>$tag
        ]);
    }
    public function insertCat($idPorizvod, $cat){
        return \DB::table("news_categories")->insert([
            "id_news"=>$idPorizvod,
            "id_category"=>$cat
        ]);
    }
    public function delete($id){
        return \DB::table("news")
            ->where("id_news","=",$id)
            ->delete();
    }
    public function update($id, $request, $slika = null, $user){

        $params = [
            "title_news"=>$request->input('title'),
            "desc_news"=>$request->input('description'),
            "desc_less_news"=>$request->input('description_less'),
            "id_user"=>$user
        ];
        if($slika){
            $params["big_photo"] = $slika;
        }

        return \DB::table("news")
            ->where("id_news","=",$id)
            ->update($params);
    }
}
