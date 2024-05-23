<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure', '>', '2024-05-22')->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
