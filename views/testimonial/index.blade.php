<section class="blog blog-deatils">
    <div class="container">
        <div class="col-sm-12 col-md-12 blog-deatails">
            <p class="hank text-center"><a>{{$nama}}</a></p>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    @foreach(list_testimonial() as $key=>$value)
                    <blockquote class="testi">
                        <p>{{($value->isi)}}</p>
                        <small class="time"><i class="icon-user"></i> <span>{{$value->nama}}</span></small>
                        <small><i class="icon-calendar"></i> {{waktuTgl($value->created_at)}}</small>
                    </blockquote>
                    @endforeach
                    <div class="pagetions mb0">
                        {{list_testimonial()->links()}}
                    </div>
                    <div class="blog-tags-social"></div>
                    <!-- .comments form -->
                    <div id="comments" class="comments-area">
                        <div id="respond" class="comment-respond">
                            <h2><span>Leave a testimonial</span></h2>
                            <p>Submit Testimonial</p>
                            <form action="{{url('testimoni')}}" method="post" id="commentform" class="comment-form">
                                <p>Name <span>*</span></p>
                                <p class="comment-form-author">
                                    <input id="author" name="nama" value="{{Input::old('nama')}}" size="30" type="text" required>
                                </p>
                                <p>Testimonial <span>*</span></p>
                                <p class="comment-form-comment">
                                    <textarea id="comment" name="testimonial" cols="45" rows="8" aria-required="true" required>{{Input::old('testimonial')}}</textarea>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" id="submit" class="btn btn-secondary" value="send messages" type="submit">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</section>