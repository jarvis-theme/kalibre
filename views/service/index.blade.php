<div class="inner-header inner-header2">
	<!-- .inner-header -->
	<h2>Term of Service</h2>
	<div class="bdr">
		<ul>
			<li>Home</li>
			<li>/</li>
			<li><span>Term of Service</span></li>
		</ul>
	</div>
	<!-- /.inner-header -->
</div>
<section class="shopping-cart">
	<!-- .shopping-cart -->
	<div class="container">
		<!-- Accordions -->
		<div class="tabContent" id="tabContent1">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Term of Service</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<div class="shipping-outer">
								{{$service->tos}}
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Refund Policy</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="shipping-outer">
								{{$service->refund}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Privacy Policy</a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="shipping-outer">
							{{$service->privacy}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.shopping-cart -->
</section>