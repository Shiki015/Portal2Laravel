<?php

namespace App\Models;

class Comments{
    public function getCommentsForPost($id){
        return  \DB::table("comments as c")
            ->join("users as u", "c.id_user", "=","u.id_user")
            ->where([
               ["id_news", "=", $id],
                ["parent_id", "=", null]
            ])

            ->paginate(3);
    }
    public function getReplies($id){
        return \DB::table("comments as c")
            ->join("users as u", "c.id_user", "=", "u.id_user")
            ->where([
                ["id_news", "=", $id],
                ["parent_id", "!=", null]
            ])
            ->get();

    }
    public function insertComment($id_news,$user,$date,$comment){
            \DB::table("comments")->insert([
                ['commnet'=>$comment, 'created_at_commnet'=>$date, 'id_user'=>$user, "id_news"=>$id_news]
            ]);
    }
    public function insertReply($id_news,$user,$date,$comment,$parent){
        \DB::table("comments")->insert([
            ['commnet'=>$comment, 'created_at_commnet'=>$date, 'id_user'=>$user, "id_news"=>$id_news, "parent_id"=>$parent]
        ]);
    }
    public function deleteComment($id){
      return \DB::table("comments")->where("id_comment","=",$id)->delete();

    }
    public function selectAll(){
        return \DB::table("comments")->get();
    }
}
