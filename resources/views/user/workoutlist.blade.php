@extends('layouts.layout')

@section('content')
    <div class="container p-3 mt-5">
      <h2 class="text-center">Workout List</h2>
      <div class="row justify-content-center">
        @foreach ($workouts as $i => $workout)
        
        <div class="col-sm-5 card img-fluid border m-2 p-2 text-center" style="width:500px">
          <img class="card-img-top image workout-img" src="{{ asset('storage/images/admin/workout/'.$workout->image) }}" alt="{{$workout->image}}">
          <div class="middle">
          <div class="text"><a href="">Service {{$i+1}}</a></div>
          </div>
          <div class="card-body">
              <p class="card-text">{{$workout->description}}</p>
              <h4>{{$workout->price}}</h4>
          </div>
          <div class="card-footer">
              <a href="{{route('member.purchase')}}" class="btn btn-primary">Start Membership</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>

@endsection
