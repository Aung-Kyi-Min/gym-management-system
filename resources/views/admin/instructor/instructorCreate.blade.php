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
                            <h3 class="card-title">Instructor Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('admin.store_instructor') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-3">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="Instructor Name" name="name" id="name" class='form-control' />
                                </div>
                                <small class="text-warning">{{$errors->first('name')}}</small>
                                
                                <div class="mt-3">
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="Email" name="email" id="email" class='form-control' />
                                </div>
                                <small class="text-warning">{{$errors->first('email')}}</small>

                                <div class="mt-3">
                                    <label for="price">Price</label>
                                    <input type="text" placeholder="Price" name="price" id="price" class='form-control' />
                                </div>
                                <small class="text-warning">{{$errors->first('price')}}</small>

                                <div class="mt-3">
                                    <label for="image">Image</label>
                                    <input type="file"  name="image" id="image" class='form-control' />
                                </div>
                                <small class="text-warning">{{$errors->first('image')}}</small>

                                <div class="mt-3">
                                    <label for="specialist">Specialist</label>
                                    <input type="text" placeholder="specialist" name="speciality" id="specialist" class='form-control' />
                                </div>
                                <small class="text-warning">{{$errors->first('speciality')}}</small>

                                <div class="mt-3">
                                    <label for="time">Time</label>
                                    <select name="access_time" id="time" class="form-control">
                                        <option value="morning">Morning Time</option>
                                        <option value="noon">Noon Time</option>
                                        <option value="evening">Evening Time</option>
                                    </select>
                                </div>
                                <small class="text-warning">{{$errors->first('access_time')}}</small>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary btn-sm float-end">Create</button>
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