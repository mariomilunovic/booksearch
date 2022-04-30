<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){

        return view('pages.home');

    }
    function dashboard(){

        return view('pages.dashboard');
    }

    function test(){

        toast()->success('Testiranje toast poruke.')->push();
        return view('pages.home');
    }
}
