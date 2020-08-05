<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $data = [];

    public function __construct(){

        $news= new News();
        $category = new Category();
        $tags= new Tags();

        $this->data['category']=$category->getCategories();
        $this->data['recent']=$news->latestPostBannerTop4();
        $this->data['tags']=$tags->getTagsForSideBar();

    }
}
