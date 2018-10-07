
    @extends('layouts.app')
    @section('content')


    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    	border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
    <section class="content-header">
      <h1>
        Galeria de imagenes
        <small>Lista de Galeria de imagenes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Galeria de imagenes</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary ">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Multimedia</h3>
                    </div>
                    <div class="box-body">
                        @can('galleries.create')
                        <form action="{{ route('galleries.store') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            <div class="row">
                                <div class="col-md-5">
                                    <strong>Título:</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Título para la foto">
                                </div>
                                <div class="col-md-5">
                                    <strong>Imagen:</strong>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <br/>
                                    <button type="submit" class="btn btn-success">Cargar</button>
                                </div>
                            </div>
                        </form>
                        @endcan


                        <div class="row">
                            <div class='list-group gallery'>


                                @if($images->count())
                                    @foreach($images as $image)
                                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                        <a class="thumbnail fancybox" rel="ligthbox" href="asset('/images/{{ $image->image }}')">
                                            <img class="img-responsive" alt="" src="asset('/images/{{ $image->image }}')" />
                                            <div class='text-center'>
                                                <small class='text-muted'>{{ $image->title }}</small>
                                            </div> <!-- text-center / end -->
                                        </a>
                                        @can('galleries.destroy')
                                        <form action="{{ route('galleries.destroy',$image->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="delete">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                                        </form>
                                        @endcan
                                    </div> <!-- col-6 / end -->
                                    @endforeach
                                @endif


                            </div> <!-- list-group / end -->
                        </div> <!-- row / end -->
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script src="{{ asset('adminlib/galeria/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
<!-- </html> -->
@endsection