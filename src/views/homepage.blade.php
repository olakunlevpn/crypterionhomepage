@extends('crypterionhomepage::layouts.app')

@section('content')


    <!-- WELCOME
    ================================================== -->
    <section class="pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between" style="background-image: url('vendor/crypterionhomepage/maythemes/img/illustrations/illustration-6-cropped.png'), url('vendor/crypterionhomepage/maythemes/img/illustrations/illustration-4-cropped.png')">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center" data-aos="fade-up">

            <!-- Image (mobile) -->
            <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/illustrations/illustration-8.png') }}" alt="..." class="img-fluid mb-6 d-lg-none">

            <!-- Heading -->
            <h1 class="display-3 font-weight-bold">
              The World's Leading <br>
              Cryptocurrency Exchange
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-8">
            The {{ $data['name'] }} Marketplace is here to radically transform the way you spend money. Use hundreds of different payment methods to buy and sell bitcoin.
            </p>

            <!-- Button -->
            <a @if (Auth::guest()) href="{{  url('/home') }}"
               @else  href="{{  url('profile') }}/{{ @Auth::user()->name }}/offers"
               @endif  class="btn btn-primary mr-1 lift m-1">
               @if (Auth::guest()) Create a Wallet
               @else  My Offers
               @endif
            </a>
            <a href="{{  url('/marketplace/buy_coin') }}" class="btn btn-primary m-1 lift">
              Buy Now  <i class="fe fe-arrow-right ml-3"></i>
            </a>
            <a href="{{  url('/marketplace/sell_coin') }}" class="btn btn-primary-soft lift m-1">
              Sell Now
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
        </svg>
      </div>
    </div>

    <!-- PRICING
    ================================================== -->
    <section class="mt-n8">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-3 mb-1" data-aos="fade-up" data-aos-delay="50">


          <crypto-widget type="card" template="chart6" color="default" assets="BTC~USD" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>


          </div>
          <div class="col-12 col-md-3 mb-1" data-aos="fade-up" data-aos-delay="50">


            <crypto-widget type="card" template="chart6" color="default" assets="BCH~USD" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>


            </div>


            <div class="col-12 col-md-3 mb-1" data-aos="fade-up" data-aos-delay="50">


            <crypto-widget type="card" template="chart6" color="default" assets="DASH~USD" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>


            </div>

            <div class="col-12 col-md-3" data-aos="fade-up" data-aos-delay="50">


            <crypto-widget type="card" template="chart6" color="default" assets="LTC~USD" api="cryptocompare.com" realtime="true" animation="flash"></crypto-widget>


            </div>




          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CONTROL
    ================================================== -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">



            <!-- Heading -->
            <h1 class="font-weight-bold">
            Buy bitcoin with any payment method
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7">
            Sign up today to receive your FREE and secure digital wallet. You can immediately start transacting and buying bitcoin, hassle-free.
            </p>

          </div>
        </div> <!-- / .row -->
       <div class="display-4">You want to buy Bitcoin?</div>
       <hr>
<!-- Flickity -->
<div class="flickity-viewport-visible pt-2 pb-9" data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "contain": true}'>

@foreach ($trades as $trade)

<div class="col-12 col-md-5 col-lg-4">

    <!-- Card -->
    <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: rgb({{ $data[$trade->identifier.'_color'] }});">
      <div class="card-body">
      <div class="img-fluid mb-5 w-100 svg-shim" style="color: #FF5A5F;">
  <div class="row">
  <div class="col-md-2">
        <!-- Icon -->

        <img src="{{ asset('vendor/crypterionhomepage/maythemes/widgets/assets/images/coins/thumb64') }}/{{ $data[$trade->identifier] }}.png" alt="{{ $data[$trade->identifier]}}" width="40" class="img-responsive mr-1">
       </div>
       <div class="col-md-10">{{ $trade->name }}'s Offer<br>
       <div style="margin-top: -10px;">
      <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="#fadb14"></path>
    </g>
</svg>
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="#fadb14"></path>
    </g>
</svg>
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="#fadb14"></path>
    </g>
</svg>
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="rgba(51,94,234,.1)"></path>
    </g>
</svg>

<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="rgba(51,94,234,.1)"></path>
    </g>
</svg>
</div></div></div>


