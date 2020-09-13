<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncios;

use App\Tipos;

use Illuminate\Support\Facades\Storage;


class AnunciosController extends Controller
{
    public function index(){
        $anuncios = Anuncios::orderBy('ida', 'desc')->simplePaginate(3);
    	return view('pages.anuncios', compact('anuncios'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            "url" => "required|image|mimes:jpeg,jpg,png,webp,svg|max:5000",
          ]);

        $image=new Anuncios($request->all());   

        if ($request->hasFile('url')){

            $file = $request->file("url");
            //$nombrearchivo  = str_slug($request->slug).".".$file->getClientOriginalExtension();
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("storage/anuncios"),$nombrearchivo);
            $image->url = 'storage/anuncios/'.$nombrearchivo;

        }

        $image->save();

        return redirect()->route('anuncios')->with('message', 'Registro Creado!');
    }

    public function delete(Request $request){

       $photo = Anuncios::find($request->ida);
       $photo->delete();
     //$photoPath = str_replace('storage', 'public', $photo->url);
       $photoPath = str_replace('storage/anuncios', 'public/anuncios', $photo->url);
       Storage::delete($photoPath);
       
       return redirect()->route('anuncios')->with('messageDelete', 'Registro Eliminado!');

    }
}
