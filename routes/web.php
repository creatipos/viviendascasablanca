<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::group(['prefix' => 'admin'], function () {

    Route::get("/", "Admin\AdminController@index")->name("home");

});

Route::group(['prefix' => 'admin/noticias'], function () {

    Route::get("/", "Admin\NoticiasController@index")->name("noticias"); 
    Route::get("/lista", "Admin\NoticiasController@index")->name("n_lista"); 
    Route::get("/nueva", "Admin\NoticiasController@create")->name("n_nueva");
    Route::get("/editar/{id}", "Admin\NoticiasController@edit")->name("n_edit");
    Route::get("/eliminar/{id}", "Admin\NoticiasController@destroy")->name("n_destroy");
    Route::get("/secciones", "Admin\NoticiasController@create")->name("n_secciones");
    Route::post("/create_noticia", "Admin\NoticiasController@store")->name("create_noticia");
    Route::post("/actualizar_noticia", "Admin\NoticiasController@update")->name("update_noticia");

});

Route::group(['prefix' => 'admin/modelos'], function () {

    Route::get("/", "Admin\ModelosController@index")->name("modelos"); 
    Route::get("/lista", "Admin\ModelosController@index")->name("m_lista"); 
    Route::get("/nueva", "Admin\ModelosController@create")->name("m_nueva");
    Route::get("/editar/{id}", "Admin\ModelosController@edit")->name("m_edit");
    Route::get("/eliminar/{id}", "Admin\ModelosController@destroy")->name("m_destroy");
    Route::get("/secciones", "Admin\ModelosController@create")->name("m_secciones");
    Route::post("/create_modelos", "Admin\ModelosController@store")->name("create_modelo");
    Route::post("/actualizar_modelos", "Admin\ModelosController@update")->name("update_modelo");
    Route::post("/upload", "Admin\ModelosController@upload")->name("upload_modelos");

});


    //PORTADA DEL DOLAR
    Route::get("/", "www\HomeController@index")->name("homep"); 
    
    Route::get("/modelos", "www\HomeController@modelos")->name("homep"); 

    Route::get("/modelo/{id}", "www\HomeController@modelo")->name("modelo"); 

    Route::get("/cron/dolar", "www\HomeController@cron")->name("homep"); 
    Route::get("/cron/tend", "www\HomeController@cron_google")->name("homeps"); 

    Route::get("tend/{id}", "www\HomeController@noticiat")->name("noticia"); 

    Route::get('/sitemap/noticias.xml', 'SitemapController@posts');
    Route::get('/sitemap/noticias-tend.xml', 'SitemapController@tend');

    Route::get('/sitemap/rss', 'SitemapController@rss');


    Route::get('/api/cotiza', 'www\HomeController@api');

    Route::post('/api/cotiza', 'www\HomeController@api');


    Route::get('/api/widget', 'www\HomeController@widget');
    

    Route::post("/contacto", 'www\HomeController@contacto')->name("contacto");
