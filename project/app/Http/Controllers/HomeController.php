<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index(){
        $preview = Menu::latest()->take(3)->get();
        return view('home', compact("preview"));
    }
}
