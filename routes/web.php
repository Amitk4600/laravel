<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/users', function () {
    $name='Amit kumar';
    $students = [
        1 => ["first_name" => "John","last_name" => "Doe", "age" => 28,"email" => "john@example.com" ],
        2 => ["first_name" => "Jane","last_name" => "Smith","age" => 24,"email" => "jane@example.com" ],   
        3 => ["first_name" => "Sam","last_name" => "Johnson","age" => 31,"email" => "sam@example.com" ]
    ];
    // return view('users',['user'=>$name,'city'=>'hisar']);
    return view('users',['users'=>$students,"email" => "jane@example.com" ]);

// 2nd method 

// return view('users')->with('user',$name)->with('city','Hansi');
});


// Route::get('/',[PageController::class,'showHome'])->name('home');
// Route::get('/user/{id}',[PageController::class,'showUser'])->name('user');
// Route::get('/blog',[PageController::class,'showBlog'])->name('blog');

Route::controller(PageController::class)->group(function(){
    Route::get('/','showHome')->name('home');
    Route::get('/user/{id}',[PageController::class,'showUser'])->name('user');
    Route::get('/blog','showBlog')->name('blog');
    
});

Route::get('/testing',TestController::class);