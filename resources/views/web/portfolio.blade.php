@extends('web.layouts')
@section('content')
@include('web.minav')
<section id="about"  class="section-bg" >
    <div class="container">
        <header class="section-header">
            <h3 class="section-title">PORTAFOLIO</h3>
        </header>
        @foreach($portfolios as $portfolio)
            <div class="row" style="background: #fff ">
                <div class="col-md-12">
                    <p class="text-muted pull-right">
                    <em>
                    {{-- <small>Publicado: {{ $portfolio->created_at }}</small> --}}
                    </em>
                    </p>
                </div>
                <div class="col-md-4">
                    @if($portfolio->film != "")
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $portfolio->film !!}
                        </div>
                    @else
                        <img src="{{ $portfolio->img }}" alt="" class="img-fluid rounded">
                    @endif
                </div>
                <div class="col-md-8">
                    <h4>{{ $portfolio->name  }}</h4>
                    <p>Recursos:</p>
                    {!! $portfolio->body !!}
                </div>
            </div>
        <hr><br>
        @endforeach
        {{ $portfolios->links('vendor/pagination/bootstrap-4') }}
    </div>
</section>
@endsection