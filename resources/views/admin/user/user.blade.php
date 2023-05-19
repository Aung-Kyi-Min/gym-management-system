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
                            <h3 class="card-title">User List</h3>
                            <a href="{{route('admin.create_user')}}"  class="btn bg-gradient-primary create-btn mt-3">Create</a>
                            <form action="" method="GET" class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ $search }}">

                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            </form>
                                <a href="{{ route('export.users') }}" class="btn btn-info btn-sm mt-3" id="export-excel">Export</a>
                                <a href="{{ route('importusers') }}" class="btn btn-primary btn-sm mt-3">Import</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 430px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Role</th>
                                        <th>Age</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>
                                            <p class="width-text text-wrap">{{$user->limitedAddress}}</p>
                                        </td>
                                        <td>{{$user->gender}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->age}}</td>
                                        <td>
                                            <img class="img-width" src="{{ asset('storage/images/admin/user/'.$user->image) }}">
                                        </td>
                                        <td>
                                            <form action="{{route('admin.destroy_user' , $user->id)}}" method="post">
                                                @csrf
                                                <a href="{{route('admin.edit_user' , $user->id)}}" type="button" class="btn-sm bg-gradient-primary">Edit</a>
                                                <button type="submit" name="delete" class="btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this User?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="center">{{$users->links()}}</div> 
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="/js/sweetalert.min.js"></script>
{{--<script src="js/jquery-3.4.1.min.js"></script>--}}
@if (Session::has('message'))
    <script>
        swal("Message", "{{ Session::get('message') }}", 'success', {
            button: true,
            button: "Ok",
        });
    </script>
@endif
@endsection
