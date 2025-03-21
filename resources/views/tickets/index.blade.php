@extends('layout')
@section('content')

<div class="container col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="float-left"></h5>
        <div class="clearfix"></div>
      </div>
      <div class="card-body mt-2">
        @if($tickets->isEmpty())
            <p>No hay tickets :(..</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>TÍtulo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{$ticket->titulo}}</td>
                        <td>{{$ticket->estado?"No atendido" :"Atendido"}}</td>
                        <td>
                            {{-- <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                              </button> --}}
                            <a href="{{route('ticket.show', $ticket->slug)}}" class="btn btn-primary" title="Ver detalle"><img src="/list-columns-reverse.svg" alt="Ver detalle"></a>
                            <a href="{{route('ticket.edit', $ticket->slug)}}" class="btn btn-warning"><img src="/pencil-fill.svg" alt="Editar"></a>
                            <a href="{{route('ticket.delete', $ticket->slug)}}" class="btn btn-danger"><img src="/list-columns-reverse.svg" alt="Eliminar"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
      </div>  
    </div>
</div>
@endsection