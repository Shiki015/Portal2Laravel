<?php

namespace App\Models;

class Users{
    public function doLogin($email, $password){
        return \DB::table("users AS u")
            ->join("roles AS r", "u.id_role", "=", "r.id_role")
            ->select("u.*", "r.role")
            ->where([
                ["email", "=", $email],
                ["password", "=", md5($password)]
            ])
            ->first();
    }
    public function doRegister($email,$pass,$fname,$lname,$date){
        \DB::table("users")->insert([
            ['email'=>$email, 'password'=>md5($pass), 'firstName'=>$fname, "lastName"=>$lname, "id_role"=>2, "created_at"=>$date]
        ]);

    }
    public function selectAll(){
        return \DB::table("users AS u")->join("roles as r","u.id_role","=","r.id_role")->orderBy("u.id_user", "asc")->get();
    }
    public function resetPassword($email, $newPass){
        \DB::table("users")
            ->where('email', $email)
            ->update(['password'=> md5($newPass)]);
    }
    public function selectOne($id){
        return \DB::table('users')
            ->where("id_user", "=", $id)
            ->get();
    }
    public function delete($id){
        return \DB::table('users')
            ->where("id_user","=", $id)
            ->delete();
    }

    public function updateWithOutPassword($id, $first_name, $last_name, $email, $role_id){
        return \DB::table('users')
            ->where("id_user", $id)
            ->update(
                ['email'=>$email,'firstName'=>$first_name, 'lastName'=>$last_name, 'id_role'=>$role_id]
            );
    }

    public function insert($email, $password,$first_name, $last_name, $date,$role_id){
        \DB::table("users")->insert([
            ['email'=>$email, 'password'=>md5($password), 'firstName'=>$first_name, "lastName"=>$last_name, "id_role"=>$role_id, "created_at"=>$date]
        ]);
    }
}

