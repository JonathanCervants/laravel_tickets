@extends('layout')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Create a ticket</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <form method="post">
                    @csrf
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                     @endforeach
                    <fieldset>
                        <div class="form-group">
                            <label for="title" class="col-lg-2 control-label">Título</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="title" placeholder="Title" name="titulo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Contenido</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="contenido   " name="contenido"></textarea>
                                <span class="help-block">Detállanos tu problema, para diagnósticar mejor :D.</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-danger">Cancel</button>
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection