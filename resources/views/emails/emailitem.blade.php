<div class="" style="margin: 0;width: 550px;" >
	<div class="" style="height: 50px;background: #4fc34f;width: 100%;">
		<img src="{{ asset('/images/logo-koll.png') }}" />
	</div>

	<h3>Hello, {{ $user }}</h3>

	<p style="margin: 10px 0">
		{{ $body }}
	</p>
	<p style="margin: 10px 0">
		Click <a href="{{ $url }}">here</a> to respond.
	</p>

	<p style="margin: 10px 0">
		Good luck with your transaction!
	</p>

	<p style="margin: 20px 0">
		Your Buy and Sell Partner, <br/>
		Admin
	</p>

</div>
