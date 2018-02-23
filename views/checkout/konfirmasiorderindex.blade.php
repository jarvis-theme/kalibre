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
        <div class="col-md-8 col-md-offset-2">
            <div class="contact-form">
                <div class="contact-title">
                    <!-- <h2>
                        Contact From
                    </h2> -->
                    <p>Please enter the order code you are looking for!</p>
                </div>
                <form action="{{url('konfirmasiorder')}}" method="post" id="commentform" class="comment-form">
                    <div class="col-md-12">
                        <p>Order Code <span>*</span></p>
                        <p class="comment-form-author">
                            <input name="kodeorder" value="" size="30" type="text" required>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <p class="form-submit">
                            <input name="submit" id="submit" class="btn btn-secondary" value="Find" type="submit">
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.shopping-cart -->
</section>