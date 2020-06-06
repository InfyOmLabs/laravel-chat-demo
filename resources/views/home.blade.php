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

                    <ul>
                        @foreach($users as $user)
                            <li>{{  $user->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Messages</div>

                <div class="card-body">
                    <ul>
                        @foreach($messages as $message)
                            <li>{{  $message->body }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
