@extends('layouts.back')
@section('menu')    
@endsection

@section('contend')

<div>
    <div class="uk-card uk-card-default uk-card-body">
        <form action="{{ route('GuardarAnuncio') }}" enctype="multipart/form-data" method="POST"> 
            @csrf
            <div class="uk-margin">
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" name="name" placeholder="Nombre">
                </div>
            </div>

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
            
            <div class="uk-margin">
                <a href="javascript: history.go(-1)" class="uk-button uk-button-danger">CANCEL</a>
                <button class="uk-button uk-button-default" onclick="UIkit.notification({message: 'Success message...', status: 'success'})">Submit</button>
            </div>

        </form>
    </div>
</div>

<div>
    <div class="uk-card uk-card-default uk-card-body">
        <table class="uk-table uk-table-responsive">
            <caption>Anuncios</caption>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anuncios as $anu)
                <tr>
                    <td>
                        <img src={{$anu->url}} alt="" width="100">
                    </td>
                    <td>{{$anu->name}}</td>
                    <td>
                        <a href="">
                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>

                @endforeach  
            </tbody>
        </table>   {{ $anuncios->links() }}

    </div>
</div>
    
<script src="js/uikit.min.js" ></script>

@endsection