<section class="banner-outer">
    <!-- .banner-outer -->
    <div class="container">
        <!-- .banner-bg -->
        <div class="banner-bg">
            <div class="col-sm-4 col-md-4">
                <!-- .banner-img -->
                <div class="banner-img animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s"> <img src="{{dirTemaToko().'kalibre/assets/images/banner1.jpg'}}" alt="about-img1" />
                    <div class="banner-text">
                        <h3>British Made Pocket Knife - Oak</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- .banner-img -->
                <div class="banner-img animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s"> <img src="{{dirTemaToko().'kalibre/assets/images/banner2.jpg'}}" alt="about-img1" />
                    <div class="banner-text">
                        <h3>Chair Kimi No Isu Project</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
            <div class="col-sm-4 col-md-4 animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                <!-- .banner-img -->
                <div class="banner-img"> <img src="{{dirTemaToko().'kalibre/assets/images/banner3.jpg'}}" alt="about-img1" />
                    <div class="banner-text">
                        <h3>Merino Lambswool Scarf Moss</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
        </div>
        <!-- /.banner-bg -->
    </div>
    <!-- /.banner -->
</section>
@if(count(home_product()) > 0)
<section class="trending-products">
    <!-- .trending-products -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Trending Products</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
        </div>
        <div class="row animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
            @foreach(home_product() as $key=>$myproduk)
            <div class="col-5">
                <!-- .pro-text -->
                <div class="pro-text">
                    <!-- .pro-img -->
                    <div class="pro-img">
                        <img src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" alt="{{$myproduk->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'">
                        <!-- .hover-img -->
                        <div class="hover-img">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!-- <div class="new tage"> <span class="new-text">NEW</span> <span class="pres-text">-15%</span> </div> -->
                        <!-- /.hover-img -->
                    </div>
                    <!-- /.pro-img -->
                    <a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama,21)}}</a>
                    <a href="{{product_url($myproduk)}}" class="addtocart">View product</a>
                    <div class="price">{{price($myproduk->hargaJual)}}</div>
                </div>
                <!-- /.pro-text -->
            </div>
            @endforeach
            <div class="col-md-12 text-center">
                <a href="{{url('produk')}}" class="lbtn">load more</a>
            </div>
        </div>
    </div>
    <!-- /.trending-products -->
</section>
@endif
<section class="banner-outer">
    <!-- .banner-outer -->
    <div class="container">
        @foreach(vertical_banner() as $key=>$banner)
        @if($key < 2)
        <div class="col-sm-6 col-md-6">
            <!-- .banner-img -->
            <div class="banner-img">
                <img src="{{banner_image_url($banner->gambar,2)}}" alt="info {{$key+1}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'" />
                <div class="banner-text2">
                    <!-- <h4>Products Essentials</h4>
                    <h3>Bottle With Wooden Cork</h3> -->
                    <p><a href="{{$banner->url}}">Discover Now</a></p>
                </div>
            </div>
            <!-- /.banner-img -->
        </div>
        @endif
        @endforeach
    </div>
    <!-- /.banner-outer -->
