@extends('layouts.layout')

@section('content')

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container w-50">
        <div class="heading_container">
            <h2>Login Page</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('auth.loginUser') }}" method="POST">
                    @csrf
                    <div>
                        <input type="email" placeholder="Email" name="email" class='form-control' />
                    </div>
                    <div>
                        <input type="password" placeholder="Password" name="password"/>
                    </div>
                    <div>
                        <a href="{{route('auth.forgetpassword')}}" class="small ">Forget Password</a>

                    </div>
                    <div class="mt-5">
                        <button type="submit" class=" btn btn-dark">
                             Login
                        </button>
                    </div>
                    <div class="text-center">
                            Not a member? <a href="{{route('auth.register')}}" >Register</a>
                    </div>
                </form>
          </div>
        </div>
    </div>
  </section>
  <!-- end contact section -->
@endsection

