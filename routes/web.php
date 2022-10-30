<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
// all listings
Route::get('/', [ListingController::class , 'index']) ;

// show create from 
Route::get('/listings/create', [ListingController::class , 'create'])->middleware('auth') ;

// show edit form
Route::get('listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// store data
Route::post('/listings', [ListingController::class , 'store'])->middleware('auth');

// edit submit
Route::put('listings/{listing}',[ListingController::class, 'update'])->middleware('auth');

// Delete submit
Route::delete('listings/{listing}',[ListingController::class, 'destroy'])->middleware('auth');

// manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//  single listing
Route::get('/listings/{listing}', [ListingController::class , 'show']);

// show register/create form
Route::get('/register',[UserController::class, 'create'])->middleware('guest');

// createnew user
Route::post('/users',[UserController::class, 'store']);

// logout user
Route::post('/logout',[UserController::class ,'logout'])->middleware('auth');

// show logn form 
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// user login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);