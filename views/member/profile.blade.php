<!-- SITE CONTENT  -->
<div id="site-wrapper">
	<!-- /BREADCRUMBS -->
	<div class="breadcrumbs-wrapper">
		<div class="">
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-9 center-sm">
					<div class="breadcrumbs">
						<ul class="unstyled">
							<li><a href="{{URL::to('/')}}">Home</a></li>
							<li><a href="{{URL::to('member')}}">Member</a></li>
							<li class="active">My Profile</li>
						</ul>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
				
				<div class="col-xs-12 col-sm-6 col-lg-3 center-sm">
					<div class="display-mode">
						<!-- <ul class="unstyled float-right"> Details Profile </ul> -->
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
				<div class="col-xs-12 col-sm-4 col-lg-3 pull-left sidebar">
					<!-- CHOOSE COLOR -->
					<div class="section module-list-items">
						<h4 class="section-title">Menu Member</h4>
						<div class="section-inner">
							<ul class="unstyled pretty-list arrow-list cl-effect-1">
								<li><a href="{{URL::to('member')}}">Order History</a></li>
								<li><a class="active" href="{{URL::to('member/'.$user->id.'/edit')}}">Profil Information</a></li>
							</ul>
						</div>
					</div>
					<!-- /CHOOSE COLOR -->

					<!-- SIDE BANNER -->
					<div class="mt20">
						{{--*/ $i=1 /*--}}
						@foreach(vertical_banner() as $key=>$banner)
						<div class="mb10">
							<a href="{{URL::to($banner->url)}}">
								{{HTML::image(banner_image_url($banner->gambar),'Info Promo '.$i++)}}
							</a>
						</div>
						@endforeach
					</div>
					<!-- SIDE BANNER -->
				</div>
				<!-- /SIDE BAR -->
				
				<!-- MAIN CONTENT -->
				<div class="col-xs-12 col-sm-8 col-lg-9 main">
					<div class="section">
					{{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal','id'=>'update-profil'))}}
						<h2>Personal Detail</h2>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Nama:</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="nama" value="{{$user->nama}}" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Email:</label>
							<div class="col-sm-9">
								<input class="form-control" type="email" name="email" value="{{$user->email}}" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Telepon:</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="telp" value="{{$user->telp}}" required>
							</div>
						</div>
						<h2>Alamat Lengkap</h2>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Alamat:</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="alamat" rows="3" required>{{$user->alamat}}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Kode Pos:</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="kodepos" value="{{$user->kodepos}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Negara:</label>
							<div class="col-sm-9">
								<select id="negara" class="w100" name="negara" required>
									<option value="">-- Pilih Negara --</option>
									@foreach ($negara as $key=>$item)
										@if(strtolower($item)=='indonesia')
										<option value="1" {{$user->negara==1 || Input::old("negara")==1 ? 'selected' : ''}}>{{$item}}</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Provisi:</label>
							<div class="col-sm-9">
								{{ Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi','class'=>'w100')) }}
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Kabupaten:</label>
							<div class="col-sm-9">
								{{ Form::select('kota',array('' => '-- Pilih Kota --') + $kota, ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota','class'=>'w100')) }}
							</div>
						</div>
						<h2>Ganti Password</h2>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Password Lama:</label>
							<div class="col-sm-9">
								<input class="form-control" type="password" name="oldpassword">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Password Baru:</label>
							<div class="col-sm-9">
								<input class="form-control" type="password" name="password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><span class="required">*</span> Ulang Password Baru:</label>
							<div class="col-sm-9">
								<input class="form-control" type="password" name="password_confirmation">
							</div>
						</div>
						<div class="buttons">
							<div class="right"><input type="submit" value="Save" class="button"></div>
						</div>
					{{Form::close()}}
					</div>
				</div>
			<!-- MAIN CONTENT -->
		</div>
	</div>
</div>
<!-- /SITE CONTENT -->