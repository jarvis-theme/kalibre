<section class="subscribe text-center">
	<!-- .subscribe -->
	<div class="container">
		<h2>Get Discount Info</h2>
		<p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and
			<br> other discount information.</p>
		<form action="{{@$mailing->action}}" method="post" novalidate>
			<input type="email" name="email" placeholder="Subscribe to our newsletter..." required {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>
			<input type="submit" value="Subscribe" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>
		</form>
	</div>
	<!-- /.subscribe -->
</section>