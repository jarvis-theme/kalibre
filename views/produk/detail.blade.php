<section class="grid-shop">
    <!-- product-bg -->
    <div class="product-detail-bg">

        <div class="container">
            <div class="bdr">
                <ul class="bread">
                    {{breadcrumbProduk($produk,'; <li>/</li>',';', true)}} 
                </ul>
            </div>
            <div class="row">
                <!-- left side -->
                <div class="col-sm-6 col-md-6">
                    <!-- product gallery -->
                    <div id="home-slider3" class="carousel fadein carousel-fade" data-ride="carousel">
                        <!-- .home-slider -->
                        <div class="carousel-inner">
                            @if($produk->gambar1)
                            <div class="item active">
                                <div class="caption">
                                    {{HTML::image(product_image_url($produk->gambar1,'medium'), 'Gambar 1', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                                </div>
                            </div>
                            @endif
                            @if($produk->gambar2)
                            <div class="item">
                                <div class="caption">
                                    {{HTML::image(product_image_url($produk->gambar2,'medium'), 'Gambar 2', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                                </div>
                            </div>
                            @endif
                            @if($produk->gambar3)
                            <div class="item">
                                <div class="caption">
                                    {{HTML::image(product_image_url($produk->gambar3,'medium'), 'Gambar 3', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                                </div>
                            </div>
                            @endif
                            @if($produk->gambar4)
                            <div class="item">
                                <div class="caption">
                                    {{HTML::image(product_image_url($produk->gambar4,'medium'), 'Gambar 4', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                                </div>
                            </div>
                            @endif
                            <ul class="carousel-indicators">
                                @if($produk->gambar1)
                                <li data-target="#home-slider3" data-slide-to="0" class="active">
                                    {{HTML::image(product_image_url($produk->gambar1,'medium'), 'Gambar 1', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                                </li>
                                @endif
                                @if($produk->gambar2)
                                <li data-target="#home-slider3" data-slide-to="1">
                                    {{HTML::image(product_image_url($produk->gambar2,'medium'), 'Gambar 2', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}</li>
                                @endif
                                @if($produk->gambar3)
                                <li data-target="#home-slider3" data-slide-to="2">
                                    {{HTML::image(product_image_url($produk->gambar3,'medium'), 'Gambar 3', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}</li>
                                </li>
                                @endif
                                @if($produk->gambar4)
                                <li data-target="#home-slider3" data-slide-to="3">
                                    {{HTML::image(product_image_url($produk->gambar4,'medium'), 'Gambar 4', array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}</li>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <!-- /.home-slider -->
                    </div>
                    <!-- / product gallery -->
                </div>
                <!-- left side -->
                <!-- right side -->
                <div class="col-sm-6 col-md-6">
                    <form action="#" id="addorder" class="product-option-form">                          
                    <!-- .pro-text -->
                    <div class="pro-text product-detail">
                        <!-- /.pro-img -->
                        <a><h4>{{$produk->nama}}</h4></a>
                        <!-- <div class="star2">
                            <ul>
                                <li class="red-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li class="red-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li class="red-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><a href="#">10 review(s)</a></li>
                                <li><a href="#"> Add your review</a></li>
                            </ul>
                        </div> -->
                        <p class="price-detail">
                            {{price($produk->hargaJual)}} 
                            @if(!empty($produk->hargaCoret) && $produk->hargaCoret > $produk->hargaJual)
                            <span>{{price($produk->hargaCoret)}}</span>
                            @endif
                        </p>
                        <p>{{short_description($produk->deskripsi,270)}}</p>
                        @if($opsiproduk->count()>0)
                        <div class="size">
                            <p>Opsi *</p>
                            <div class="select-option">
                                <select>
                                    <option value="Featured Pots">- Please select -</option>
                                    @foreach ($opsiproduk as $key => $opsi)
                                    <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                        {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                        <div class="numbers-row">
                            <input type="number" name="qty" id="french-hens" value="1" min="1" pattern="[0-9]">
                        </div>
                        <button type="submit" class="addtocart2">Add to cart</button>
                        <div class="tag">
                            @if(!empty($kategoriProduk->nama))
                            <p>Categories: <span>{{$kategoriProduk->nama}}.</span></p>
                            @endif

                            @if($produk->tags != "")
                            <p>Tag: <span>{{$produk->tags}}.</span></p>
                            @endif
                        </div>
                        <div class="share">
                            <ul>
                                <li>Share:</li>
                                <li>
                                    <a href="javascript:void(0);" class="btnSharing" data-social="facebook" data-title="{{$produk->nama}}">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btnSharing" data-social="twitter" data-title="{{$produk->nama}}">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btnSharing" data-social="google-plus" data-title="{{$produk->nama}}">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btnSharing" data-social="pinterest" data-title="{{$produk->nama}}">
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.pro-text -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- / product-bg -->
    <!-- .grid-shop -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="tab-bg2">
                            <ul>
                                <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                <li><a data-toggle="tab" href="#menu1">ADDITIONAL INFORMATION</a></li>
                                <li><a data-toggle="tab" href="#menu2">REVIEWS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content tab-content2">
                            <div id="home" class="tab-pane fade in active">
                                <p>{{$produk->deskripsi}}</p>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                </ul>
                                    <li><span>Berat:</span> {{$produk->berat}} gram</li>
                                    <li><span>Stock:</span> {{$produk->stok}}</li>
                                    <li><span>Brand:</span> {{!empty($produk->vendor)?$produk->vendor:'-'}}</li>
                                </ul>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                {{ pluginComment(product_url($produk), @$produk) }}
                            </div>
                        </div>
                    </div>
                    <!-- / right side -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.grid-shop -->
</section>
@if(count(other_product($produk)) > 0)
<section>
    <!-- .Related Products -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Related Products</h2>
        </div>
        <div class="row">
            <div class="row wow zoomIn  animated" data-wow-duration=".5s" data-wow-delay=".2s">
                @foreach(other_product($produk) as $other)
                <div class="col-md-3">
                    <!-- .pro-text -->
                    <div class="pro-text">
                        <!-- .pro-img -->
                        <div class="pro-img">
                            {{HTML::image(product_image_url($other->gambar1,'medium'), $other->nama, array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'"))}}
                            <!-- .hover-img -->
                            <div class="hover-img">
                                <ul>
                                    <!-- <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a></li> -->
                                    <!-- <li><a href="#" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
                                </ul>
                            </div>
                            <!-- <div class="new tage"><span class="new-text">NEW</span> <span class="pres-text">-15%</span></div> -->
                            <!-- /.hover-img -->
                        </div>
                        <!-- /.pro-img -->
                        <a href="{{product_url($other)}}">{{$other->nama}}</a> <a href="{{product_url($other)}}" class="addtocart">View Product</a>
                        <div class="price">{{price($other->hargaJual)}}</div>
                    </div>
                    <!-- /.pro-text -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /.Related Products -->
</section>
@endif