<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('barangs.index');
});

Route::resource('barangs', \App\Http\Controllers\BarangController::class);

