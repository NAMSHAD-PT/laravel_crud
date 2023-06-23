<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
class abcController extends Controller
{
    public function home(){
        $student = User::all();
        return view('welcome',compact('student'));
    }
    public function create(){   
        return view('home');
    }
    public function save(){
        $name=request('name');
        $email=request('email');
        $phone=request('phone');
        $rg_number=request('rgnumber');
        $gender=request('gender');
        $course=request('course');

        $user=User::create([
            'name' => $name,
            'email' => $email,  
            'phone' => $phone,
            'Rg_Number' => $rg_number,
            'gender' => $gender,
            'course' => $course,
        ]);
        return redirect()->route('home');
        
    
    }
    public function edit($id){
        $student=User::find(decrypt($id));
        return view('edit',compact('student'));
    }
    public function update(){
        $student = decrypt(request('id'));
        User::find($student)->update([
            'name' => request('name'),
            'email' => request('email'),  
            'phone' => request('phone'),
            'Rg_Number' => request('rgnumber'),
            'gender' => request('gender'),
            'course' => request('course'),
        ]);
        return redirect()->route('home');
    }
    public function delete($id){
        $student=User::find(decrypt($id));
        $student->delete();
        return redirect()->route('home');
        

    }
}
