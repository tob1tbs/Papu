@extends('web.layout')

@section('content')
<div class="container" style="max-width: 100%; margin-top: 10px;">
	<div>
		<div class="owl-carousel">
			<div>
				<a href="{{ route('actionWebGames') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/games.png')}}" alt="">
				</a>
			</div>
			<div>
				<a href="https://web.unitear.com/">
					<img src="{{ asset('assets/images/reality.png')}}" alt="">
				</a>
			</div>
			<div>
				<a href="{{ route('actionWebBook') }}?hash={{ request()->hash }}">
					<img src="{{ asset('assets/images/store.png')}}" alt="">
				</a>
			</div>
			<div>
				<a href="https://events.getsnappic.com/virtual/capture/g5w3j?">
					<img src="{{ asset('assets/images/photo.png')}}" alt="">
				</a>
			</div>
		</div>
	</div>
</div>
@endsection