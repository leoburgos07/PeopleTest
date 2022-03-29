@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h3>Listado de beneficiarios</h3>
    <table id="usersTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Premio otorgado</th>

            </tr>
        </thead>
        <tbody>
            @forelse($benefits as $benefit)
            <tr>
                <td>
                    {{$benefit->name}} {{$benefit->lastName}}
                </td>
                <td>
                    {{$benefit->phone}}
                </td>
                <td>
                    {{$benefit->address}}
                </td>
                <td>
                    {{$benefit->email}}
                </td>
                <td>
                    {{$benefit->award}}
                </td>

            </tr>
            @empty
            <tr>NO hay nada</tr>
            @endforelse
        </tbody>
    </table>
    
    <div class="container">
        <div class="row justify-content-md-center">
          {{ $benefits->appends(request()->query())->links("pagination::bootstrap-4") }}
        </div>
      </div>
    
</div>

@endsection