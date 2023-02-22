<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Halaman Home  
Route::get('/halaman_home', function(){
    echo "Selamat Datang";
});
// Halaman Produts
Route::prefix('/halaman_produtcs')->group(function(){
    Route::get('/marbel_edu_games', function(){
        echo "Marbel edu games";
    });

    Route::get('/marbel_and_friands-k', function(){
        echo "Marbel and friand k";
    });

    Route::get('/riri_story_books', function(){
        echo "Riri story books";
    });
    
    Route::get('/kolak_kids_song', function(){
        echo "kolak kids song";
    });
});
// HalamanNews
Route::get('/halaman_news/{news?}', function($news){
    echo "halaman news".$news;
});

// HalamanProgram
Route::prefix('/halaman_program')->group(function(){
    Route::get('/program_karir', function(){
        echo "Program karir";
    });

    Route::get('/program_magang', function(){
        echo "Program magang";
    });

    Route::get('/program_kunjungan_industri', function(){
        echo "Program kunjungan industri";
    });
    
});
// Halaman About Us
Route::get('/HalamanAboutUs', function(){
    echo "About us";
});
// Halaman Contact Us
Route::resource('contact', ContactController::class)->only([
    'index', 'show', 'store'
]);