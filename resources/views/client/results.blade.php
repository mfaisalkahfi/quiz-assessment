@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Score of your Quiz</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p>{{ session('status') }}</p>

                                    <a href="{{ route('client.test') }}" class="btn btn-primary">Start test again</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <p>You answered {{ $result->total_points }} questions correctly, out of {{ $question }} questions.</p>

                    <p>Total Your Score:</p><h1 style="color: blueviolet"> {{ $score }} </h1>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection