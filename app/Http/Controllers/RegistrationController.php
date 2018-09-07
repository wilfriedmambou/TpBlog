<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create(){
         
        return view('registration.create');
    }
    public function store(Request $data){
        // validate the form
           $this->validate(request(),[
           'name'=>'required',
           'email'=>'required|email',
           'password'=>'required|string|confirmed'
           ]);
        //    create a new user and save
        // $user= User::create(request(['name','email','password'])); good
        // $user=User::create([
        //     'name'=>request('name'),
        //      'email'=>request('email'),
        //      'password'=>'password',
        //      'user_id'=>auth()->id() ]);
        // //le connecter  
      
        {
            $user= User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'user_id'=>auth()->id() ]);
                auth()->login($user);
           
        }

         
         return redirect()->home();
    }
   public function destroy(){
       auth()->logout();
       return redirect()->home();
   }
}
