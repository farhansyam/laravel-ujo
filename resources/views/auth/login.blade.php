{{-- @php
if (Auth::user()) {
      return view()
  }
@endphp --}}

<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page</title>

  <!-- Favicons-->
  <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
  <style media="screen">
                            .row .col.s7 {
                            width: 58.33333%;
                            margin-left: 200PX;}


                            body{
                              background-image: url({{asset('img/1.png')}});
                              background-repeat: no-repeat, repeat;
                              background-size:100%;
                              size:90%;
                            }

                            .card-panel{
                              opacity: 0.9;
                            }

  </style>
</head>

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

<br><br>
@if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

<div class="container">
  <div id="login-page" class="row">
      <div class="col s7 z-depth-4 card-panel">
        <form class="login-form" action="{{route('login')}}" method="post">
                  {{csrf_field()}}
          <div class="row">
            <div class="input-field col s12 center">
              <img src="{{asset('img/2.jpg')}}" alt="" class="circle responsive-img" width="200">
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-communication-voicemail prefix"></i>
              <input placeholder="E-Mail" class="email" name="email" type="text">
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" placeholder="Password" name="password" type="password">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="btn waves-effect waves-light col s12">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>

</html>
