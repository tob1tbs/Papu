@extends('web.layout')

@section('content')
<div class="container" style="max-width: 1050px;">
	<div class="row">
		<div class="col-md-6 col-sm-12 mb-3">
			<div style="width: 100%; overflow: hidden; border-radius: 5px;">
				<a href="{{ route('actionWebGamesView', 'formula') }}?hash={{ request()->hash }}">
					<img src="https://fafu.ge/wp-content/uploads/2023/01/%E1%83%A5%E1%83%90%E1%83%95%E1%83%94%E1%83%A0%E1%83%98.png" alt="" class="img-fluid">
				</a>
				<span>ფაფუს სატესტო მოთხრობა</span>
			</div>
		</div>
	</div>
</div>
@endsection