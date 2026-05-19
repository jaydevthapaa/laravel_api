<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
class Usercontroller extends Controller
{
    //
    function userList(){
        // return "user list function called enjoy";
        return User::all();
    }
    function studentList(){
        return student::all();
    }

    function addUser(Request $request){
        $user = new User();
        $user -> name= $request -> name;
        $user -> email = $request -> email;
        $user -> password = $request-> password;
        if($user->save()){
            return "user added successfully";
        }
        else{
            return "unabale to added";
        }
    }
    function serachUser(string $name){
        // return $name;
        $user = User::where('name','like', "%$name%")->get();
        if($user){
            return ["result"=> $user];
        }
        else{
            return ["result"=> "no user found"];
        }
    }
    function addStudent(Request $request){
        // return $request ->input()
        $student = new Student(); 
        $student->name=$request->name;
        $student -> email = $request-> email;
        $student -> batch =$request -> batch;
        if($student-> save()){
            return "student added";
        }
        else{
            return "student unable to added";
        }
    }


    function updateStudent(Request $request){
        // return "student update";
        $student = Student::find($request-> id);
        $student-> name=$request->name;
        $student -> email = $request-> email;
        $student -> batch =$request -> batch;
        if($student-> save()){
            return "student updated";
        }
        else{
            return "student unable to updated";
        }
    }

    function deleteStudent(int $id){
        // return $id;
        $student = Student::destroy($id);
        if($student){
            return "student info delete successfully";
        }
        else{
            return "unable to delete student info";
        }
    }
}
