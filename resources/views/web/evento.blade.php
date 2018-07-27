@extends('web.welcome2')
@section('content')
    <!--==========================
      Events Section format('d-m-Y')
      format('D, M j, Y g:i A')
      createFromFormat
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>{{$post->name}}</h3>
        </header>
        
        <div class="row" style="background: #fff ">
          <div class="col-md-12">
            Categoría: <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
            <p class="text-muted pull-right">
              <em>
                <small>Publicado: {{ $post->created_at->formatLocalized('%A %d %B %Y') }}</small>
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
            Etiquetas: 
            @foreach($post->tags as $tag)
            <a href="{{ route('tag', $tag->slug) }}">
              {{ $tag->name }}
            </a>
          @endforeach
          </div>

          <hr>
          
        </div>

      </div>
    </section>

@endsection