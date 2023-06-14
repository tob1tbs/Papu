@extends('web.layout')

@section('content')
<div class="container" style="max-width: 100%;">
	<div style="height: calc(100vh - 90px); display: flex; align-items: center;">
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