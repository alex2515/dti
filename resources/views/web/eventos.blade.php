@extends('web.welcome2')
@section('content')
    <!--==========================
      Events Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Eventos</h3>
        </header>
        {{-- @foreach($posts as $post)
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong>{{$post->name}}</strong></h5><hr>
          </div>
          <div class="row" style="margin: 2px">
            <div class="col-md-6">
              <img src="{{$post->file}}" class="img-fluid" alt="Responsive image" style="max-width: 100%; height: auto">
            </div>
            <div class="col-md-6">
              {!! $post->excerpt !!}
            </div>
          </div><br>
        </div>
        <br>
        @endforeach
        <br> --}}
        {{-- @foreach($posts as $post)
        <div class="row" style="background: #fff; padding: 15px 0px 15px 0px;">
          <div class="col-md-4">
            <img src="{{ $post->file }}" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-8">
            <h3><strong>{{ $post->name }}</strong></h3>
            <p>{{ $post->excerpt }}</p>
            <a href="{{ route('evento', $post->slug) }}" class="btn btn-success pull-right">Ver mas</a>
          </div>
        </div><br>
        @endforeach --}}
        @foreach($posts as $post)
        <div class="row" style="background: #fff; padding: 15px 0px 15px 0px;">
          <div class="col-md-12">
            <p class="text-muted pull-right">
              <em>
                <small>Publicado: {{ $post->created_at }}</small>
              </em>
            </p>
          </div>
          <div class="col-md-4">
            <img src="{{ $post->file }}" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-8">
            <h4><strong>{{ $post->name }}</strong></h4>
            <p>{{ $post->excerpt }}<br>
              <strong>Fecha:</strong><br>
              <strong>Hora:</strong><br>
              <strong>Lugar:</strong>
              <a href="{{ route('evento',$post->slug) }}" class="btn btn-success pull-right">Ver mas</a>
            </p>

            
          </div>
        </div><hr>
        @endforeach
        {{ $posts->links('vendor/pagination/bootstrap-4') }}
      </div>
    </section>

@endsection