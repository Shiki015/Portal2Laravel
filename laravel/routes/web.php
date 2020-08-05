<?php



Route::get('/', 'HomeController@LoadView')->name("home");
Route::get('/newsDetail/{id}', 'HomeController@newsDetail')->where(["id"=>"\d+"])->middleware(['isLoggedIn']); ;

Route::get('/login', 'UserController@loginFormView');
Route::post('/doLogin', 'UserController@doLogin');

Route::get('/signup', 'UserController@SignUpFormView');
Route::post('/doRegister', 'UserController@doRegister');
Route::get('/logout', 'UserController@logout')->name("logout")->middleware(['isLoggedIn']);

Route::get('/search', 'HomeController@search')->middleware(["admin"]);
Route::get('/tag/{id}', 'HomeController@postsForTag')->where(["id"=>"\d+"]);
Route::get('/category/{id}', 'HomeController@postsForCategory')->where(["id"=>"\d+"]);
Route::post('/addComment', 'CommentController@addComment')->middleware(['isLoggedIn']);
Route::post('/addReply', 'CommentController@addReply')->middleware(['isLoggedIn']);
Route::post('/subscribe', 'UserController@subscribe');
Route::get('/forgetPassword', 'UserController@showFormForFP');
Route::post('/forgetPassword', 'UserController@forgetPassword');
Route::get('/deleteComm/{id}', 'CommentController@deleteComment')->middleware(["admin"]);
Route::get('/contact', "HomeController@contactForm");
Route::post('/sendMessage', 'HomeController@sendMessage');




Route::prefix("/admin")->middleware(["admin"])->group(function(){

    Route::get("/admin/users", "Admin\UsersController@index")->name("users.index");
    Route::get("/admin/users/create", "Admin\UsersController@create")->name("users.create");
    Route::get("/admin/users/{id}", "Admin\UsersController@show")->name("users.show");
    Route::post("/admin/users", "Admin\UsersController@store")->name("users.store");
    Route::post("/admin/users/{id}/update", "Admin\UsersController@update")->name("users.update");
    Route::get("/admin/users/{id}/delete", "Admin\UsersController@destroy")->name("users.delete");


    Route::get("/admin/category", "Admin\CategoryController@index")->name("category.index");
    Route::get("/admin/category/create", "Admin\CategoryController@create")->name("category.create");
    Route::get("/admin/category/{id}", "Admin\CategoryController@show")->name("category.show");
    Route::post("/admin/category", "Admin\CategoryController@store")->name("category.store");
    Route::post("/admin/category/{id}/update", "Admin\CategoryController@update")->name("category.update");
    Route::get("/admin/category/{id}/delete", "Admin\CategoryController@destroy")->name("category.delete");


    Route::get("/admin/comment", "Admin\CommentsController@index")->name("comment.index");
    Route::get("/admin/comment/{id}/delete", "Admin\CommentsController@destroy")->name("comment.delete");

    Route::get("/admin/tag", "Admin\TagsController@index")->name("tag.index");
    Route::get("/admin/tag/create", "Admin\TagsController@create")->name("tag.create");
    Route::get("/admin/tag/{id}", "Admin\TagsController@show")->name("tag.show");
    Route::post("/admin/tag", "Admin\TagsController@store")->name("tag.store");
    Route::post("/admin/tag/{id}/update", "Admin\TagsController@update")->name("tag.update");
    Route::get("/admin/tag/{id}/delete", "Admin\TagsController@destroy")->name("tag.delete");

    Route::get("/admin/news", "Admin\NewsController@index")->name("news.index");
    Route::get("/admin/news/create", "Admin\NewsController@create")->name("news.create");
    Route::get("/admin/news/{id}", "Admin\NewsController@show")->name("news.show");
    Route::post("/admin/news", "Admin\NewsController@store")->name("news.store");
    Route::post("/admin/news/{id}/update", "Admin\NewsController@update")->name("news.update");
    Route::get("/admin/news/{id}/delete", "Admin\NewsController@destroy")->name("news.delete");


    Route::get("/admin/subscribe", "Admin\SubscribeController@index")->name("sub.index");
    Route::get("/admin/subscribe/{id}/delete", "Admin\SubscribeController@destroy")->name("sub.delete");

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name("logs");




});
