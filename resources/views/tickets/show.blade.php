@extends('layout')
@section('title', 'Ver un ticket')
@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">{{ $ticket->titulo }}</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <p> {{ $ticket->contenido }} </p>
                <p> <strong>Estado</strong>: {{ $ticket->estado ? 'Pendiente' : 'Respondido' }}</p>
                <a href="{{route('ticket.edit', $ticket->slug)}}" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
        <div class="card mt-3">
            <form method="POST" action="/comentario">
                <fieldset>
                    <legend class="ml-3">Comentar</legend>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control"rows="3" id="contenido" name="contenido">
                            </textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-lg-12">
                            <text class="form-control">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </text>
                        </div>
                     </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection