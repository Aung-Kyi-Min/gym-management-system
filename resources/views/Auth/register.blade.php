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
                            <input type="text" placeholder="Name" value="{{ old('name') }}" name="name" class='form-control' />
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="email" placeholder="Email" value="{{ old('email') }}" name="email" class='form-control' />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="password" placeholder="Password" value="{{ old('password') }}" name="password" /><br>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }} </span> 
                            @endif
                        </div>
                        <div>
                            <input type="password" placeholder="Comfirm Password" value="{{ old('password_confirmation') }}" name="password_confirmation" /> <br>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="number" placeholder="Phone Number" value="{{ old('phone') }}" name="phone" /><br>
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="text" placeholder="Address" value="{{ old('address') }}" name="address" /><br>
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="text" placeholder="Age" value="{{ old('age') }}" name="age" /><br>
                            @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                        </div>
                        <div class="mt-3">
                            <select name="gender" id="gender" class="selectbox form-control">
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <select name="role" id="role" class="selectbox">
                                <option value="0" {{ old('role') == '0' ? 'selected' : '' }}>Admin</option>
                                <option value="1" {{ old('role') == '1' ? 'selected' : '' }}>User</option>
                            </select>
                        </div>
                        <div>
                            <input type="file" name="image" />
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
    </section>
@endsection
