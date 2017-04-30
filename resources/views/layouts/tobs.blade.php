<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gContratos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://use.fontawesome.com/b09c9f3252.js"></script>
</head>
<body>


@yield('content')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/cep.js') }}"></script>
<script src="{{ asset('js/buscaCarne.js') }}"></script>
<script src="http://irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>
<script src="{{ asset('js/maskmonye.js') }}"></script>
<script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
	<!-- END PAGE LEVEL SCRIPTS -->


@yield('post-script')
</body>
</html>
