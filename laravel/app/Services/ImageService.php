<?php


namespace App\Services;


use App\Models\Category;
use App\Models\News;
use App\Models\Tags;

class ImageService
{
    public function insert($request){
        $model= new News();
        $slika = $this->upload($request);
        $user = session('user')->id_user;
        $tags = $request->input("tags");
        $categories = $request->input("categories");
        \DB::beginTransaction();
        try {
            $idProizvod =  $model->insert($request, $slika, $user);
            foreach ($tags as $tag) {
                $model->insertTags($idProizvod, $tag);
            }
            foreach ($categories as $cat){
                $model->insertCat($idProizvod, $cat);
            }
            \DB::commit();
        }
        catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            \DB::rollback();
        }
    }
    public function updateNews($request, $id){
        $model= new News();
        $tagModel = new Tags();
        $categoryModel = new Category();
        $user = session('user')->id_user;
        $tags = $request->input("tags");
        $categories = $request->input("categories");
        \DB::beginTransaction();
        try {
            if($request->file('picture')){
                $slika = $this->upload($request);

                $model->update($id,$request,$slika,$user);
            }else{
                $model->update($id,$request,$slika = null,$user);
            }

            $tagModel->deleteForNews($id);
            $categoryModel->deleteForNews($id);
            foreach ($tags as $tag) {
                $model->insertTags($id, $tag);
            }
            foreach ($categories as $cat){
                $model->insertCat($id, $cat);
            }
            \DB::commit();
        }
        catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            \DB::rollback();
        }
    }

    private function upload($request){
        $slika = $request->file("picture");

        $slika = UploadService::upload($slika);

        return $slika;
    }}
