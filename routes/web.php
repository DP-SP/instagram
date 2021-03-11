<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Profile;
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
    $user=App\Models\User::find(1);
    // return $user;//ok
    // return $user->profile;//ok
    // return $user->images;//ok
   $profile=App\Models\Profile::find(1);
     //return $profile;//ok
     //return $profile->user;//ok
    // return $profile->user->images;
    $image=App\Models\Image::find(1);
    // return $image->profile;
 //return $image->images;
 //return $image;//ok
 //return $image->user;//ok
 return $image->user->profile;//ok
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/profile/{id}', Profile::class);
Route::get('dashboard/upload', Upload::class)->name('upload');
