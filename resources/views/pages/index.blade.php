@extends('layouts.front')
@section('menu')
@endsection

@section('contend')

<link rel="stylesheet" href="css/cards.css">
<link rel="stylesheet" href="css/radio.css">

<div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top uk-margin-large-top" style="background-image: url('img/furniture.jpg');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="animate__animated animate__backInDown uk-h1">Innova Espacios</h1>
        <p class="animate__animated animate__backInUp uk-h4" style="text-shadow: 0 0 0.2em #F87, 0 0 0.2em #F87">
            Llena tu vida de estilo con los mejores diseños para muebles, dándole un toque único y especial a todo tu hogar 
            <svg class="heart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve"><path d="M79.1,71.5l3.5,2l0.1-0.2c4.9-6.8,7.5-14.9,7.5-23.4c0.1-10.9-4-21.1-11.6-28.7C71,13.5,60.9,9.2,50.1,9.2  C27.8,9.2,9.6,27.4,9.6,49.7s18.1,40.4,40.4,40.4c3.9,0,7.6-0.5,11.1-1.6l0.2-0.1l-0.8-4l-0.3,0.1c-3.4,1-6.9,1.6-10.4,1.6  c-20,0-36.3-16.3-36.3-36.3c0-20,16.3-36.3,36.3-36.3s36.3,16.3,36.3,36.3c0,7.7-2.4,15.1-7,21.5L79.1,71.5z"/><path d="M84.2,16C75.1,6.8,62.9,1.8,50.1,1.8c-4.5,0-8.8,0.6-12.9,1.8l-0.2,0.1l0.7,3.7l0.3-0.1  c4-1.1,8.1-1.7,12.1-1.7c24.5,0,44.5,19.9,44.5,44.5S74.6,94.5,50.1,94.5C25.5,94.4,5.6,74.4,5.6,49.9c0-9.3,2.8-18.1,8.2-25.7  L14,24l-3.3-1.9l-0.1,0.2C4.8,30.4,1.8,40,1.8,50.1c0,26.5,21.6,48.1,48.1,48.1c26.6,0,48.3-21.6,48.3-48.1  C98.2,37.2,93.3,25.1,84.2,16z"/><path d="M49.9,70L49.9,70c1.2-1,14.2-13.3,16.7-17.8c0,0,6.6-8.1,0-14.1c0,0-9.6-8.1-16.6,2.9  c-7.1-11-16.6-2.9-16.6-2.9c-6.6,6,0,14.1,0,14.1C35.8,56.6,48.3,68.5,49.9,70z"/>
            </svg>
        </p>
    </div>
</div>

<div class="uk-position-relative uk-visible-toggle uk-margin-large-top" tabindex="-1" uk-slideshow="autoplay: true">

    <ul class="uk-slideshow-items">
        @foreach ($anuncios as $anu)
        <li>
            <img src={{$anu->url}} alt="" uk-cover>
            <div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
            <h3 class="uk-margin-remove">{{$anu->name}}</h3>
            <p class="uk-margin-remove">{{$anu->description}}</p>
            </div>
        </li>
        @endforeach
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

</div>

<div class="uk-margin-large-top" uk-slider="true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
            <li>
                <div class="s-products">
                    <div class="w-product-card">
                      <div class="w-product-card__content">
                        <div class="w-product-card__image">
                            <img src="img/avangarb.jpg" alt=" "/>
                        </div>
                            <h4>Silla Avant garde</h4>
                            <p class="price uk-margin-remove-top">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <br>
                                $499
                            </p>
                            <a class="w-product-card__button" href="#0">Buy Now</a>
                      </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="s-products">
                    <div class="w-product-card">
                      <div class="w-product-card__content">
                        <div class="w-product-card__image box">
                            <img src="img/crossback-natural.png" alt=" "/>
                        </div>
                            <h4>Silla Crossback Natural</h4>
                            <p class="price uk-margin-remove-top">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <br>
                                $499
                            </p>
                            <a class="w-product-card__button" href="#0">Buy Now</a>
                      </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="s-products">
                    <div class="w-product-card">
                      <div class="w-product-card__content">
                        <div class="w-product-card__image">
                            <img src="img/tiffany-dorada.png" alt=" "/>
                        </div>
                            <h4>Silla Tiffany Dorada</h4>
                            <p class="price uk-margin-remove-top">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <br>
                                $499
                            </p>
                            <a class="w-product-card__button" href="#0">Buy Now</a>
                      </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="s-products">
                    <div class="w-product-card">
                      <div class="w-product-card__content">
                        <div class="w-product-card__image">
                            <img src="img/silla-versalles.png" alt=" "/>
                        </div>
                            <h4>Silla Versalles</h4>
                            <p class="price uk-margin-remove-top">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <br>
                                $499
                            </p>
                            <a class="w-product-card__button" href="#0">Buy Now</a>
                      </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="s-products">
                    <div class="w-product-card">
                      <div class="w-product-card__content">
                        <div class="w-product-card__image">
                            <img src="img/silla-salvador.png" alt=" "/>
                        </div>
                            <h3>Silla Salvador</h3>
                            <p class="price uk-margin-remove-top">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <br>
                                $499
                            </p>
                            <a class="w-product-card__button" href="#0">Buy Now</a>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>

