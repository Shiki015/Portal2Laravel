<?php


namespace App\Models;


class Subscribe
{
    public function add($email){
        \DB::table("subsribe")->insert(['email'=>$email]);
    }
    public function getAll(){
       return \DB::table('subsribe')->get();
    }
    public function delete($id){
        return \DB::table("subsribe")->where("id_sub","=",$id)->delete();
    }
}
