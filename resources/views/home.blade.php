@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{ route('mail') }}" class="btn btn-success">Send Mail</a> <br> <br>

                    <div class="btn-group">
                        <a href="{{ route('monday.mail') }}" class="btn btn-primary">Monday</a>
                        <a href="{{ route('tuesday.mail') }}" class="btn btn-primary">Tuesday</a>
                        <a href="{{ route('wednesday.mail') }}" class="btn btn-primary">Wednesday</a>
                        <a href="{{ route('thursday.mail') }}" class="btn btn-primary">Thirsday</a>
                        <a href="{{ route('friday.mail') }}" class="btn btn-primary">Friday</a>
                        <a href="{{ route('saterday.mail') }}" class="btn btn-primary">Saterday</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
