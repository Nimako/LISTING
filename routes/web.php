<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LookupSetupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Admin\ApartmentLocationController;
use App\Http\Controllers\Admin\ApartmentController;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomePageController;

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


          Route::get('/admin', [AuthController::class, 'index']);
          Route::get('/dashboard', [DashboardController::class, 'index']);

          Route::get('login', [AuthController::class, 'index'])->name('login');
          Route::post('post-login', [AuthController::class, 'postLogin']);
          Route::get('registration', [AuthController::class, 'registration']);
          Route::get('/user-edit/{id}', [AuthController::class, 'editUser']);
          Route::post('post-registration', [AuthController::class, 'postRegistration']);
          Route::post('update-registration', [AuthController::class, 'updateRegistration']);
          Route::get('delete-registration/{id}', [AuthController::class, 'deleteRegistration']);
          //Route::get('dashboard', [AuthController::class, 'dashboard']);
          Route::get('logout', [AuthController::class, 'logout']);

      

          Route::get('/',  [HomePageController::class,'Homepage']);
          Route::get('short-stay',  [HomePageController::class,'shortStay']);
          Route::get('long-stay',  [HomePageController::class,'longStay']);
          Route::get('contact-us',  [HomePageController::class,'contactUs']);

          //Route::get('/location/{id}',  [LocationController::class,'LocationDetails']);
          Route::post('/get-room-images',  [RoomController::class,'GetRoomImages']);
          Route::get('{id}',  [LocationController::class,'LocationDetails']);
          Route::get('{id}/rooms',  [RoomController::class,'Index']);
          Route::post('AddBooking',  [RoomController::class,'AddBooking']);
          Route::get('checkOut/{id}',  [RoomController::class,'checkOut']);



          //***********************************************************************************/

          // Registered Location
          Route::group(['prefix'=>'admin-location'],function(){
               Route::get('/index', [ApartmentLocationController::class, 'Index']);
               Route::get('/create', [ApartmentLocationController::class, 'Create']);
               Route::post('/store', [ApartmentLocationController::class, 'Store']);
               Route::post('/update', [ApartmentLocationController::class, 'Update']);
               Route::get('/detail/{id}',  [ApartmentLocationController::class,'Detail']);
               Route::get('/delete/{id}',  [ApartmentLocationController::class,'DeleteImage']);
          });


          // Registered Location
          Route::group(['prefix'=>'admin-apartment'],function(){
               Route::get('/index/{id}', [ApartmentController::class, 'Index']);
               Route::get('/create/{id}', [ApartmentController::class, 'Create']);
               Route::post('/store', [ApartmentController::class, 'Store']);
               Route::post('/update', [ApartmentController::class, 'Update']);
               Route::get('/detail/{id}',  [ApartmentController::class,'Detail']);
               Route::get('/delete/{id}',  [ApartmentController::class,'DeleteImage']);
               Route::get('/room-images/{id}',  [ApartmentController::class,'DeleteRoomImage']);

          });


          // Registered Customers
          Route::group(['prefix'=>'admin-customer'],function(){
               Route::get('/index', [CustomerController::class, 'Index']);
               Route::get('/detail/{id}',  [CustomerController::class,'Detail']);
          });










