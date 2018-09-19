@extends('web.layouts')
@section('content')
@include('web.minav')
{{-- @if($posts->count() > 1) --}}
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
{{-- @else --}}
{{--   <section id="about">
    <div class="container">
      <header class="section-header">
        <h3>{{$post->name}}</h3>
      </header>
      
      <div class="row" style="background: #fff ">
        <div class="col-md-12">
          <strong>Categoría:</strong>
          <a class="badge badge-warning" href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
          <p class="text-muted pull-right">
            <em>
              Publicado: {{ $post->created_at->format('l, j \d\e F, \d\e\l Y g:i A') }}
            </em>
          </p>
        </div>
        <div class="col-md-12">
          <img src="{{$post->file}}" class="img-fluid rounded" alt="Responsive image" style="max-width: 100%; height: auto">
          <hr>
        </div>

        <div class="col-md-4">
          <p>
            <strong>Fecha: </strong>{{ $post->date }}<br>
            <strong>Hora: </strong>{{ $post->time }}<br>
            <strong>Lugar: </strong>{{ $post->place }}
          </p>
        </div>
        <div class="col-md-8">
          <p>{{ $post->excerpt }}<br>
        </div>
        <div class="col-md-12">
          <hr>
          {!! $post->body !!}
          <hr>
          <strong>Etiquetas:</strong> 
          @foreach($post->tags as $tag)
          <a class="badge badge-pill badge-info" href="{{ route('tag', $tag->slug) }}">
            {{ $tag->name }}
          </a>
        @endforeach
        </div>

        <hr>
        
      </div>

    </div>
  </section> --}}
{{-- @endif --}}


@endsection