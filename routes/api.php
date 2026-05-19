<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test-api', function(){
    return ["name" => "your_name", 
            "age"=>"your_age",
             "qualifaction" =>"your qualification"] ;
});

Route::get('users',[Usercontroller::class, 'userList']);
Route::get('studentList',[Usercontroller::class, 'studentList']);
Route::post('add-student',[Usercontroller::class, 'addStudent']);
Route::put('updateStudent',[Usercontroller::class, 'updateStudent']);
Route::delete('deleteStudent/{id}',[Usercontroller::class, 'deleteStudent']);
Route::post('usersadd',[Usercontroller::class, 'addUser']);
Route::get('searchUser/{name}',[Usercontroller::class, 'serachUser']);