<div class="breadcrumbs-wrapper">
	<div>
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-9 center-sm">
				<div class="breadcrumbs">
					<ul class="unstyled">
						<li><a href="{{URL::to('/')}}">Home</a></li>
						<li><a href="{{URL::to('member')}}">Member</a></li>
						<li class="active">Lupa Password</li>
					</ul>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
			
			<div class="col-xs-12 col-sm-6 col-lg-3 center-sm">
				<div class="display-mode">
					<!-- <ul class="unstyled float-right top-title"> Member Area </ul> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /BREADCRUMBS -->
	
<!-- SIDEBAR + MAIN CONTENT CONTAINER -->
<div class="main-content">
	<div class="container">
		<div class="row">
			<!-- SIDE BAR -->
			<div class="col-xs-12 col-sm-4 col-lg-3 pull-right sidebar">
				<!-- CHOOSE COLOR -->
				{{--*/ $i=1 /*--}}
				@foreach(vertical_banner() as $key=>$banner)
				<div class="module-list-items {{$key==0?'mt40':''}}">
					<div class="cat-image">
						<a href="{{URL::to($banner->url)}}">
							{{HTML::image(banner_image_url($banner->gambar),'Info Promo '.$i++,array('width'=>'100%', 'class'=>'mb10'))}}
						</a>
					</div>
				</div>
				@endforeach
				<!-- /CHOOSE COLOR -->
			</div>
			<!-- /SIDE BAR -->

			<!-- MAIN CONTENT -->
			<div class="col-xs-12 col-sm-8 col-lg-9 main">
				<div class="section">
					<form class="form-horizontal" action="{{URL::to('member/forgetpassword')}}" method="post">
						<p>Silakan masukan email anda untuk mengubah password lama anda.</p>
						<h2>Lupa Password</h2>
						<div class="content">
							<table class="form">
								<tbody>
									<tr>
										<td><input type="text" placeholder="email" name="recoveryEmail" required></td>
										<td><input type="submit" value="Reset Password" class="button"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>
			<!-- MAIN CONTENT -->
		</div>
	</div>
</div>