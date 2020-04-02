<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Pagination\Paginator;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create-new-ad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // cible id utilisateur
        $id = Auth::id();

        // rqt pour creer une annonce
        $title = $request->input('create_title');
        $description = $request->input('create_description');
        $photo = $request->input('create_photo');
        $price = $request->input('create_price');
        $contact = $request->input('create_contact');

        $create = new Ads;
        $create->id_user = $id;
        $create->title = ucfirst($title);
        $create->description = ucfirst($description);

        // $create->photo = $photo;
        // $create->photo = $request->file('photo')->storeAs('photos');
        // $visibility = Storage::getVisibility('file.jpg');
        // Storage::setVisibility('file.jpg', 'public');

        $create->price = $price;
        $create->contact = $contact;
        $create->save();

        // redirige vers la page principale
        return redirect()->action('AdsController@show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        $name = Auth::user()->name;
        $id = Auth::id();

        $myads = Ads::where('id_user', $id)
                    ->orderBy('updated_at', 'desc')
                    ->get();

        return view('myads', ['myads' => $myads]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Ads $ads)
    {
        $id_user = Auth::id();

        // recup id product
        $id_product = $request->input('id_product');
        $update = Ads::find($id_product);

        // rqt pour update annonce
        $title = $request->input('edit_title');
        $description = $request->input('edit_description');
        $price = $request->input('edit_price');
        $contact = $request->input('edit_contact');
        
        // update annonce
        $update->id_user = $id_user;
        $update->title = $title;
        $update->description = $description;
        $update->price = $price;
        $update->contact = $contact;

        // enregistrement
        $update->save();

        // redirige vers la page du profil
        return redirect()->action('AdsController@show');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Ads $ads)
    {
        $id_product = $request->input('id_product');
        $delete = Ads::destroy($id_product);
        return redirect()->action('AdsController@show');
    }
}
