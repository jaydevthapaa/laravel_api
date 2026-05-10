<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test-api', function(){
    return ["name" => "your_name", 
            "age"=>"your_age",
             "qualifaction" =>"your qualification"] ;
});
