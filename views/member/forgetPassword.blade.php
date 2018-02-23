<section class="blog blog-deatils shopping-cart">
    <div class="container">
        <div class="col-sm-12 col-md-12 blog-deatails">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <form class="form-horizontal" action="{{URL::to('member/forgetpassword')}}" method="post">
                        <div class="shipping-outer">
                            <h2>Forgot Password</h2>
                            <p>You can reset your password by entering your email address below and clicking ‘submit’. We will then send you an email with a link to reset your password.</p>
                            <div class="row">
                                <div class="col-md-12 counttry">
                                    <div class="lable">Email:</div>
                                    <input name="recoveryEmail" type="email" value="{{Input::old('recoveryEmail')}}" required>
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