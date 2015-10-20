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
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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

            <a id="logo" class="navbar-brand" href="/">
                Manifiestos.co
            </a>

            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!--//navbar-header-->
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                @if(Auth::check())
                    <li class="{{ Route::currentRouteName()=="manifests.index" ? "active" : "" }} nav-item"><a href="/"><span
                                    class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> Manifiestos</a>
                    </li>
                    <li class="{{ Route::currentRouteName()=="suppliers.index" ? "active" : "" }} nav-item"><a
                                href="/suppliers"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                            Provedores</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li id="menu-name" class="nav-item  dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="true">
                            {{ Auth::user()->company->name }}
                            <br>
                            <small>  {{ Auth::user()->name }} </small>
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

<div id="cover-display">
    <img id="img-loading" src="/images/loading.gif">
</div>


<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/libs/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script src="/js/main.js"></script>

@section('js')
@show

@include('partials.notify')

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-68913606-1', 'auto');
    ga('send', 'pageview');


    <!--Start of Zopim Live Chat Script-->

    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set.
                    _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "//v2.zopim.com/?1bQj93EplCgGfGp7KyfkACpk2TFXEiXC";
        z.t = +new Date;
        $.
                type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
    <!--End of Zopim Live Chat Script-->
</script>

</body>

</html>
