<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});


//blog_routs
Route::get('/blog','BLOGController@index')->name('Blog');

//Contact_routs
Route::get('/Contact','CONTACTController@index')->name('contact');

//politique
Route::get('/confidentialité','POLITIQUE@index')->name('confidentialité');
Route::get('/Remboursement','POLITIQUE_REMB@index')->name('Remboursement');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix'=>'admin',
    'middleware'=>['auth']
] ,function(){
    //admin_routs
Route::get('/','ADMINController@index')->name('admin_home');

});//adminauth
