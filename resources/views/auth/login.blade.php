
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin | Login</title>
    <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../assets/css/style.css">

	</head>
	<form method="POST" action="{{ route('login') }}">
    	@csrf
	<body class="img js-fullheight" style="background-image:url(../assets/img/bglogin2.png)">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-3">
					<h1 class="heading-section">DASHBOARD ADMIN</h1>
					<h1 class="heading-section">SMKN 1 DEPOK</h1>
				</div>
			</div>
			<div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-0">
		      	<h3 class="heading-section text-center"> </h3>
		      	<h3 class="heading-section text-center"> </h3>
		      	<h3 class="heading-section text-center"> </h3>
                  <form role="form" action="store" method="POST">
                    @csrf
		      		<div class="input-group input-group-outline mb-5">
		      			<input type="email" name="email" class="form-control" placeholder="EMAIL" required>
		      		</div>
	            <div class="input-group input-group-outline mb-5">
	              <input type="password" name="password" class="form-control" placeholder="PASSWORD" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; TENTANG KAMI &mdash;</p>
			  <p class="w-100 text-center">SMK NEGERI 1 DEPOK</p>
	          <div class="social d-flex text-center">
	          	<a href="https://instagram.com/officialsmkn1depok?igshid=YmMyMTA2MY=" class="px-3 py-3 mr-md-3 rounded"><span class="">
					  </span> INSTAGRAM</a>
	          	<a href="https://smkn1depok.sch.id/" class="px-2 py-2 mr-md-1 rounded"><span class="">
					  </span> WEBSITE</a>
	          </div>
		      </div>
				</div>
			</div>
			
		</div>
	</section>
		</form>
	</body>
</html>


{{-- @extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href={{ asset("../assets/img/apple-icon.png") }}>
  <link rel="icon" type="image/png" href={{ asset("../assets/img/logos/SITH.png") }}>
  	<title>SMKN 1 DEPOK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="{{ asset('auth') }}/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	</head>

	<form method="POST" action="{{ route('login') }}">
		@csrf
	<body class="img js-fullheight" style="background-image: url(assets/img/bck1.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">LOGIN DASHBOARD SARANA DAN PRASARANA SMKN 1 DEPOK</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Sudah Punya Akun?</h3>
                  <form role="form" action="store" method="POST">
						@csrf
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <div class="text-center">
                       <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Login</button>
                    </div>
	          </form>
	          <p class="w-100 text-center">&mdash;ABOUT US &mdash;</p>
	          <p class="w-100 text-center">SMKN 1 DEPOK</p>
	          <div class="social d-flex text-center">
	          	<a href="https://smkn1depok.sch.id/" class="px-2 py-2 mr-md-1 rounded"><span class=""></span>Website</a>
	          	<a href="https://instagram.com/officialsmkn1depok?igshid=YmMyMTA2M2Y=" class=""><span class="ion-logo-twitter mr-2"></span>Instagram</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

		</form>
	</body>
</html> --}}