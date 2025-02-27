<?php

use App\Http\Controllers\apiController;
// use App\Http\Controllers\postController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\sumAController;
use App\Http\Controllers\PageController;

use App\Http\Controllers\ProductController;	
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sum');
});
Route::post('/sumA', [sumAController::class, 'sumA' ]);

Route::group(['prefix' => 'tutorial'], function() {
    Route::get('/aws', function() {
        echo "aws tutorial";
    });
    Route::get('/jira', function() {
        echo "jira tutorial";
    });
});
 
// Route::resource('/post', postController::class);
Route::get('/signup', [signupController::class, 'index']);
Route::post('/signup', [signupController::class, 'displayInfor']);
Route::get('/api', [apiController::class, 'getData']);

Route::resource('products', ProductController::class);	

Route::get('index', [PageController::class, 'getIndex']) -> name('trang-chu');

Route::get('trangchu', [PageController::class, 'index']);