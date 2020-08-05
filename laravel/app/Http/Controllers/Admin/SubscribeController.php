<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Subscribe();
        $this->data['subsrcibers'] = $model->getAll();

        return view("pages.admin.subscribe", $this->data);

    }


    public function destroy($id)
    {
        $model = new Subscribe();

        try {
            $model->delete($id);
            \Log::info("subscriber sa id-jem: ".$id." uspesno obrisan sa liste");
            return redirect(route("sub.index"))->with("success", "Users removed from the list of subscribers! ");
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect(route("sub.index"))->with("error", "An error has occurred, please check log file.");
        }
    }
}
