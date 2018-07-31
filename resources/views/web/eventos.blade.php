@extends('web.layouts')
@section('content')
@include('web.minav')
    <!--==========================
      Events Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Eventos</h3>
        </header>
        @foreach($posts as $post)
        <div class="row" style="background: #fff; padding: 15px 0px 15px 0px;">
          <div class="col-md-12">
            <p class="text-muted pull-right">
              <em>
                Publicado: {{ $post->created_at->format('l, j \d\e F, \d\e\l Y g:i A') }}
              </em>
            </p>
          </div>
          <div class="col-md-4">
            <img src="{{ $post->file }}" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-8">
            <h4><strong>{{ $post->name }}</strong></h4>
            <p>{{ $post->excerpt }}<br>
              <strong>Fecha: </strong>{{ $post->date }}<br>
              <strong>Hora: </strong>{{ $post->time }}<br>
              <strong>Lugar: </strong>{{ $post->place }}
              <a href="{{ route('evento',$post->slug) }}" class="btn btn-success pull-right">Leer más</a>
            </p>            
          </div>
        </div><hr>
        @endforeach
        {{ $posts->links('vendor/pagination/bootstrap-4') }}
      </div>
    </section>

@endsection