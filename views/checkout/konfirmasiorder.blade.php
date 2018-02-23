<div class="inner-header inner-header2">
    <!-- .inner-header -->
    <h2>Konfirmasi Order</h2>
    <div class="bdr">
        <ul>
            <li>Home</li>
            <li>/</li>
            <li><span>Konfirmasi Order</span></li>
        </ul>
    </div>
    <!-- /.inner-header -->
</div>
<section class="shopping-cart">
    <!-- .shopping-cart -->
    <div class="container">
        <div class="col-md-12">
            <h2>You cart items</h2>
            <table>
                <tr>
                    <th></th>
                    <th>Product name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Receipt Number</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>
                        @foreach ($order->detailorder as $detail)
                        {{HTML::image(product_image_url($detail->produk->gambar1,'thumb'), $detail->produk->nama, array("onerror"=>"this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'", "width"=>80))}}
                        @endforeach
                    </td>
                    <td>
                        <ul>
                            @foreach ($order->detailorder as $detail)
                            <li>{{$detail->produk->nama}} {{$detail->opsiSkuId != 0 ? ( $detail->opsisku['opsi1'] == '' && $detail->opsisku['opsi2'] == '' && $detail->opsisku['opsi3'] == '' ? '' : '('.$detail->opsisku['opsi1'].($detail->opsisku['opsi2'] != '' ? ' / '.$detail->opsisku['opsi2']:'').($detail->opsisku['opsi3'] !='' ? ' / '.$detail->opsisku['opsi3']:'').')'):''}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td width="400">
                        <ul>
                            @foreach ($order->detailorder as $detail)
                            <li>{{short_description($detail->produk->deskripsi,80)}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($order->detailorder as $detail)
                            <li>{{$detail->qty}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td><strong>{{price(@$order->total)}}</strong></td>
                    <td>{{$order->noResi}}</td>
                    <td>
                        @if($order->status==0)
                        <span class="label label-warning">Pending</span>
                        @elseif($order->status==1)
                        <span class="label label-important">Konfirmasi diterima</span>
                        @elseif($order->status==2)
                        <span class="label label-info">Pembayaran diterima</span>
                        @elseif($order->status==3)
                        <span class="label label-success">Terkirim</span>
                        @elseif($order->status==4)
                        <span class="label label-default">Batal</span>
                        @endif
                    </td>
                </tr>
            </table>
            <div class="col-sm-12 col-md-12">
                <div class="shipping-outer">
                    @if($order->jenisPembayaran==1)
                    <h2>{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</h2>
                    <div class="col-sm-7 col-sm-offset-2">
                        {{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put'))}} 
                        <div class="row">
                            <ul>
                                <li>
                                    <div class="col-md-12 counttry">
                                        <div class="lable">Name:</div>
                                        <input name="nama" type="text" value="{{ Input::old('nama') }}" required>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="lable">No Rekening:</div>
                                        <input name="noRekPengirim" type="text" value="{{ Input::old('noRekPengirim') }}" required>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="lable">Jumlah:</div>
                                        <input name="jumlah" type="text" value="{{ $order->total }}" required>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="lable">Select Bank:</div>
                                        <div class="size State">
                                            <div class="select-option">
                                                <select>
                                                    <option value="">-- Select Bank --</option>
                                                    @foreach ($banktrans as $bank)
                                                    <option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - a/n {{$bank->atasNama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <button type="submit" class="button2">Save</button>
                        {{Form::close()}}
                    </div>
                    @endif

                    @if($paymentinfo!=null)
                    <h3><center>Paypal Payment Details</center></h3><br>
                    <hr>
                    <div class="table-responsive">
                        <table class='table table-bordered'>
                            <tr>
                                <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
                            </tr>
                            <tr>
                                <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
                            </tr>
                            <tr>
                                <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
                            </tr>
                            <tr>
                                <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
                            </tr>
                            <tr>
                                <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
                            </tr>
                            <tr>
                                <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
                            </tr>
                            <tr>
                                <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
                            </tr>
                        </table>
                    </div>
                    <p>Thanks you for your order.</p>
                    <br>
                    @endif 
                  
                    @if($order->jenisPembayaran==2)
                    <h2>{{trans('content.step5.confirm_btn')}} Paypal</h2>
                    <div class="col-sm-7 col-sm-offset-2">
                        <center>
                            <p>{{trans('content.step5.paypal')}}</p><br>
                        </center>
                        <center id="paypal">{{$paypalbutton}}</center>
                    </div>
                    @elseif($order->jenisPembayaran==4) 
                        @if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
                        <h2>{{trans('content.step5.confirm_btn')}} iPaymu</h2>
                        <div class="col-sm-7 col-sm-offset-2">
                            <center>
                                <p>{{trans('content.step5.ipaymu')}}</p>
                                <br>
                                <a class="btn-ipaymu" href="{{url('ipaymu/'.$order->id)}}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
                            </center>
                        </div>
                        @endif
                    @elseif($order->jenisPembayaran == 5)
                    <h2>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</h2>
                    <div class="col-sm-7 col-sm-offset-2 doku">
                        <center>
                            <p>{{trans('content.step5.doku')}}</p>
                            {{ $doku_button }}
                        </center>
                    </div>
                    @elseif($order->jenisPembayaran == 6)
                    <h2>{{trans('content.step5.confirm_btn')}} Bitcoin</h2>
                    <div class="col-sm-7 col-sm-offset-2">
                        <center>
                            <p>{{trans('content.step5.bitcoin')}}</p><br>
                            {{$bitcoinbutton}}
                        </center>
                    </div>
                    @elseif($order->jenisPembayaran == 8)
                    <h2>{{trans('content.step5.confirm_btn')}} Midtrans</h2>
                    <div class="col-sm-7 col-sm-offset-2">
                        <center>    
                            <p>{{trans('content.step5.veritrans')}}</p><br>
                            <button class="btn-midtrans" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
                        </center>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /.shopping-cart -->
</section>