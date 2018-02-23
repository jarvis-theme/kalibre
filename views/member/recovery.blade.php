<section class="blog blog-deatils shopping-cart">
    <div class="container">
        <div class="col-sm-12 col-md-12 blog-deatails">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <form class="form-horizontal" action="{{URL::to('member/recovery/'.$id.'/'.$code)}}" method="post">
                        <div class="shipping-outer">
                            <h2>Reset My Password</h2>
                            <div class="row">
                                <div class="col-md-12 counttry">
                                    <div class="lable">New Password:</div>
                                    <input name="password" type="password" value="{{Input::old('password')}}" required>
                                </div>
                                <div class="col-md-12 counttry">
                                    <div class="lable">Confirm New Password:</div>
                                    <input name="password_confirmation" type="password" required>
                                </div>
                            </div>
                            <button type="submit" class="button2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>