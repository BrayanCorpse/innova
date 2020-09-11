<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Bulma is a free, open source CSS framework based on Flexbox and built with Sass. It's 100% responsive, fully modular, and available for free.">
        <meta property="og:url" content="">
        <meta property="og:type" content="website"> 
        <title>Innova Espacios</title> 
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"> 
        <link rel="stylesheet" href="css/uikit.css">
        <link 
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />   
    </head>
<body>

    {{-- Menu --}}

        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"   class="uk-navbar-container">
              <div class="uk-container">
                  <nav class="uk-navbar" navbar>
                      <div class="uk-navbar-left">
                          <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon">
                              <svg width="40" height="40" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect>
                              </svg>
                          </a>
                      </div>
        
                      <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <div class="uk-margin-large-right">
                                <img src="img/logo-header.png" alt="" width="90">
                            </div>
                            <div class="uk-navbar-item">
                                <form>
                                    <div class="uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></span>
                                        <input class="uk-input uk-form-width-large" type="text" placeholder="¿Qué estás buscando?">
                                    </div>
                                </form>
                            </div>
                            <li>
                                <a class="uk-text-bold" href="">Contacto</a>
                            </li>
                            <li>
                                <a class="uk-text-bold" href="">Sucursales</a>
                            </li>
                            <li>
                                <a class="uk-text-bold" href="">¿Quiénes somos?</a>
                            </li>
                            <li>
                                <a class="uk-text-bold" href="">Tienda</a>
                            </li>
                        </ul>
                      </div>
                  </nav>
              </div>
          </div>

          <div id="offcanvas" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar">
        
                <i class="far fa-times-circle fa-2x uk-offcanvas-close" type="button"></i>
            
                <div>
                    <img src="img/logo-bar.png" alt="" width="100">
                    <h2 class="inne">Innova Espacios</h2>
                </div>

                <ul class="side-list">
                    <li>
                        <form>
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></span>
                                <input class="uk-input" type="text" placeholder="¿Qué estás buscando?">
                            </div>
                        </form>
                    </li>  
                    <li>
                        <a class="uk-text-bold side-links" href="">Contacto</a>
                    </li>
                    <li>
                        <a class="uk-text-bold side-links" href="">Sucursales</a>
                    </li>
                    <li>
                        <a class="uk-text-bold side-links" href="">¿Quiénes somos?</a>
                    </li>
                    <li>
                        <a class="uk-text-bold side-links" href="">
                            <i class="fas fa-shopping-cart"></i>
                            Tienda
                        </a>
                    </li>
                </ul>

                <div class="side-links uk-margin-large-top">
                    <a class="no-link" href="#">
                        <i class="fab fa-facebook-square fa-2x uk-margin-right"></i>
                    </a>
                    <a class="no-link" href="#">
                        <i class="fab fa-facebook-messenger fa-2x uk-margin-right"></i>
                    </a>
                    <a class="no-link" href="#">
                        <i class="fab fa-instagram fa-2x uk-margin-right"></i>
                    </a>
                    <a class="no-link" href="#" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
            
                   
            </div>
        </div>

      
          
  @yield('menu')
    
    {{-- End Menu --}}

    <div class="uk-container uk-container-expand">
      @yield('contend')
    </div>
        


    {{-- Footer --}}
    
    <div class="uk-card uk-card-body uk-background-footer uk-margin-large-top">

        <div class="uk-align-left logo uk-flex uk-flex-inline">
            <img class="uk-border-circle border-logo" src="img/logo.gif" alt="" width="300">
        </div>
        <div class="uk-margin-large-top"> 
            <div class="uk-text-center">
                <a class="uk-h5 links uk-margin-right" href="">Quiénes somos</a> 
                <a class="uk-h5 links uk-margin-right" href="">Productos Especiales</a> 
                <a class="uk-h5 links uk-margin-right" href="">Decoración</a> 
                <a class="uk-h5 links uk-margin-right" href="">Sucursales</a> 
                <a class="uk-h5 links" href="">Contacto</a> 
            </div>
            <div class="uk-text-center uk-margin-small-top">
                <a class="uk-h5 links uk-margin-right" href="">Aviso de Privacidad</a>
                <a class="uk-h5 links uk-margin-right" href="">Términos y Condiciones</a>
                <a class="uk-h5 links">© Innova Espacios 2020</a>
            </div>
        </div>
        <div class="uk-margin-medium-top">
            <div class="uk-text-center" >
                <a class="no-link" href="#">
                    <i class="fab fa-facebook-square fa-2x uk-margin-right"></i>
                </a>
                <a class="no-link" href="#">
                    <i class="fab fa-facebook-messenger fa-2x uk-margin-right"></i>
                </a>
                <a class="no-link" href="#">
                    <i class="fab fa-instagram fa-2x uk-margin-right"></i>
                </a>
                <a class="no-link" href="#" rel="noopener noreferrer" target="_blank">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
            </div>
            <div class="uk-text-center uk-margin-medium-top">
                <h4 class="uk-h4 uk-text-capitalize" style="color: #fff">
                    <span class="copy-left">©</span> Developed with <i aria-hidden="true" class="fa fa-heart"></i> by ByDsolutions.
                </h4>
            </div>
            
        </div>

    
       
           
        

        
    </div>
        @yield('footer')

    {{--End Footer  --}}




    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</body>
</html>