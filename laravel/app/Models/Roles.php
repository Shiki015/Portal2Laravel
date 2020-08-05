<?php


namespace App\Models;


class Roles
{
    public function selectAll(){
        return \DB::table("roles")->get();
    }

}
