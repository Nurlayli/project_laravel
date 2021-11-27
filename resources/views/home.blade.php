<!DOCTYPE html>
<html>
<head>
	<title>Index Praktikum 3</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"> 
	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
</head>
<body>
	<style>
		img{
			width: 250px;
			height: 300px;
		}
	</style>
	
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="https://attackontitan.fandom.com/wiki/Attack_on_Titan_Wiki">Attack On Titan Fandom</a>
			</div>
			
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav navbar">
					<li class="nav-item">
                        <a class="nav-link" href="#">Manga</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#">Novel</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="">Forum</a>
                    </li>
					<li class="dropdown">
						<a class="dropdown-toggle">Movies<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Attack On Titan Season 1</a></li>
							<li><a class="dropdown-item" href="">Attack On Titan Season 2</a></li>
							<li><a class="dropdown-item" href="">Attack On Titan Season 3</a></li>
							<li><a class="dropdown-item" href="">Attack On Titan Season 4</a></li>
                        </ul>
					</li>
				</ul>
				
			</div>
				<ul class="navbar-nav navbar-right">
					<p><a class="nav-link" href="login.html">Login</a></p>
					<p><a href="daftar.html" class="btn btn-primary" role="button">Daftar</a></p>
				</ul>
		  	</div>
			</div>
		</div>
	</nav>	
 
	<div class="container">			
		<div class="card bg-dark text-white">
			<img src="{{ asset('assets/img/gambar_cover.jpeg') }}" class="card-img-top" alt="...">
		
				<div class="jumbotron">
					<center>			
						<h1>Selamat datang di Blog Animlovers</h1>
						<h3>Kali ini kita akan membahas tentang 5 Titan terkuat di Anime Attack On Titan</h3><br/>
						<h3><a class="btn btn-primary btn-lg" href="https://www.vidio.com/premier/2930/attack-on-titan" role="button">Mulai Nonton</a></h3>
					</center>
				</div>
			</div>
		  </div>

		<div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card">
                  <img src="{{ asset('assets/img/gambar1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Attack Titan</h5>
                    <p class="card-text">Jenis Titan yang satu ini memiliki kemampuan membuat duplikat tubuhnya sendiri dengan menggunakan material kristal. Attack Titan juga dapat memerintah Titan biasa dan mampu mengakses memori dari penggunanya.</p>
					<p><a href="attack_titan.html" class="btn btn-primary" role="button">Lebih lengkap</a></p>
				</div>
                </div>
              </div>
			  
              <div class="col">
                <div class="card">
                  <img src="{{ asset('assets/img/gambar2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Colosal Titan</h5>
                    <p class="card-text">Colossal Titan berbeda dengan Nine Titans lainnya, iya memiliki ukuran tubuh yang jauh lebih besar. Selain itu jenis Titan ini memiliki perubahan wujud yang dapat mengeluarkan uap panas dari seluruh tubuhnya.</p>
					<p><a href="https://attackontitan.fandom.com/wiki/Colossal_Titan_(Anime)" class="btn btn-primary" role="button">Lebih lengkap</a></p>
				</div>
                </div>
              </div>

              <div class="col">
                <div class="card">
                  <img src="{{ asset('assets/img/gambar3.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Armored Titan</h5>
                    <p class="card-text">Dengan kekuatannya itu Armored Titan cukup sulit untuk ditembus oleh pedang khusus pasukan Survey Corps. Disamping itu, berkat tubuhnya yang keras itu dia dapat menghancurkan tembok besar sekalipun.</p>
					<p><a href="https://attackontitan.fandom.com/wiki/Armored_Titan" class="btn btn-primary" role="button">Lebih lengkap</a></p>
				</div>
                </div>
              </div>

              <div class="col">
                <div class="card">
                  <img src="{{ asset('assets/img/gambar4.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Beast Titan</h5>
                    <p class="card-text">Beast Titan memiliki fisik seperti Gorila dengan bulu lebat dibeberapa bagian tubuhnya, namun memiliki tubuh dan kepala seperti manusia. Tinggi Beast Titan sedikit lebih tinggi dibandingkan Attack Titan, yaitu 17 meter.</p>
					<p><a href="https://attackontitan.fandom.com/wiki/Beast_Titan" class="btn btn-primary" role="button">Lebih lengkap</a></p>
				</div>
                </div>
              </div>

			  <div class="col">
                <div class="card">
                  <img src="{{ asset('assets/img/gambar5.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
					  <h5 class="card-title">War Hammer Titan</h5>
					  <p class="card-text">War Hammer Titan adalah ancaman yang bisa berbahaya untuk dihadapi. Terutama karena ia bisa menciptakan struktur-struktur keras seperti pasak dan palu, yang bisa menjadi senjata dalam pertempuran antara Titan.</p>
					  <p><a href="https://attackontitan.fandom.com/wiki/Armored_Titan" class="btn btn-primary" role="button">Lebih lengkap</a></p>
				</div>
                </div>
              </div>

            </div>
        </div>
 
    </div>
    <br/>

	<div class="col-md-12 col-xs-12">Github: Nurlayli</div>
</body>
</html>