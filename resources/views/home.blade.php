@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
                    <h1>ahora estas logeado</h1>
                    <h2>felicitaciones</h2>
=======

                    ahora estas logeado
                    <h1>probando cambios</h1>
>>>>>>> develop
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
