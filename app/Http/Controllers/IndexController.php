<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncios;

class IndexController extends Controller
{
    public function index(){
        
        $anuncios = Anuncios::where('idt',1)->get();
        $banners = Anuncios::where('idt',2)->get();
        return view('pages.index',compact('anuncios', 'banners'));
    }

    public function contacto(){

        return view('pages.contacto');
    }

    public function dashboard(){
        
        return view('layouts.back');
    }
}
