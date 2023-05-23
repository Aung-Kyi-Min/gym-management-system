@extends('layouts.admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card pad">
                        <div class="card-header">
                            <h3 class="card-title">Admin Profile Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <form method="POST" action="{{ url('/admin/'.$loginuser->id.'/update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-2 clearfix">
                                    <img src="{{ asset('storage/images/admin/user/'.$loginuser->image) }}"  class="img-circle user_img elevation-2" alt="User Image">
                                    <label for="image" class="form-label upload">Upload</label>
                                    <input type="file" name="image" id="image" class="form-control img_upload" accept=".jpg, .jpeg, .png, image/*">
                                   
                                </div>
                                
                                <div class="mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="Admin Name" id="name" name="name" class='form-control' value="{{$loginuser->name}}"/>
                                    <span class="error">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="mt-2">
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="Email" id="email" name="email" class='form-control'  value="{{$loginuser->email}}"/>
                                    <span class="error">@error('email'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="password">Password</label>
                                    <input type="password" placeholder="****" id="password" name="password" class='form-control' />
                                    <span class="error">@error('password'){{$message}}@enderror</span>
                                </div>
                                
                                <div class="mt-2">
                                    <label for="textarea">Address</label>
                                    <textarea id="textarea" placeholder="Address" name="address" rows="4" cols="40" class="form-control">{{$loginuser->address}}</textarea>
                                    <span class="error">@error('address'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="male" {{ $loginuser->gender == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $loginuser->gender == 'female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                    <span class="error">@error('gender'){{$message}}@enderror</span>
                                </div>
                                <div class="mt-2">
                                <label class="col-lg-3 col-form-label form-control-label">Role</label>
                                    <select class="form-control" name="role">
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                    <span class="error">@error('role'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="age">Age</label>
                                    <input type="text" placeholder="Age" id="age" name="age" class='form-control' value="{{$loginuser->age}}" />
                                    <span class="error">@error('age'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="phone">Phone</label>
                                    <input type="text" placeholder="Phone" id="phone" name="phone" class='form-control' value="{{$loginuser->phone}}"/>
                                    <span class="error">@error('phone'){{$message}}@enderror</span>
                                </div>

                            
                                <div class="mt-5">
                                    <button type="submit" class=" btn btn-dark">
                                        Update
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

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif