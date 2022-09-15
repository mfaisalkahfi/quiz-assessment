@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    Hi! You are logged in!<br>
                    Untuk memulai Quiz, silahkan klik menu Start Test. <br>
                    Setiap soal harap dikerjakan dengan teliti dan seksama.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection