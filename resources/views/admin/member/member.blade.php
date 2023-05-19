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
                        <div class="card-header clearfix">
                            <div class="left clearfix">
                                <h3 class="card-title list-header left">Member List</h3>
                                <a href="#" class="btn bg-gradient-primary margin-reset create-btn mt-3 right">Create</a>
                            </div>
                            <div class="card-tools search-header right clearfix">
                                <div class="input-group input-group-sm left" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control  float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>

                                </div>
                                <div class="right exim">
                                    <a href="{{ route('export.members') }}" class="btn btn-info btn-sm margin-reset mt-3" id="export-excel">Export</a>
                                    <a href="{{ route('import-member') }}" class="btn btn-primary btn-sm margin-reset mt-3">Import</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Instructor Name</th>
                                        <th>Workout Name</th>
                                        <th>Join Duration</th>
                                        <th>Amount</th>
                                        <th>Join Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hla Tun</td>
                                        <td>Kyar Gyi</td>
                                        <td>Boxing</td>
                                        <td>3 months</td>
                                        <td>450000</td>
                                        <td>9.5.2023</td>
                                        <td>9.7.2023</td>
                                        <td>
                                            <button type="button" class="btn bg-gradient-danger">Delete</button>
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