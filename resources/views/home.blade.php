@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Panel</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h3>¡Bienvenido(a) a la Dirección de Transferencia e Innovación!</h3>
                Preparamos algunos enlaces para que usted pueda comenzar:
                <a href="{{ route('blog') }}" class="btn">Ver mi sitio web</a>
            </div>
        </div>
    </div>
</div>
@endsection