<div class="uk-child-width-1-2@s uk-grid-match uk-margin-large-top" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <img src="img/sillon-purpura.jpg" alt="">
            <div class="uk-flex uk-flex-center">
                <a class="uk-margin-right" href="">
                    <span class="uk-badge purple"></span>
                </a>
                <a class="uk-margin-right" href="">
                    <span class="uk-badge gold"></span>
                </a>
                <a class="" href="">
                    <span class="uk-badge chocolate"></span>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Sillon Purpura Capitoneado</h3>
            <p class="uk-text-justify">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere atque veritatis ea, obcaecati soluta, distinctio repellat odit, enim praesentium quidem voluptatum consectetur. Accusamus, quia? Quae consectetur omnis aliquam ullam doloremque.
            </p>
            <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            <div class="uk-margin-small-top">
                <s class="uk-text-bold">$8999</s> <span class="descuento uk-text-bold">$7999</span>    
            </div>
            <br>
            <div class="uk-flex uk-flex-center uk-margin-medium-top">
                <a class="uk-button-buy" href="#">Buy Now</a>
            </div>
            <div class="uk-flex uk-flex-center uk-margin-medium-top">
                <a href="" class="uk-icon-button uk-margin-small-right facebook" uk-icon="facebook"></a>
                <a href="" class="uk-icon-button uk-margin-small-right instagram" uk-icon="instagram"></a>
                <a href="" class="uk-icon-button uk-margin-small-right twitter" uk-icon="twitter"></a>
                <a href="" class="uk-icon-button uk-margin-small-right whatsapp" uk-icon="whatsapp"></a>
                <a href="" class="uk-icon-button uk-margin-small-right mail" uk-icon="mail"></a>
            </div>   
        </div>
    </div>
</div>

