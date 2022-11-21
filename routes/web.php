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
// HOME
Route::get('/', 'homecontroller@view');
Route::get('/home', 'homecontroller@view');

// LOGIN
Route::get('/login', 'loginController@view');
Route::post('/authlogin','loginController@AuthLogin');
Route::get('/logout', 'homeController@logout');

// REGISTER
Route::get('/register', 'registerController@view');
Route::post('/registerUser', 'registerController@user');

// MANAGER
Route::group(['middleware'=>['auth','role:Manager']],function(){
    Route::get('/addFlower', 'Managercontroller@addFlower');
    Route::post('/adding', 'Managercontroller@adding');
    Route::get('/manageCategories', 'Managercontroller@manageCategories');
    Route::get('/updateCategories/{categoryID}', 'Managercontroller@manageupdate');
    Route::post('/updatedCategories/{id}', 'Managercontroller@manageupdateinput');
    Route::get('/deletedCategories/{id}', 'Managercontroller@managedelete');
    Route::get('/updateFlowers/{id}', 'Managercontroller@manageflower');
    Route::post('/updatedFlowers/{id}', 'Managercontroller@manageupdatedflower');
    Route::get('/deletedflower/{id}', 'Managercontroller@flowerdelete');
});

// USER
Route::group(['middleware'=>['auth','role:User']], function () {
    Route::post('/addtocarts/{id}', 'cartsController@addtocarts');
    Route::get('/carts','cartsController@carts');
    Route::post('/updatequantity/{id}', 'cartsController@updatequantity');
    Route::post('/checkout', 'CartsController@checkout');
    Route::get('/transaction', 'TransactionController@Transaction');
    Route::get('/transactionDetail/{id}', 'TransactionController@TransactionDetail');

});

Route::get('/ViewFlowers/{categoryID}', 'homecontroller@Flower');
Route::get('/ViewFlowersDetail/{flowersID}', 'homecontroller@FlowersDetail');
