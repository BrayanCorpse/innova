<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncios;

class IndexController extends Controller
{
    public function index(){
        
        $anuncios = Anuncios::all();
        return view('pages.index',compact('anuncios'));
    }
}
