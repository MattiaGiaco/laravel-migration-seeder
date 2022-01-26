<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $voyages = Voyage::all();

        return view('home', compact('voyages'));

    }
}
