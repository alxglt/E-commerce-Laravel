<?php

namespace App\Http\Controllers;

use App\Models\right;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('header');
    }
}
