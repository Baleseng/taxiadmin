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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChairmanController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MarshallController;

Route::view('/', 'welcome');

Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/chairman', [LoginController::class,'showChairmanLoginForm']);
Route::get('/login/owner', [LoginController::class,'showOwnerLoginForm']);
Route::get('/login/marshall', [LoginController::class,'showMarshallLoginForm']);
Route::get('/login/driver', [LoginController::class,'showDriverLoginForm']);

Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/chairman', [RegisterController::class,'showChairmanRegisterForm']);
Route::get('/register/owner', [RegisterController::class,'showOwnerRegisterForm']);
Route::get('/register/marshall', [RegisterController::class,'showMarshallRegisterForm']);
Route::get('/register/driver', [RegisterController::class,'showDriverRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/chairman', [LoginController::class,'chairmanLogin']);
Route::post('/login/owner', [LoginController::class,'ownerLogin']);
Route::post('/login/marshall', [LoginController::class,'marshallLogin']);
Route::post('/login/driver', [LoginController::class,'driverLogin']);

Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/chairman', [RegisterController::class,'createChairman']);
Route::post('/register/owner', [RegisterController::class,'createOwner']);
Route::post('/register/marshall', [RegisterController::class,'createMarshall']);
Route::post('/register/driver', [RegisterController::class,'createDriver']);
/*
  |--------------------------------------------------------------------------
  | Log Out
  |--------------------------------------------------------------------------
*/
  
Route::get('logout', [LoginController::class,'logout']);


/*
  |--------------------------------------------------------------------------
  | Owner Route 
  |--------------------------------------------------------------------------
*/

Route::get('/owner', [OwnerController::class,'index']);
Route::get('/owner/add', [OwnerController::class,'add']);
Route::post('/owner', [OwnerController::class,'store']);

Route::get('/owner/taxi/{taxi}', [OwnerController::class,'taxi']);

Route::get('/owner/edit/{taxi}', [OwnerController::class,'edit']);
Route::patch('/owner/{taxi}', [OwnerController::class,'update']);


/*
  |--------------------------------------------------------------------------
  | Chairman Route
  |--------------------------------------------------------------------------
*/

Route::get('/chairman', [ChairmanController::class,'index']);

Route::get('/chairman/taxi/{taxi}', [ChairmanController::class,'taxi']);

Route::get('/chairman/edit/{taxi}', [ChairmanController::class,'edit']);
Route::patch('/chairman/{taxi}', [ChairmanController::class,'update']);



/*
  |--------------------------------------------------------------------------
  | Admin Route
  |--------------------------------------------------------------------------
*/

Route::get('/admin/', [AdminController::class,'index']);
Route::get('/admin/taxi/{taxi}', [AdminController::class,'taxi']);
Route::get('/admin/edit/{taxi}', [AdminController::class,'edit']);
Route::patch('/admin/{taxi}', [AdminController::class,'update']);
Route::get('/admin/pages', [AdminController::class,'page']);
Route::post('/admin/pages', [AdminController::class,'store_page']);

/*
  |--------------------------------------------------------------------------
  | Marshall Route
  |--------------------------------------------------------------------------
*/

Route::get('/marshall', [MarshallController::class,'index']);

Route::get('/marshall/settings', [MarshallController::class,'setting']);
Route::get('/marshall/routes', [MarshallController::class,'route']);
Route::get('/marshall/calls', [MarshallController::class,'call']);
Route::get('/marshall/search', [MarshallController::class,'search']);

Route::get('/marshall/{taxi}', [MarshallController::class,'edit']);
Route::patch('/marshall/{taxi}', [MarshallController::class,'update']);

Route::get('/marshall/onroute', [MarshallController::class,'onroute']);
Route::get('/marshall/parked', [MarshallController::class,'parked']);
Route::get('/marshall/suspended', [MarshallController::class,'suspend']);

/*
  |--------------------------------------------------------------------------
  | Driver Route
  |--------------------------------------------------------------------------
*/

Route::get('/driver', [DriverController::class,'index']);

Route::get('/driver/settings', [DriverController::class,'setting']);
Route::get('/driver/search', [DriverController::class,'search']);
Route::get('/driver/call', [DriverController::class,'call']);
Route::get('/driver/routes', [DriverController::class,'route']);

Route::get('/driver/{taxi}', [DriverController::class,'edit']);
Route::patch('/driver/{taxi}', [DriverController::class,'update']);













