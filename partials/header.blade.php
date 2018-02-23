<header>
    <!--  nav  -->
    <nav id="mainNav" class="navbar navbar-inverse navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#">
                    {{HTML::image(logo_image_url(),'Logo '.Theme::place('title'),array('style' => 'max-width:25px'))}}
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
                <ul class="nav navbar-nav">
                    @foreach(main_menu()->link as $key=>$link)
                    <li><a href="{{menu_url($link)}}"><span>{{$link->nama}}</span></a></li>
                    @endforeach
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if ( ! is_login() )
                        <li>
                            <a href="{{url('member')}}"><i class="icon-user icons text-black" aria-hidden="true"></i> Login</a>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="{{url('member')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="icon-user icons text-black" aria-hidden="true"></i> {{user()->nama}}
                            </a>
                            <ul class="dropdown-menu dropdownhover-bottom" role="menu">
                                <li>
                                    <a href="{{url('member')}}">History Order</a>
                                </li>
                                <li>
                                    {{HTML::link('logout', 'Logout')}}
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li>
                        <a href="#" data-toggle="modal" data-target=".popup1"><img src="{{url(dirTemaToko().'kalibre/assets/images/top-icon1.png')}}" alt="top-icon1"> <span>Search</span></a>
                    </li>
                    <li class="dropdown" id="shoppingcartplace">
                        {{shopping_cart()}}
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target=".menu-popup"><img src="{{url(dirTemaToko().'kalibre/assets/images/top-icon2.png')}}" alt="top-icon2"></a>
                    </li>
                </ul>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </nav>
    <!--  /nav  -->
    <!-- search-popup -->
    <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <div class="text-center">
                    <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                </div>
                <div class="search-outer">
                    <form action="{{url('search')}}" method="post">
                        <div class="col-md-11"><input type="text" placeholder="Search for products..." name="search" required /></div>
                        <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /search-popup -->
    <!--  .menu  -->
    <div class="modal fade bs-example-modal-lg search-bg menu-popup" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <nav class="navbar navbar-inverse openmenu">
                    <ul class="nav navbar-nav">
                        @foreach(main_menu()->link as $key=>$link)
                        <li><a href="{{menu_url($link)}}"><span>{{$link->nama}}</span></a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--  /.menu  -->
</header>