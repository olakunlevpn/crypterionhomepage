<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{ config('app.name', 'Laravel') }}</title>
       <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/fonts/Feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">

   

<script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/crypterionhomepage/maythemes/css/theme.min.css') }}">
    <script>
    var premiumCryptocurrencyWidgets = {
        pluginUrl: '{{ url('/') }}/vendor/crypterionhomepage/maythemes/widgets',
        cryptoComareApiKey: '19ef0046754cad5b41656c36f1a0e792c6a85e876fb2d74b1944923fe78c5ec5'
    }
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/crypterionhomepage/maythemes/widgets/assets/css/style.css') }}" />
    <style>
    .btn-primary {
    color: #fff;
    background-color: #b35e05 !important;
    border-color: #b35e05 !important;
    box-shadow: none;
}

.btn-primary:hover {
    color: #fff;
    background-color: #f7931a !important;
    border-color: #f7931a !important;
    box-shadow: none;
}

.btn-primary:active {
    color: #fff;
    background-color: #f7931a !important;
    border-color: #f7931a !important;
    box-shadow: none;
}

.btn-primary:focus {
    color: #fff;
    background-color: #f7931a !important;
    border-color: #f7931a !important;
    box-shadow: none;
}

</style> 
  </head>
  <body class="pt-10">

  
    
    <!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white border-bottom">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="{{  url('/') }}">
          <img src="{{ asset('/storage/brand/logo-dark.png') }}" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home') }}">
              P2P Exchange
              </a>
              
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link"  href="{{ url('/wallet') }}">
                Wallet
              </a>
             
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Trading
              </a>
              <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                <div class="list-group list-group-flush">
                  <a class="list-group-item" href="{{  url('/marketplace/sell_coin') }}">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 226.777 226.777" fill="currentColor" style="color: rgb(187, 132, 20);"><path d="M135.715 122.244c-2.614-1.31-8.437-3.074-15.368-3.533-6.934-.458-15.828 0-15.828 0v30.02s9.287.198 15.503-.26c6.21-.458 12.621-2.027 15.826-3.795 3.203-1.766 7.063-4.513 7.063-11.379 0-6.869-4.579-9.745-7.196-11.053zm-19.555-17.465c5.104-.197 10.532-1.373 14.453-3.532 3.925-2.158 6.148-5.557 6.02-10.66-.134-5.102-3.532-9.418-9.287-11.186-5.757-1.766-9.613-1.897-13.998-1.962-4.382-.064-8.83.328-8.83.328v27.012c.001 0 6.541.197 11.642 0z"></path><path d="M113.413 0C50.777 0 0 50.776 0 113.413c0 62.636 50.777 113.413 113.413 113.413s113.411-50.777 113.411-113.413C226.824 50.776 176.049 0 113.413 0zm46.178 156.777c-8.44 5.887-17.465 6.935-21.455 7.456-1.969.259-5.342.532-8.959.744v22.738h-13.998v-22.37h-10.66v22.37H90.522v-22.37H62.987l2.877-16.812h8.371c2.814 0 3.989-.261 5.166-1.372 1.177-1.113 1.439-2.812 1.439-4.188V85.057c0-3.628-.295-4.61-1.963-6.473-1.668-1.867-5.591-2.112-7.8-2.112h-8.091V61.939h27.535V39.505h13.996v22.434h10.66V39.505h13.998v22.703c10.435.647 18.203 2.635 24.983 7.645 8.766 6.475 8.306 17.724 8.11 20.406-.195 2.682-1.372 7.85-3.729 11.183-2.352 3.337-8.108 6.673-8.108 6.673s6.801 1.438 11.578 5.036c4.771 3.598 8.307 9.941 8.106 19.229-.192 9.288-2.088 18.511-10.524 24.397z"></path></svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Bitcoin
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                      <crypto-widget type="inline" template="generic" color="default" assets="BTC~USD" markup="({symbol_from}) {price_to} ({change_pct})" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>
                      </p>

                    </div>

                  </a>
                  <a class="list-group-item" href="{{  url('/marketplace/sell_coin') }}">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 226.777 226.777" fill="currentColor" style="color: rgb(77, 77, 77);"><path d="M113.441 0C50.789 0 0 50.79 0 113.443c0 62.654 50.789 113.441 113.441 113.441 62.654 0 113.443-50.787 113.443-113.441C226.885 50.79 176.096 0 113.441 0zm44.036 168.762H68.839l7.45-35.566-14.486 9.933 3.519-19.463 15.151-10.43 14.862-70.939h27.671l-10.232 48.71L148.8 66.213l-4.222 20.167-36.02 24.693-7.126 33.93H162.4l-4.923 23.759z"></path></svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                      Litecoin
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                      <crypto-widget type="inline" template="generic" color="default" assets="LTC~USD" markup="({symbol_from}) {price_to} ({change_pct})" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>
                      
                      </p>

                    </div>

                  </a>

                  <a class="list-group-item" href="{{  url('/marketplace/sell_coin') }}">

