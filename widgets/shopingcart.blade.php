<a href="#" class="dropbtn">
    <img src="{{url(dirTemaToko().'kalibre/assets/images/top-icon3.png')}}" alt="top-ico3"> <span>Cart ({{Shpcart::cart()->total_items()}})</span>
</a>
<div class="dropdown-content">
    @if(Shpcart::cart()->total_items() > 0)
        @foreach (Shpcart::cart()->contents() as $key => $cart)
        <div class="cart-content">
            <div class="col-sm-4 col-md-4">
                <img src="{{url('produk/large/'.$cart['image'])}}" alt="{{$cart['name']}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';">
            </div>
            <div class="col-sm-8 col-md-8">
                <div class="pro-text">
                    <a href="{{url('produk/'.$cart['slug'])}}">{{$cart['name']}}</a>
                    <div class="close">x</div> {{$cart['qty']}} x <strong>{{ price($cart['qty'] * $cart['price'])}}</strong>
                </div>
            </div>
        </div>
        @endforeach
        <div class="total">
            <div class="col-sm-6 col-md-6 text-left"><strong>Total :</strong></div>
            <div class="col-sm-6 col-md-6 text-right">
                <strong>{{ price(Shpcart::cart()->total() )}}</strong>
            </div>
        </div>
        <a href="{{url('checkout')}}" class="cart-btn">CHECKOUT</a>
    @else
        <div class="cart-content">
            <center>Cart is empty</center>
        </div>
    @endif
</div>