<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Proteus - Page - Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ===== FAVICON =====-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- ===== CSS =====-->
    <!-- General-->
    <link rel="stylesheet" href="{{ asset('css/admin/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/theme.css') }}" class="style-theme">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/admin/respond.min.js') }}"></script>
    <script src="{{ asset('js/admin/html5shiv.min.js') }}"></script>
    <![endif]-->
  </head>
  <body class="login-bg">

    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--SECTION-->
    <section class="l-main-container">
      <!--Main Content-->

      {{--@if (count($errors) > 0)--}}
        {{--<div class="alert alert-danger">--}}
          {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
          {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
              {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
      <div class="login-wrapper">
        <div class="login-container">
          <!--Logo-->
          <h1 class="login-logo"><img src="{{ asset('img/admin/logo.png') }}" alt="Proteus"></h1>


          <!--Login Form-->
          <form id="loginForm" role="form" action="{{ url('/auth/login') }}" class="login-form">

            {!! csrf_field() !!}

            <div class="form-group">
              <input id="email" type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
              <input id="password" type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-dark btn-block btn-login">Login</button>
            <div class="login-social">
              <div class="l-span-md-12">
                <div class="or"><span>- Ou -</span></div>
              </div>
              <div class="l-col-sm-6"><a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i>Acessar com Facebook</a></div>
              <div class="l-col-sm-6"><a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter"></i>Acessar com Twitter</a></div>
            </div>
            <div class="login-options"><a href="{{ url('/password/email') }}" class="fl">Esqueceu sua senha?</a><a href="{{ url('/auth/register') }}" class="fr">Registrar-se</a></div>
          </form>
        </div>
      </div>
    </section>
    <!-- ===== JS =====-->
    <!-- jQuery-->
    <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
    <script src="{{ asset('js/admin/jquery-migrate.min.js') }}"></script>
    <!-- General-->
    <script src="{{ asset('js/admin/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/admin/shared/jquery.asonWidget.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/admin/general.js') }}"></script>
    <!-- Semi general-->
    <script type="text/javascript">
      var paceSemiGeneral = { restartOnPushState: false };
      if (typeof paceSpecific != 'undefined'){
      	var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
      	paceOptions = paceOptions;
      }else{
      	paceOptions = paceSemiGeneral;
      }

    </script>
    <script src="{{ asset('js/admin/plugins/pageprogressbar/pace.min.js') }}"></script>
    <!-- Specific-->
    <script src="{{ asset('js/admin/plugins/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/forms/validation/jquery.validate.additional.min.js') }}"></script>
    <script src="{{ asset('js/admin/calls/page.login.js') }}"></script>
