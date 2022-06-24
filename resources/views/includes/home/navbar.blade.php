<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">SIP<em>PRA</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">Program</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Berita</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Jadwal</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Pembina</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Kontak</a></li> 
                                @guest
                                <form>
                                @csrf
                            <li class="scroll-to-section"><a href="{{ url ('login') }}">Login</a></li>
                            @auth
                    <form action="{{url('logout')}}" method="post">
                    @csrf
                    <div class="hidden lg:inline-flex">
                    <button class="btn-try inline-flex text-white text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow font-semibold" type="submit">
                    Login sekarang
                    </button>
                    </div>
                    </form>
                    @endauth
                        </ul>    

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>

                   @endguest

                </div>
            </div>
        </div>
    </header>