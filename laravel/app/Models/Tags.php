<?php


namespace App\Models;


class Tags{

    public function getTagsForSideBar(){
        return \DB::table("tags")->orderBy("id_tag","asc")->get();

    }

    public function getTagsForOnePost($id){

        return \DB::table("tags as t")
            ->join("news_tags as nt", "t.id_tag", "=", "nt.id_tag" )
            ->where("nt.id_news", "=", $id)
            ->get();

    }
    public function getTagsForPost($id){

        return \DB::table("tags as t")
            ->join("news_tags as nt", "t.id_tag", "=", "nt.id_tag" )
            ->where("nt.id_news", "=", $id)
            ->select("t.id_tag")
            ->get();

    }
    public function getTagName($id){
        return \DB::table("tags")
            ->select("tag")
            ->where("id_tag","=",$id)
            ->get();
    }
    public function delete($id){
        return \DB::table("tags")->where("id_tag","=",$id)->delete();
    }
    public function selectOne($id){
        return \DB::table("tags")->where("id_tag","=",$id)->get();
    }
    public function update($id, $tag_name){
        return \DB::table("tags")->where("id_tag","=",$id)->update(["tag"=>$tag_name]);
    }
    public function insert($tag_name){
        return \DB::table("tags")->insert(["tag"=>$tag_name]);
    }
    public function deleteForNews($id){
        return \DB::table("news_tags")->where("id_news","=",$id)->delete();
    }
}
