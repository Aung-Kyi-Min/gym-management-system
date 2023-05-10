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
                            <h3 class="card-title">Instructor Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="">
                                <div class="mt-3">
                                    <input type="text" placeholder="Instructor Name" name="name" class='form-control' />
                                </div>
                                <div class="mt-3">
                                    <input type="text" placeholder="Specialist" name="specialist" class='form-control' />
                                </div>
                                <div class="mt-3">
                                    <input type="file"  name="image" class='form-control' />
                                </div>
                                <div class="mt-3">
                                    <select name="access time" id="time" class="form-control">
                                        <option value="morning">Morning Time</option>
                                        <option value="noon">Noon Time</option>
                                        <option value="evening">Evening Time</option>
                                    </select>
                                </div>
                                <div class="mt-4">
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