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
Route::get('/test', function(){
	$user = App\Models\User::find(1);
   // return $user;
	// return $user->profile;
	 //return $user->images;

	$profile = App\Models\User::find(1);
	return $profile->user;

	 $image = App\Models\Image::find(1);
	 return $image->user;
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
