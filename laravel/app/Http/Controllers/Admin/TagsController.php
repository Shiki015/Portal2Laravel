<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Tags();
        $this->data['tags'] = $model->getTagsForSideBar();
        return view("pages.admin.tags", $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['form'] = 'insert';
        return view("pages.admin.tags",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $model = new Tags();
        $tag_name = $request->get("tag_name");


        try {
            $model->insert($tag_name);
            \Log::info("novi tag uspenso dodat. (".$tag_name.")");
            return redirect(route("tag.index"))->with("success", "Tag successfully added!");
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
        $model = new Tags();
        $this->data['tags'] = $model->selectOne($id);
        $this->data['form'] = 'edit';

        return view("pages.admin.tags", $this->data);
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
    public function update(TagRequest $request, $id)
    {
        $tagModel = new Tags();
        $tag_name = $request->get('tag_name');


        try {
            $tagModel->update($id, $tag_name);
            \Log::info("tag sa id-jem: ".$id." uspesno azuriran !".time());
            return redirect(route("tag.index"))->with("success", "Tag successfully edited!");
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
        $model= new Tags();
        try {
            $model->delete($id);
            \Log::info("tag sa id-jem: ".$id." uspesno obrisan !".time());
            return redirect(route("tag.index"))->with("success", "Tag successfully deleted!");
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect(route("tag.index"))->with("error", "An error has occurred, please check log file.");
        }
    }
}
