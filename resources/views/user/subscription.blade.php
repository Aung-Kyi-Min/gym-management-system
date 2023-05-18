@extends('layouts.layout')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Subscription
        </div>
        <div class="card-body">
            <p>{{$workout}}</p>
            <p>{{$instructor}}</p>
            <p>{{$total}}</p>
        </div>
    </div>
</div>

@endsection
