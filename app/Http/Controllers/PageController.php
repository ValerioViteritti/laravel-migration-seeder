<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// QUI VA INSERITO IL MODELS
use App\Models\Travel;

class PageController extends Controller
{
    public function index(){

        $travels = Travel::orderBy('title')->get();
        // $title = 'Elenco Film';

        return view('home', compact('travels',));
        
    }

    public function about(){

        return view('about');

    }

    public function contacts(){

        return view('contacts');

    }
}
