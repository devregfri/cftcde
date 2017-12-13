<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        @guest
                            &nbsp;
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  Kategori
                                  <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li style="margin-bottom: -0.5%">
                                        <div class="navbar-login" style="width: 600px">
                                            <div class="row" style="width: 100%">
                                                <div class="col-xs-3">
                                                    <p class="text-center">
                                                      <img style="margin-left: auto;margin-right: auto;" width="50px" class="img-responsive" alt="Responsive Photo Galeri" src="{{ URL::to('/private/public/image/logo/voli/ball-voli.png') }}"/>
                                                      <p style="text-align: center" class="small">Voli</p>
                                                    </p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p class="text-center">
                                                      <img style="margin-left: auto;margin-right: auto;" width="50px" class="img-responsive" alt="Responsive Photo Galeri" src="{{ URL::to('/private/public/image/logo/bola/ball-sepakbola.png') }}"/>
                                                      <p style="text-align: center" class="small">Bola</p>
                                                    </p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p class="text-center">
                                                      <img style="margin-left: auto;margin-right: auto;" width="50px" class="img-responsive" alt="Responsive Photo Galeri" src="{{ URL::to('/private/public/image/logo/Badminton/ball-badminton.png') }}"/>
                                                      <p style="text-align: center" class="small">Badminton</p>
                                                    </p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <p class="text-center">
                                                      <img style="margin-left: auto;margin-right: auto;" width="50px" class="img-responsive" alt="Responsive Photo Galeri" src="{{ URL::to('/private/public/image/logo/basket/ball-basket.png') }}"/>
                                                      <p style="text-align: center" class="small">Basket</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>

                    <div style="margin-top: 1%" class="col-sm-3 col-md-3">
                      <div style="width:280%" class="input-group" id="adv-search">
                        <input type="text" class="form-control" placeholder="Search for snippets" />
                        <div class="input-group-btn">
                          <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <span class="glyphicon glyphicon-bell"></span> 
                                  Notifikasi
                              </a>
                              <ul class="dropdown-menu">
                                  <li style="margin-bottom: -1%" class="small">
                                      <a style="color: #909090;" href="">Pesan</a>
                                  </li>
                              </ul>
                            </li>

                            <!--PROFIL-->
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <span style="font-size: 20px" class="glyphicon glyphicon-user"></span>
                              </a>
                              <ul class="dropdown-menu">
                                  <li  style="margin-bottom: -1%" class="small">
                                      <a style="color: #909090;" href=""><span>Profil</span><br><b>{{ Auth::user()->name }}</b></a>
                                  </li>
                                  <li class="divider"></li>
                                  <li style="margin-bottom: -1%" class="small">
                                      <a style="color: #909090;" href="">Pengaturan</a>
                                  </li>
                                  <li class="divider"></li>
                                  <li style="margin-bottom: -1%" class="small">
                                        <a style="color: #909090;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Keluar
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                  </li>
                              </ul>
                            </li>

                            <!--COMPANY PROFIL-->
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <span style="font-size: 20px" class="glyphicon glyphicon-th"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li style="margin-bottom: -1%" class="small">
                                      <a style="color: #909090;" href="">REGARSPORT</a>
                                </li>
                              </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <!--CONTENT MENU-->
        <div style="margin-bottom: 2%;margin-top: 2%" class="container">
            @guest
                @yield('content')
            @else
                <div class="row affix-row">
                <div class="col-sm-3 col-md-2 affix-sidebar">
                    <div class="sidebar-nav">
                      <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="glyphicon glyphicon-chevron-down"></span>
                          </button>
                          <span class="visible-xs navbar-brand">Menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                          <ul class="nav navbar-nav" id="sidenav01">
                            <li style="margin-bottom: -3%" class="small"><a href="{{ URL::to('/') }}" style="color: #909090;" href="">Home</a></li>
                            
                            @if (Auth::user()->role_id == 21 || Auth::user()->role_id == 22)
                              <li style="margin-bottom: -3%" class="small"><a style="font-size: 7pt;color: #1df914"><b>STATISTIK AGEN</b></a></li>
                              <li style="margin-bottom: -3%" class="small">
                                  <a style="color: #909090;font-size: 8pt" href="{{ route('statistikAgen.create') }}">Input statistik</a>
                              </li>
                              <li style="margin-bottom: -3%" class="small">
                                  <a style="color: #909090;font-size: 8pt" href="{{ route('statistikAgen.index') }}">View statistik</a>
                              </li>
                            @endif
                            @if (Auth::user()->role_id == 6)
                              <li style="margin-bottom: -3%" class="small"><a style="font-size: 7pt"><b>STATISTIK DESAINER</b></a></li>
                              <li style="margin-bottom: -3%" class="small">
                                  <a style="color: #909090;font-size: 8pt" href="{{ route('statistikDesainer.create') }}">Input custom desain</a>
                              </li>
                            @endif

                          </ul>
                          </div><!--/.nav-collapse -->
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-9 col-md-10 affix-content table-bordered">
                      @yield('content')
                    </div>
                </div>
            @endif
        </div>

        @if (Auth::user())
        <nav class="navbar navbar-default well">
            <nav class="container text-left">
                <div class="row" style="margin-top: 2%;margin-bottom: 2%">
                  <div class="col-lg-3">
                    <label><strong>RegarSport</strong></label>
                    <p><a style="color: #909090;font-size: 9pt" href="">Tentang Kami</a></p>
                  </div>
                  <div class="col-lg-3">
                    <label><strong>Daftar</strong></label>
                    <p><a style="color: #909090;font-size: 9pt" href="">Cara Pendaftaran</a></p>
                    <p><a style="color: #909090;font-size: 9pt" href="">Pendaftaran Agen</a></p>
                  </div>
                  <div class="col-lg-3">
                    <label><strong>Beli</strong></label>
                    <p><a style="color: #909090;font-size: 9pt" href="">Pembelian</a></p>
                    <p><a style="color: #909090;font-size: 9pt" href="">Cover Complain</a></p>
                    <p><a style="color: #909090;font-size: 9pt" href="">Garansi 100%</a></p>
                  </div>
                  <div class="col-lg-3">
                    <div class="table table-bordered text-center">
                        <label style="color: #909090;margin-top: 5%"><strong>Kunjungi Kami</strong></label><br><br>
                        <div class="row">
                            <a target="_blank" href="https://www.facebook.com/RegarSport">
                                <i style="font-size: 20pt;color: blue" class="fa fa-facebook-square img"></i>
                            </a>
                            <a style="margin-left: 7%" target="_blank" href="https://twitter.com/tokopedia">
                                <i style="font-size: 20pt;color: skyblue" class="fa fa-twitter-square img"></i>
                            </a>&nbsp&nbsp
                            <a style="margin-left: 7%" target="_blank" href="https://plus.google.com/+tokopedia/posts">
                                <i style="font-size: 15pt;color: red" class="fa fa-google-plus img"></i>
                            </a>&nbsp&nbsp
                            <a style="margin-left: 7%" target="_blank" href="https://www.pinterest.com/tokopedia/">
                                <i style="font-size: 15pt;color: brown" class="fa fa-instagram img"></i>
                            </a><hr>
                        </div>

                    </div>
                  </div>
                </div>
            </nav>
        </nav>
        @endif
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Bootstrap JavaScript -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>

    <!-- toastr notifications -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- icheck checkboxes -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
</body>
</html>
