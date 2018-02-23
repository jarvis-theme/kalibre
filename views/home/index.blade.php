<section class="banner-outer">
    <!-- .banner-outer -->
    <div class="container">
        <!-- .banner-bg -->
        <div class="banner-bg">
            <div class="col-sm-4 col-md-4">
                <!-- .banner-img -->
                <div class="banner-img animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <img src="{{dirTemaToko().'kalibre/assets/images/banner1.jpg'}}" alt="about-img1" />
                    <div class="banner-text">
                        <h3>British Made Pocket Knife - Oak</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- .banner-img -->
                <div class="banner-img animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <img src="{{dirTemaToko().'kalibre/assets/images/banner2.jpg'}}" alt="about-img1" />
                    <div class="banner-text">
                        <h3>Chair Kimi No Isu Project</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
            <div class="col-sm-4 col-md-4 animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                <!-- .banner-img -->
                <div class="banner-img">
                    <img src="{{dirTemaToko().'kalibre/assets/images/banner3.jpg'}}" alt="about-img1" />
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
<section class="new-arrivals">
    <!-- .new-arrivals -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Trending Products</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
        </div>
        <div class="row animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
        @foreach(home_product() as $key=>$myproduk)
            <div class="col-md-3">
                <!-- .pro-text -->
                <div class="pro-text">
                    <!-- .pro-img -->
                    <div class="pro-img">
                        <img src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" alt="{{$myproduk->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'">
                        <!-- .hover-img -->
                        <div class="hover-img">
                            <ul>
                                <!-- <li><a href="#" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
                            </ul>
                        </div>
                        <!-- <div class="new tage"> <span class="new-text">NEW</span> <span class="pres-text">-15%</span> </div> -->
                        <!-- /.hover-img -->
                    </div>
                    <!-- /.pro-img -->
                    <a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama,21)}}</a>
                    <a href="{{product_url($myproduk)}}" class="addtocart">View Product</a>
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
    <!-- /.new-arrivals -->
</section>
<!-- <section class="banner-outer">
    <div class="col-sm-6 col-md-6">
        <div class="banner-img">
            <img src="{{dirTemaToko().'kalibre/assets/images/bg-banner.jpg'}}" alt="about-img1" />
            <div class="banner-text2">
                <h4>Products Essentials</h4>
                <h3>Bottle With Wooden Cork</h3>
                <p>The Newtown sofa range is the first product Jonas Wagell has designed for Zaozuo, but one of the last to be finalized and launched.</p>
                <p><a href="#">Buy now / <span>$196.98</span></a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="banner-img">
            <img src="{{dirTemaToko().'kalibre/assets/images/bg-banner2.jpg'}}" alt="about-img1" />
            <div class="banner-text2">
                <h4>Products Essentials</h4>
                <h3>Hauteville Plywood Chair</h3>
                <p>The Newtown sofa range is the first product Jonas Wagell has designed for Zaozuo, but one of the last to be finalized and launched.</p>
                <p><a href="#">Buy now / <span>$196.98</span></a></p>
            </div>
        </div>
    </div>
</section> -->
@if(count(new_product()) > 0)
<section class="new-arrivals">
    <!-- .new-arrivals -->
    <div class="container">
        <div class="tittle text-center">
            <h2>New Arrival</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
        </div>
        <div class="row animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
        @foreach(new_product() as $key => $new)
            <div class="col-5">
                <!-- .pro-text -->
                <div class="pro-text">
                    <!-- .pro-img -->
                    <div class="pro-img">
                        <img src="{{URL::to(product_image_url($new->gambar1,'medium'))}}" alt="{{$new->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'">
                        <!-- .hover-img -->
                        <div class="hover-img">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                <li><a href="#" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!-- <div class="new tage">
                            <span class="new-text">NEW</span> <span class="pres-text">-15%</span>
                        </div> -->
                        <!-- /.hover-img -->
                    </div>
                    <!-- /.pro-img -->
                    <a href="{{product_url($new)}}">Wooden container Bowl</a>
                    <a href="{{product_url($new)}}" class="addtocart">View</a>
                    <div class="price">{{price($myproduk->hargaJual)}}</div>
                </div>
                <!-- /.pro-text -->
            </div>
        @endforeach
        </div>
    </div>
    <!-- /.new-arrivals -->
</section>
@else
<section class="new-arrivals"></section>
@endif
@if(count(list_koleksi()) > 0)
<section class="client-icon">
    <div class="container">
        <ul>
            @foreach(list_koleksi() as $collection)
            <li>
                <a href="{{koleksi_url($collection)}}"><img src="{{koleksi_image_url($collection->gambar)}}" alt="{{$collection->nama}}" /></a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif
<section class="section-padding">
    <!-- Latest News -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Our Blog Posts</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
        </div>
        @foreach(list_blog(3) as $key => $blog)
        <div class="col-sm-4 col-md-4 wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">
            <div class="news-box">
                <div class="news-img">
                    <img src="{{ imgString($blog->isi) }}" />
                </div>
                <div class="news-text">
                    <a href="{{blog_url($blog)}}">{{$blog->judul}}</a>
                    <p>
                        @if(!empty($blog->authors->name))
                        By <span>{{@$blog->authors->name}}</span> / 
                        @else
                        {{date_format($blog->created_at, "d M Y")}}
                        @endif
                    </p>
                    <div class="news-text-content">
                        {{blogIndex($blog->isi,96)}}
                    </div> <a href="{{blog_url($blog)}}" class="readbtn">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /Latest News -->
</section>