<?php

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
Route::get('/product', function () {
    return view('product');
});
Route::get('/add1', function () {
    return view('add1');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/addpr', function () {
    return view('addpr');
});
Route::get('/tv', function () {
    return view('tv');
});
Route::get('/computer', function () {
    return view('computer');
});
Route::get('/projector', function () {
    return view('projector');
});
Route::get('/camera2', function () {
    return view('camera2');
});
Route::get('/product',"App\Http\Controllers\IController@showproduct");
Route::get('login',"App\Http\Controllers\IController@login1");
//contactpage
Route::get('index',"App\Http\Controllers\IController@index");
//loginpage
Route::get('index2',"App\Http\Controllers\IController@index2");
//dishwasher
Route::get('index3',"App\Http\Controllers\IController@index3");
//dishwasher2
Route::get('index4',"App\Http\Controllers\IController@index4");
//addtocart
Route::get('index5',"App\Http\Controllers\IController@index5");
//tv
Route::get('index6',"App\Http\Controllers\IController@index6");
//lgdishwasher
Route::get('index7',"App\Http\Controllers\IController@index7");
//dishwasher
Route::get('index8',"App\Http\Controllers\IController@index8");
//login of username and password
Route::post('/session-form-submit','App\Http\Controllers\IController@sfm');
//insertion of name,email
Route::post('/form-submit','App\Http\Controllers\IController@fm');
//insertion of contact us 
Route::post('/submit','App\Http\Controllers\IController@sm');
//logout
Route::get('/logout-user','App\Http\Controllers\IController@logout');
//addtocart insertion product1 
Route::post('/addcart','App\Http\Controllers\IController@cart');
//addtocart insertion product2
Route::post('/addcart1','App\Http\Controllers\IController@cart1');
//addtocart insertion product3
Route::post('/addcart2','App\Http\Controllers\IController@cart2');
//addtocart insertion product4
Route::post('/addcart3','App\Http\Controllers\IController@cart3');
//addtocart insertion product5
Route::post('/addcart4','App\Http\Controllers\IController@cart4');
////addtocart insertion product6
Route::post('/addcart5','App\Http\Controllers\IController@cart5');
////addtocart insertion productdishwasher
Route::post('/addcart6','App\Http\Controllers\IController@cart6');
//product lg dishwahser
Route::post('/addcart7','App\Http\Controllers\IController@cart7');
//product  dishwahser
Route::post('/addcart8','App\Http\Controllers\IController@cart8');
//displaycart
Route::get('/display','App\Http\Controllers\IController@displaycart');
//addproduct
Route::get('/addpro','App\Http\Controllers\IController@addproduct');
//insertproduct
Route::post('/addproduct1','App\Http\Controllers\IController@addproduct1');
//displayproducts file and displayed
Route::get('/displayproduct','App\Http\Controllers\IController@displayproduct');
//product insertion dishwasher
Route::post('/buy','App\Http\Controllers\IController@buy1');
Route::post('/buyn','App\Http\Controllers\IController@buy2');
Route::post('/buyno','App\Http\Controllers\IController@buy3');
//displaydish
Route::get('displayproduct2/{id}','App\Http\Controllers\IController@dsp');
//review
Route::post('/review','App\Http\Controllers\IController@rv');
//quantity
Route::post('/enter','App\Http\Controllers\IController@insert');
//addcart
Route::post('/enter','App\Http\Controllers\IController@insert');

//show product
Route::get('show-product/{id}','App\Http\Controllers\IController@dishwashers');
//show product
// Route::get('show-pro/{id}','App\Http\Controllers\IController@dishwasher1');
//showww
Route::post('show-pro/{id}','App\Http\Controllers\IController@showproduct1');
//cart page
 Route::post('cart-form/{id}','App\Http\Controllers\IController@addcart');
 //cart page table 
 Route::get('ca/{id}','App\Http\Controllers\IController@cartproduct');
 //remove
 Route::get('remove/{id}','App\Http\Controllers\IController@remove1');
 //add product display
 //showww
Route::post('index5/{id}','App\Http\Controllers\IController@home');
Route::get('tv','App\Http\Controllers\IController@tv');
//show tv 
Route::post('show/{id}','App\Http\Controllers\IController@showproduct2');
//show of computer
Route::get('computer','App\Http\Controllers\IController@computer');
//buy now of computer
Route::post('show1/{id}','App\Http\Controllers\IController@showproduct3');
//show of projector
Route::get('projector','App\Http\Controllers\IController@projector');
//buy now of projector

Route::post('show3/{id}','App\Http\Controllers\IController@showproduct4');
//show of camera
Route::get('camera2','App\Http\Controllers\IController@camera2');
//buy now 
Route::post('show4/{id}','App\Http\Controllers\IController@showproduct5');
Route::get('/home',"App\Http\controllers\icontroller@phome");