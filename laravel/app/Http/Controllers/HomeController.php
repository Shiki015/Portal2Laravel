<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactAdmin;
use App\Http\Requests\SearchRequest;
use App\Models\Comments;
use App\Models\News;
use App\Models\Tags;
use App\Services\MailerService;

class HomeController extends BaseController
{

    public function LoadView()
    {
        $news = new News();
        $this->data['news'] = $news->getNews();
        return view("pages.home", $this->data);
    }
    public function contactForm(){
        return view("pages.contact", $this->data);
    }
    public function sendMessage(ContactAdmin $request){
        $email = "smijailovic015@gmail.com";
        $text = $request->input('message');
        $title = "Contact Form - inquiry from: ".$request->input('emailSender');
        try{
            MailerService::sendMail($email,$text,$title);
            \Log::info("Mail to admin successfully sent from".$request->input('emailSender'));
            return response(null, 201);

        }catch (\PDOException $e){
            \Log::error("There was problem with sending mail to administrator from mail".$request->input('emailSender'));
            return response(null, 500);
        }
    }
    public function newsDetail($id)
    {

        $model = new News();
        $this->data["singleNews"] = $model->singleNews($id);

        $tags = new Tags();
        $this->data["tags"] = $tags->getTagsForOnePost($id);

        $comm = new Comments();
        $this->data['comments'] = $comm->getCommentsForPost($id);
        $this->data['replyComments'] = $comm->getReplies($id);


        return view("pages.newsDetail", $this->data);
    }

    public function postsForTag($id)
    {

        $model = new News();
        $this->data["posts"] = $model->postsForTag($id);

        $tag = new Tags();
        $this->data['tagName'] = $tag->getTagName($id);

        return view("pages.tag", $this->data);

    }

    public function postsForCategory($id)
    {

        $model = new News();
        $this->data['categoryNews'] = $model->getNewsForCategory($id);


        return view("pages.category", $this->data);
    }


    public function search(SearchRequest $request)
    {

        $value = "%" . strtolower($request->input('searchinput')) . "%";

        $modul = new News();
        $news = $modul->getSearchedNews($value);
        $this->data['news'] = $news;
        \Log::info("User: ".session('user')->firstName." searched:".$value);
        return view("pages.home", $this->data);
    }


}
