<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <!-- CSS FILES -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-rtl.css') }}
    {{ HTML::style('css/fhmm.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ HTML::script('js/html5shiv.min.js')}}
    {{ HTML::script('js/respond.min.js') }}
    <![endif]-->
    <title>
        @section('title')
       {{ Config::get('app.sitename') }}
        @show
    </title>
</head>
<body class="home">
<!-- Top Navbar -->
<nav role="navigation" class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-3" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#"  class="navbar-brand">Brand</a>
        </div>
        <div id="bs-example-navbar-collapse-3" class="collapse navbar-collapse">

          @if(Auth::check())

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown " id="fat-menu">
                <a aria-expanded="true" role="button" aria-haspopup="true" data-toggle="dropdown" class="dropdown-toggle" href="#" id="drop3">
                  {{ Auth::user()->name .' '.Auth::user()->family.' '.Lang::get('general.welcome') }}
                  <span class="caret"></span>
                </a>
                <ul aria-labelledby="drop3" id="user-menu" role="menu" class="dropdown-menu">
                  <li role="presentation"><a href="{{route('user.changepassword', array('user')) }}" role="menuitem"> {{ Lang::get('general.update') }} {{ Lang::get('general.password') }}</a></li>
                  <li role="presentation"><a href="{{route('user.update', array('user')) }}" role="menuitem"> {{ Lang::get('general.update') }} {{ Lang::get('general.profile') }}</a></li>
                  <li class="divider" role="presentation"></li>
                  <li role="presentation"><a href="{{ route('user.logout') }}" role="menuitem">{{ Lang::get('general.logout') }}</a></li>
                </ul>
              </li>
            </ul>           

          @elseif (!Auth::check())
          <a role="button" class="btn btn-default navbar-btn" href="{{ route('user.login') }}"> <span aria-hidden="true" class="glyphicon glyphicon-lock"></span> {{ Lang::get('messages.loginText') }} </a>
          <a role="button" class="btn btn-default navbar-btn" href="{{ route('user.register') }}"><span aria-hidden="true" class="glyphicon glyphicon-user"></span> {{ Lang::get('general.register') }} </a>
          @endif

        </div>
      </div>
</nav>
<!-- End top Navbar -->

<!-- Menu -->
<div class="container">
  <nav role="navigation" class="navbar navbar-default fhmm">
    <div class="navbar-header">
    <button class="navbar-toggle" data-target="#defaultmenu" data-toggle="collapse" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
    </div><!-- end navbar-header -->
        <div class="navbar-collapse collapse" id="defaultmenu">
            <ul class="nav navbar-nav">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Flyout <b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
              <li><a href="#">ThemeForest</a></li>
              <li><a href="#">GraphicRiver</a></li>
              <li><a href="#">PhotoDune</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">Envato Sites</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu"><a href="#">Tuts+</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">PSD Tuts</a></li>
                      <li><a href="#">CODE Tuts</a></li>
                    </ul>
                  </li><!-- end dropdown-submenu -->
                  <li><a href="#">We are Envato</a></li>
                  <li><a href="#">Support Center</a></li>
                </ul><!-- end dropdown-menu -->
                            </li><!-- end dropdown-submenu -->
              <li><a href="#">Creattica</a></li>
              <li><a href="#">Microlancer</a></li>
              <li><a href="#">ActiveDen</a></li>
                        </ul><!-- end dropdown-menu -->
          </li>







              
                <!-- grid view -->
                <li class="dropdown fhmm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Grid <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <!-- grid view -->
                      <li class="dropdown-submenu fhmm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Grid <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li class="grid-demo">
                            <div class="row">
                              <div class="col-sm-2">.col-sm-2</div>
                              <div class="col-sm-2">.col-sm-2</div>
                              <div class="col-sm-2">.col-sm-2</div>
                              <div class="col-sm-2">.col-sm-2</div>
                              <div class="col-sm-2">.col-sm-2</div>
                              <div class="col-sm-2">.col-sm-2</div>
                            </div>  
                          </li><!-- grid demo -->
                        </ul><!-- end dropdown-menu -->
                      </li><!-- end dropdown fhmm-fw -->
                  </ul><!-- end nav navbar-nav -->
                </li><!-- end dropdown fhmm-fw -->
            </ul><!-- end nav navbar-nav -->
        </div><!-- end #navbar-collapse-1 -->
      </nav>
</div>      
<!-- End Menu -->

    <div class="container">
        {{ Helper::doMessage(); }}
        @yield('content') 

    </div>
    

    {{ HTML::script('js/jquery-1.10.2.min.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/bootstrap-tooltip.js') }}
    {{ HTML::script('js/fitdivs.js') }}
    {{ HTML::script('js/app.js') }}


</body>
</html>

