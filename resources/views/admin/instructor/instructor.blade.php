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
                            <h3 class="card-title">Instructor List</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="{{ route('export.instructors') }}" class="btn btn-info btn-sm mt-3">Export</a>
                                <a href="{{ route('import-views') }}" class="btn btn-primary btn-sm">Import</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Speciality</th>
                                        <th>Price</th>
                                        <th>Access Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kyar Gyi</td>
                                        <td>test@gmail.com</td>
                                        <td>Boxing</td>
                                        <td>100000</td>
                                        <td>Morning</td>
                                        <td>
                                            <form>
                                                <a href="{{route('admin.edit_insturctor')}}" type="button" class="btn bg-gradient-primary">Edit</a>
                                                <button type="button" class="btn bg-gradient-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
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
