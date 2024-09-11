<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class PageController extends Controller
{
    public function index(){
        $movies=Movies::all();

        return view('home',compact('movies'));
    }

    public function film(){

        $movies_vote=Movies::orderby('date')->get();

        return view('film',compact('movies_vote'));
    }

    public function scheda($id){
        $film= Movies::find($id);


        return view('scheda',compact('film'));

    }
}
