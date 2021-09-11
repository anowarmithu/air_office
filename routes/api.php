<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\OfficeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Tags...
Route::get('/tags',TagController::class );


//Offices...
Route::get('/offices',[OfficeController::class, 'index'] );

