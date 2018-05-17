<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DPController extends Controller
{
    public function profile()
    {
    	return view('dashboard.pembeli.profile_pembeli');
    }
}
