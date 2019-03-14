<?php

Route::get('/', function () {
    return view('index');
});

Route::post('/', 'AppUpload@upload')->name('upload.image');
