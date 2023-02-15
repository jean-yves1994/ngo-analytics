<?php

namespace App\Http\Controllers;

use App\Models\Application;

class DeniedViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        return view('auth.deniedView')->with('denied',Application::where('status','denied')->orderBy('updated_at','DESC')->get());

    }

}
