<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;

class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('destroy');
       
    }
  
    public function create(){
         return view('sessions.create');
    }

public function destroy(){
    auth()->logout();
    return redirect()->home();
}
public function store(Request $request){
    $this->validate(request(),[
        'email'=>'required',
        'password'=>'required|string'
         ]);
    // verifi si l'utilisateur existe dans la base de donnee 
    // la methode attemp verifi si les champs correspondent dans la bd si oui
    //  elle connecte l'utilisateur si son elle redirge sur la meme page
   
 
    // return view('sessions.create');

    if(Auth::guard('web')->attempt([ 'email'=>$request->get('email') ,
         'password'=>$request->get('password')])) {
            $message = 'CONNECTION EFFECTUER AVEC SUCCES';
            // -with(session()->flash('message', $message));
            Session::flash('success',$message);
        //  return redirect()->home();
        $msg = array(
            "statut"=>"succes",
             "message"=>"utilisateur connecte avec success"
        );
        return response()->json($msg);
    // }
     } else {
        //  return back()->withErrors([ 'message'=>'SVP verifiez vos champs et reessayez' ]);
        $msg = array(
            "statut"=>"Echec",
             "message"=>'SVP verifiez vos champs et reessayez'
        );
        return response()->json($msg);
    }
   }
   
//       return back()->withErrors([ 'message'=>'SVP verifiez vos champs et reessayez' ]);
   }
    


