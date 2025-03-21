@extends('layout')
@section('titulo', 'Edit a ticket')
@section('contenido')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Editar ticket</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <form method="post">
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label for="titulo" class="col-lg-2 control-label">Título</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" value="{{ $ticket->titulo }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contenido" class="col-lg-2 control-label">Contenido</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="contenido" name="contenido">{{ $ticket->contenido }}</textarea>
                                <span class="help-block">Siente libre de expresarte.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="estado" {{ $ticket->estado?"":"checked"}}>¿Cerrar este ticket?
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection