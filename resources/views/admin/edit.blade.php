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
                            <form action="">
                                <div class="mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="Admin Name" id="name" name="name" class='form-control' />
                                </div>
                                <div class="mt-2">
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="Email" id="email" name="email" class='form-control' />
                                </div>

                                <div class="mt-2">
                                    <label for="password">Password</label>
                                    <input type="password" placeholder="Password" id="password" name="password" class='form-control' />
                                </div>
                                
                                <div class="mt-2">
                                    <label for="image">Image</label>
                                    <input type="file" id="image"  name="image" class='form-control' />
                                </div>

                                <div class="mt-2">
                                    <label for="textarea">Address</label>
                                    <textarea id="textarea" placeholder="Address" name="address" rows="4" cols="40" class="form-control"></textarea>
                                </div>

                                <div class="mt-2">
                                    <input type="radio" style="width:30px;" value="Female" name="gender1" />
                                    Female
                                    <input type="radio" style="width:30px;"  value="male" name="gender2" />
                                    Male
                                </div>

                                <div class="mt-2">
                                    <label for="age">Age</label>
                                    <input type="text" placeholder="Age" id="age" name="age" class='form-control' />
                                </div>

                                <div class="mt-2">
                                    <label for="phone">Phone</label>
                                    <input type="text" placeholder="Phone" id="phone" name="phone" class='form-control' />
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