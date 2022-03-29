@extends('layouts.app')

@section('content')
<div class="container text-center">
    @if (Auth::user()->rols_id == 1)
        <h1>Ha entrado como <span class="text-success">Administrador</span></h1>
        <a href="{{route('listAwards')}}" class="btn btn-dark">Listar premios</a> 

    @else
    <h1>Ha entrado como <span class="text-primary">Usuario</span></h1>
    @endif
    <a href="{{ route('listBenefits') }}" class="btn btn-dark">Consultar beneficiarios</a>

    
</div>
@endsection
