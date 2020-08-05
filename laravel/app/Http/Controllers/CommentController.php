<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends BaseController
{
    public function addComment(CommentRequest $request)
    {


        if($request->input("comment") != ""){
            $comment = $request->input("comment");
            $id_news = $_POST['id_news'];
            $user = session('user')->id_user;
            $date = date("Y-m-d H-i-s", time());

            $model = new Comments();

            try {
                $model->insertComment($id_news, $user, $date, $comment);
                \Log::info("Novi komentar uspesno dodat za post id:".$id_news." od strane korisnika sa id-jem: ".$user." u vreme: ".time());
                return redirect()->back()->with('success-comm', "Comment is successfully added!");
            } catch (\PDOException $e) {
                \Log::error("Greska pri dodavanju komentara " . $e->getMessage());
                return redirect()->back()->with('warning', "Doslo je do greske na serveru.");
            }

        }else{
            return redirect()->back()->with('warning-comm', "Comment filed can not be empty.");
        }
    }

    public function addReply(CommentRequest $request)
    {
        if($request->input("comment" )== ""){
            return redirect()->back()->with('warning-comm', "Comment filed can not be empty.");
        }else {
            $comment =$request->input("comment" );
            $id_news = $_POST['id_news'];
            $user = session('user')->id_user;
            $parent = $_POST['parent_id'];
            $date = date("Y-m-d H-i-s", time());
            $model = new Comments();
            try {
                $model->insertReply($id_news, $user, $date, $comment, $parent);
                \Log::info("Novi komentar uspesno dodat za post id:".$id_news." od strane korisnika sa id-jem: ".$user." u vreme: ".time());
                return redirect()->back()->with('success-comm', "Comment is successfully added!");
            } catch (\PDOException $e) {
                \Log::error("Greska pri dodavanju komentara " . $e->getMessage());
                return redirect()->back()->with('warning-comm', "Doslo je do greske na serveru.");
            }
        }
    }
    public function deleteComment($id){
        $model = new Comments();

        try {
            if ( $model->deleteComment($id)) {
                \Log::info("Komentar sa id-jem: ".$id." usoenso obrisan ".time());
                return redirect()->back()->with("success-comm", "Comment successfully deleted.");
            } else {
                \Log::critical("Korisnik bez dozvoljenih prava pokusao da obrise komentar.");
                return redirect()->back()->with("warning-comm", "An error has occurred, please try again later.");
            }
        } catch (\PDOException $e) {
            \Log::error("Greska pri brisanju komentara  " . $e->getMessage());
            return redirect()->back()->with("warning-comm", "An error has occurred, please try again later.");
        }
    }
}