<div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-large-top" uk-grid>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"><g><path d="m489.5 167.167h-7.929v-51.224c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v51.224h-7.929c-12.407 0-22.5 10.093-22.5 22.5v35.913c-178.539 0-170.204-.148-172.643.294v-140.288c0-10.752 8.748-19.5 19.5-19.5h164.072c9.521 0 17.602 6.793 19.215 16.155.704 4.082 4.582 6.819 8.665 6.117 4.082-.704 6.821-4.583 6.117-8.665-2.857-16.577-17.155-28.607-33.998-28.607h-164.07c-10.926 0-20.674 5.111-27 13.061-6.326-7.95-16.074-13.061-27-13.061h-164.071c-19.023 0-34.5 15.477-34.5 34.5v81.581h-7.929c-12.407 0-22.5 10.093-22.5 22.5v139.132c0 20.678 16.822 37.5 37.5 37.5h23.357v73.546c0 11.618 9.452 21.069 21.069 21.069 11.004 0 20.236-8.599 21.016-19.576l5.335-75.04h42.732c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5c-11.347 0-102.162 0-113.509 0-12.407 0-22.5-10.093-22.5-22.5v-139.131c0-4.136 3.364-7.5 7.5-7.5h30.857c3.618 0 6.647 2.576 7.347 5.99.1.488.153.993.153 1.51v35.913h-12.078c-10.079 0-18.279 8.2-18.279 18.279v43.305c0 10.079 8.2 18.278 18.279 18.278h414.442c10.079 0 18.279-8.2 18.279-18.279v-43.305c0-10.079-8.2-18.279-18.279-18.279h-12.079v-35.913c0-.517.053-1.022.153-1.51.701-3.415 3.729-5.99 7.347-5.99h30.857c4.136 0 7.5 3.364 7.5 7.5v139.132c0 12.407-10.093 22.5-22.5 22.5-11.941 0-278.437 0-288.491 0-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h217.713l5.335 75.04c.78 10.977 10.012 19.576 21.016 19.576 11.618 0 21.07-9.452 21.07-21.069v-73.546h23.358c20.678 0 37.5-16.822 37.5-37.5v-139.132c0-12.407-10.093-22.5-22.5-22.5zm-396.26 199.132-5.259 73.976c-.225 3.162-2.884 5.639-6.054 5.639-3.347 0-6.069-2.723-6.069-6.069v-73.546zm373.26-79.136c0 1.808-1.471 3.278-3.279 3.278-6.6 0-190.68 0-199.721 0v-19.855-26.728c0-1.808 1.471-3.278 3.279-3.278h196.442c1.808 0 3.279 1.471 3.279 3.278zm-413.143-119.996h-7.929v-81.581c0-10.752 8.748-19.5 19.5-19.5h164.072c10.752 0 19.5 8.748 19.5 19.5v140.288c-2.409-.438 8.4-.294-172.643-.294v-35.913c0-12.407-10.093-22.5-22.5-22.5zm-7.857 119.996v-43.305c0-1.808 1.471-3.279 3.279-3.279h196.442c1.808 0 3.279 1.471 3.279 3.279v26.728 19.855h-199.721c-1.808 0-3.279-1.47-3.279-3.278zm390.643 152.682c0 3.347-2.723 6.069-6.07 6.069-3.17 0-5.829-2.477-6.054-5.639l-5.259-73.976h17.383z"/></g></svg>
            <br>
            <span>sofás</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 448 448" style="enable-background:new 0 0 448 448;" xml:space="preserve">
                <g>
                    <path d="M280,307.999h-15.997c-4.418,0-8,3.582-8,8s3.582,8,8,8H280c4.418,0,8-3.582,8-8S284.418,307.999,280,307.999z"/>
                    <path d="M396,164c-1.347,0-2.678,0.068-4,0.169V68c0-30.879-25.122-56-56-56H112c-30.878,0-56,25.121-56,56v96.169   c-1.322-0.101-2.653-0.169-4-0.169c-28.673,0-52,23.327-52,52c0,17.936,9.079,34.304,24,43.815v105.518   c0,0.358,0.032,0.709,0.078,1.055C25.318,387.335,42.746,404,64,404v8c0,13.233,10.766,24,24,24s24-10.767,24-24v-8h224v8   c0,13.233,10.766,24,24,24s24-10.767,24-24v-8c21.254,0,38.682-16.665,39.922-37.612c0.046-0.346,0.078-0.697,0.078-1.055V259.815   c14.921-9.512,24-25.88,24-43.815C448,187.327,424.673,164,396,164z M72,68c0-22.056,17.944-40,40-40h224c22.056,0,40,17.944,40,40   v100.005c-18.773,7.853-32,26.406-32,47.995v36.022c-6.69-5.034-15.002-8.022-24-8.022H128c-8.998,0-17.31,2.988-24,8.022V216   c0-21.589-13.227-40.142-32-47.995V68z M96,412c0,4.411-3.589,8-8,8s-8-3.589-8-8v-8h16V412z M368,412c0,4.411-3.589,8-8,8   s-8-3.589-8-8v-8h16V412z M412.358,248.064c-2.675,1.368-4.358,4.119-4.358,7.123V364c0,13.233-10.766,24-24,24H64   c-13.234,0-24-10.767-24-24V255.188c0-3.004-1.683-5.755-4.358-7.123C23.526,241.869,16,229.583,16,216c0-19.851,16.149-36,36-36   s36,16.149,36,36v68.001l0,0.001c0.001,22.055,17.944,39.997,40,39.997h103.998c4.418,0,8-3.582,8-8s-3.582-8-8-8H128   c-13.233,0-24-10.766-24-23.999s10.767-24,24-24h192c13.233,0,24,10.767,24,24s-10.767,23.999-24,23.999h-8c-4.418,0-8,3.582-8,8   s3.582,8,8,8h8c22.055,0,39.999-17.942,40-39.997l0-0.001V216c0-19.851,16.149-36,36-36s36,16.149,36,36   C432,229.583,424.474,241.869,412.358,248.064z"/>
                </g>
                </svg>
            <br>
            <span>Sillones</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M416,27H266.001c-5.522,0-10,4.478-10,10s4.478,10,10,10H406v65.667c0,5.522,4.478,10,10,10c5.522,0,10-4.478,10-10V37    C426,31.478,421.522,27,416,27z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M233.069,29.93C231.21,28.069,228.63,27,226,27s-5.21,1.069-7.07,2.93S216,34.37,216,37s1.069,5.21,2.93,7.069    C220.79,45.93,223.37,47,226,47s5.21-1.07,7.069-2.931C234.93,42.21,236,39.63,236,37S234.93,31.79,233.069,29.93z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M376,67H136c-5.522,0-10,4.478-10,10v80c0,5.522,4.478,10,10,10h240c5.522,0,10-4.478,10-10V77    C386,71.478,381.522,67,376,67z M366,147H146V87h220V147z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M502,424.938h-44V239h44c3.27,0,6.333-1.599,8.203-4.281s2.311-6.109,1.18-9.178l-28.139-76.333    c-1.449-3.931-5.194-6.541-9.383-6.541h-52.056c-4.188,0-7.934,2.61-9.383,6.541L398.492,187H106V47h74.5c5.522,0,10-4.478,10-10    s-4.478-10-10-10H96c-5.522,0-10,4.478-10,10v141.9c-7.745-8.662-18.995-14.127-31.501-14.127    c-23.304,0-42.263,18.959-42.263,42.264c0,5.995,1.234,11.798,3.616,17.147C5.803,234.314,0,248.121,0,262.586    c0,26.634,19.21,48.852,44.499,53.563V331H10c-5.522,0-10,4.478-10,10v134c0,5.522,4.478,10,10,10h88.998    c3.02,0,5.72-1.344,7.554-3.46c4.343,2.208,9.25,3.46,14.446,3.46h270.004c1.378,0,2.733-0.097,4.066-0.267    c0.729,0.169,1.485,0.267,2.265,0.267H502c5.522,0,10-4.478,10-10v-40.063C512,429.415,507.522,424.938,502,424.938z     M428.777,162.667h38.112L487.656,219h-39.173c-0.161-0.008-0.32-0.024-0.483-0.024c-0.163,0-0.322,0.017-0.483,0.024h-39.506    L428.777,162.667z M44.498,260.975v34.627C30.338,291.304,20,278.132,20,262.586c0-11.108,5.413-21.607,14.479-28.085    c2.19-1.564,3.657-3.946,4.068-6.606c0.412-2.661-0.266-5.375-1.881-7.528c-2.898-3.867-4.431-8.477-4.431-13.33    c0-12.276,9.987-22.264,22.263-22.264s22.263,9.987,22.263,22.264c0,4.854-1.532,9.463-4.431,13.331    c-1.614,2.153-2.292,4.867-1.88,7.527c0.411,2.66,1.878,5.041,4.068,6.606c9.066,6.478,14.479,16.977,14.479,28.085    c0,15.546-10.338,28.718-24.499,33.016v-34.627c0-5.522-4.478-10-10-10C48.976,250.975,44.498,255.453,44.498,260.975z     M88.998,465H20V351h68.998V465z M403.002,453c0,6.617-5.383,12-12,12H120.998c-6.617,0-12-5.383-12-12v-64    c0-9.925,8.075-18,18-18c9.925,0,18,8.075,18,18v32c0,5.522,4.478,10,10,10h202.004c5.522,0,10-4.478,10-10v-32    c0-9.925,8.075-18,18-18s18,8.075,18,18V453z M164.945,387h182.11c-0.035,0.663-0.053,1.329-0.053,2v22H164.998v-22    C164.998,388.329,164.979,387.663,164.945,387z M157.952,367c-5.025-7.049-12.389-12.315-20.954-14.655v-51.692    c0-11.388,9.265-20.652,20.653-20.652h197.663c11.388,0,20.652,9.265,20.652,20.652v51.442    c-8.976,2.197-16.706,7.592-21.918,14.905H157.952z M395.967,352.619v-51.967c0-22.416-18.236-40.652-40.652-40.652H157.651    c-22.416,0-40.653,18.236-40.653,40.652v51.692c-2.808,0.767-5.49,1.842-8,3.198V341c0-5.522-4.478-10-10-10H64.499v-14.851    c25.289-4.711,44.499-26.929,44.499-53.563c0-14.465-5.803-28.271-15.852-38.403c2.381-5.349,3.615-11.151,3.615-17.146    c0-0.012-0.001-0.024-0.001-0.036h294.358l-6.835,18.541c-1.131,3.068-0.69,6.495,1.18,9.178c1.87,2.683,4.934,4.281,8.203,4.281    H438v185.938h-14.998V389C423.002,371.858,411.59,357.337,395.967,352.619z M492,465h-71.342c1.506-3.708,2.344-7.757,2.344-12    v-8.063H492V465z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M295.061,300h-45.333c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h45.333c5.522,0,10-4.478,10-10    C305.061,304.478,300.583,300,295.061,300z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M221.74,302.93c-1.86-1.861-4.44-2.93-7.08-2.93c-2.63,0-5.2,1.069-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.069c1.87,1.86,4.44,2.931,7.07,2.931c2.64,0,5.22-1.07,7.08-2.931c1.859-1.859,2.92-4.439,2.92-7.069    S223.599,304.79,221.74,302.93z"/>
                    </g>
                </g>
                </svg>
            <br>
            <span>Salas</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><g><path d="M472,256.81V104a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8V256.81A40.05,40.05,0,0,0,8,296V408a8,8,0,0,0,8,8H496a8,8,0,0,0,8-8V296A40.05,40.05,0,0,0,472,256.81ZM56,112H456V256H392V232a40.04,40.04,0,0,0-40-40H160a40.04,40.04,0,0,0-40,40v24H56ZM376,232v24H136V232a24.032,24.032,0,0,1,24-24H352A24.032,24.032,0,0,1,376,232ZM488,400H24V320H488Zm0-96H24v-8a24.032,24.032,0,0,1,24-24H464a24.032,24.032,0,0,1,24,24Z"/><path d="M48,384H88a8,8,0,0,0,0-16H48a8,8,0,0,0,0,16Z"/><path d="M112,384h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z"/></g></svg>
            <br>
            <span>Sofacama</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512"><g id="outline"><path d="M37,21a5,5,0,0,0-2-3.979V14H33.112a5.012,5.012,0,0,1,.806-2H36a3,3,0,0,0,3-3V6H36a2.967,2.967,0,0,0-1.471.4A2.994,2.994,0,0,0,32,5H29V8a3,3,0,0,0,3,3h.173a7.479,7.479,0,0,0-1.085,3H29v3.021A5,5,0,0,0,27,21a4.948,4.948,0,0,0,1.026,3H2v8H5.847L2.01,58.858A1,1,0,0,0,3,60H7a1,1,0,0,0,.99-.858l1.224-8.569L32,40.952l22.786,9.621,1.224,8.569A1,1,0,0,0,57,60h4a1,1,0,0,0,.99-1.142L58.153,32H62V24H35.974A4.948,4.948,0,0,0,37,21ZM35,9a1,1,0,0,1,1-1h1V9a1,1,0,0,1-1,1H35ZM32,9a1,1,0,0,1-1-1V7h1a1,1,0,0,1,1,1V9Zm-1.5,9.419.5-.289V16h2v2.13l.5.289A2.968,2.968,0,0,1,35,21a3,3,0,0,1-6,0A2.968,2.968,0,0,1,30.5,18.419ZM6.133,58H4.153L7.867,32h1.98Zm3.411-9.738,2.262-15.836,17.623,7.441ZM15.94,32H48.06L32,38.781Zm18.631,7.867,17.623-7.441,2.262,15.836ZM59.847,58h-1.98L54.153,32h1.98ZM60,26v4H4V26Z"/></g></svg>
            <br>
            <span>Mesas</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><g><path d="M464,8H48a8,8,0,0,0-8,8V448a8,8,0,0,0,8,8h9.22l6.89,41.32A8,8,0,0,0,72,504H88a8,8,0,0,0,7.89-6.68L102.78,456H409.22l6.89,41.32A8,8,0,0,0,424,504h16a8,8,0,0,0,7.89-6.68L454.78,456H464a8,8,0,0,0,8-8V16A8,8,0,0,0,464,8ZM81.22,488H78.78l-5.34-32H86.56ZM248,440H56V360H248ZM120,280v64H88V280ZM88,264V240h32v24Zm80,16v64H136V280Zm-32-16V240h32v24Zm80,16v64H184V280Zm-32-16V240h32v24ZM433.22,488h-2.44l-5.34-32h13.12ZM456,440H264V360H456ZM376,296H272V264H376a16,16,0,0,1,0,32Zm24,16a16,16,0,0,1,0,32H296V312Zm56,32H427.69A31.705,31.705,0,0,0,432,328a32.033,32.033,0,0,0-28.42-31.79A31.986,31.986,0,0,0,376,248H264a8,8,0,0,0-8,8v48a8,8,0,0,0,8,8h16v32H232V232a8,8,0,0,0-8-8H80a8,8,0,0,0-8,8V344H56V200H456ZM248,168v16H136V168Zm-80-28V104h48v36a12.01,12.01,0,0,1-12,12H180A12.01,12.01,0,0,1,168,140Zm208-20v64H344V120Zm-32-16V80h32v24Zm80-16v96H392V88ZM392,72V48h32V72Zm64,112H440V40a8,8,0,0,0-8-8H384a8,8,0,0,0-8,8V64H336a8,8,0,0,0-8,8V184H264V160a8,8,0,0,0-8-8H229.29A27.75,27.75,0,0,0,232,140V96a8,8,0,0,0-8-8h-4.9l4.49-13.47a8,8,0,0,0-15.18-5.06L202.23,88H192V48a8,8,0,0,0-16,0V88H160a8,8,0,0,0-8,8v44a27.75,27.75,0,0,0,2.71,12H128a8,8,0,0,0-8,8v24H56V24H456Z"/><path d="M80,416H224a8,8,0,0,0,8-8V384a8,8,0,0,0-8-8H80a8,8,0,0,0-8,8v24A8,8,0,0,0,80,416Zm8-24H216v8H88Z"/><path d="M280,384v24a8,8,0,0,0,8,8H432a8,8,0,0,0,8-8V384a8,8,0,0,0-8-8H288A8,8,0,0,0,280,384Zm16,8H424v8H296Z"/><path d="M352,272H296a8,8,0,0,0,0,16h56a8,8,0,0,0,0-16Z"/><path d="M392,320H320a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Z"/></g></svg>
            <br>
            <span>Libreros</span>
        </div>
    </div>
