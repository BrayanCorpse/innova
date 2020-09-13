<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Bulma is a free, open source CSS framework based on Flexbox and built with Sass. It's 100% responsive, fully modular, and available for free.">
        <meta property="og:url" content="">
        <meta property="og:type" content="website"> 
        <title>Innova Espacios</title> 
        <link rel="shortcut icon" href="{{asset('../favicon.ico')}}" type="image/x-icon"> 
        <link rel="stylesheet" href="{{asset('css/uikit.css')}}">
        <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
        <!-- Load More Javascript -->
        <script src="{{asset('js/uikit.min.js')}}" ></script>
        <script src="{{asset('js/uikit-icons.min.js')}}"></script>     		
    </head>
    <body>
        <div uk-sticky class="uk-navbar-container">
            <div class="uk-container uk-container-expand uk-background-primary">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="#" class="uk-navbar-item uk-logo" style="color: #fff">
                            UI Admin
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#">Èrik &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">Options</li>
                                       <li><a href="#">Edit Profile</a></li>
                                       <li class="uk-nav-header">Actions</li>
                                       <li><a href="#">Lock</a></li>
                                       <li><a href="#">Logout</a></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">Menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('anuncios')}}">
                        <i class="fa fa-picture-o fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">Anuncios</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Productos
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Stars Components
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="logout">
            <li>
                <a href="{{url('/')}}">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Salir
                    </span>
                </a>
            </li>
            </ul>
        </nav>
        
        <div class="uk-section-small uk-margin-large-left">
            <div class="uk-container uk-container-medium">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="inline">
                        <i class="fa fa-tachometer fa-3x" aria-hidden="true"></i>
                        <h1>Dashboard</h1>
                    </div>
                    <p>Welcome back, <span class="uk-label uk-label-success">Brayan Manzano</span></p>
                    <ul class="uk-breadcrumb">
                        <li>
                        <a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{Route::current()->getName() }}">{{Route::current()->getName() }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('menu')
 
        <div class="uk-section-small uk-margin-large-left">
            <div class="uk-container uk-container-medium">     
                    @yield('content')
            </div>
        </div>

    </body>
</html>
