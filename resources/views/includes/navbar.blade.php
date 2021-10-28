<nav class="navbar navbar-default navbar-static-top" style="width:1350px;">
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
                        <!-- {{ config('app.name', 'PUTR') }} -->
                    <div class="logo-image">
                            <img src="{{asset('images/logoPU.png')}}" style="width: 35px; height: 35px; overflow: hidden; margin-top: -6px;" class="img-fluid">
                    </div>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li> <a href="{{url('/')}}">Beranda</a> </li>
                        <li> <a href="{{route('posts.index')}}">Artikel</a> </li>
                        <li> <a href="{{route('about')}}">Tentang Kami</a> </li>
                        <!-- <li> <a href="{{route('contact')}}">Kontak</a> </li> -->
                    </ul>

                    <form action="{{route('search')}}" class="navbar-form navbar-left" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari...">
                        </div>
                        <button type="submit"><i>Cari</i></button>
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                            <!-- <li><a href="{{ route('register') }}">Daftar</a></li> -->
                        @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                Menu <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('posts.create')}}">Buat dan Edit Artikel</a></li>
                            </ul>
                        </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
