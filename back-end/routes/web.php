<?php

use App\Http\Controllers\Api\BenevoleController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\QuestionAdminController;
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
    return view('home.index');
});

Route::livewire('/questions','question-index')->layout('master')->name('question.index');
Route::livewire('/question','question-create')->layout('master')->name('question.create');
Route::livewire('/question/{id}','question-edit')->layout('master')->name('question.edit');

/**
 *  Gestion des routes pour l'api mobile
 */

Route::namespace('Api')->prefix('api')->group(function () {

    Route::post('benevole', [BenevoleController::class, 'store']);
    Route::get('benevole/{id}/show', [BenevoleController::class, 'show']);
    Route::get('benevoles', [BenevoleController::class, 'index']);
});
