<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUploadRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Tags;
use App\Services\ImageService;
use App\Services\UploadNewsService;
use Illuminate\Http\Request;

class NewsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new News();
        $this->data['news']=$model->selectAll();

        return view("pages.admin.news", $this->data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['form'] = 'insert';
        $tagModel = new Tags();
        $this->data['tags']=$tagModel->getTagsForSideBar();
        $categoryModel = new Category();
        $this->data['categories']= $categoryModel->getCategories();
        return view("pages.admin.news", $this->data);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $service = new ImageService();
       try{
           $service->insert($request);
           \Log::info("Novi post uspesno dodat od strane: ".session('user')->firstName);
           return redirect("/admin/admin/news")->with("success","New Post inserted");
       }catch (\PDOException $e){
           \Log::error("neupsesan insert slike ! ");
           return redirect()->back()->with("error", "There is a problem, try later");

       }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new News();
        $this->data['news'] = $model->singleNews($id);
        $this->data['form'] = 'edit';
        $tagModel = new Tags();
        $this->data['tags']=$tagModel->getTagsForSideBar();
        $tagovi= $tagModel->getTagsForPost($id);
        $cekiraniTagovi = [];
        foreach ($tagovi as $tag){
            $cekiraniTagovi[]=$tag->id_tag ;
        }
        $this->data['tagsCheck']=$cekiraniTagovi;
        $categoryModel = new Category();
        $this->data['categories']= $categoryModel->getCategories();
        $kategorije = $categoryModel->getCategoriesForPost($id);
        $cekiraneKategorije = [];
        foreach ($kategorije as $kat){
            $cekiraneKategorije[]=$kat->id_category;
        }
        $this->data['categoriesCheck']=$cekiraneKategorije;
        return view("pages.admin.news", $this->data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUploadRequest $request, $id)
    {
        $service = new ImageService();
        try{
            $service->updateNews($request, $id);
            \Log::info("post sa id-jem: ".$id." uspesnmo azuriran od strane: ".session('user')->firstName);
            return redirect("/admin/admin/news")->with("success","Post updated");
        }catch (\PDOException $e){
            \Log::error("neupsesan update ! ");
            return redirect()->back()->with("error", "There is a problem, try later");

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model= new News();
        try {
            $model->delete($id);
            \Log::info("post id: ".$id." usepsno obrisan ");
            return redirect(route("news.index"))->with("success", "Post successfully deleted!");
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect(route("news.index"))->with("error", "An error has occurred, please check log file.");
        }
    }
}
