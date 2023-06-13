<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.theme.default.min.css')}}">
</head>
<body>
<nav class="navbar navbar-light bg-light custom-header">
  <div class="container" style="max-width: calc(100% - 2*30px);">
    <a class="navbar-brand" href="{{ route('actionWebMain') }}">
      <img src="{{ asset('assets/images/logotype.png')}}" alt="" style="height: 80px;">
    </a>
  </div>
</nav>
@yield('content')
<style type="text/css">
	.custom-header {
		background: #fff !important;
	}

	.custom-header, .navbar-brand {
		padding: 0;
	}

	.owl-prev {
		width: 60px;
	    height: 60px;
	    background: rgba(0,0,0,0.3) !important;
	    border-radius: 25px;
	    position: absolute;
	    left: 50px;
	    bottom: 140px;
	}

	.owl-next {
		width: 60px;
	    height: 60px;
	    background: rgba(0,0,0,0.3) !important;
	    border-radius: 25px;
	    position: absolute;
	    right: 50px;
	    bottom: 140px;
	}

	.owl-next span, .owl-prev span {
		    color: white;
    font-size: 60px;
    line-height: 30px;
	}
</style>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('assets/owlcarousel/owl.carousel.min.js')}}"></script>
<script>
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin: 20,
	    responsiveClass:true,
	    autoHeight:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:1,
	            nav:true
	        },
	        1000:{
	            items:3,
	            nav:true,
	        }
	    }
	})
</script>
</html>