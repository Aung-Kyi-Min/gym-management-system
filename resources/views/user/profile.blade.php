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
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">User</p>
                                <div class="custom-file">
                                    <input style="display:none" type="file" name="image" id="my-file">
                                    <button type="button" class="btn btn-outline-dark rounded-pill" onclick="document.getElementById('my-file').click()">Upload</button>
                                </div>
                                <!--/row-->
                            </div>

                            <div class="tab-pane" id="edit">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">ID</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" placeholder="Enter ID">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" placeholder="John">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" placeholder="aa@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                        <div class="custom-control custom-radio col-lg-3">
                                            <input type="radio" class="custom-control-input" id="customRadio"
                                                name="example1" value="Male">
                                            <label class="custom-control-label" for="customRadio">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio col-lg-3">
                                            <input type="radio" class="custom-control-input" id="customRadio"
                                                name="example1" value="Female">
                                            <label class="custom-control-label" for="customRadio">Female</label>
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
                                            <input class="form-control" type="text" value=""
                                                placeholder="+95">
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
                            <h5 class="mb-3">JOHN DOE</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Email</h6>
                                    <p>
                                        aaa@gmail.com
                                    </p>
                                    <h6>Role</h6>
                                    <p>
                                        User
                                    </p>
                                    <h6>Gender</h6>
                                    <p>
                                        Female
                                    </p>
                                    <h6>Age</h6>
                                    <p>
                                        45
                                    </p>
                                    <h6>Phone</h6>
                                    <p>
                                        09247874784
                                    </p>
                                    <h6>Address</h6>
                                    <p>
                                        No.44545,Yangon
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
                                        <input class="form-control" type="text" placeholder="Enter ID">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="John">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" placeholder="aa@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="custom-control custom-radio col-lg-6">
                                        <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="Male">
                                        <label class="custom-control-label" for="customRadio">Male</label>

                                        <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="Female">
                                        <label class="custom-control-label" for="customRadio">Female</label>
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
<<<<<<< HEAD
@endsection
=======
</div>
@endsection
>>>>>>> 2b6481a387177004fc3ec710f8b65732829134b8
