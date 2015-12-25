<div class="breadcrumbs-wrapper">
	<div>
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-8 center-sm">
				<div class="breadcrumbs">
					<ul class="unstyled">
						<li><a href="{{URL::to('/')}}">Home</a></li>
						<li class="active">Login Area</li>
					</ul>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
			
			<div class="col-xs-12 col-sm-6 col-lg-4 center-sm">
				<div class="display-mode">
					<ul class="unstyled float-right"> Login Area </ul>
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
				@foreach(vertical_banner() as $key=>$banner)
				<div class="section  module-list-items">
					<div class="cat-image">
						<a href="{{URL::to($banner->url)}}">
							{{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('width'=>'100%'))}}
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
					{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'enctype' => 'multipart/form-data'))}}
						<p>Silahkan Login untuk kemudahan melakukan checkout. Cepat dan Mudah dalam bertransaksi. Mudah untuk mengetahui Order Histori dan Status.</p>
						<h2>Login</h2>
						<div class="content">
							<table class="form">
								<tbody>
									<tr>
										<td>Password baru:</td>
										<td><input type="password" placeholder="password baru" name="password" required></td>
									</tr>
									<tr>
										<td>Konfirmasi password baru:</td>
										<td><input type="password" placeholder="ulangi password baru" name="password_confirmation" required></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="buttons">
							<div class="center"><input type="submit" value="Simpan password baru" class="button"></div>
						</div>
					{{Form::close()}}
				</div>
			</div>
			<!-- MAIN CONTENT -->
		</div>
	</div>
</div>