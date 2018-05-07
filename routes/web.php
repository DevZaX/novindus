<?php

use App\Http\Middleware\AuthAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontController@index');

Route::post('/', 'UserController@register');

Route::post('/login', 'UserController@check');

Route::post('/logout', 'UserController@logout');

Route::post('/contact', 'UserController@contact');











 Route::post('/users','UserController@updateAdmin')->middleware(AuthAdmin::class);; //admin

Route::get('/categories','CategorieController@index')->middleware(AuthAdmin::class);; //admin
Route::post('/categories','CategorieController@store')->middleware(AuthAdmin::class);; //admin
Route::delete('/categories/{id}','CategorieController@destroy')->middleware(AuthAdmin::class);; //admin
Route::put('/categories/{id}','CategorieController@update')->middleware(AuthAdmin::class);; //admin
Route::get('/categories/create','CategorieController@create')->middleware(AuthAdmin::class);
Route::get('/categories/{id}/edite',"CategorieController@edite")->middleware(AuthAdmin::class);;



Route::get('/titres','TitreController@index')->middleware(AuthAdmin::class);; //admin
Route::post('/titres','TitreController@store')->middleware(AuthAdmin::class);; //admin
Route::delete('/titres/{id}','TitreController@destroy')->middleware(AuthAdmin::class);; //admin
Route::put('/titres/{id}','TitreController@update')->middleware(AuthAdmin::class);; //admin
Route::get('/titres/create','TitreController@create')->middleware(AuthAdmin::class);
Route::get('/titres/{id}/edite',"TitreController@edite")->middleware(AuthAdmin::class);;

Route::get('/publicities/index',"PublicitieController@index")->middleware(AuthAdmin::class);
Route::get('/publicities/{id}/edite',"PublicitieController@edite")->middleware(AuthAdmin::class);;
Route::put('/publicities/{id}','PublicitieController@update')->middleware(AuthAdmin::class);; //admin



Route::get('/arts','ArtController@index')->middleware(AuthAdmin::class);; //admin
Route::post('/arts','ArtController@store')->middleware(AuthAdmin::class);; //admin
Route::delete('/arts/{id}','ArtController@destroy')->middleware(AuthAdmin::class);; //admin
Route::put('/arts/{id}','ArtController@update')->middleware(AuthAdmin::class);; //admin
Route::get('/arts/create','ArtController@create')->middleware(AuthAdmin::class);
Route::get('/arts/{id}/edite',"ArtController@edite")->middleware(AuthAdmin::class);;





Route::get('/create','PageController@create')->middleware(AuthAdmin::class);; //admin

Route::post('/pages','PageController@store')->middleware(AuthAdmin::class);; //admin

Route::get('/pages','PageController@index')->middleware(AuthAdmin::class);; //admin

Route::delete('/pages/{id}','PageController@destroy')->middleware(AuthAdmin::class);; //admin

Route::put('/pages/{id}','PageController@update')->middleware(AuthAdmin::class);; //admin

 

Route::get('/dashboardA', 'UserController@toAdmin')->middleware(AuthAdmin::class); //admin



Route::get('loginAdmin','UserController@loginAdmin');

Route::post('login-admin','UserController@loginAdminAuth');


Route::get('/pages/{title}','PageController@AffichePage');









Route::post('/search','ArticleController@search');



Route::get('/options','PictureController@options');

Route::post('/options','PictureController@picture');



Route::get("/menus","MenuController@index")->middleware(AuthAdmin::class);
Route::post("/menus","MenuController@store")->middleware(AuthAdmin::class);
Route::delete("/menus/{id}","MenuController@destroy")->middleware(AuthAdmin::class);
Route::get('/menus/create','MenuController@create')->middleware(AuthAdmin::class);
Route::get('/menus/{id}/edite',"MenuController@edite")->middleware(AuthAdmin::class);
Route::put('/menus/{id}','MenuController@update')->middleware(AuthAdmin::class);


Route::get("/pubs","PubController@index")->middleware(AuthAdmin::class);
Route::post("/pubs","PubController@store")->middleware(AuthAdmin::class);
Route::delete("/pubs/{id}","PubController@destroy")->middleware(AuthAdmin::class);
Route::get('/pubs/create','PubController@create')->middleware(AuthAdmin::class);
Route::get('/pubs/{id}/edite',"PubController@edite")->middleware(AuthAdmin::class);
Route::put('/pubs/{id}','PubController@update')->middleware(AuthAdmin::class);



Route::get("/ps","PController@index")->middleware(AuthAdmin::class);
Route::post("/ps","PController@store")->middleware(AuthAdmin::class);
Route::delete("/ps/{id}","PController@destroy")->middleware(AuthAdmin::class);
Route::get('/ps/create','PController@create')->middleware(AuthAdmin::class);
Route::get('/ps/{id}/edite',"PController@edite")->middleware(AuthAdmin::class);
Route::put('/ps/{id}','PController@update')->middleware(AuthAdmin::class);



Route::get('/categorie/{id}','FrontController@articles');

Route::get('/all/{id}','FrontController@Allarticles');

Route::get('/arts/{id}','FrontController@show_article');

Route::get('/artsItem/{id}','FrontController@show_pub');

Route::get('/commander/{id}',"FrontController@show_formulaire_commande");
Route::get('/commander/pub/{id}',"FrontController@show_formulaire_commande_pub");



Route::post('/valider','FrontController@valider');

Route::post('/valider_pub','FrontController@valider_pub');


Route::get('/page/{id}','FrontController@show_page');

Route::put('/infos/{id}','InfoController@changer_info');