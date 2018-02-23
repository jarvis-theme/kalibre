<!-- <div id="banner_section">
    <div class="flexslider">
        <ul class="slides">
            @foreach(slideshow() as $slide)
            <li>
                @if(!empty($slide->url))
                <a href="{{filter_link_url($slide->url)}}" target="_blank">
                @else
                <a href="#">
                @endif
                    <img class="gbr-slide" src="{{ slide_image_url($slide->gambar) }}" alt="{{$slide->title}}" />
                </a>
                @if(!empty($slide->text))
                <div class="flex-caption">
                    <h3>{{$slide->text}}</h3>
                </div>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div> -->
<div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- .home-slider -->
    <div class="carousel-inner" style="background-image: url({{ slide_image_url($slide->gambar) }});  background-repeat: no-repeat; background-position: top;">
        @foreach(slideshow() as $key=>$slide)
        <div class="item {{$key==0?'active':''}}">
            <div class="caption">
                <h2 class="animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">Handmade<br> Hand Carved Coffee</h2>
                <p class="animated wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p> <a data-scroll class="btn get-start animated fadeInUpBig" href="#"><span>view collection</span></a>
            </div>
        </div>
        @endforeach
        <!-- <div class="item" style="background-image: url(assets/images/header-2.jpg);  background-repeat: no-repeat; background-position: top;">
            <div class="caption">
                <h2 class="animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">Handmade<br> Hand Carved Coffee</h2>
                <p class="animated wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p> <a data-scroll class="btn get-start animated fadeInUpBig" href="#"><span>view collection</span></a> </div>
        </div>
        <div class="item" style="background-image: url(assets/images/header-3.jpg);  background-repeat: no-repeat; background-position: top;">
            <div class="caption">
                <h2 class="animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">Handmade<br> Hand Carved Coffee</h2>
                <p class="animated wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p> <a data-scroll class="btn get-start animated fadeInUpBig" href="#"><span>view collection</span></a> </div>
        </div> -->
        <!-- indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
            <li data-target="#home-slider" data-slide-to="1" class=""></li>
            <li data-target="#home-slider" data-slide-to="2" class=""></li>
        </ol>
        <!-- /indicators -->
    </div>
    <!-- /.home-slider -->
</div>