</section>
<!-- .topseller-products-outer -->
<section class="topseller-products-outer">
    <!-- Latest News -->
    <div class="container">
        <div class="row">
            @if(count(best_seller()) > 0)
            <div class="col-sm-4">
                <!-- title -->
                <div class="tittle">
                    <h2>Topseller Products </h2>
                </div>
                <!-- /title -->
                <div class="col-md-12">
                    <div class="row">
                        <!-- tab-pane -->
                        <div class="owl-demo-outer">
                            <!-- #owl-demo -->
                            <div id="owl-demo4" class="deals-wk2">
                                {{--*/ $b=1; /*--}}
                                <div class="item">
                                @foreach(best_seller() as $best)
                                    <div class="col-md-12">
                                        <div class="topseller-products">
                                            <div class="col-sm-4 col-md-4">
                                                <img src="{{product_image_url($best->gambar1,'medium')}}" alt="{{$best->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'">
                                            </div>
                                            <div class="col-sm-8 col-md-8">
                                                <div class="pro-text">
                                                    <a href="{{product_url($best)}}">{{$best->nama}}</a>
                                                    <strong>{{price($best->hargaJual)}}</strong>
                                                    @if(!empty($best->hargaCoret))
                                                    <span>{{price($best->hargaCoret)}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($b % 3 == 0 && $b>0)
                                    </div>
                                    <div class="item">
                                    @endif
                                    {{--*/$b++;/*--}}
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(count(new_product()) > 0)
            <div class="col-sm-4">
                <!-- title -->
                <div class="tittle">
                    <h2>New Products</h2>
                </div>
                <!-- /title -->
                <!-- electonics -->
                <div class="electonics ">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- tab-pane -->
                            <div class="owl-demo-outer">
                                <!-- #owl-demo -->
                                <div id="owl-demo14" class="deals-wk2">
                                    <div class="item">
                                    {{--*/ $n=1; /*--}}
                                    @foreach(new_product() as $new)
                                        <div class="col-md-12">
                                            <div class="topseller-products">
                                                <div class="col-sm-4 col-md-4">
                                                    <img src="{{product_image_url($new->gambar1,'medium')}}" alt="{{$new->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'">
                                                </div>
                                                <div class="col-sm-8 col-md-8">
                                                    <div class="pro-text">
                                                        <a href="{{product_url($new)}}">{{$new->nama}}</a>
                                                        <strong>{{price($new->hargaJual)}}</strong>
                                                        @if(!empty($new->hargaCoret))
                                                        <span>{{price($new->hargaCoret)}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if($n % 3 == 0 && $n>0)
                                        </div>
                                        <div class="item">
                                        @endif
                                        {{--*/$n++;/*--}}
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-sm-4">
                <!-- title -->
                <div class="tittle">
                    <h2>Top Collection Products </h2>
                </div>
                <!-- /title -->
                <div class="col-md-12">
                    <div class="row">
                        <!-- tab-pane -->
                        <div class="owl-demo-outer">
                            <!-- #owl-demo -->
                            <div id="owl-demo34" class="deals-wk2">
                                <div class="item">
                                    {{--*/ $c=1; /*--}}
                                    @foreach(list_product(6) as $col)
                                        <div class="col-md-12">
                                            <div class="topseller-products">
                                                <div class="col-sm-4 col-md-4">
                                                    <img src="{{product_image_url($col->gambar1,'medium')}}" alt="{{$col->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'">
                                                </div>
                                                <div class="col-sm-8 col-md-8">
                                                    <div class="pro-text">
                                                        <a href="{{product_url($col)}}">{{$col->nama}}</a>
                                                        <strong>{{price($col->hargaJual)}}</strong>
                                                        @if(!empty($col->hargaCoret))
                                                        <span>{{price($col->hargaCoret)}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if($c % 3 == 0 && $c>0)
                                        </div>
                                        <div class="item">
                                        @endif
                                        {{--*/$c++;/*--}}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Latest News -->
</section>
<!-- /.topseller-products-outer -->
<section class="section-padding">
    <!-- Latest News -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Our Blog Posts</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
        </div>
        @foreach(list_blog() as $key => $blog)
        <div class="col-sm-4 col-md-4 wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">
            <div class="news-box">
                <div class="news-img">
                    <img src="{{ imgString($blog->isi) }}" />
                </div>
                <div class="news-text"> <a href="{{blog_url($blog)}}">{{$blog->judul}}</a>
                    <p>
                        @if(!empty($blog->authors->name))
                        By <span>{{@$blog->authors->name}}</span> / 
                        @else
                        {{date_format($blog->created_at, "d M Y")}}
                        @endif
                    </p>
                    <div class="news-text-content"> {{blogIndex($blog->isi,96)}} </div> <a href="{{blog_url($blog)}}" class="readbtn">Read More</a> </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /Latest News -->
</section>