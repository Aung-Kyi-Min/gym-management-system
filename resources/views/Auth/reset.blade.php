@extends('layouts.layout')

@section('content')

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container w-50">
        <div class="heading_container">
            <h2>Reset Password Page</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div>
                        <input type="email" placeholder="Email" name="email" class='form-control' />
                    </div>
                    <div>
                        <input type="password" placeholder="Password" name="password" class='form-control' />
                    </div>
                    <div>
                        <input type="password" placeholder="Comfirm Password" name="Comfirmpassword" class='form-control' />
                    </div>
                    
                    <div class="mt-5">
                        <button type="submit" class=" btn btn-dark">
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
  
 