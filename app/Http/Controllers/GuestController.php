<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class GuestController extends Controller
{
    //
    public function index()
    {
    $userData=Auth::user();
    if($userData===null){
    // $userData=Auth::Guest();
    // dd($userData);
    return view('doctor.dashboard');
    }
    // dd($userData);
    if($userData->userType=='Doctor')
    {
    return view('doctor.dashboard');
    }else{

    return view('patient.dashboard');

    }

    }
}
