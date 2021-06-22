<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades;
use App\Http\Controllers\TestController;
use App\Http\Controllers;


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

Route::get('/login/index', function () {
    return view('login.index');
});

Route::post('/login/index', [\App\Http\Controllers\LoginController::class, 'verify']);
Route::get('/login/test',[TestController::class, 'test']);
Route::get('/test', 'TestController@index');
Route::get('/admin/index', function (){
    return view('admin.index');
});

Route::get('/customer/index', function (){
    return view('customer.index');
});

/*Route::get('/vendor/index', function (){
    return view('vendor.index');
});*/
Route::group(['middleware'=>['sess']], function(){
    /*Route::get('/vendor/index', [Controllers\VendorController::class, 'index'])->middleware('sess');*/
    Route::get('/vendor/index', function (){
        return view('vendor.index');
    });
});
//Route::get('/vendor/index', [Controllers\VendorController::class, 'index']);

Route::get('/accountant/index', function (){
    return view('accountant.index');
});
