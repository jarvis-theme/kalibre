<div class="inner-header inner-header2">
    <!-- .inner-header -->
    <h2>{{$detailblog->judul}}</h2>
    <div class="bdr">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>/</li>
            <li><a href="{{url('blog')}}">blog</a></li>
            <li>/</li>
            @if(!empty($detailblog->kategori->nama))
            <li><a href="{{blog_category_url($detailblog->kategori)}}">{{$detailblog->kategori->nama}}</a></li>
            <li>/</li>
            @endif
            <li><span>{{$detailblog->judul}}</span></li>
        </ul>
    </div>
    <!-- /.inner-header -->
</div>
<section class="blog blog-deatils">
    <!-- .blog -->
    <div class="container">
        <div class="col-sm-12 col-md-12 blog-deatails">
            <p class="hank text-center"><a>{{$detailblog->judul}}</a></p>
            <p class="time text-center">
                @if(!empty($detailblog->authors->nama))
                By <span>{{@$detailblog->authors->nama}}</span> /
                @endif
                {{date_format($detailblog->created_at, "d F Y")}}
            </p>
            @if(!empty(imgString($detailblog->isi)))
            <img class="blog-img2" src="{{ imgString($detailblog->isi) }}" alt="{{@$detailblog->judul}}" />
            @endif
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    {{$detailblog->isi}}
                    <div class="navigate comments clearfix">
                        @if(prev_blog($detailblog))
                        <p class="pull-left">
                            <a href="{{blog_url(prev_blog($detailblog))}}" id="navigate-post">&larr; Prev</a>
                        </p>
                        @endif
                        @if(next_blog($detailblog))
                        <p class="pull-right">
                            <a href="{{blog_url(next_blog($detailblog))}}" id="navigate-post">Next &rarr;</a>
                        </p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="blog-tags-social row">
                <div class="blog-social col-md-6"> <strong>Share to friends:</strong>
                    <ul class="social-list">
                        <li class="box">
                            <a href="javascript:void(0);" class="btnSharing" data-social="facebook" data-title="{{$detailblog->judul}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="box">
                            <a href="javascript:void(0);" class="btnSharing" data-social="twitter" data-title="{{$detailblog->judul}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="box">
                            <a href="javascript:void(0);" class="btnSharing" data-social="pinterest" data-title="{{$detailblog->judul}}">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li class="box">
                            <a href="javascript:void(0);" class="btnSharing" data-social="google-plus" data-title="{{$detailblog->judul}}">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="blog-tag col-md-6 text-right">
                    @if($detailblog->tags != "")
                    <strong>Tags:</strong> {{ getTags('<span></span>',$detailblog->tags)}} 
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <!-- .comment-post-img -->
                    <div class="comment-post-img">
                        <h2>You Might Also Like</h2>
                        <div class="row">
                            @foreach(recentBlog(null,2) as $new_post)
                            <div class="col-sm-6 col-md-6">
                                <div class="blog-img">
                                    @if(!empty(imgString($new_post->isi)))
                                    <div class="col-sm-3 col-md-3">
                                        <img class="img-responsive" src="{{ imgString($new_post->isi) }}" alt="{{@$new_post->judul}}" />
                                    </div>
                                    <div class="blog-img-hover">
                                        <a href="{{blog_url($new_post)}}"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                                    </div>
                                    @endif
                                </div>
                                <p class="hank"><a href="{{blog_url($new_post)}}">{{$new_post->judul}}</a></p>
                                <p class="time"><span class="date">{{date_format($new_post->created_at, "d M Y")}}</span></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- .comments-area -->
                    <div class="comments-area">
                        <div class="comment-respond comment-replay">
                            {{$fbscript}} 
                            {{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}} 
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
        <!-- /.blog -->
    </div>
</section>