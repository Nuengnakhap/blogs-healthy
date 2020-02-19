<?php


// User Routes
Route::group(['namespace' => 'User'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('infographic', 'HomeController@info')->name('info');
    Route::get('post', 'PostController@index')->name('post.index');
    Route::get('post/{post}', 'PostController@post')->name('post');
    Route::resource('comment', 'CommentController');
    Route::get('post/tag/{tag}', 'PostController@tag')->name('post.tag');
    Route::post('post/search/', 'PostController@search')->name('post.search');
    Route::resource('forum', 'ForumController');
    Route::post('comment-forum', 'CommentController@store_forum')->name('comment.store_forum');
});

Route::get('about', function () {
    return view('user.about');
})->name('about');

Route::get('archive', function () {
    return view('user.archive');
})->name('archive');

Route::get('contact', function () {
    return view('user.contact');
})->name('contact');

// Admin Routes
Route::group(['namespace' => 'Admin'], function() {
    Route::resource('admin/home', 'DashboardController');
    Route::resource('admin/new-article', 'PostController');
    Route::resource('admin/articles', 'PostController');
    Route::resource('admin/edit-article', 'PostController');
    Route::resource('admin/tags', 'TagController');
    Route::resource('admin/users', 'UserController');
    Route::get('admin/users/user/{id}', 'UserController@edit_commenter')->name('user.edit');
    Route::get('admin/users/admin/{id}', 'UserController@edit_writer')->name('admin.edit');
    Route::put('admin/users/user/{id}', 'UserController@update_commenter')->name('user.update');
    Route::put('admin/users/admin/{id}', 'UserController@update_writer')->name('admin.update');


    // Authentication Routes...
    Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Auth\LoginController@login');
    
});

Route::get('admin/approved', function () {
    return view('admin.approved');
})->name('admin-approved');

Route::get('admin/unapproved', function () {
    return view('admin.unapproved');
})->name('admin-unapproved');

Route::get('admin/settings', function () {
    return view('admin.settings');
})->name('admin-settings');
Auth::routes();

