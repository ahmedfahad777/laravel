<?php

Route::get('voters', 'VotersController@index');

Route::get('voters/create1', 'VotersController@create1');

Route::get('voters/create2', 'VotersController@create2');









Route::model('posts', 'Posts');

Route::bind('posts', function($value, $route) {
    return App\Posts::whereid($value)->first();
});

Route::resource('posts', 'PostsController');




Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/about', 'AboutController@about');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', 'ContactController@contact');

Route::get('/newuserprofile', 'NuserprofileController@index');

Route::get('/task/index', 'TaskController@index');


Route::get('article/create', 'ArticleController@create');


Route::get('layouts/newuserprofile', 'NuserprofileController@index');


Route::get('/searchResult.index', 'SearchResultController@search');


Route::get('/userprofile', 'UserController@userprofile');

Route::get('/newtimeline', 'NewTimelineController@newtimeline');


Route::get('/timeline', 'TimelineController@index');
Route::get('/timelineold', 'TimelineoldController@index');
Route::get('/faq', 'faqController@index');

Route::get('/blog-item', 'BlogItemController@index');
Route::get('/portfolio', 'PortfolioController@portfolio');

Route::get('/fahad', 'FahadController@index');

Route::get('/ecommerce', 'EcommerceController@ecommerce');

Route::resource('/image', 'ImageController');



//
//Route::model('projects', 'Project');
//Route::resource('tasks', 'TasksController');
//
//
//Route::bind('tasks', function($value, $route) {
//    return App\Task::whereSlug($value)->first();
//});
//
//Route::bind('projects', function($value, $route) {
//    return App\Project::whereSlug($value)->first();
//});
//
//Route::resource('projects', 'ProjectsController');


Route::model('projects', 'Project');
Route::model('tasks', 'Task');
// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

//Route::get('/newtimeline', 'NewTimelineController@index');
//
//Route::get('/new', 'NewTimelineController@index');
//Route::get('newtimeline/create', 'NewTimelineController@create');
//Route::get('newtimeline/edit', 'NewTimelineController@edit');
//Route::get('newtimeline/show', 'NewTimelineController@show');
//
//Route::get('/newtimeline/{id}', 'NewTimelineController@index');
//
//Route::post('newtimeline', 'NewTimelineController@store');


//
//Route::model('newtimelines', 'Newtimeline');
//
//Route::bind('newtimelines', function($value, $route) {
//    return App\Newtimeline::whereid($value)->first();
//});
//
//Route::resource('newtimeline', 'NewTimelineController');
