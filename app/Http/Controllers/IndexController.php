<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $allads = Ads::orderBy('updated_at', 'desc')
                    ->get();
        return view('index', ['allads' => $allads]);
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
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        //
    }
}