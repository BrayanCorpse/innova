@extends('layouts.front')
@section('menu')
@endsection
@section('content')

<link rel="stylesheet" href="{{asset('css/contacto.css')}}">

<div class="uk-margin-top">
    <h1>Contáctanos</h1>
    <hr class="uk-divider-small">
    <p class="uk-text-emphasis">Mantenemos un compromiso integral con nuestros clientes tratándolos con respeto y cortesía, honrando la calidad, garantía y puntualidad que siempre nos ha caracterizado.</p>
</div>

<div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl uk-margin-large-top">

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li class="uk-nav-header">Opciones de Contacto</li>
                <li class="uk-nav-divider"></li>
                <li>
                    <a href="#">
                        <span class="uk-icon-button uk-margin-small-right tel" uk-icon="receiver"></span>
                        Sucursal Toluca: 722-333-4442
                    </a>  
                </li>
                <li>
                    <a href="#">
                        <span class="uk-icon-button uk-margin-small-right tel2" uk-icon="receiver"></span>
                        Sucursal Queretaro: 722-123-2345
                    </a> 
                </li>
                <li>
                    <a href="#">
                        <span class="uk-icon-button uk-margin-small-right what" uk-icon="whatsapp"></span>
                        Whatsapp: 722-677-2396
                    </a> 
                </li>
                <li>
                    <a href="#">
                        <span class="uk-icon-button uk-margin-small-right email" uk-icon="mail"></span>
                        contacto@innovaespacios.com
                    </a> 
                </li>
                <li class="uk-nav-divider"></li>
                <li>
                    <a href="#">
                        <span class="uk-icon-button uk-margin-small-right face" uk-icon="facebook"></span>
                        Innova espacios 
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="uk-icon-button uk-margin-small-right insta" uk-icon="instagram"></span>
                        Innova espacios 
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="uk-icon-button uk-margin-small-right twit" uk-icon="twitter"></span>
                        Innova espacios 
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <form>
                <fieldset class="uk-fieldset">
            
                    <legend>Formualario de Contacto</legend>
            
                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="Nombre Completo">
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="Correo Electronico">
                    </div>

                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="3" placeholder="Dejanos un Mensaje"></textarea>
                    </div>

                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary uk-width-1-1" style="background: cornflowerblue">Enviar</button>
                    </div>
            
                </fieldset>
            </form>
        </div>
    
    </div>
</div>

@endsection


@section('footer')
@endsection
