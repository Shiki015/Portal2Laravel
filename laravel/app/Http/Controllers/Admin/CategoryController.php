<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Category();
        $this->data['categories']=$model->getCategories();

        return view('pages.admin.categories', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['form'] = 'insert';

        return view("pages.admin.categories", $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $model = new Category();
        $category_name = $request->get("category_name");


        try {
            $model->insert($category_name);
            \Log::info("nova kategorija (".$category_name.") uspesno uneta");
            return redirect(route("category.index"))->with("success", "Category successfully edited!");
        } catch(\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->back()->with("error", "An server error has occurred, please try again later.");
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
        $model = new Category();
        $this->data['category'] = $model->selectOne($id);
        $this->data['form'] = 'edit';

        return view("pages.admin.categories", $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $userModel = new Category();
        $category_name = $request->get("category_name");


        try {
            $userModel->update($id, $category_name);
            \Log::info("Uspesno promenjeno ime kategorije! ");
            return redirect(route("category.index"))->with("success", "Category successfully edited!");
        } catch(\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->back()->with("error", "An server error has occurred, please try again later.");
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
        $model= new Category();
        try {
            $model->delete($id);

            \Log::info("kategorija sa id-jem: ".$id." uspesno obrisna");
            return redirect(route("category.index"))->with("success", "Category successfully deleted!");
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect(route("category.index"))->with("error", "An error has occurred, please check log file.");
        }
    }
}
