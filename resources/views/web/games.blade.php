@extends('web.layout')

@section('content')
<div class="container" style="max-width: 810px;">
	<div class="row">
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'formula') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/formula.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'water-rush') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/skuteri.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'off-road') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/ofroudi.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'candy') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/qendi.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'viking') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/vikingebi.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'goalkeeper-challenge') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/mekare.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'basketball') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/kalatburti.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'piano') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/pianino.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'paint') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/xatva.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'math') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/aritmetika.png')}}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
	</div>
</div>
@endsection