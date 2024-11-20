<?php

use App\Models\{
    SessionOne,
    SessionTwo,
    Title,
    SessionSeven,
    SessionThree
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $sessionOne  = SessionOne::first();
    $sessionTwo  = SessionTwo::first();
    $sessionThree = SessionThree::first();
    $titleSix = Title::where('type', 'six')->with([
        'images'
        => function ($query) {
            $query->orderBy('id', 'desc');
        }
    ])->first();

    $sessionSeven  = SessionSeven::find(1);



    return view('frontend.layouts.master', compact(
        'sessionOne',
        'sessionTwo',
        'sessionThree',
        'titleSix',
        'sessionSeven'
    ));
});
