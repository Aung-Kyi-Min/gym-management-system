@extends('layouts.layout')
@section('content')
    <div class="container mb-5 mt-5">
        <div class="w-75 mx-auto">
            <div class="card mt-5">
                <div class="card-header bg-success text-white text-center mb-3 ">
                    <h4>Thank You for Your Purchase!</h4>
                </div>
                <div class="card-body">
                    <h2 class="mb-5">Dear Customer,</h2>
                    <h4 class="text-info text-center">Your Payment has been successfully processed.</h4>
                    <p class="text-info text-center mb-5">We've sent a confirmation email to your inbox.</p>
                    <a href="{{ route('user.index') }}" class="btn btn-dark">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
