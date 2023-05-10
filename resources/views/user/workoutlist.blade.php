@extends('layouts.layout')

@section('content')
    <div class="container p-3 mt-5">
      <h2 class="text-center">Workout List</h2>
      <p></p>
      <div class="row justify-content-center">

      <div class="col-sm-5 card img-fluid border m-2 p-2 text-center" style="width:500px">
        <img class="card-img-top image" src="images/workout.jpg" alt="Card image" style="width:100%">
        <div class="middle">
         <div class="text"><a href="">Service 1</a></div>
        </div>
        <div class="card-body">
             <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p>
             <h4>200000 MMK</h4>

        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-primary">Start Membership</a>
        </div>

      </div>


      <div class="col-sm-5 card img-fluid border m-2 p-2 text-center" style="width:500px">
        <img class="card-img-top image" src="images/gym.webp" alt="Card image" style="width:100%">
        <div class="middle">
         <div class="text"><a href="">Service 2</a></div>
        </div>
        <div class="card-body">
             <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p>
             <h4>200000 MMK</h4>
        </div>
         <div class="card-footer">
            <a href="#" class="btn btn-primary">Start Membership</a>
        </div>
      </div>

      <div class="col-sm-5 card img-fluid border m-2 p-2 text-center" style="width:500px">
        <img class="card-img-top image" src="images/boxing.jpg" alt="Card image" style="width:100%">
        <div class="middle">
         <div class="text"><a href="">Service 3</a></div>
        </div>
        <div class="card-body">
             <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p>
             <h4>200000 MMK</h4>

        </div>

        <div class="card-footer">
            <a href="#" class="btn btn-primary">Start Membership</a>
        </div>

      </div>


      <div class="col-sm-5 card img-fluid border m-2 p-2 text-center" style="width:500px">
        <img class="card-img-top image" src="images/run.jpg" alt="Card image" style="width:100%">
        <div class="middle">
          <!-- <h4 class="card-title">Service 1</h4> -->
         <div class="text"><a href="">Service 4</a></div>
        </div>
        <div class="card-body">
             <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p>
             <h4>200000 MMK</h4>
        </div>
         <div class="card-footer">
            <a href="#" class="btn btn-primary">Start Membership</a>
        </div>
      </div>

    </div>
    </div>

@endsection
