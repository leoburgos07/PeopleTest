@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h3>Creacion de premios</h3>
    <form action="{{url('createAward')}}" method="post">
        {!! csrf_field() !!}
        <div class="form-row container">
            <div class="form-group col-md-6">
                <label for="inputName">Nombre</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="inputName" name="inputName" required>
                <p id="msgNombre" class="warnings"></p>
            </div>
            <div class="form-group col-md-4">
                <label for="inputQuantoty">Cantidad</label>
                <input type="number" class="form-control" id="inputQuantoty" name="inputQuantoty" required>
                <p id="msgCel" class="warnings"></p>
            </div>
            <div class="col-md-2">
                <button type="submit" class=" btn btn-primary d-flex justify-content-center">Agregar</button>
            </div>
        </div>

    </form>
    <h3>Listado de premios</h3>
    <table class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad disponible</th>

            </tr>
        </thead>
        <tbody>
            @forelse($awards as $award)
            <tr>
                <td>
                    <a type="button" href="" data-toggle="modal" class="text-dark " onclick="listDetails({{$award}})">{{$award->name}}</a>
                </td>
                <td>{{$award->quantity}}</td>
            </tr>
            @empty
            <tr>NO hay nada</tr>
            @endforelse
        </tbody>
    </table>
    <div class="container">
        <div class="row justify-content-md-center">
          {{ $awards->appends(request()->query())->links("pagination::bootstrap-4") }}
        </div>
      </div>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Asingacion de premio {{$award->name}} {{$award->id}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('assignAward')}}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Nombre</label>
                            <span class="text-danger">*</span>
                            <input type="text" class="form-control" id="inputName" name="inputName" required>
                            <p id="msgNombre" class="warnings"></p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLastName">Apellidos</label>
                            <span class="text-danger">*</span>
                            <input type="text" class="form-control" id="inputLastName" name="inputLastName" required>
                            <p id="msgNombre" class="warnings"></p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Dirección</label>
                            <span class="text-danger">*</span>
                            <input type="text" class="form-control" id="inputAddress" name="inputAddress" required>
                            <p id="msgNombre" class="warnings"></p>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPhone">Teléfono</label>
                            <span class="text-danger">*</span>
                            <input type="number" class="form-control" id="inputPhone" name="inputPhone" required>
                            <p id="msgCel" class="warnings"></p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <span class="text-danger">*</span>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" required>
                            <p id="msgEmail" class="warnings"></p>
                        </div>

                        <input type="hidden" name="award" id="idAward" value="">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Asignar</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection