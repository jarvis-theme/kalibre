<div class="inner-header inner-header2">
    <!-- .inner-header -->
    <h2>{{$data->judul}}</h2>
    <div class="bdr">
        <ul>
            <li>Home</li>
            <li>/</li>
            <li>Page</li>
            <li>/</li>
            <li><span>{{$data->judul}}</span></li>
        </ul>
    </div>
    <!-- /.inner-header -->
</div>
<section class="blog blog-deatils">
    <div class="container">
        <div class="col-sm-12 col-md-12 blog-deatails">
            <p class="hank text-center"><a>{{$data->judul}}</a></p>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    {{$data->isi}}
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="blog-tags-social row">
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
                                    <img class="img-responsive" src="{{ imgString($new_post->isi) }}" alt="{{@$new_post->judul}}" />
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
                </div>
            </div>
        </div>
        <!-- /.blog -->
    </div>
</section>