<!doctype html>
<html lang="">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manifiestos.co</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    @section('css')
    @show

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="main-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--//nav-toggle-->
        </div>
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" height="45" alt="">
        </a>
        <!--//navbar-header-->
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active nav-item"><a href="/">Inicio</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="nav-item  dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="true">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop3">
                            <li><a href="/salir">Salir</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/entrar">Entrar</a>
                    </li>
                @endif

            </ul>
            <!--//nav-->
        </div>
        <!--//navabr-collapse-->
    </div>
    <!--//container-->
</nav>

<!-- Page Content -->
<div id="main-container" class="container">
    @if(Auth::check())
        <hr>
        <div class="row">
            <div class="col-xs-12">
                {!! Form::open(['url' => '/manifests','method'=>'GET']) !!}
                <div class="input-group">
                    <input type="text" class="form-control input-lg" value="{{ Request::get('s') }}" placeholder="Buscar" name="s">

                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-lg" type="submit"><i
                                    class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <hr>
    @endif
    @yield('content')

</div>
<!-- /.container -->

<footer class="footer">

    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2015 <a href="#">http://www.manifiestos.co/</a>
                </small>
                <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <!--
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li> -->
                </ul>
                <!--//social-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
    </div>
    <!--//bottom-bar-->
</footer>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/libs/bootstrap-notify/bootstrap-notify.min.js"></script>

@section('js')
@show

@include('partials.notify')

</body>

</html>
