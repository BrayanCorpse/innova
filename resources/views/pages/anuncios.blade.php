@extends('layouts.back')
@section('menu')    
@endsection

@section('content')

@if(session()->has('message'))
    <div class="uk-alert-success uk-width-medium uk-text-center" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('messageDelete'))
    <div class="uk-alert-danger uk-width-medium uk-text-center" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        {{ session()->get('messageDelete') }}
    </div>
@endif
<div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <form action="{{ route('GuardarAnuncio') }}" enctype="multipart/form-data" method="POST"> 
                @csrf 
                @method('POST')
                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" name="name" placeholder="Nombre">
                    </div>
                </div>

                @error('name')
                    <span class="uk-label uk-label-danger">{{$message}}</span>
                @enderror
 
                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="3" placeholder="Descripción" name="description"></textarea>
                </div>

                <div class="uk-margin">
                    <select class="uk-select" name="idt">
                        <option>Categoría</option>
                        <option value="1">Carrousel</option>
                        <option value="2">Banner</option>
                    </select>
                </div>

                <div class="uk-margin" uk-margin>
                    <div uk-form-custom="target: true">
                        <input type="file" name="url">
                        <input class="uk-input uk-form-width-large" type="text" placeholder="Seleccionar Imagen" disabled>
                    </div>
                </div>

                @error('url')
                    <span class="uk-label uk-label-danger">{{$message}}</span>
                @enderror
                
                <div class="uk-margin">
                    <button class="uk-button uk-button-danger" type="reset">Limpiar</button>
                    <button class="uk-button uk-button-default">Enviar</button>
                </div>

            </form>
        </div>
    </div>

    @if ($anuncios->count())
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <table class="uk-table uk-table-responsive">
                <caption>Anuncios</caption>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anuncios as $anu)
                    <tr>
                        <form action="{{ route('deleteAnuncio')}}" method="POST">
                            @csrf
                            @method('POST')
                            <td>
                            <input type="hidden" name="ida" value="{{$anu->ida}}">
                            <img src="{{$anu->url}}" alt="{{$anu->name}}" width="100">
                            </td>
                            <td>{{$anu->name}}</td>
                            <td>
                                <div class="uk-button-group">
                                    <button class="uk-icon-button trash" uk-icon="trash"></button>
                                </div>                            
                            </td>
                        </form>    
                    </tr>

                    @endforeach  
                </tbody>
            </table>   
            
            {{ $anuncios->links() }}

        </div>
    </div>
    @endif
</div>
    
@endsection