<!-- Icon -->
<div class="icon icon-sm text-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 226.777 226.777" fill="currentColor" style="color: rgb(65, 117, 10);"><path d="M135.715 122.244c-2.614-1.31-8.437-3.074-15.368-3.533-6.934-.458-15.828 0-15.828 0v30.02s9.287.198 15.503-.26c6.21-.458 12.621-2.027 15.826-3.795 3.203-1.766 7.063-4.513 7.063-11.379 0-6.869-4.579-9.745-7.196-11.053zm-19.555-17.465c5.104-.197 10.532-1.373 14.453-3.532 3.925-2.158 6.148-5.557 6.02-10.66-.134-5.102-3.532-9.418-9.287-11.186-5.757-1.766-9.613-1.897-13.998-1.962-4.382-.064-8.83.328-8.83.328v27.012c.001 0 6.541.197 11.642 0z"></path><path d="M113.413 0C50.777 0 0 50.776 0 113.413c0 62.636 50.777 113.413 113.413 113.413s113.411-50.777 113.411-113.413C226.824 50.776 176.049 0 113.413 0zm46.178 156.777c-8.44 5.887-17.465 6.935-21.455 7.456-1.969.259-5.342.532-8.959.744v22.738h-13.998v-22.37h-10.66v22.37H90.522v-22.37H62.987l2.877-16.812h8.371c2.814 0 3.989-.261 5.166-1.372 1.177-1.113 1.439-2.812 1.439-4.188V85.057c0-3.628-.295-4.61-1.963-6.473-1.668-1.867-5.591-2.112-7.8-2.112h-8.091V61.939h27.535V39.505h13.996v22.434h10.66V39.505h13.998v22.703c10.435.647 18.203 2.635 24.983 7.645 8.766 6.475 8.306 17.724 8.11 20.406-.195 2.682-1.372 7.85-3.729 11.183-2.352 3.337-8.108 6.673-8.108 6.673s6.801 1.438 11.578 5.036c4.771 3.598 8.307 9.941 8.106 19.229-.192 9.288-2.088 18.511-10.524 24.397z"></path></svg></div>

<!-- Content -->
<div class="ml-4">

  <!-- Heading -->
  <h6 class="font-weight-bold text-uppercase text-primary mb-0">
  Bitcoin Cash
  </h6>

  <!-- Text -->
  <p class="font-size-sm text-gray-700 mb-0">
  <crypto-widget type="inline" template="generic" color="default" assets="BCH~USD" markup="({symbol_from}) {price_to} ({change_pct})" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>
  
  </p>

</div>

</a>


                  <a class="list-group-item" href="{{  url('/marketplace/sell_coin') }}">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 226.777 226.777" fill="currentColor" style="color: rgb(28, 55, 156);"><path d="M113.388 0C50.766 0 0 50.766 0 113.388c0 62.623 50.766 113.389 113.389 113.389s113.389-50.766 113.389-113.389C226.777 50.766 176.011 0 113.388 0zM56.562 104.802h45.266l-5.238 17.024H51.326l5.236-17.024zm117.268-8.029c-1.801 6.506-7.656 26.023-10.059 32.945-2.4 6.922-6.829 12.734-12.506 16.057-5.676 3.323-7.797 4.712-15.731 4.712H54.303l5.721-18.542h76.395l11.414-37.109h-75.79l5.722-18.541h84.577c3.875 0 8.996 1.792 11.488 6.639 2.491 4.841 1.799 7.333 0 13.839z"></path></svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        DASH
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                      <crypto-widget type="inline" template="generic" color="default" assets="DASH~USD" markup="({symbol_from}) {price_to} ({change_pct})" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>
                      
                      </p>

                    </div>

                   

                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
            <a class="navbar-btn btn btn-sm btn-primary lift ml-auto"  @if (Auth::guest()) href="{{  url('/home') }}" @else  href="{{ url('/marketplace/create_offer') }}"  @endif>
           Create Your Ad
          </a>
            <li>
          </ul>
          
          @if (Auth::guest())
          <!-- Button --> 
          <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="{{ url('/home') }}">
           Login <span class="fe fe-user"></span>
          </a>
          @else 