</div>
<div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" id="_x31__px" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"><path d="m16.5 24h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"/><path d="m17.319 13h-10.638c-.442 0-.859-.193-1.145-.53s-.408-.781-.335-1.216l1.667-10c.12-.727.742-1.254 1.479-1.254h7.306c.737 0 1.359.527 1.479 1.253l1.667 10c.073.436-.049.879-.335 1.216-.285.338-.703.531-1.145.531zm-8.972-12c-.245 0-.453.176-.493.417l-1.667 10c-.024.147.015.292.112.406s.232.177.382.177h10.639c.149 0 .285-.063.382-.177s.136-.258.112-.406l-1.667-10c-.041-.241-.249-.417-.494-.417z"/><path d="m12 24c-.276 0-.5-.224-.5-.5v-5c0-.276.224-.5.5-.5s.5.224.5.5v5c0 .276-.224.5-.5.5z"/><path d="m19.5 19h-15c-.276 0-.5-.224-.5-.5v-2c0-1.378 1.122-2.5 2.5-2.5h11c1.378 0 2.5 1.122 2.5 2.5v2c0 .276-.224.5-.5.5zm-14.5-1h14v-1.5c0-.827-.673-1.5-1.5-1.5h-11c-.827 0-1.5.673-1.5 1.5z"/><path d="m19.5 18c-.276 0-.5-.224-.5-.5v-3c0-1.378 1.122-2.5 2.5-2.5.276 0 .5.224.5.5s-.224.5-.5.5c-.827 0-1.5.673-1.5 1.5v3c0 .276-.224.5-.5.5z"/><path d="m4.5 18c-.276 0-.5-.224-.5-.5v-3c0-.827-.673-1.5-1.5-1.5-.276 0-.5-.224-.5-.5s.224-.5.5-.5c1.378 0 2.5 1.122 2.5 2.5v3c0 .276-.224.5-.5.5z"/></svg>
            <br>
            <span>Sillas</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" height="512pt" viewBox="-103 0 512 512.16996" width="512pt"><path d="m267.027344 213.917969c-7.527344 1.304687-15.011719 2.429687-22.351563 3.410156l-6.542969-68.308594c43.886719-28.058593 56.90625-77.3125 60.390626-111.042969 1.085937-10.863281-3.296876-21.558593-11.691407-28.535156-10.144531-8.5-23.804687-11.496094-36.574219-8.023437-31.585937 8.179687-63.992187 12.761719-96.605468 13.664062-32.613282-.902343-65.023438-5.484375-96.605469-13.664062-12.773437-3.472657-26.441406-.460938-36.574219 8.058593-8.394531 6.964844-12.785156 17.644532-11.714844 28.5 3.480469 33.722657 16.492188 82.96875 60.363282 111.027344l-6.492188 68.335938c-7.339844-.992188-14.824218-2.117188-22.351562-3.414063-12.964844-2.34375-26.121094 2.964844-33.824219 13.652344-7.472656 10.1875-8.445313 23.757813-2.507813 34.910156 10.738282 18.253907 26.824219 32.765625 46.078126 41.582031l-38.023438 182.078126c-2.339844 11.273437 4.582031 22.398437 15.726562 25.289062 11.144532 2.890625 22.597657-3.472656 26.035157-14.460938l30.496093-95.855468h138.796876l30.488281 95.820312c3.410156 11.035156 14.894531 17.4375 26.074219 14.527344 11.175781-2.90625 18.089843-14.09375 15.6875-25.390625l-37.988282-182.050781c19.253906-8.8125 35.339844-23.328125 46.078125-41.582032 5.9375-11.152343 4.960938-24.71875-2.507812-34.910156-7.722657-10.683594-20.894531-15.980468-33.859375-13.617187zm-39.253906 5.484375c-5.867188.644531-11.527344 1.210937-16.980469 1.707031l-5.4375-57.292969c5.644531-1.652344 11.171875-3.671875 16.554687-6.039062zm-74.121094-48.683594c11.703125.042969 23.386718-.957031 34.910156-2.984375l5.179688 54.65625c-23.679688 1.570313-39.792969 1.621094-40.105469 1.621094-.316407 0-16.410157-.050781-40.109375-1.621094l5.179687-54.65625c11.539063 2.03125 23.230469 3.03125 34.945313 2.984375zm-127.914063-134.492188c-.457031-5.292968 1.75-10.464843 5.886719-13.796874 4.132812-3.472657 9.367188-5.355469 14.761719-5.308594 2.148437.015625 4.285156.300781 6.359375.851562 32.976562 8.601563 66.835937 13.359375 100.90625 14.175782 34.070312-.816407 67.929687-5.574219 100.90625-14.175782 7.367187-2.042968 15.265625-.363281 21.164062 4.5 4.121094 3.335938 6.3125 8.503906 5.84375 13.789063-5.527344 53.539062-32.222656 117.390625-127.914062 117.390625-24.957032.859375-49.6875-4.96875-71.628906-16.886719-.121094-.058594-.214844-.152344-.332032-.210937-38.539062-22.605469-52.183594-63.832032-55.953125-100.328126zm59.691407 121.515626c5.378906 2.367187 10.910156 4.386718 16.554687 6.039062l-5.4375 57.285156c-5.457031-.476562-11.117187-1.046875-16.980469-1.707031zm-47.949219 334.097656c-.59375 1.878906-2.34375 3.15625-4.320313 3.148437-1.347656.007813-2.625-.597656-3.472656-1.648437-.882812-1.046875-1.242188-2.4375-.980469-3.78125l37.195313-178.292969c8.554687 3.464844 17.285156 6.480469 26.15625 9.035156zm161.195312-167.324219 8.078125 25.40625h-106.203125l8.078125-25.40625c29.6875 6.28125 60.359375 6.28125 90.046875 0zm-109.023437 59.539063 5.425781-17.066407h117.113281l5.425782 17.066407zm188.929687 105.4375c.28125 1.363281-.074219 2.78125-.964843 3.847656-.847657 1.050781-2.125 1.65625-3.472657 1.648437-1.988281.007813-3.746093-1.285156-4.328125-3.183593l-54.570312-171.519532c8.871094-2.554687 17.601562-5.570312 26.15625-9.039062zm9.691407-235.042969c-11.253907 21.265625-38.945313 38.613281-80.050782 50.175781-35.6875 10.042969-73.453125 10.042969-109.140625 0-41.105469-11.5625-68.796875-28.910156-80.050781-50.175781-2.917969-5.386719-2.4375-11.980469 1.238281-16.886719 3.871094-5.40625 10.53125-8.070312 17.066407-6.828125 38.449218 6.417969 77.335937 9.875 116.316406 10.34375 38.972656-.46875 77.847656-3.929687 116.292968-10.34375 6.53125-1.242187 13.191407 1.421875 17.066407 6.828125 3.679687 4.898438 4.171875 11.492188 1.261719 16.886719zm0 0"/></svg>
            <br>
            <span>Bancos</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><g><path d="M504,416V192a8,8,0,0,0-8-8H472V80a8,8,0,0,0-8-8H352a8,8,0,0,0-8,8v40H288a8,8,0,0,0-8,8v56H192V96a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v88H16a8,8,0,0,0-8,8V416a8,8,0,0,0,8,8H29.25L8.34,493.7A7.991,7.991,0,0,0,16,504H40a8.011,8.011,0,0,0,7.16-4.42L84.94,424H427.06l37.78,75.58A8.011,8.011,0,0,0,472,504h24a7.991,7.991,0,0,0,7.66-10.3L482.75,424H496A8,8,0,0,0,504,416ZM392,88h32v48H392Zm-32,0h16v56a8,8,0,0,0,8,8h48a8,8,0,0,0,8-8V88h16v96H360Zm-64,48h48v48H296ZM152,104h24v80H152Zm-40,0h24v80H112Zm-40,0H96v80H72ZM35.06,488H26.75l19.2-64H67.06ZM248,408H24V200H248Zm237.25,80h-8.31l-32-64h21.11ZM488,408H264V200H488Z"/><path d="M288,272a8,8,0,0,0-8,8v48a8,8,0,0,0,16,0V280A8,8,0,0,0,288,272Z"/><path d="M224,336a8,8,0,0,0,8-8V280a8,8,0,0,0-16,0v48A8,8,0,0,0,224,336Z"/></g></svg>
            <br>
            <span>Burós</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 511 511" height="512" viewBox="0 0 511 511" width="512"><g id="Outline_37_"><g><path d="m207.5 135h9.223c3.515 18.205 19.561 32 38.777 32s35.262-13.795 38.777-32h9.223c4.143 0 7.5-3.357 7.5-7.5v-24c0-4.143-3.357-7.5-7.5-7.5h-96c-4.143 0-7.5 3.357-7.5 7.5v24c0 4.143 3.357 7.5 7.5 7.5zm48 17c-10.895 0-20.151-7.147-23.326-17h46.652c-3.175 9.853-12.431 17-23.326 17zm-40.5-41h81v9h-81z"/><path d="m207.5 287h9.223c3.515 18.205 19.561 32 38.777 32s35.262-13.795 38.777-32h9.223c4.143 0 7.5-3.357 7.5-7.5v-24c0-4.143-3.357-7.5-7.5-7.5h-96c-4.143 0-7.5 3.357-7.5 7.5v24c0 4.143 3.357 7.5 7.5 7.5zm48 17c-10.895 0-20.151-7.147-23.326-17h46.652c-3.175 9.853-12.431 17-23.326 17zm-40.5-41h81v9h-81z"/><path d="m207.5 439h9.223c3.515 18.205 19.561 32 38.777 32s35.262-13.795 38.777-32h9.223c4.143 0 7.5-3.357 7.5-7.5v-24c0-4.143-3.357-7.5-7.5-7.5h-96c-4.143 0-7.5 3.357-7.5 7.5v24c0 4.143 3.357 7.5 7.5 7.5zm48 17c-10.895 0-20.151-7.147-23.326-17h46.652c-3.175 9.853-12.431 17-23.326 17zm-40.5-41h81v9h-81z"/><path d="m503.5 8h-87c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h79.5v9h-16.5-448-16.5v-9h364.326c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-371.826c-4.143 0-7.5 3.357-7.5 7.5v24c0 4.143 3.357 7.5 7.5 7.5h16.5v448.5c0 4.143 3.357 7.5 7.5 7.5h448c4.143 0 7.5-3.357 7.5-7.5v-448.5h16.5c4.143 0 7.5-3.357 7.5-7.5v-24c0-4.143-3.357-7.5-7.5-7.5zm-31.5 328h-433v-137h433zm0 152h-433v-137h433zm0-304h-433v-137h433z"/></g></g></svg>
            <br>
            <span>Cajoneras</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" id="Icons" viewBox="0 0 74 74" width="512" height="512"><path d="M71,60H65.111a1,1,0,0,1-1-1V45.333H51.629V59a1,1,0,0,1-1,1H44.741a1,1,0,0,1-1-1V40.973a3.347,3.347,0,0,1,3.343-3.343H64.111V15.373A1.375,1.375,0,0,1,65.484,14h5.142A1.375,1.375,0,0,1,72,15.373V59A1,1,0,0,1,71,60Zm-4.889-2H70V16H66.111V38.63a1,1,0,0,1-1,1H47.083a1.345,1.345,0,0,0-1.343,1.343V58h3.889V44.333a1,1,0,0,1,1-1H65.111a1,1,0,0,1,1,1Zm4.515-42h0Z"/><path d="M29.259,60H23.371a1,1,0,0,1-1-1V45.333H9.889V59a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V15.373A1.375,1.375,0,0,1,3.374,14H8.516a1.375,1.375,0,0,1,1.373,1.373V37.63H26.917a3.347,3.347,0,0,1,3.343,3.343V59A1,1,0,0,1,29.259,60Zm-4.889-2h3.889V40.973a1.345,1.345,0,0,0-1.343-1.343H8.889a1,1,0,0,1-1-1V16H4V58H7.889V44.333a1,1,0,0,1,1-1H23.371a1,1,0,0,1,1,1Z"/><path d="M37,60a1,1,0,0,1-1-1V32.5a1,1,0,0,1,2,0V59A1,1,0,0,1,37,60Z"/><path d="M40,60H34a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"/><path d="M55,33.5H19a1,1,0,0,1-1-1V30.688A5.694,5.694,0,0,1,23.688,25H50.313A5.694,5.694,0,0,1,56,30.688V32.5A1,1,0,0,1,55,33.5Zm-35-2H54v-.812A3.692,3.692,0,0,0,50.313,27H23.688A3.692,3.692,0,0,0,20,30.688Z"/><path d="M36.99,27a1,1,0,0,1-.625-.22c-.749-.6-7.312-5.984-7.365-10.48a5.389,5.389,0,0,1,1.527-3.835A4.83,4.83,0,0,1,33.978,11a4.776,4.776,0,0,1,3.013,1.082A4.776,4.776,0,0,1,40,11a5.061,5.061,0,0,1,3.74,1.69,4.745,4.745,0,0,1,1.232,3.7c-.506,4.928-7.085,10.174-7.365,10.395A1,1,0,0,1,36.99,27ZM33.978,13a2.843,2.843,0,0,0-2.027.871A3.376,3.376,0,0,0,31,16.276c.032,2.718,3.886,6.6,5.988,8.42,1.579-1.37,5.657-5.2,6-8.511h0a2.771,2.771,0,0,0-.728-2.155A3.1,3.1,0,0,0,40,13a2.866,2.866,0,0,0-2.231,1.119,1.036,1.036,0,0,1-1.563,0A2.828,2.828,0,0,0,33.978,13Z"/></svg>
            <br>
            <span>Comedores</span>
        </div>
    </div>
    <div class="category">
        <div class="cat uk-padding">
            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"><g><g id="XMLID_7_"><g><g><circle cx="100" cy="337" r="10"/></g><g><circle cx="100" cy="427" r="10"/></g></g><path d="m502 182c5.523 0 10-4.478 10-10v-162c0-5.522-4.477-10-10-10h-75c-5.523 0-10 4.478-10 10s4.477 10 10 10h65v142h-220v-142h65c5.523 0 10-4.478 10-10s-4.477-10-10-10h-75c-5.523 0-10 4.478-10 10v162c0 5.522 4.477 10 10 10h110v40h-222.381c3.415-5.888 5.381-12.717 5.381-20v-24.607c26.844-10.233 45-36.092 45-65.393 0-5.522-4.477-10-10-10h-30c-7.373 0-14.67 1.172-21.618 3.424-3.899-22.827-14.74-43.924-31.312-60.495-3.905-3.904-10.236-3.904-14.142 0-16.57 16.571-27.411 37.668-31.31 60.495-6.948-2.252-14.245-3.424-21.618-3.424h-30c-5.523 0-10 4.478-10 10 0 29.298 18.152 55.155 45 65.392v24.608c0 7.283 1.966 14.112 5.381 20h-40.381c-5.523 0-10 4.478-10 10v270c0 5.522 4.477 10 10 10s10-4.478 10-10v-20h160v20c0 5.522 4.477 10 10 10s10-4.478 10-10v-200h292v200c0 5.522 4.477 10 10 10s10-4.478 10-10v-270c0-5.522-4.477-10-10-10h-110v-40zm-323.003-60c-3.752 18.464-17.711 33.594-36.479 38.423-4.084 1.047-8.296 1.577-12.518 1.577h-18.981c2.841-13.816 11.471-26.049 23.914-33.272 7.577-4.402 16.246-6.728 25.067-6.728zm-78.997-55.001c10.932 13.766 17.682 30.342 19.495 47.916-7.961 5.664-14.566 12.89-19.494 21.115-4.929-8.224-11.533-15.451-19.495-21.115 1.812-17.574 8.562-34.15 19.494-47.916zm-78.997 55.001h18.997c8.821 0 17.49 2.326 25.069 6.729 12.442 7.222 21.071 19.455 23.912 33.271h-18.981c-4.222 0-8.434-.53-12.508-1.574-18.776-4.832-32.737-19.962-36.489-38.426zm43.997 80v-20.185c1.663.118 3.331.185 5 .185 0 0 63.336-.066 65-.185v20.185c0 11.028-8.972 20-20 20h-30c-11.028 0-20-8.972-20-20zm115 170h-160v-70h160zm-160 20h160v70h-160zm472-150v40h-472v-40"/></g><g><circle cx="382" cy="10" r="10"/></g></g></svg>
            <br>
            <span>Escritorios</span>
        </div>
    </div>
