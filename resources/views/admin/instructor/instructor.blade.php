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
                            <h3 class="card-title">Instructor List</h3>

                            <form action="{{ route('admin.search_instructor') }}" method="GET" class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request('search') }}">
                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
<<<<<<< HEAD
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Testing</td>
                                        <td>test@gmail.com</td>
                                        <td>09-23445579</td>
                                        <td>Other side of the universe</td>
                                        <td>Male</td>
                                        <td>23</td>
                                        <td>
                                            <button type="button" class="btn bg-gradient-danger">Delete</button>
                                        </td>
                                    </tr>
=======
                                        <th>Speciality</th>
                                        <th>Price</th>
                                        <th>Access Time</th>
                                        <th>Photos</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($instructors as $instructor)
                                    <tr>
                                        <td>{{ $instructor->id }}</td>
                                        <td>{{ $instructor->name }}</td>
                                        <td>{{ $instructor->email }}</td>
                                        <td>{{ $instructor->speciality }}</td>
                                        <td>{{ $instructor->price }}</td>
                                        <td>{{ $instructor->access_time}}</td>
                                        <td> <img src="{{ asset('images/' . $instructor->image) }}" width="50px" alt="Instructor Image"></td>
                                        <td>
                                            <button type="button" class="btn bg-gradient-primary">Edit</button>
                                            <button type="button" class="btn bg-gradient-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
>>>>>>> 56bff9f1a273151acbc1cbef6e8eee044307ed9b
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
<<<<<<< HEAD
=======
                    <div class="container"> 
                     {{ $instructors->links() }}
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
>>>>>>> 56bff9f1a273151acbc1cbef6e8eee044307ed9b
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<<<<<<< HEAD
=======


>>>>>>> 56bff9f1a273151acbc1cbef6e8eee044307ed9b
@endsection