<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncios;


class AnunciosController extends Controller
{
    public function index(){
        $anuncios = Anuncios::simplePaginate(3);
    	return view('pages.publicidad', compact('anuncios'));
    }

    public function store(Request $request){

        $image=new Anuncios($request->all());   

        if ($request->hasFile('url')){

            $file = $request->file("url");
            //$nombrearchivo  = str_slug($request->slug).".".$file->getClientOriginalExtension();
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("storage"),$nombrearchivo);
            $image->url = 'storage/'.$nombrearchivo;

        }

        $image->save();

        return redirect()->route('publicidad')
        ->with("<script>
                    UIkit.notification({
                        message: 'Success !',
                        status: 'Success ',
                        pos: 'bottom-right',
                        timeout: 10000
                    });
                </script>");
    }
}
