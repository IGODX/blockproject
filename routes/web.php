<?php

use App\Http\Controllers\BlockController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;

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
    return view('welcome');
});
Route::get("topic/index", [TopicController::class, "index"])->name("topic.index");
Route::get("topic/create", [TopicController::class, "create"])->name("topic.create");
Route::post("topic", [TopicController::class, "store"])->name("topic.store");
Route::get("block/create", [BlockController::class, "create"])->name("block.create");
Route::post("block", [BlockController::class, "store"])->name("block.store");
Route::get("home/index/{id?}", [HomeController::class, "index"])->name("home.index");
