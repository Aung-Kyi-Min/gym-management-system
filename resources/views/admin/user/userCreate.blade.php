@extends('layouts.admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('admin.store_user')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="User Name" id="name" name="name" class='form-control' />
                                    <span class="error">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="mt-2">
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="Email" id="email" name="email" class='form-control' />  
                                    <span class="error">@error('email'){{$message}}@enderror</span>                                 
                                </div>
                                
                                <div class="mt-2">
                                    <label for="password">Password</label>
                                    <input type="password" id="password"  name="password" class='form-control' />
                                    <span class="error">@error('password'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="phone">Phone</label>
                                    <input type="number" id="phone"  name="phone" class='form-control' />
                                    <span class="error">@error('phone'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="selectbox">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <span class="error">@error('gender'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="age">Age</label>
                                    <input type="number" id="age"  name="age" class='form-control' />
                                    <span class="error">@error('age'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="selectbox">
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                    <span class="error">@error('role'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="image">Image</label>
                                    <input type="file" id="image"  name="image" class='form-control' />
                                    <span class="error">@error('image'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="textarea">Address</label>
                                    <textarea id="textarea" placeholder="Address" name="address" rows="4" cols="40" class="form-control"></textarea>
                                    <span class="error">@error('address'){{$message}}@enderror</span>
                                </div>
                            
                                <div class="mt-5">
                                    <button type="submit" class=" btn btn-dark">
                                        Create
                                    </button>
                                </div>  
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection