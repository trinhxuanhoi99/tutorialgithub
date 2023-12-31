<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
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

/*
cách call controller
add use App\Http\Controllers\[tên controller vừa tạo];
cấu trúc gọi
Route::get('uri',[namecontroller::class,'function']);
*/
Route::get('/', function () {
    return view('welcome');
});

route::get('khoahoc',function (){
    return "Xin chào các bạn";
});

route::get('khoapham/laravel',function (){
    echo "<h1>khoa học - laravel</h1>";
});

route::get('hoten/{ten}',function ($ten){
echo "họ và tên của bạn là: ".$ten;
});

route::get('laravel/{ngay}',function ($ngay){
    echo "khoapham".$ngay;
})->where(['ngay'=>'[a-z]+']);
route::get('hoten/{ten}',function ($ten){
    echo "tên của bản là:".$ten;
});

route::get('laravel1/{ngay}',function ($ngay){
   echo "khoa pham".$ngay;
});

//dinh danh route
Route::get('route1',['as'=>'myroute',function(){
    echo "hello";
}]);

Route::get('route2',function (){
    echo "route 2";
})->name('myroute2');

Route::get('goiroute',function (){
    return redirect()->route('myroute2');
});

//group route
Route::group(['prefix'=>'Mygroup'],function (){
    Route::get('user1',function (){
        echo "user 1";
    });
    Route::get('user2',function (){
        echo "user 2";
    });
});

Route::get('callcontroller/{user}',[Mycontroller::class,'index']);
Route::get('Thamso/{ten}',[Mycontroller::class,'Khoahoc']);

// URL

Route::get('Myrequest',[Mycontroller::class,'GetUrl']);

// goi view

Route::get('getform',function (){
    return view('postForm');
});

Route::post('PostForm1',[Mycontroller::class,'form'])->name('Postform');

//cookies
Route::get('setcookie',[Mycontroller::class,'setcookie']);
Route::get('getcookies',[Mycontroller::class,'getcookie']);
