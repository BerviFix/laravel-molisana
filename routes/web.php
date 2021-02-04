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

    $data = config('pasta');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $pasta) {

        $pasta["id"] = $key;
        
        if ($pasta["tipo"] == "lunga") {
            $lunghe[] = $pasta;
        } elseif ($pasta["tipo"] == "corta") {
             $corte[] = $pasta;
        } elseif ($pasta["tipo"] == "cortissima") {
            $cortissime[] = $pasta;
        }

    }

    return view('home', compact('lunghe', 'corte', 'cortissime')
    // [
    //     "lunghe" => $lunghe,
    //     "corte" => $corte,
    //     "cortissime" => $cortissime,
    // ]
    );
})->name('home');

Route::get('/prodotto/{id}', function ($id) {

    $data = config('pasta');

    $prev = $id - 1;
    $next = $id + 1;

    if ($id == 0)  {
        $prev = count($data) - 1;
    } elseif ($id == count($data) - 1) {
        $next = 0;
    }

    return view('product', [
        'product' => $data[$id],
        'prev' => $prev,
        'next' => $next
    ]);
})->name('prodotto');

Route::get('/news', function () {
    return view('news');
})->name('news');