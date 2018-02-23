<div class="product-detail-bg">
    <div class="container">
        <div class="bdr">
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>/</li>
                <li>Member</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="tab-bg2">
                            <ul>
                                <li class="active">
                                    <a data-toggle="tab" href="#history" aria-expanded="true">ORDER HISTORY</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#profile" aria-expanded="false">PROFILE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content tab-content2">
                            <div id="history" class="tab-pane fade shopping-cart pt0 active in">
                                @if($setting->checkoutType==1)
                                <table class="mt0">
                                    <tbody>
                                        <tr>
                                            <th>Order Code</th>
                                            <th>Product Name</th>
                                            <th>Total Price</th>
                                            <th>Receipt Number</th>
                                            <th>Order Date</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        @foreach (list_order() as $item)
                                        <tr>
                                            <td>{{prefixOrder().$item->kodeOrder}}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($item->detailorder as $detail)
                                                    <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td><strong>{{ price($item->total)}}</strong></td>
                                            <td>{{ $item->noResi }}</td>
                                            <td>{{ waktu($item->tanggalOrder) }}</td>
                                            <td>
                                                @if($item->status==0)
                                                <span class="label label-warning">Pending</span>
                                                @elseif($item->status==1)
                                                <span class="label label-important">Konfirmasi diterima</span>
                                                @elseif($item->status==2)
                                                <span class="label label-info">Pembayaran diterima</span>
                                                @elseif($item->status==3)
                                                <span class="label label-success">Terkirim</span>
                                                @elseif($item->status==4)
                                                <span class="label label-default">Batal</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->status==0)
                                                <a href="{{URL::to('konfirmasiorder/'.$item->id)}}" class="btn btn-default" target="_self"><i class="fa fa-eye"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                <div class="pagetions">{{list_order()->links()}}</div>
                            @elseif($setting->checkoutType==2)
                                <table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <th>Detail Inquiry</th>
                                        <th class="align_left">Detail Produk</th>
                                        <th class="align_center"></th>
                                    </tr>
                                    @foreach ($inquiry as $item)
                                    <tr>
                                        <td class="align_left" width="44%">
                                            <a class="pr_name" href="#">ID: {{prefixOrder().$item->kodeInquiry}}</a>
                                            <span class="pr_info">Tanggal Pesan: {{waktu($item->created_at)}}</span><br><br>
                                            <span class="price">STATUS: </span>
                                            @if($item->status==0)
                                            <span class="label label-warning">Pending</span>
                                            @elseif($item->status==1)
                                            <span class="label label-important">Inquiry diterima</span>
                                            @elseif($item->status==2)
                                            <span class="label label-default">Batal</span>
                                            @endif
                                        </td>
                                        <td class="align_left">
                                            <ul class="check_li">
                                            @foreach ($item->detailInquiry as $detail)
                                                <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
                                            @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if ($inquiry->count()==0)
                                    <tr>
                                        <td colspan="2">Inquiry anda masih kosong.</td>
                                    </tr>
                                    @endif
                                </table>
                            @elseif($setting->checkoutType==3)
                                <table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <th>Tentang</th>
                                        <th class="align_left">Detail Pre-order</th>
                                        <th class="align_center"></th>
                                    </tr>
                                    @foreach (list_order() as $item)
                                    <tr>
                                        <td class="align_left" width="44%">
                                            <a class="pr_name" href="#">ID: {{prefixOrder().$item->kodePreorder}}</a>
                                            <span class="pr_info">Tanggal Order: {{waktu($item->tanggalPreorder)}}</span><br><br>
                                            <span class="price">Total: {{ price($item->total)}}</span><br><br>
                                            <span class="price">No Resi: {{ $item->noResi}}</span><br><br>
                                            <span class="price">STATUS: </span>
                                            @if($item->status==0)
                                            <span class="label label-warning">Pending</span>
                                            @elseif($item->status==1)
                                            <span class="label label-important">Konfirmasi DP diterima</span>
                                            @elseif($item->status==2)
                                            <span class="label label-info">DP terbayar</span>
                                            @elseif($item->status==3)
                                            <span class="label label-info">Menunggu pelunasan</span>
                                            @elseif($item->status==4)
                                            <span class="label label-info">Pembayaran lunas</span>
                                            @elseif($item->status==5)
                                            <span class="label label-success">Terkirim</span>
                                            @elseif($item->status==6)
                                            <span class="label label-default">Batal</span>
                                            @elseif($item->status==7)
                                            <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                            @endif
                                            <br><br>
                                        </td>
                                        <td class="align_left">
                                            <ul class="check_li">
                                                <li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}</li>
                                            </ul>
                                        </td>
                                        @if($item->status < 4)  
                                        <td class="align_center">
                                            <a href="{{URL::to('konfirmasipreorder/'.$item->id)}}" class="sc-button small blue" target="_self"> Konfirmasi Pembayaran </a>
                                        </td>
                                        @endif  
                                    </tr>
                                    @endforeach 
                                </table>
                            @endif
                            </div>
                            <div id="profile" class="tab-pane fade">
                                {{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
                                    <div class="shipping-outer shopping-cart mt0 pt0">
                                        <h2>Edit Profile</h2>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6 counttry">
                                                    <div class="lable">Name</div>
                                                    <input name="name" value="{{!empty(Input::old('name')) ? Input::old('name') : $user->nama}}" type="text" required>
                                                </div>
                                                <div class="col-md-6 counttry">
                                                    <div class="lable">Email</div>
                                                    <input name="email" value="{{!empty(Input::old('email')) ? Input::old('email') : $user->email}}" type="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <div class="lable">Address</div>
                                            <input name="alamat" value="{{!empty(Input::old('alamat')) ? Input::old('alamat') : $user->alamat}}" type="text">
                                        </div>
                                        <div class="col-sm-4 col-md-4 counttry">
                                            <div class="lable">Country</div>
                                            <div class="size State">
                                                <div class="select-option">
                                                    <select name="negara" id="negara" required>
                                                        <option selected>-- Pilih Negara --</option>
                                                        @foreach ($negara as $key=>$item)
                                                            @if(strtolower($item)=='indonesia')
                                                            <option value="1" {{ @$user->negara || Input::old('negara')==1 ? 'selected' : ''}}>{{$item}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 counttry">
                                            <div class="lable">State/Province</div>
                                            <div class="size State">
                                                <div class="select-option">
                                                    {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi'))}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 counttry">
                                            <div class="lable">City</div>
                                            <div class="size State">
                                                <div class="select-option" id="kotaPlace">
                                                    {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota'))}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="lable">Telephone</div>
                                            <input name="telp" value="{{!empty(Input::old('telp')) ? Input::old('telp') : $user->telp}}" type="text" required>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="lable">Zip/Postal Code</div>
                                            <input name="kodepos" value="{{!empty(Input::old('kodepos')) ? Input::old('kodepos') : $user->kodepos}}" type="number">
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h2>Edit Password</h2>
                                        <div class="col-md-12 counttry">
                                            <i>Leave it blank if you do not want to change the password.</i>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="lable">Old Password</div>
                                            <input name="oldpassword" type="password">
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="lable">New Password</div>
                                            <input name="password" type="password">
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="lable">Confirm New Password</div>
                                            <input name="password_confirmation" type="password">
                                        </div>
                                        <div class="clear"></div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <button type="submit" class="button2">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                    <!-- / right side -->
                </div>
            </div>
        </div>
    </div>
</div>