@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <div>
{{--                <h4>your name is{{ Auth::User()->name }}</h4>
                    <h4>Your Twitter handle is{{ Auth::User()->handle }}</h4>
                    <img src="User avatar" alt="{{ Auth::User()->avatar }}" height="200px" width="200px"> --}}
                </div>
            </div>
        </div>
</div>
@endsection
