<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends BackendController
{

    public function index()
    {
        $model = new Comments();
        $this->data['comments'] = $model->selectAll();
        return view("pages.admin.comments", $this->data);
    }

   public function destroy($id)
    {
        $model= new Comments();
        try {
            $model->deleteComment($id);
            \Log::info("komentar sa id-jem: ".$id." uspeno obrisan !");
            return redirect(route("comment.index"))->with("success", "Comment successfully deleted!");
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect(route("comment.index"))->with("error", "An error has occurred, please check log file.");
        }
    }
}
