<div class="inner-header inner-header2">
    <!-- .inner-header -->
    <h2>Contact Info</h2>
    <div class="bdr">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>/</li>
            <li><span>Contact Info</span></li>
        </ul>
    </div>
    <!-- /.inner-header -->
</div>
<section>
	<!-- .contact form -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contact-form">
					<div class="contact-title">
						<h2>
							Contact Info
						</h2>
					</div>
				</div>
				<div class="col-md-12 contact-info">
					<ul>
						<li>
							<div class="img-icon">
								<img src="{{dirTemaToko().'kalibre/assets/images/contact-icon1.jpg'}}" alt="location-icon">
							</div>
							<strong>Our Address</strong>
							<br/> {{@$kontak->alamat}}
						</li>
						<li>
							<div class="img-icon">
								<img src="{{dirTemaToko().'kalibre/assets/images/contact-icon3.jpg'}}" alt="phone-icon">
							</div>
							<strong>Phone</strong>
							@if(!empty($kontak->telepon))
							<br/> {{$kontak->telepon}}
							@endif
							@if(!empty($kontak->hp))
							<br> {{$kontak->hp}}
							@endif
						</li>
						<li>
							<div class="img-icon">
								<img src="{{dirTemaToko().'kalibre/assets/images/contact-icon2.jpg'}}" alt="mail-icon">
							</div>
							<strong>email Address </strong>
							<br/> Email: {{@$kontak->email}}
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-form">
					<div class="contact-title">
						<h2>
							Contact From
						</h2>
					</div>
					<form action="{{url('kontak')}}" method="post" id="commentform" class="comment-form">
						<div class="col-md-6">
							<p>Name <span>*</span></p>
							<p class="comment-form-author">
								<input id="author" name="namaKontak" value="{{Input::old('namaKontak')}}" size="30" type="text" required>
							</p>
						</div>
						<div class="col-md-6">
							<p>Email <span>*</span></p>
							<p class="comment-form-email">
								<input id="email" name="emailKontak" value="{{Input::old('emailKontak')}}" size="30" type="email" required>
							</p>
						</div>
						<div class="col-md-12">
							<p>Comments <span>*</span></p>
							<p class="comment-form-comment">
								<textarea id="comment" name="messageKontak" cols="45" rows="6" aria-required="true" required>{{Input::old('messageKontak')}}</textarea>
							</p>
						</div>
						<div class="col-md-12">
							<p class="form-submit">
								<input name="submit" id="submit" class="btn btn-secondary" value="send messages" type="submit">
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /.contact form  -->
</section>
<section>
	@if($kontak->lat!='0' || $kontak->lng!='0')
	<iframe class="pull-right" width="100%" height="415" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
	@else
	<iframe class="pull-right" width="100%" height="415" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
	@endif
</section>