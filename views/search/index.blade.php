<div class="inner-header inner-header2">
    <h2>Search Result</h2>
    <div class="bdr">
        <ul>
            <li>Home</li>
            <li>/</li>
            <li>Search</li>
            <li>/</li>
            <li><span>{{$name}}</span></li>
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
			@if($jumlahCari!=0)
                <div class="grid-spr">
                    <div class="col-sm-5 col-md-5"><span>Showing products for "<b>{{$name}}</b>"</span></div>
                    <div class="col-sm-7 col-md-7 text-right">
                        <div class="select-option">
                            <select>
                                <option value="New Pots">New</option>
                                <option value="Recent Pots">Recent</option>
                                <option value="Featured Pots">Default sorting</option>
                            </select>
                        </div>
                        <a href="#" class="grid-view-icon"><i class="fa fa-th-large" aria-hidden="true"></i></a> <a href="#" class="list-view-icon"><i class="fa fa-list" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row wow zoomIn animated" data-wow-duration=".5s" data-wow-delay=".2s">
					@foreach($hasilpro as $myproduk)
                    <div class="col-md-4">
                        <!-- .pro-text -->
                        <div class="pro-text">
                            <!-- .pro-img -->
                            <div class="pro-img">
                                {{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama, array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
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
                            <a href="{{product_url($myproduk)}}">{{$myproduk->nama}}</a> <a href="{{product_url($myproduk)}}" class="addtocart">View product</a>
                            <div class="price">{{price($myproduk->hargaJual)}}</div>
                        </div>
                        <!-- /.pro-text -->
                    </div>
                    @endforeach
                </div>
                @foreach($hasilhal as $page)
                <div class="col-sm-6 col-md-6">
                    <div class="blog-img">
                        @if(!empty(imgString($page->isi)))
                        <div class="col-sm-3 col-md-3">
                            <img class="img-responsive" src="{{ imgString($page->isi) }}" alt="{{@$page->judul}}" />
                        </div>
                        <div class="blog-img-hover">
                            <a href="{{url('halaman/'.$myhal->slug)}}"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                        </div>
                        @endif
                    </div>
                    <p class="hank"><a href="{{url('halaman/'.$myhal->slug)}}">{{$page->judul}}</a></p>
                    <p class="time"><span class="date">{{date_format($page->created_at, "d M Y")}}</span></p>
                </div>
                @endforeach
                @if(count($hasilhal) > 0)
				<div class="row filtr-container baguetteBoxThree">
					@foreach($hasilhal as $page)
					<div class="col-sm-4 col-md-4 filtr-item" data-category="1, 5" data-sort="Busy streets">
                        @if(!empty(imgString($page->isi)))
						<div class="blog-img">
                            <img class="img-responsive" src="{{ imgString($page->isi) }}" alt="{{@$page->judul}}" />
							<div class="blog-img-hover"><a href="{{url('halaman/'.$myhal->slug)}}"><i class="fa fa-paperclip" aria-hidden="true"></i></a></div>
						</div>
                        @endif
						<p class="hank"><a href="{{url('halaman/'.$myhal->slug)}}">{{$page->judul}}</a></p>
						<p>{{short_description($page->isi,150)}}</p>
						<a href="{{url('halaman/'.$myhal->slug)}}" class="readbtn">Read More</a>
					</div>
                	@endforeach
				</div>
				@endif
                @if(count($hasilblog) > 0)
				<div class="row filtr-container baguetteBoxThree">
					@foreach($hasilblog as $blog)
					<div class="col-sm-4 col-md-4 filtr-item" data-category="1, 5" data-sort="Busy streets">
                        @if(!empty(imgString($blog->isi)))
						<div class="blog-img">
                            <img class="img-responsive" src="{{ imgString($blog->isi) }}" alt="{{@$blog->judul}}" />
							<div class="blog-img-hover"><a href="{{blog_url($blog)}}"><i class="fa fa-paperclip" aria-hidden="true"></i></a></div>
						</div>
                        @endif
						<p class="hank"><a href="{{blog_url($blog)}}">{{$blog->judul}}</a></p>
						<p>{{short_description($blog->isi,150)}}</p>
						<a href="{{blog_url($blog)}}" class="readbtn">Read More</a>
					</div>
                	@endforeach
				</div>
				@endif
            </div>
        @else
    		<div class="well well-lg text-center">
        		<!-- <h2>Oops!</h2> -->
        		<h2>Oops... your search results could not be found.</h2>
    			<p>Did not find results for "<b>{{$name}}</b>".<br>Please search again using other keywords.</p>
        	</div>
		@endif
        </div>
    </div>
    <!-- /.grid-shop -->
</section>