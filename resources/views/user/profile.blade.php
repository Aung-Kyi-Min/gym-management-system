@extends('layouts.layout')

@section('content')
<div class="container py-4 mt-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="profile-card-4">
                <div class="card">
                    <div class="card-body text-center bg-primary rounded-top shadow-sm">
                        <div class="container pt-4 bg-primary">
                            <img class="card-img-top rounded-circle img-circle bg-light" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">{{ $user->name }}</h4>
                                <p>
                                    @if ($user->role == 1)
                                        User
                                    @elseif ($user->role == 2)
                                        Admin
                                    @endif
                                </p>
                                <div class="custom-file">
                                    <input style="display:none" type="file" name="image" id="my-file">
                                    <button type="button" class="btn btn-outline-dark rounded-pill" onclick="document.getElementById('my-file').click()">Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-8 shadow-sm">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills nav-pills-primary nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active show" id="profile">
                            <h5 class="mb-3">{{ $user->name }}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Email</h6>
                                    <p>
                                    {{ $user->email }}
                                    </p>
                                    <h6>Role</h6>
                                    <p>
                                        @if ($user->role == 1)
                                            User
                                        @elseif ($user->role == 2)
                                            Admin
                                        @endif
                                    </p>
                                    <h6>Gender</h6>
                                    <p>
                                    {{ $user->gender}}
                                    </p>

                                    <h6>Age</h6>
                                    <p>
                                    {{ $user->age}}
                                    </p>
                                    <h6>Phone</h6>
                                    <p>
                                    {{ $user->phone}}
                                    </p>
                                    <h6>Address</h6>
                                    <p>
                                    {{ $user->address}}
                                    </p>
                                </div>

                            </div>
                            <!--/row-->
                        </div>

                        <div class="tab-pane" id="edit">
                            <form>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">ID</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="Enter ID" value="{{ $user->id }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="John" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" placeholder="aa@example.com" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" placeholder="Enter your passowrd">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">New Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" placeholder="Enter your new passowrd">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="gender">
                                            <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Age</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="20">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" placeholder="+95">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" placeholder="Yangon"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">

                                        <input type="button" class="btn btn-primary" value="Update">
                                        <input type="reset" class="btn btn-secondary" value="Cancel">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
