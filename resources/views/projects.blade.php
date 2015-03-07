

<div class="content">
	@if (Session::has('message'))

	<div class="flash alert-info">
	<p>{{ Session::get('message') }}</p>
	</div>

	@endif

	@yield('content')
</div>
