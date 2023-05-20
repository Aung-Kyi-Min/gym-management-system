@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="card w-75 mx-auto">
            <div class="card-header text-light bg-success">
                <h3 class="">Dear {{ $user->name }} ,</h3>
                <h4> Here is your purchase detail...</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.purchaseMember') }}" method="POST">
                    @csrf
                    <div class="mb-1">
                        <input type="hidden" name="name" value="{{ $user->id }}">
                    </div>
                    <div class="mb-1">
                        <label for="">Workout</label>
                        <p class="form-control" name="" value="{{ $workout->id }}">{{ $workout->name }}</p>
                        <input type="hidden" name="workout" value="{{ $workout->id }}">
                    </div>
                    <div class="mb-1">
                        <label for="">Instructor</label>
                        <p class="form-control" name="" value="{{ ($instructor == null) ? "" : "$instructor->id" }}"> {{ ($instructor == null) ? "-------" : "$instructor->name" }}</p>
                        <input type="hidden" name="instructor" value="{{ ($instructor == null) ? "" : "$instructor->id" }}">
                    </div>
                    <div class="mb-1">
                        <label for="">Join_duration</label>
                        <p class="form-control" name="" value="{{ $join_duration }}">{{ $join_duration }}</p>
                        <input type="hidden" name="join_duration" value="{{ $join_duration }}">
                    </div>
                    <div class="mb-1">
                        <label for="">Total Price</label>
                        <p class="form-control" name="" value="{{ $price }}">{{ $price }} kyts</p>
                        <input type="hidden" name="price" value="{{ $price }}">
                    </div>
                    <div class="mb-1">
                        <label for="">Payment</label>
                        <p class="form-control" name="" value="{{ $payment }}">{{ $payment }}</p>
                        <input type="hidden" name="payment" value="{{ $payment }}">
                    </div>
                    <div class="mb-1">
                        <label for="">Joining_date</label>
                        <p class="form-control" name="" value="{{ $joining_date }}">{{ $joining_date }}</p>
                        <input type="hidden" name="joining_date" value="{{ $joining_date }}">
                    </div>
                    <div class="mb-1">
                        <label for="">Ending_date</label>
                        <p class="form-control" name="" value="{{ $end_date }}">{{ $end_date }}</p>
                        <input type="hidden" name="end_date" value="{{ $end_date }}">
                    </div>
                    <button type="submit" class="btn btn-info">Purchase</button>
                    <a href="{{ route('member.purchase') }}" class="btn btn-secondary float-end">Reset</a>
                </form>
            </div>
        </div>
    </div>
@endsection
