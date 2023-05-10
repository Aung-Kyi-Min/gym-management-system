@extends('layouts.layout')

@section('content')

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Forget Password Page</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div>
                        <input type="email" placeholder="Email" name="email" class='form-control' />
                    </div>
                    
                </form>
                <form action="{{route('auth.reset')}}">
                    <div class="mt-5">
                        <button type="submit" class="btn btn-dark">
                             Send
                        </button>
                    </div>  
                </form>
          </div>
        </div>
    </div>
  </section>
  <!-- end contact section -->
@endsection
  
 