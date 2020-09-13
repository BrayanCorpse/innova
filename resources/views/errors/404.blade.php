<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>404 | Not Found</title>
  <link rel="shortcut icon" href="{{asset('../favicon.ico')}}" type="image/x-icon"> 
  <link rel="stylesheet" href="{{asset('css/404.css')}}">
</head>
<body>
  
  <header class="top-header">
    </header>
    
    <!--dust particel-->
    <div>
      <div class="starsec"></div>
      <div class="starthird"></div>
      <div class="starfourth"></div>
      <div class="starfifth"></div>
    </div>
    <!--Dust particle end--->
    
    
    <div class="lamp__wrap">
      <div class="lamp">
        <div class="cable"></div>
        <div class="cover"></div>
        <div class="in-cover">
          <div class="bulb"></div>
        </div>
        <div class="light"></div>
      </div>
    </div>
    <!-- END Lamp -->
    <section class="error">
      <!-- Content -->
      <div class="error__content">
        <div class="error__message message">
          <h1 class="message__title">404 | Not Found</h1>
        </div>
        <div class="error__nav e-nav">
          <a href="{{ url('/') }}" class="e-nav__link"></a>
        </div>
      </div>
      <!-- END Content -->
    
    </section>

    
</body>
</html>
