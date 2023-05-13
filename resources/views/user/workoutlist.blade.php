@extends('layouts.layout')

@section('content')
    <div class="container p-3 mt-5">
      <h2 class="text-center">Workout List</h2>
      <div class="row justify-content-center">
        @for($i = 1 ; $i <=$workoutCounts ; $i++)
          <p>{{$i}}</p>
        @endfor
        @foreach ($workouts as $workout)
        <div class="col-sm-5 card img-fluid border m-2 p-2 text-center" style="width:500px">
          <img class="card-img-top image workout-img" src="{{asset('images/admin/workout/'.$workout->image)}}" alt="$workout->image">
          <div class="middle">
          <div class="text"><a href="">Service {{$workout->id}}</a></div>
          </div>
          <div class="card-body">
              <p class="card-text">{{$workout->description}}</p>
              <h4>{{$workout->price}}</h4>
          </div>
          <div class="card-footer">
              <a href="{{route('user.purchased')}}" class="btn btn-primary">Start Membership</a>
          </div>

        </div>
        @endforeach
      </div>
    </div>

@endsection
