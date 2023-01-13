<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::group(['middleware'=>'web'],function(){

    Route::get('/', function () {
    
        return view('welcome');
    });
    
    Route::get('/about', function () {
        return view('about');
    });
    
    Route::get('/register', function () {
        return view('register');
    });
    
    Route::get('/login', function () {
           if(session()->has('user')){
            return redirect('/userlist');
           }
       return view('login');
    });


    Route::get('/logout', function () {
        if(session()->has('user')){
             session()->pull('user',null);
             
        }
        return redirect('/login');
        
 
 });

    Route::get('/userlist', function () {
        return view('userlist');
    });

  
    
    Route::post("/login",[UserController::class,'login']);
    
    Route::post("/register",[UserController::class,'register']);
    
    Route::get("/userlist",[UserController::class,'userlist']);

    Route::get("/delete/{id}",[UserController::class,'delete']);

    Route::get("/update/{id}",[UserController::class,'edit']);

    Route::post("update",[UserController::class,'update']);

    

});
