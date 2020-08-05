<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Roles;
use App\Models\Users;
use App\User;
use Illuminate\Http\Request;

class UsersController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Users();
        $this->data['users'] = $model->selectAll();
        return view("pages.admin.dashboard", $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['form'] = 'insert';
        $roleModel = new Roles();
        $this->data['roles'] = $roleModel->selectAll();
        return view("pages.admin.dashboard", $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateUserRequest $request)
    {
        $userModel = new Users();
        $first_name = $request->get('first_name');
        $last_name = $request->get("last_name");
        $email = $request->get('email');
        $password = $request->get("password");
        $role_id = $request->get("role_id");
        $date = date("Y-m-d H-i-s", time());

        try {

            $userModel->insert( $email, $password,$first_name, $last_name, $date,$role_id);
            \Log::info("novi korisnik uspesno dodat");
            return redirect(route("users.index"))->with("success", "User successfully added!");
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
        $model = new Users();
        $this->data['user'] = $model->selectOne($id);
            $this->data['form'] = 'edit';

        $roleModel = new Roles();
        $this->data['roles'] = $roleModel->selectAll();
        return view("pages.admin.dashboard", $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $userModel = new Users();
        $first_name = $request->get('first_name');
        $last_name = $request->get("last_name");
        $email = $request->get('email');
        $role_id = $request->get("role_id");

        try {
                $userModel->updateWithOutPassword($id, $first_name, $last_name, $email, $role_id);
            \Log::info("korisnik sa id-jem: ".$id." uspesno azuriran !");
            return redirect(route("users.index"))->with("success", "User successfully edited!");
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
        $model= new Users();
        try {
            $model->delete($id);
            \Log::info("korisnik sa id-jem: ".$id." uspesno obrisan !");
            return redirect(route("users.index"))->with("success", "User successfully deleted!");
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect(route("users.index"))->with("error", "An error has occurred, please check log file.");
        }
    }
}
