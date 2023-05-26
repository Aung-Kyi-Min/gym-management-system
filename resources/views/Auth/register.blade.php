@extends('layouts.layout')

@section('content')
    <section class="contact_section layout_padding">
        <div class="container w-50">
            <div class="heading_container">
                <h2>Register Page</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('auth.registerUser') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div>
                            <input type="text" placeholder="Name" value="{{ old('name') }}" name="name" class='w-100 form-control' />
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="email" placeholder="Email" value="{{ old('email') }}" name="email" class='w-100 form-control' autocomplete="none"/>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="password" placeholder="Password" value="{{ old('password') }}" name="password" class='w-100 form-control'/>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }} </span>
                            @endif
                        </div>
                        <div>
                            <input type="password" class='w-100 form-control' placeholder="Comfirm Password" value="{{ old('password_confirmation') }}" name="password_confirmation" />
                        </div>
                        <div>
                            <input type="number" placeholder="Phone Number" value="{{ old('phone') }}" name="phone" class='w-100 form-control' /><br>
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="text" placeholder="Address" value="{{ old('address') }}" name="address" class='w-100 form-control' /><br>
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="text" placeholder="Age" value="{{ old('age') }}" name="age" class='w-100 form-control' /><br>
                            @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                        </div>
                        <div class="mt-3">
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Male
                                    <input type="radio" checked="checked" name="gender" value="male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <input type="hidden" name="role" id="role" value="1">
                        <div>
                            <input type="file" name="image" class='w-100 form-control'/>
                            {{--@if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif--}}
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="mb-5 btn btn-dark">
                                Register
                            </button>
                            <div class="text-center">
                                Already have an account ? <a href="{{ route('auth.login') }}" class="text-success">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