</div>


                  <table class="table table-striped" style="margin-left: -15;margin-left: -20px;">
                    <thead>
                      <tr>
                        <th scope="col">Coin</th>
                        <th scope="col">{{ strtoupper($trade->identifier) }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td>Currency</td>
                        <td>{{ strtoupper($trade->currency) }}</td>
                      </tr>
                      <tr>

                        <td>Range</td>
                        <td>{{ $data[$trade->currency]['symbol'] }}{{ $trade->min_amount }} - {{ $data[$trade->currency]['symbol'] }}{{ $trade->max_amount }}</td>
                      </tr>
                      <tr>

                        <td>Payment</td>
                        <td>
                        @foreach (json_decode($trade->tags) as $tag)
                        <span class="badge badge-warning">{{ $tag }} </span>
                        @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>


        <!-- Text -->
        <p class="text-gray-700 mb-5  text-center">

        <a href="{{ url('marketplace/offer/') }}{{ $trade->slug }}" class="btn btn-danger-soft btn-sm" style="
                background-color: rgb({{ $data[$trade->identifier.'_color'] }});
                color: #fff;"> {{ strtoupper($trade->type) }} {{ strtoupper('Now') }}!</a>
        </p>

      </div>
    </div>

  </div>

@endforeach







  <!-- End of slide card -->
</div>



      </div> <!-- / .container -->

    </section>



   <section class="pt-8 pt-md-11">
      <div class="container">

        <div class="display-4">You want to sell Bitcoin?</div>
       <hr>
<!-- Flickity -->
<div class="flickity-viewport-visible pt-2 pb-9" data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "contain": true}'>

@foreach ($selltrade as $selltrades)

<div class="col-12 col-md-5 col-lg-4">

    <!-- Card -->
    <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: rgb({{ $data[$selltrades->identifier.'_color'] }});">
      <div class="card-body">
      <div class="img-fluid mb-5 w-100 svg-shim" style="color: #FF5A5F;">
  <div class="row">
  <div class="col-md-2">
        <!-- Icon -->

        <img src="{{ asset('vendor/crypterionhomepage/maythemes/widgets/assets/images/coins/thumb64') }}/{{ $data[$selltrades->identifier] }}.png" alt="{{ $data[$selltrades->identifier]}}" width="40" class="img-responsive mr-1">
       </div>
       <div class="col-md-10">{{ $selltrades->name }}'s Offer<br>
       <div style="margin-top: -10px;">
      <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="#fadb14"></path>
    </g>
</svg>
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="#fadb14"></path>
    </g>
</svg>
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="#fadb14"></path>
    </g>
</svg>
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="rgba(51,94,234,.1)"></path>
    </g>
</svg>

<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
    <g id="Stockholm-icons-/-General-/-Star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="rgba(51,94,234,.1)"></path>
    </g>
</svg>
</div></div></div>


