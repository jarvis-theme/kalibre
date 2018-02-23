<section class="blog blog-deatils shopping-cart">
    <div class="container">
        <div class="col-sm-12 col-md-12 blog-deatails">
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <div class="shipping-outer">
                    {{Form::open(array('url'=>'member','method'=>'post'))}}
                        <div class="col-md-12">
                            <h2>Register</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 counttry">
                                    <div class="lable">Name</div>
                                    <input name="name" value="{{Input::old('name')}}" type="text" required>
                                </div>
                                <div class="col-md-6 counttry">
                                    <div class="lable">Email</div>
                                    <input name="email" value="{{Input::old('email')}}" type="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 counttry">
                                    <div class="lable">Password</div>
                                    <input name="password" type="password" required>
                                </div>
                                <div class="col-md-6 counttry">
                                    <div class="lable">Confirm Password</div>
                                    <input name="password_confirmation" type="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="lable">Address</div>
                            <input name="alamat" value="{{Input::old('alamat')}}" type="text">
                        </div>
                        <div class="col-sm-4 col-md-4 counttry">
                            <div class="lable">Country</div>
                            <div class="size State">
                                <div class="select-option">
                                    {{Form::select('negara',array('' => '-- Please select country --') + $negara, Input::old("provinsi"), array('required', 'id'=>"negara", "data-rel"=>"chosen"))}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 counttry">
                            <div class="lable">State/Province</div>
                            <div class="size State">
                                <div class="select-option" id="provinsiPlace">
                                    {{Form::select('provinsi',array('' => '-- Please select state or province --') + $provinsi, Input::old("provinsi"), array('required', 'id'=>"provinsi", "data-rel"=>"chosen"))}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 counttry">
                            <div class="lable">City</div>
                            <div class="size State">
                                <div class="select-option" id="kotaPlace">
                                    {{Form::select('kota',array('' => '-- Please select city --') + $kota, Input::old("kota"), array('required'=>'','id'=>'kota'))}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="lable">Telephone</div>
                            <input name="telp" value="{{Input::old('telp')}}" type="text" required>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="lable">Zip/Postal Code</div>
                            <input name="kodepos" value="{{Input::old('kodepos')}}" type="number">
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="lable">Captcha</div>
                            {{ HTML::image(Captcha::img(), 'Captcha image') }}
                            <input name="captcha" type="text" required style="width: 210px;" >
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-12 counttry">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="readme" value="1" required checked style="margin-top: 6px"> By registering your details you agree to our <a href="{{URL::to('service')}}">Terms and Conditions and privacy policy</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <button type="submit" class="button2">Register</button>
                        </div>
                    {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>