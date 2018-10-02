@extends('web.layouts')
@section('content')
@include('web.minav')
<section id="about">
	<div class="container">
		<header class="section-header">
			<h3>Eventos</h3>
		</header>
	@include('web.partials.eventos')
	{{ $posts->links('vendor/pagination/bootstrap-4') }}
	</div>
</section>
@endsection