<?php

use App\Models\Customer;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CarController;
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
    return view('helloworld');
});

Route::get('/dashboard', function () {
    return view('dashboard' );
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/profile', function () {
return view ('dashboard',['biodata' => Customer::getBiodata()]);
});

Route::get('/greeting',function(){
    return view ('greeting',[
        'greeting'=> Customer::getGreeting()
    ]);
});

Route::get ('/greeting', [CustomerController::class,'index']);

Route::get('/Car', [CarController::class, 'list']);
Route::get('/Car/Detail/{Kode}', [CarController::class, 'CarDetail']);