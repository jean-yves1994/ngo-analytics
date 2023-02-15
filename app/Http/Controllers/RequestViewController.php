<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class RequestViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.requestView')->with('allRequests',Application::orderBy('updated_at','DESC')->get());
    }
}
