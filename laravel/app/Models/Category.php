<?php

namespace App\Models;

class Category{

    public function getCategories(){
        return \DB::table("categories")->get();

    }

    public function selectOne($id){
        return \DB::table("categories")->where("id_category","=",$id)->get();
    }

    public function update($id, $category_name){
        return \DB::table("categories")->where("id_category",$id)->update(["category"=>$category_name]);
    }
    public function delete($id){
        return\DB::table("categories")->where("id_category","=",$id)->delete();
    }
    public function insert($category_name){
        return \DB::table("categories")->insert([
            "category"=>$category_name
        ]);
    }
    public function getCategoriesForPost($id){

        return \DB::table("categories as c")
            ->join("news_categories as nc", "c.id_category", "=", "nc.id_category" )
            ->where("nc.id_news", "=", $id)
            ->get();

    }
    public function deleteForNews($id){
        return \DB::table("news_categories")->where("id_news","=",$id)->delete();
    }
}
