@extends('layouts.layout')

@section('content')

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container w-50">
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
                        <input type="number" placeholder="Phone Number" name="phone" />
                    </div>
                    <div>
                        <input type="text" placeholder="Address" name="address" />
                    </div>
                    <div>
                        <input type="text" placeholder="Age" name="age" />
                    </div>
                    <div class="mt-3">
                        <select name="select" id="gender" class="selectbox">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <select name="role" id="role" class="selectbox">
                            <option value="0">Admin</option>
                            <option value="1">User</option>
                        </select>
                    </div>
                    <div>
                        <input type="file"  name="image" />
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
  
 