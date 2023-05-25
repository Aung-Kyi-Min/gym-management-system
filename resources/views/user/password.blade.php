@extends('layouts.layout')

@section('content')

    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    <span>
                            User Profile
                    </span>
                </h2>
            </div>
            <div class="layout_padding2-top ">
                <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="#" method="POST">
                        @csrf
                        <div class="contact_form-container">
                            <div>
                                <input type="text" placeholder="Name" name="name" value="{{$user->name}}" readonly/>
                            </div>
                            <small class="text-danger">{{$errors->first('name')}}</small>
                            
                            <div>
                                <input type="email" placeholder="Email"  name="email" value="{{$user->email}}" readonly/>
                            </div>
                            <small class="text-danger">{{$errors->first('email')}}</small>

                            <div>
                                <input type="number" placeholder="Phone Number"  name="phone" value="{{$user->phone}}" readonly/>
                            </div>
                            <small class="text-danger">{{$errors->first('phone')}}</small>

                            <div>
                                <input type="text" placeholder="Can you give us some advice." name="message"/>
                            </div>
                            <small class="text-danger">{{$errors->first('message')}}</small>
                            
                            <div class="mt-5">
                                <button type="submit" class="btn btn-light btn-md">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/sweetalert.min.js"></script>
    @if (Session::has('success'))
      <script>
          swal("Message", "{{ Session::get('success') }}", 'success', {
              button: true,
              button: "Ok",
          });
      </script>
    @endif
@endsection

