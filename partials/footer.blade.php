<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- f-weghit -->
                <div class="f-weghit">
                    {{HTML::image(logo_image_url(),'Logo '.Theme::place('title'),array('style'=>'max-height:100px;'))}}
                    <p>{{ short_description(about_us()->isi, 145) }}</p>
                    <ul>
                        <li><i class="icon-location-pin icons" aria-hidden="true"></i> <strong>Address:</strong> {{ ucwords($kontak->alamat) }}</li>
                        <li><i class="icon-envelope-letter icons"></i> <strong>Email:</strong> {{ strtolower($kontak->email) }}</li>
                        <li><i class="icon-call-in icons"></i> <strong>Phone Number:</strong> {{ !empty($kontak->telepon) ? $kontak->telepon : "-" }}</li>
                    </ul>
                </div>
                <!-- /f-weghit -->
            </div>
            @foreach(all_menu() as $key=>$group) 
            @if($key==0 || $key==1)
            <div class="col-xs-12 col-sm-3 col-md-3">
                <!-- f-weghit2 -->
                <div class="f-weghit2">
                    <h4>{{$group->nama}}</h4>
                    <ul>
                        @foreach($group->link as $key=>$link) 
                        <li><a href="{{menu_url($link)}}">{{ ucfirst($link->nama) }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- /f-weghit2 -->
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <!-- copayright -->
    <div class="copayright cwhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"> Copyright &copy; <a href="{{url('/')}}">{{ Theme::place('title') }}</a> all rights reserved. </div>
                <div class="text-right col-xs-12 col-sm-6 col-md-6">
                    <div class="f-sicon2">
                        <ul>
                            @if($kontak->fb)
                                <li><a target="_blank" href="{{url($kontak->fb)}}" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if($kontak->tw)
                                <li><a target="_blank" href="{{url($kontak->tw)}}" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            @if($kontak->gp)
                                <li><a target="_blank" href="{{url($kontak->gp)}}" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                            @endif
                            @if($kontak->pt)
                                <li><a target="_blank" href="{{url($kontak->pt)}}" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            @endif
                            @if($kontak->tl)
                                <li><a target="_blank" href="{{url($kontak->tl)}}" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                            @endif
                            @if($kontak->ig)
                                <li><a target="_blank" href="{{url($kontak->ig)}}" title="Instagram"><i class="fa fa-instagrem"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /copayright -->
</footer>
<!-- Get Our Email Letter popup -->

<!-- /Get Our Email Letter popup -->
<!--  quick popup  -->
<div class="modal fade bwidth" id="quickModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-5 col-md-5">
                                <div id="home-slider3" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!-- .home-slider -->
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <div class="caption"> <img src="assets/images/Products/fashion/16.jpg" alt="qoute-icon"> </div>
                                        </div>
                                        <div class="item">
                                            <div class="caption"> <img src="assets/images/Products/fashion/11.jpg" alt="qoute-icon"> </div>
                                        </div>
                                        <div class="item active">
                                            <div class="caption"> <img src="assets/images/Products/fashion/8.jpg" alt="qoute-icon"> </div>
                                        </div>
                                        <!-- arrow --><a class="left-control" href="#home-slider3" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a> <a class="right-control" href="#home-slider3" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- /arrow -->
                                        <ul class="carousel-indicators">
                                            <li data-target="#home-slider3" data-slide-to="0" class=""> <img src="assets/images/Products/fashion/16.jpg" alt="qoute-icon"></li>
                                            <li data-target="#home-slider3" data-slide-to="1" class=""> <img src="assets/images/Products/fashion/11.jpg" alt="qoute-icon"></li>
                                            <li data-target="#home-slider3" data-slide-to="2" class="active"> <img src="assets/images/Products/fashion/8.jpg" alt="qoute-icon"></li>
                                        </ul>
                                    </div>
                                    <!-- /.home-slider -->
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-7">
                                <!-- .pro-text -->
                                <div class="pro-text product-detail">
                                    <!-- /.pro-img -->
                                    <a href="#">
                                        <h4>Pellentesque Habitant</h4>
                                    </a>
                                    <div class="star2">
                                        <ul>
                                            <li class="red-color"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li class="red-color"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li class="red-color"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li><a href="#">10 review(s)</a></li>
                                            <li><a href="#"> Add your review</a></li>
                                        </ul>
                                    </div>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <p><strong>$160.00</strong></p>
                                    <div class="size">
                                        <p>Size *</p>
                                        <div class="select-option">
                                            <select>
                                                <option value="28">28</option>
                                                <option value="32">32</option>
                                                <option value="34">34</option>
                                                <option value="36">36</option>
                                                <option value="Featured Pots">- Please select -</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="size">
                                        <p>Color *</p>
                                        <div class="select-option">
                                            <select>
                                                <option value="Black">Black</option>
                                                <option value="Red">Red</option>
                                                <option value="Featured Pots">- Please select -</option>
                                            </select>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="numbers-row">
                                            <input name="french-hens" id="french-hens" value="3" type="text">
                                            <div class="inc button">+</div>
                                            <div class="dec button">-</div>
                                        </div>
                                    </form> <a href="#" class="addtocart2">Add to cart</a> <a href="#" class="hart"><i class="fa fa-heart-o" aria-hidden="true"></i></a> <a href="#" class="hart"><i class="fa fa-sliders" aria-hidden="true"></i></a>
                                    <div class="share">
                                        <p>Share:</p>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tag">
                                        <p>Categories: <span>Bags, Blazers, Boots, Jackets, Pants, Shirts.</span></p>
                                        <p>Tag: <span>outerwear.</span></p>
                                    </div>
                                </div>
                                <!-- /.pro-text -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
{{pluginPowerup()}} 