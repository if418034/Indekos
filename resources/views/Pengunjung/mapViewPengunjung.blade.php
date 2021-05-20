@extends('layouts.layoutPengunjungKost')

@section('title')
    <title>MapView-Pengunjung</title>
@endsection

@section('main-content')
<div class="row">
			<div class="col-12">
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-8 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<h2>Lakukan Pencarian Lokasi</h2>
							</div>
							<ul class="category-list" >
								<li>Dengan Anda menikmati perjalanan di Kota ini (Balige), maka kamii ikut turut
                                senang juga atas kenimatan yang telah dirasakan oleh Anda. Hal itu malah membuat kami malah semakin yakin bahwa Anda semakin nyaman tinggal di daerah sini (Balige).
                                <br><br>
                                Dengan tidak mengurangi rasa kenyamanan Anda, disini Anda bisa mencari dengan lebih mudah kemana dan apa tempat yang Anda ingin datangi (kunjungi) di Kota ini (Balige).
                                <br><br>
                                Semangat terus buat Anda !
                                <br><br>
                                Tetap jaga Protokol Kesehatan (ProKes), Yah !
                                <br><br>
                                Alamat
                                </li>
                                <li>
                                    <form id="searchbox" style="background-color:transparent;" method="get" action="#" autocomplete="off">
                                        <input name="q" type="text" size="15" placeholder="search..." />
                                        <input id="button-submit" type="submit" value="" />
                                    </form>
                                    <hr>
                                </li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
                                <img src="/img/logo.png" style="height:500px;" alt="">
                                <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-capslock-fill" viewBox="0 0 16 16">
                                    <path d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                                </center>
							</div>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-12 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31892.073619616964!2d99.06574236725669!3d2.3337117411457005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0415b8f7da39%3A0xc6beb74287f355a5!2sBalige%2C%20Sibola%20Hotangsas%2C%20Balige%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1619584382457!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<ul class="category-list" >
								<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31892.073619616964!2d99.06574236725669!3d2.3337117411457005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0415b8f7da39%3A0xc6beb74287f355a5!2sBalige%2C%20Sibola%20Hotangsas%2C%20Balige%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1619584382457!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </li>
								<li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                    <span>Jln.balige</span>
                                </li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<ul class="category-list" >
								<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31892.073619616964!2d99.06574236725669!3d2.3337117411457005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0415b8f7da39%3A0xc6beb74287f355a5!2sBalige%2C%20Sibola%20Hotangsas%2C%20Balige%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1619584382457!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </li>
								<li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                    <span>Jln.balige</span>
                                </li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<ul class="category-list" >
								<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31892.073619616964!2d99.06574236725669!3d2.3337117411457005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0415b8f7da39%3A0xc6beb74287f355a5!2sBalige%2C%20Sibola%20Hotangsas%2C%20Balige%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1619584382457!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </li>
								<li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                    <span>Jln.balige</span>
                                </li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<ul class="category-list" >
								<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31892.073619616964!2d99.06574236725669!3d2.3337117411457005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0415b8f7da39%3A0xc6beb74287f355a5!2sBalige%2C%20Sibola%20Hotangsas%2C%20Balige%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1619584382457!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </li>
								<li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                    <span>Jln.balige</span>
                                </li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
@endsection