<a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="{{ url('/wallet') }}">
Dashboard
          </a>
          
          @endif
         
        </div>

      </div>
    </nav>





         @yield('content')
         




    <!-- FOOTER
    ================================================== -->
    <footer class="py-8 py-md-11 bg-white">
      <div class="container-lg">
        <div class="row">
          <div class="col-12 col-md-4 col-lg-4">
        
            <!-- Brand -->
            <img src="{{ asset('/storage/brand/logo-dark.png') }}" alt="..." class="footer-brand img-fluid mb-2">

            <!-- Text -->
            <p class="text-gray-700 mb-2">
            {{ lcfirst($data['name']) }} is the powerful and seamless trading platform that bridges the worlds of fiat and crypto. 
            </p>

            <!-- Social -->
            <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
              <li class="list-inline-item list-social-item mr-3">
                <a href="https://instagram.com/bitcoinlay" target="_BLANK" class="text-decoration-none">
                  <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icons/social/instagram.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="https://facebook.com/bitcoinlay" class="text-decoration-none" target="_BLANK">
                  <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icons/social/facebook.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="https://twitter.com/bitcoinlay" target="_BLANK" class="text-decoration-none">
                  <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icons/social/twitter.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              
            </ul>

          </div>
          <div class="col-6 col-md-4 col-lg-3">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Products
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="{{ url('/wallet') }}" class="text-reset">
                  Wallet
                </a>
              </li>
              <li class="mb-3">
              <a href="{{ url('/create_offer') }}" class="text-reset">
                  Create Offer
                </a>
              </li>
             
              <li class="mb-3">
                <a href="{{ url('/marketplace/buy_coin') }}" class="text-reset">
                  Buy Coin
                </a>
              </li>
              <li>
                <a href="{{ url('/marketplace/sell_coin') }}" class="text-reset">
                  Sell Coin
                </a>
              </li>
            </ul>

          </div>
          <div class="col-6 col-md-4 col-lg-3">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Developer
                </a>
              </li>
              <li class="mb-3">
                <a href="Careers" class="text-reset">
                Careers
                </a>
              </li>
              <li class="mb-3">
                <a href="{{ url('/become-vendor') }}" class="text-reset">
                Become a Vendor
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                {{ lcfirst($data['name']) }} Reviews
                </a>
              </li>
            </ul>

          </div>
          <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
        
           
          <div class="col-6 col-md-4 col-lg-2">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Legal
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-muted mb-0">
            <li class="mb-3">
                <a href="{{ url('/page/aboutus') }}" class="text-reset">
                  About
                </a>
              </li>
              <li class="mb-3">
                <a href="{{ url('/page/terms') }}" class="text-reset">
                  Terms
                </a>
              </li>
              <li class="mb-3">
                <a href="{{ url('/page/privacy') }}" class="text-reset">
                  Privacy
                </a>
              </li>
              <li>
                <a href="{{ url('/page/cookies') }}" class="text-reset">
                  Cookies
                </a>
              </li>
            </ul>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

 

    <!-- Theme JS -->
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/js/theme.min.js') }}"></script>
    <script src="{{ asset('vendor/crypterionhomepage/maythemes/widgets/assets/js/dist/app.js') }}"></script>
    <script>
mapboxgl.accessToken = 'pk.eyJ1Ijoib2xha3VubGV2cG4iLCJhIjoiY2s0M2N4NXdhMDYyejNrbGtvcmgwdjFjbCJ9.8sJEo9nSWGray1oshwQXTQ';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/olakunlevpn/ck43edojc02k31cnvhcirv82w'
});
</script>
  </body>

</html>