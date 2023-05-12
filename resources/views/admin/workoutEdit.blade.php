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
                            <h3 class="card-title">Workout Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="">
                                <div class="mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="Workout Name" id="name" name="name" class='form-control' />
                                </div>
                                <div class="mt-2">
                                    <label for="price">Price</label>
                                    <input type="text" placeholder="Price" id="price" name="price" class='form-control' />
                                </div>
                                
                                <div class="mt-2">
                                    <label for="image">Image</label>
                                    <input type="file" id="image"  name="image" class='form-control' />
                                </div>

                                <div class="mt-2">
                                    <label for="textarea">Description</label>
                                    <textarea id="textarea" placeholder="Workout Description" name="description" rows="4" cols="40" class="form-control"></textarea>
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