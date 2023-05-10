@extends('layouts.layout')

@section('content')

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Register Page</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div>
                        <input type="text" placeholder=" Name" name="name" class='form-control' />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email" class='form-control' />
                    </div>
                    <div>
                        <input type="password" placeholder="Password" />
                    </div>
                    <div>
                        <input type="password" placeholder="Comfirm Password" name="comfirmPassword" />
                    </div>
                    <div>
                        <input type="text" placeholder="Role" name="role" />
                    </div>
                    <div>
                        <input type="text" placeholder="Phone Number" name="phone" />
                    </div>
                    <div>
                        <input type="text" placeholder="Age" name="age" />
                    </div>
                    <div>
                        <input type="file"  name="image" />
                    </div>
                    <div class="d-flex justify-content-lg-start">
                        <input type="radio" style="width:30px;" value="Female" name="gender1" />
                        Female
                        <input type="radio" style="width:30px;"  value="male" name="gender2" />
                        Male
                    </div>
                    <div class="mt-5">
                        <button type="submit" class=" btn btn-dark">
                            Register
                        </button>
                    </div>  
                </form>
            </div>
        </div>
    </div>
  </section>
  <!-- end contact section -->
@endsection
  
 