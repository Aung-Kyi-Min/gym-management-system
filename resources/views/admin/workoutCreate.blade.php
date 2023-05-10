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
                            <h3 class="card-title">Workout Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="">
                                <div class="mt-2">
                                    <input type="text" placeholder="Workout Name" name="name" class='form-control' />
                                </div>
                                <div class="mt-2">
                                    <input type="text" placeholder="Instructor Name" name="name" class='form-control' />
                                </div>
                                
                                <div class="mt-3">
                                    <select name="price" id="price" class="form-control">
                                    <option value="default" selected> Choose package </option>
                                        <option value="price"> basic package </option>
                                        <option value="price">standard package</option>
                                        <option value="price">premium package </option>
                                    </select>
                                </div>
                                
                                <div class="mt-2">
                                    <input type="file"  name="image" class='form-control' />
                                </div>

                                <div class="mt-2">
                                    <textarea id="my-textarea" placeholder=" Enter your message" name="description" rows="4" cols="40" class="form-control"></textarea>
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