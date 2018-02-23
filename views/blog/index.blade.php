<div class="inner-header inner-header2">
    <!-- .inner-header -->
    <h2>News & Blog</h2>
    <div class="bdr">
        <ul>
            <li>Home</li>
            <li>/</li>
            <li><span>News & Blog</span></li>
        </ul>
    </div>
    <!-- /.inner-header -->
</div>
<section class="blog">
    <!-- .blog -->
    <div class="container">
        <!-- Filter Controls - Simple Mode -->
        <div class="row">
            <!-- A basic setup of simple mode filter controls, all you have to do is use data-filter="all"
                 for an unfiltered gallery and then the values of your categories to filter between them -->
            <div class="col-sm-9 col-md-9">
                <div class="row">
                @foreach(list_blog(null,@$blog_category) as $key=>$blog)
                    <div class="col-sm-12">
                        @if(!empty(imgString($blog->isi)))
                        <div class="blog-img">
                            <img src="{{ imgString($blog->isi) }}" />
                            <div class="blog-img-hover">
                                <a href="{{blog_url($blog)}}"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        @endif
                        <p class="hank"><a href="{{blog_url($blog)}}">{{$blog->judul}}</a></p>
                        <p class="time">
                            @if(!empty($blog->authors->name))
                            By <span>{{@$blog->authors->name}}</span> / 
                            @else
                            {{date_format($blog->created_at, "d M Y")}}
                            @endif
                        </p>
                        <p>{{blogIndex($blog->isi,151)}}</p>
                        <a href="{{blog_url($blog)}}" class="readbtn">Read More</a>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
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
                <div class="weight">
                    <div class="title">
                        <h2>Latest Posts</h2>
                    </div>
                    <div class="latest-posts">
                        <ul>
                            @foreach(recentBlog(null,5) as $new_post)
                            <li>
                                @if(!empty(imgString($new_post->isi)))
                                <div class="col-sm-3 col-md-3">
                                    <img src="{{ imgString($new_post->isi) }}" alt="{{@$new_post->judul}}" />
                                </div>
                                @endif
                                <div class="col-sm-9 col-md-9">
                                    <div class="pro-text">
                                        <a href="{{blog_url($new_post)}}">{{short_description($new_post->judul,28)}}</a>
                                        <br><span>{{date_format($new_post->created_at, "d M Y")}}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagetions">
            <!-- .pagetions -->
            <div class="col-md-12">
                {{list_blog(null,@$blog_category)->links()}} 
            </div>
            <!-- /.pagetions -->
        </div>
    </div>
    <!-- /.blog -->
</section>