</div>

<div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-large-top" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <div class="uk-card-badge uk-label">
                <a class=" uk-link-reset" href="#msi" uk-toggle>Ver más</a>
            </div>
            <br>
            <a href="#msi" uk-toggle>
                <img alt="" src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/credit-card.svg">
            </a>
            <p>Paga en 12 MSI</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <div class="uk-card-badge uk-label">
                <a class=" uk-link-reset" href="#dbi" uk-toggle>Ver más</a>
            </div>
            <br>
            <a href="#dbi" uk-toggle>
                <img alt="" src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/debit-card.svg">
            </a>
            <p>Tarjeta de débito</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <div class="uk-card-badge uk-label">
                <a class=" uk-link-reset" href="#efe" uk-toggle>Ver más</a>
            </div>
            <br>
            <a href="#efe" uk-toggle>
                <img alt="" src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/payment-agreement.svg">
            </a>
            <p>Efectivo ó depósito</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <div class="uk-card-badge uk-label">
                <a class=" uk-link-reset" href="#mas" uk-toggle>Ver más</a>
            </div>
            <br>
            <a href="#mas" uk-toggle>
                <img alt="" src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/view-more.svg">
            </a>
            <p>Más opciones</p>
        </div>
    </div>
</div>

<div class="uk-position-relative uk-visible-toggle uk-light uk-margin-large-top" tabindex="-1" uk-slideshow="ratio: 16:3; animation: scale; autoplay: true">

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/banner.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="img/banner2.jpg" alt="" uk-cover>
        </li>

    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>

