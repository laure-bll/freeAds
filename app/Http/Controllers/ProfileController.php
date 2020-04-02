<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         // recupere les infos de l'utilisateur actuel
         $user = Auth::user();
         $id = Auth::id();
 
         // cible grâce à l'id
         $update = User::find($id);
 
         // rqt pour update les infos du compte
         $name = $request->input('name');
         $email = $request->input('email');
         $password = $request->input('password');
         //$password_confirmation = $request->input('password_confirmation');
 
         
         // update du profil utilisateur
         $update->email = $email;
         $update->name = $name;
         $update->password = Hash::make($password);
         
         // enregistrement
         $update->save();
 
         // redirige vers la page du profil
         return redirect()->action('ProfileController@index');
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Ads $ads)
    {

    }
}
