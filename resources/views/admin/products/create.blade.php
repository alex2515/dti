@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Servicios</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'products.store']) !!}

                        @include('admin.products.partials.form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div> 
@endsection