@extends('crypterionhomepage::layouts.app')

@section('content')

<!-- WELCOME
    ================================================== -->
    <section class="position-relative py-8 py-md-11 mb-9">

      <!-- Shape -->
      <div class="shape shape-fluid-x shape-blur-1 svg-shim text-gray-200">
        <svg viewBox="0 0 723 569" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M703.969 241.602L703.963 241.599C716.081 262.97 723 287.677 723 314C723 382.917 675.575 440.757 611.58 456.665L246.7 556.937C226.465 564.729 204.481 569 181.5 569C81.2603 569 0 487.74 0 387.5C0 353.244 9.49023 321.204 25.985 293.867L25.9688 293.875L141.512 77.5476C162.753 33.3052 207.123 2.2726 258.951 0.119583L258.959 0H264.719H390.999H508.5H509.999L510.002 0.00999319C551.85 0.567328 588.083 24.388 606.358 59.1292L606.359 59.125L703.969 241.602Z" fill="currentColor"/>
        </svg>

      </div>

      <!-- Contetn -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 order-md-2">

            <!-- Image -->
            <div class="img-skewed img-skewed-left mb-8 mb-md-0">
              <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/screenshots/desktop/dashkit.jpg') }}" alt="..." class="screenshot img-fluid mw-md-130" data-aos="img-skewed-item-left" data-aos-delay="100">
            </div>

          </div>
          <div class="col-12 col-md-6 order-md-1" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="display-3">
              Create a bitcoin  <br>
              <span class="text-primary">trade advertisement</span>.
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-6 mb-md-8">
              What kind of trade advertisement do you wish to create? If you wish to sell bitcoins make sure you have bitcoins in your {{ $data['name'] }} wallet.
            </p>

            <!-- Buttons -->
            <a href="{{ url('/marketplace/buy_coin') }}" class="btn btn-primary mr-1 lift">
              Sell your bitcoins online <i class="fe fe-arrow-right ml-3"></i>
            </a>
            <a href="{{ url('/marketplace/sell_coin') }}" class="btn btn-primary-soft lift">
              Buy bitcoins online
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>



    <!-- HUB
    ================================================== -->
    <section class="pt-8 pt-md-12 pb-10 pb-md-14 pb-lg-15">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-md-3">

            <!-- Image -->
            <div class="img-skewed img-skewed-right mb-10 mb-md-0">
              <img src="{{ asset('vendor/crypterionhomepage/maythemes/img/j094qdH5uBy.png') }}" alt="..." class="img-fluid" data-aos="img-skewed-item-right">
            </div>

          </div>
          <div class="col-12 col-md-9 col-lg-9">

            <!-- Heading -->
            <h2>
              Advertisement rules<br>
              <span class="text-primary">and requirements</span>
            </h2>

            <ul class="list-unstyled mb-7">
  <li class="d-flex">

  <!-- Check -->
  <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
  <i class="fe fe-check"></i>
  </div>

  <p>For your ads to display you need to have Bitcoins in your {{ $data['name'] }} wallet. You need 0.04 BTC or more for advertisements with online payment methods.</p>

  </li>

  <li class="d-flex">

  <!-- Check -->
  <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
  <i class="fe fe-check"></i>
  </div>

  <!-- Text -->
  <p>Certain payment methods require you to be ID verified before your ads are visible.</p>
  </li>

    <li class="d-flex">

                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                      <i class="fe fe-check"></i>
                    </div>

                    <!-- Text -->
                    <p>Each completed trade costs advertisers 1% of the total trade amount. </p>
    </li>

    <li class="d-flex">

                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                      <i class="fe fe-check"></i>
                    </div>

                    <!-- Text -->
                    <p>
                    Once a trade is opened the price is final, except when there is a clear mistake in the pricing.</p>
     </li>

    <li class="d-flex">

                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                      <i class="fe fe-check"></i>
                    </div>

                    <!-- Text -->
                    <p>
                    You are not allowed to buy or sell Bitcoin on behalf of someone else (brokering).</p>
   </li>

    <li class="d-flex">

                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                      <i class="fe fe-check"></i>
                    </div>

                    <!-- Text -->
                    <p>You may only use payment accounts that are registered in your own name (no third party payments!).</p></li>


    <li class="d-flex">

                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                      <i class="fe fe-check"></i>
                    </div>

                    <!-- Text -->
                    <p>You must provide your payment details in the advertisement or in the trade chat.</p></li>

     <li class="d-flex">

                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                      <i class="fe fe-check"></i>
                    </div>

                    <!-- Text -->
                    <p>All communication must happen on {{ $data['name'] }}.com.</p></li>

     <li class="d-flex">

                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                      <i class="fe fe-check"></i>
                    </div>

                    <!-- Text -->
                    <p>Payment methods marked <strong>High Risk</strong> have a <strong>significant risk of fraud</strong>. Be careful and always ID verify your trading partners when using high risk payment methods.</p></li>

    </ul>


          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
        <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor"/>
        </svg>
      </div>
    </div>



    <!-- CURVE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M720 0C1440 240 2160 240 2160 240H2880V480H-0.000244141V0H720Z" fill="currentColor"/>
        </svg>
      </div>
    </div>






    <!-- CTA
    ================================================== -->
    <section class="py-10 py-md-14 bg-dark" style="background-image: url(vendor/crypterionhomepage/maythemes/img/patterns/pattern-1.svg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Badge -->
            <span class="badge badge-pill badge-gray-700-soft mb-3">
              <span class="h6 text-uppercase">Get it done</span>
            </span>

            <!-- Heading -->
            <h1 class="display-4 text-white">
              A New World Of Opportunity.
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-8">
                This is the greatest innovation of our time and you are being introduced to it, earn more profits daily and you still have complete control of your money.
            </p>

            <!-- Button -->
            <a href="{{ url('/home')}}" class="btn btn-primary-desat lift">
              Sign Up Now<i class="fe fe-arrow-right ml-2"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

@endsection
