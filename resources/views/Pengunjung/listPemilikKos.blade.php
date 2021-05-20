@extends('layouts.layoutPengunjungPemilik')

@section('title')
    <title>ListPemilik-Kost-Pengunjung</title>
@endsection

@section('main-content')
<div class="row">
			<div class="col-12">
            <br><!-- Section title --><br>
				<div class="section-title">
                <br><h2>TEMUKAN PEMILIK KOS-MU DISINI</h2>
				</div>
				<div class="row">
					<!-- Category list -->
                    @foreach($owners as $owner)

					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
                                <i class="fa fa-briefcase icon-bg-5"></i>
                                @foreach($kosans as $kosan)
                                @if($kosan->user_id==$owner->id)
								<h4>-{{$kosan->nama}}-</h4>
                                @endif
                                @endforeach
							</div>
							<ul class="category-list" >
								<li><a href="#">Nama <span>{{$owner->nama}}</span></a></li>
								<li><a href="#">Alamat <span>{{$owner->alamat}}</span></a></li>
								<li><a href="#">Telepon  <span>{{$owner->telepon}}</span></a></li>
								<li><a href="#">Email <span>{{$owner->email}}</span></a></li>
							</ul>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
@endsection
