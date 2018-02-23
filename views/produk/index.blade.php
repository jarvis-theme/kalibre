<div class="inner-header inner-header2">
    <h2>Product</h2>
    <div class="bdr">
        <ul>
            {{breadcrumbProduk(null,'; <li>/</li>',';', true, @$category, @$colection)}}
        </ul>
    </div>
</div>
<section class="grid-shop blog">
    <!-- .grid-shop -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                @if(count(list_category()) > 0)
                <div class="weight">
                    <div class="title">
                        <h2>Product Categories</h2>
                    </div>
                    <div class="panel-group" id="accordion">
                    @foreach(list_category() as $key=>$menu)
                        @if($menu->parent=='0')
                            @if(count($menu->anak) == 0)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="{{category_url($menu)}}" class="nobackground">{{$menu->nama}}</a>
                                    </h4>
                                </div>
                            </div>
                            @elseif(count($menu->anak) >= 1)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            {{$menu->nama}}
                                        </a>
                                        <a href="{{category_url($menu)}}"><i class="indicator fa fa-angle-right pull-right"></i></a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="product-categories">
                                            <ul>
                                            @foreach(list_category() as $key=>$submenu)
                                                @if($menu->id==$submenu->parent)
                                                <li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a></li>
                                                @endif
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endif
                    @endforeach
                    </div>
                </div>
                @endif
                @if(count(best_seller()) > 0)
                <div class="weight">
                    <div class="title">
                        <h2>BEST PRODUCTS</h2>
                    </div>
                    <div class="toprating-box">
                        <ul>
                            @foreach(best_seller() as $best)
                            <li>
                                <div class="col-sm-3 col-md-3">
                                    <img src="{{product_image_url($best->gambar1,'medium')}}" alt="{{$best->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'">
                                </div>
                                <div class="col-sm-9 col-md-9">
                                    <div class="pro-text">
                                        <a href="{{product_url($best)}}">{{$best->nama}}</a>
                                        <strong>{{price($best->hargaJual)}}</strong>
                                        @if(!empty($best->hargaCoret) && $best->hargaCoret > $hargaJual)
                                        <span>{{price($best->hargaCoret)}}</span>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-sm-9 col-md-9">
                <div class="grid-spr">
                    <div class="col-sm-5 col-md-5"><!-- <span>Showing 1-12 of 30 relults</span> --> </div>
                    <div class="col-sm-7 col-md-7 text-right">
                        <div class="select-option win">
                            <select id="sort" class="selectpicker" data-rel="{{URL::current()}}" data-width="100%" data-toggle="tooltip">
                                <option value="manual">Featured</option>
                                <option value="az">Alphabetically, A-Z</option>
                                <option value="za">Alphabetically, Z-A</option>
                                <option value="low">Price, low to high</option>
                                <option value="high">Price, high to low</option>
                                <option value="new">Date, new to old</option>
                                <option value="old">Date, old to new</option>
                            </select>
                        </div>
                        <a href="{{buatLink(URL::current(),array('view'=>'grid'))}}" class="grid-view-icon"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                        <a href="{{buatLink(URL::current(),array('view'=>'list'))}}" class="list-view-icon"><i class="fa fa-list" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="clear"></div>
                @if($view=='list')
                    @foreach(list_product(Input::get('show'), @$category, @$collection) as $myproduk)
                    <div class="row">
                        <!-- .pro-text -->
                        <div class="pro-text">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <!-- .pro-img -->
                                <div class="pro-img">
                                    {{HTML::image(product_image_url($myproduk->gambar1, 'medium'), $myproduk->nama, array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                                    <!-- <div class="new tage">
                                        <span class="new-text">NEW</span> <span class="pres-text">-15%</span>
                                    </div> -->
                                </div>
                                <!-- /.pro-img -->
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <!-- .listview-detail -->
                                <div class="listview-detail">
                                    <!-- /.pro-img -->
                                    <a href="{{product_url($myproduk)}}">{{ucwords($myproduk->nama)}}</a>
                                    <div class="price2">
                                        {{price($myproduk->hargaJual)}}
                                        @if(!empty($myproduk->hargaCoret) && $myproduk->hargaCoret > $myproduk->hargaJual)
                                        <span>{{price($myproduk->hargaCoret)}}</span>
                                        @endif
                                    </div>
                                    <p>{{short_description($myproduk->deskripsi,200)}}</p>
                                    <a href="{{product_url($myproduk)}}" class="addtocart2">View</a>
                                </div>
                                <!-- /.listview-detail -->
                            </div>
                        </div>
                        <!-- /.pro-text -->
                    </div>
                    @endforeach
                @elseif($view=='' || $view=='grid')
                <div class="row wow zoomIn animated" data-wow-duration=".5s" data-wow-delay=".2s">
                    @foreach(list_product(Input::get('show'), @$category, @$collection) as $grid_produk)
                    <div class="col-md-4">
                        <!-- .pro-text -->
                        <div class="pro-text">
                            <!-- .pro-img -->
                            <div class="pro-img">
                                {{HTML::image(product_image_url($grid_produk->gambar1,'medium'), $grid_produk->nama, array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                                <!-- .hover-img -->
                                <div class="hover-img">
                                    <ul>
                                        <!-- <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a></li> -->
                                        <!-- <li><a href="#" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
                                    </ul>
                                </div>
                                <!-- <div class="new tage"> <span class="new-text">NEW</span> <span class="pres-text">-15%</span> </div> -->
                                <!-- /.hover-img -->
                            </div>
                            <!-- /.pro-img -->
                            <a href="{{product_url($grid_produk)}}">{{$grid_produk->nama}}</a> <a href="{{product_url($grid_produk)}}" class="addtocart">View product</a>
                            <div class="price">{{price($grid_produk->hargaJual)}}</div>
                        </div>
                        <!-- /.pro-text -->
                    </div>
                    @endforeach
                </div>
                @endif
                <div class="pagetions">
                    <!-- .pagetions -->
                    <div class="col-md-6">
                        {{list_product(Input::get('show'), @$category, @$collection)->appends(array('show' => Input::get('show')))->links()}}
                    </div>
                    <!-- /.pagetions -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.grid-shop -->
</section>