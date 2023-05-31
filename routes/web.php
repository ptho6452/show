<?php
namespace App\Http\Controllers;


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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



Route::get('/xinchao',[UserController::class , 'Xinchao' ]);

Route::get('/user',[UserController::class , 'GetIndex']);

//bài sum 
Route::get('/tinhtong',[UserController::class,'tinhtong']);


Route::post('/tinhtong',[UserController::class,'tinhtong']);

//bài areaOfShape
Route::get('/computeArea', [UserController::class, 'computeArea']);

// GET: được sử dụng để lấy thông tin từ sever theo URI đã cung cấp.
Route::post('/computeArea', [UserController::class, 'computeArea']);

// POST: gửi thông tin tới sever thông qua các biểu mẫu http (đăng kí chả hạn ...);
Route::get('/signup',[SignupController::class ,'index']);

Route::post('/signup',[SignupController::class ,'displayInfor']);


// addRooms
Route::get('/addrooms', [addRoomsController::class, 'index']);
Route::post('/addrooms', [addRoomsController::class, 'showrooms']);

Route::get('/sanpham',[PageController::class,'getIndex']);

Route::get('/detail/{id}',[PageController::class,'getDetail']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');














Route::get('/tinhtich/{a}/{b}', function ($a,$b) {
    echo $a*$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhtong/{a}/{b}', function ($a,$b) {
    echo $a+$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhhieu/{a}/{b}', function ($a,$b) {
    echo $a-$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhthuong/{a}/{b}', function ($a,$b) {
    echo $a/$b;exit;
    
})->whereNumber('a')->whereNumber('b');