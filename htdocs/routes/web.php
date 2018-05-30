<?php

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
})->name('pages.home');


Route::middleware('auth')->name('records.')->prefix('records')->group(function () {
    Route::view('/', 'records.index')->middleware('auth')->name('index');
    Route::get('/workers', 'WorkerController@index')->middleware('auth')->name('workers');
    Route::post('/workers', 'WorkerController@store')->middleware('auth')->name('workers.store');
    Route::get('/workers/create', 'WorkerController@create')->middleware('auth')->name('workers.create');
    Route::get('/workers/{worker}/edit', 'WorkerController@edit')->middleware('auth')->name('workers.edit');
    Route::get('/workers/{worker}', 'WorkerController@show')->middleware('auth')->name('workers.show');
    Route::get('/establishment/{establishment?}', 'EstablishmentController@show')->middleware('auth')->name('establishment.show');
});


Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');


Route::prefix('api')->name('api.')->middleware('auth')->group(function () {
    Route::put('question_answers_bulk/{worker}/update', 'Api\QuestionAnswerBulkController@update');
    Route::resource('question_answers', 'Api\QuestionAnswerController');
});