</div>


                  <table class="table table-striped" style="margin-left: -15;margin-left: -20px;">
                    <thead>
                      <tr>
                        <th scope="col">Coin</th>
                        <th scope="col">{{ strtoupper($selltrades->identifier) }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td>Currency</td>
                        <td>{{ strtoupper($selltrades->currency) }}</td>
                      </tr>
                      <tr>

                        <td>Range</td>
                        <td>{{ $data[$selltrades->currency]['symbol'] }}{{ $selltrades->min_amount }} - {{ $data[$selltrades->currency]['symbol'] }}{{ $selltrades->max_amount }}</td>
                      </tr>
                      <tr>

                        <td>Payment</td>
                        <td>
                        @foreach (json_decode($selltrades->tags) as $tag)
                        <span class="badge badge-warning">{{ $tag }} </span>
                        @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>


        <!-- Text -->
        <p class="text-gray-700 mb-5  text-center">

        <a href="{{ url('marketplace/offer/') }}{{ $trade->slug }}" class="btn btn-danger-soft btn-sm" style="
                background-color: rgb({{ $data[$trade->identifier.'_color'] }});
                color: #fff;"> {{ strtoupper($selltrades->type) }} {{ strtoupper('Now') }}!</a>
        </p>

      </div>
    </div>

  </div>

@endforeach









  <!-- End of slide card -->
</div>


      </div> <!-- / .container -->
    </section>

    <!-- STATS
    ================================================== -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <!-- Card -->
            <div class="card-group card-border card-border-lg border-primary shadow-light-lg">
              <div class="card">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="200" data-aos data-aos-id="countup:in"></span>K+
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    Active users
                  </p>

                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                  <span data-toggle="countup" data-from="0" data-to="150" data-aos data-aos-id="countup:in"></span>K+
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                  Customers served
                  </p>

                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0.00" data-to="99.99" data-decimals="2" data-aos data-aos-id="countup:in"></span>%
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    Global uptime
                  </p>

                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="1" data-aos data-aos-id="countup:in"></span>M+
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    Trade Completed
                  </p>

                </div>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- INTEGRATION
    ================================================== -->
    <section class="py-8 py-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">



            <!-- Heading -->
            <h1 class="font-weight-bold">
            Secured Bitcoin, Bitcoin Cash, DASH, Litecoin Online wallets
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
            Buy and sell bitcoin using over 300 payment options. Trade directly with other people just like you!
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row no-gutters mb-7 mb-md-9">
          <div class="col-12 col-md-4 text-center">

            <div class="row mb-5">
              <div class="col">

                <!-- Placeholder -->

              </div>
              <div class="col-auto">

                <!-- Icon -->
                <div class=" text-primary mb-3">
                <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icon-shield-big.svg') }}" alt="..." style="width: 60px;">
                </div>

              </div>
              <div class="col">

                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
            Trade with secure escrow
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
            When you engage in a trade, bitcoin is held in our enterprise escrow system until the trade has successfully completed.
            </p>

          </div>
          <div class="col-12 col-md-4 text-center">

            <div class="row mb-5">
              <div class="col">

                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
              <div class="col-auto">

                <!-- Icon -->
                <div class="text-primary mb-3">
                <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icon-wallet-big.svg') }}" alt="..." style="width: 60px;">
                </div>

              </div>
              <div class="col">

                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
            Get a free wallet
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
            Our wallet is maintained by BitGo, the leading provider of secure bitcoin wallets. It's secure and directly integrated onto our platform.
            </p>

          </div>

          <div class="col-12 col-md-4 text-center">

            <div class="row mb-5">
              <div class="col">

                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
              <div class="col-auto">

                <!-- Icon -->
                <div class=" text-primary mb-3">
                <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icon-rocket-big.svg') }}" alt="..." style="width: 60px;">
                </div>

              </div>
              <div class="col">

                <!-- Placeholder -->

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
            Build your reputation
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
            We've built a feedback and reputation system that enables you to conduct business with trusted and experienced peers.
            </p>

          </div>

          <div class="col-12 col-md-4 text-center mt-5">

            <div class="row mb-5">
              <div class="col">

                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
              <div class="col-auto">

                <!-- Icon -->
                <div class=" text-primary mb-3">
                <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icon-income-big.svg') }}" alt="..." style="width: 60px;">
                </div>

              </div>
              <div class="col">

                <!-- Placeholder -->

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
            Buy bitcoin online
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
            Buy bitcoin on {{ $data['name'] }} from other people in real time. Trading occurs online via live chat.
            </p>

          </div>


          <div class="col-12 col-md-4 text-center mt-5">

            <div class="row mb-5">
              <div class="col">

                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
              <div class="col-auto">

                <!-- Icon -->
                <div class=" text-primary mb-3">
                <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icon-rocket-big.svg') }}" alt="..." style="width: 60px;">
                </div>

              </div>
              <div class="col">

                <!-- Placeholder -->

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
            Sell bitcoin
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
            Vendors on {{ $data['name'] }}  can sell bitcoin for numerous payment methods and have the freedom to set their own rates.
            </p>

          </div>


          <div class="col-12 col-md-4 text-center mt-5">

            <div class="row mb-5">
              <div class="col">

                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
              <div class="col-auto">

                <!-- Icon -->
                <div class=" text-primary mb-3">
                <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/icon-bitcoin-plus-big.svg') }}" alt="..." style="width: 60px;">
                </div>

              </div>
              <div class="col">

                <!-- Placeholder -->

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
            Earn extra income
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
            Our Affiliate Program can help you earn bitcoin by sharing your affiliate link. When referrals complete trades, we share part of our fees with you.
            </p>

          </div>


        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Text -->
            <p class="font-size-sm text-center text-gray-500 mb-0">
              * Trading whenever and wherever you are!
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
        </svg>
      </div>
    </div>

    <!-- SOLUTION
    ================================================== -->
    <section class="py-8 pt-md-11 pb-md-12 bg-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Preheading -->
            <h6 class="text-uppercase text-success font-weight-bold">
              All in one solution
            </h6>

            <!-- Heading -->
            <h1 class="font-weight-bold text-white">
            Store, Sell and Spend your bitcoin
            </h1>



          </div>
        </div> <!-- / .row -->
        <div class="row mt-5">
          <div class="col-12 col-md-6 col-lg-3 mb-4">


            <!-- List -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
              Bank transfers
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
              Online wallets
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
              Gift cards
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                Cash
              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">



            <!-- List -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
              Debit/credit cards
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
              Digital currencies
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
              Discount Gift Cards
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
              Send Money
              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">



            <!-- List -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
               Developer API
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
              Goods & Services
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
                Western Union
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                MTN Mobile Money
              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">


            <!-- List -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
               Cash By Mail
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
                PayPal
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300">
                Gift Cards
              </p>

            </div>
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="text-gray-300 mb-0">
                Others
              </p>

            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CTA
    ================================================== -->
    <section class="pt-6 pt-md-8">
      <div class="container pb-6 pb-md-8 border-bottom">
        <div class="row align-items-center">
          <div class="col-12 col-md">

            <!-- Heading -->
            <h3 class="font-weight-bold mb-1">
            Become a Vendor

            </h3>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-0">
            Thanks to Bitcoin normal people can start their own fintech business and prosper helping other newbie folks use their money.
            </p>

          </div>
          <div class="col-12 col-md-auto">

            <!-- Button -->
            <a href="{{ url('/home') }}" class="btn btn-primary-soft mr-1 lift">
             Create Account
            </a>

            <a href="{{ url('marketplace/sell_coin') }}" class="btn btn-primary lift">
              Create Your Ad
            </a>

          </div>
        </div> <!-- / .row      -->
      </div> <!-- / .container -->
    </section>
@endsection
