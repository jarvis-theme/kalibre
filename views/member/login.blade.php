<section class="blog blog-deatils shopping-cart">
    <div class="container">
        <div class="col-sm-12 col-md-12 blog-deatails">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <form class="form-horizontal" action="{{URL::to('member/login')}}" method="post">
                        <div class="shipping-outer">
                            <h2>Login</h2>
                            <div class="row">
                                <div class="col-md-12 counttry">
                                    <div class="lable">Email:</div>
                                    <input name="email" type="email" value="{{Input::old('email')}}" required>
                                </div>
                                <div class="col-md-12 counttry">
                                    <div class="lable">Password:</div>
                                    <input name="password" type="password" required>
                                </div>
                                <div class="col-sm-6 col-md-6 counttry">
                                    <small><a href="{{url('member/forget-password')}}" class="forgot-link">Forgot your password?</a></small>
                                </div>
                            </div>
                            <button type="submit" class="button2">Login</button>
                            <div class="clear"></div>
                            <br>
                            <div class="line-through">
                                <p>
                                    <span class="muted">Don't have an account?</span>
                                </p>
                            </div>
                            <div class="text-center">
                                <a href="{{url('member/create')}}" class="button3 flnone">Register Now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>