<div id="msi" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <p class="uk-text-center">
            Tarjeta de crédito en hasta 12 meses sin intereses.
            <img src="img/tarjetas.png" alt="" width="300">
        </p>
        

    </div>
</div>

<div id="dbi" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <p class="uk-text-center">
            Tarjeta de débito.
            <br>
            <br>
            <img src="img/visa.png" alt="" width="100">
            <img src="img/master.png" alt="" width="100">
        </p>
        

    </div>
</div>

<div id="efe" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <p class="uk-text-center">
            Efectivo en puntos de pago, depósito y transferencia electrónica.
            <br>
            <br>
            <img src="img/santander.svg" alt="" width="100">
            <img src="img/bbva.svg" alt="" width="100">
            <img src="img/banamex.svg" alt="" width="100">
            <img src="img/oxxo.svg" alt="" width="70">
        </p>
        

    </div>
</div>

<div id="mas" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <p class="uk-text-center">
            Pago directo en sucursal.
            <br>
            <br>
            <img src="img/agency.svg" alt="" width="100">
        </p>
        

    </div>
</div>

<div class="uk-margin-large-top">
    <div class="uk-background-my uk-padding uk-panel">
        <p class="uk-text-bold uk-text-center">
            RECIBE TODAS NUESTRAS OFERTAS, NOVEDADES Y TIPS DE DECORACIÓN
        </p>

        <form class="uk-text-center">

            <div class="uk-margin" uk-margin>
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input class="uk-input" type="text">
                </div>
                <button class="uk-button uk-button-secondary">Enviar</button>
            </div>
        
        </form>

    </div>
</div>


@endsection


@section('footer')
@endsection

