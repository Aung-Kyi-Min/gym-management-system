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
                            <h3 class="card-title">Instructor Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ url('/admin/instructor/'.$instructor->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('put')}} 
                                <div class="mt-3">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="Instructor Name" name="name" id="name" class='form-control' value="{{$instructor->name}}" />
                                </div>
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                <div class="mt-3">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="Email" name="email" id="email" class='form-control' value="{{$instructor->email}}" />
                                </div>
                                <span class="text-danger">{{$errors->first('email')}}</span>

                                <div class="mt-3">
                                    <label for="price">Price</label>
                                    <input type="text" placeholder="Price" name="price" id="price" class='form-control'  value="{{$instructor->price}}" />
                                </div>
                                <span class="text-danger">{{$errors->first('price')}}</span>

                                <div class="mt-3">
                                    <label for="image">Image</label>
                                    <input type="file"  name="image" id="image" class='form-control' value="{{$instructor->image}}" />
                                </div>
                                
                                <span class="text-danger">{{$errors->first('image')}}</span>

                                <div class="mt-3">
                                    <label for="specialist">Specialist</label>
                                    <input type="text" placeholder="Specialist" name="speciality" id="speciality" class='form-control' value="{{$instructor->speciality}}" />
                                </div>
                                <span class="text-danger">{{$errors->first('speciality')}}</span>

                                <div class="mt-3">
                                    <label for="time">Time</label>
                                    <select name="access_time" id="time" class="form-control">
                                        <option value="morning">Morning Time</option>
                                        <option value="noon">Noon Time</option>
                                        <option value="evening">Evening Time</option>
                                    </select>
                                </div>
                                <div class="mt-4">
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