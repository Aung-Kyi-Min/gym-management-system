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
                            <h3 class="card-title">Workout List</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workouts as $workout)
                                    <tr>
                                        <td>{{$workout->id}}</td>
                                        <td>{{$workout->name}}</td>
                                        <td>{{$workout->price}}</td>
                                        <td>
                                            <p class="width-text text-wrap">{{$workout->description}}</p>
                                            <p class="width-text text-wrap">{{$workout->image}}</p>
                                        </td>
                                        <td>
                                            <img class="img-width" src="{{ asset('storage/images/admin/workout/'.$workout->image) }}">
                                        </td>
                                        <td>
                                            <form action="{{route('admin.destroy_workout' , $workout->id)}}" method="post">
                                                @csrf
                                                <a href="{{route('admin.edit_workout' , $workout->id)}}" type="button" class="btn bg-gradient-primary">Edit</a>
                                                <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Workout?')">Delete</button>
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
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection