<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\SubscribeRequest;
use App\Models\Subscribe;
use App\Models\Users;
use App\Services\MailerService;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;


class UserController extends BaseController
{

    public function loginFormView(){

        return view("pages.login", $this->data);
    }

    public function signUpFormView(){
        return view("pages.signup", $this->data);
    }
    public function showFormForFP(){
        return view("pages.forgetPasswordForm", $this->data);
    }

    public function doLogin(LoginRequest $request){

              $email = $request->input("email");
        $pass = $request->input("password");

        $model = new Users();
        $user = $model->doLogin($email, $pass);

        if($user){
            $request->session()->put("user", $user);
            \Log::info("korisnik sa mailom: ".$email." se uspeno logovao u: ");
            return \redirect("/")->with("success", "Logged in successfully");
        }else {
            \Log::error("korisnik sa mailom".$email." je imao problema sa logovanjem u ");
            return redirect("/login")->with("message", "There is a problem!");
        }

    }
    public function doRegister(RegisterRequest $request){

        $email = $request->input("email");
        $pass = $request->input("password");
        $fname = $request->input("fname");
        $lname = $request->input("lname");
        $date = date("Y-m-d H-i-s", time());

        $model = new Users();
        $model->doRegister($email,$pass,$fname,$lname,$date);
        \Log::info("Uspesno registrovan novi koirsnik sa emilom: ".$email);
        return redirect("/login")->with("success", "Your account is created now login !");

    }
    public function logout(Request $request){
        $request->session()->forget("user");

        return redirect("/login")->with("success", "You are logged out !");
    }
    public function subscribe(SubscribeRequest $request){

        $email = $request->input("email");

        $text = "Thank you for your subscribe !";
        $title = "Subscribed";
        $model = new Subscribe();

        try{
            $model->add($email);
            MailerService::sendMail($email,$text,$title);

            \Log::info("New subscription with mail".$email);
            return redirect('/')->with('success-sub', "Message has been sent !");
        }catch (Exception $e){
            \Log::error($e->getMessage());
            return redirect('/')->with("message-sub", "There is a problem, try again later !");
        }
    }
    public function forgetPassword(SubscribeRequest $request){

        $email = $request->input("email");
        $newPass= "Sifra1";

        $model = new Users();

        $model->resetPassword($email, $newPass);
        $text = "Your new password is:".$newPass;
        $title = "Reset Password Request";

        MailerService::sendMail($email,$text,$title);
        \Log::info("korisnik mailom: ".$email." je uspesno podneo zahtev za promenu lozinke");
        return redirect("/login")->with("success", "Check your email address for new password");
    }

}
