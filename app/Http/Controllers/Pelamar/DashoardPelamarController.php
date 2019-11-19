<?php

namespace App\Http\Controllers\pelamar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashoardPelamarController extends Controller
{
    public function index(){
        return view('pelamar.dashboard');
    }
}
