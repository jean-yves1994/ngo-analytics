<?php

namespace App\Http\Controllers;

use App\Models\Application;

class ApprovedViewController extends Controller
{

    public function index()
    {
        //listing all approved applications

        return view('auth.approvedView')->with('approved',Application::where('status','accepted')->orderBy('updated_at','DESC')->get());
    }

}
