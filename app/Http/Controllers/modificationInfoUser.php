<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modificationInfoUser extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function details(Utilisateur $utilisateur){


               $user= $utilisateur;

        return view('monCompte', compact('user'));

    }




    public function updateUserLogin (Utilisateur $utilisateur)
    {


        /**
         * Validation du formulaire de modification de l'utlisateur
         */
        $this->validate(request(), [
            'login_user' => 'required|string',
            'email' => 'required|email',
        ]);


        $utilisateur->update(
            [
                'login_user' => request('login_user'),
                'email' => request('email'),
            ]);


        $message = 'les infomations ont été modifiées';
        return redirect()->back()->with(session()->flash('message', $message));

    }


    public function updatePasswordLogin (Utilisateur $utilisateur){
        /**
         * Validation du formulaire de modification de l'utlisateur
         */
        $this->validate(request(), [
            'password' => 'required|string|confirmed'
        ]);






        $utilisateur->update(
            [
                'pwd_user' => Hash::make(request('password'))
            ]);


        $message = 'votre mot de passe a ete bien modifie';
        return redirect()->back()->with(session()->flash('message', $message));

    }

}
