@extends('layouts.admin_layout')
@section('admin_content')
<div class="bg-light d-flex align-items-center justify-content-center w-50 mx-auto mt-5 ">
    <div class="card w-75 bg-light mt-5">
        <div class="card-header text-center">
            <h4>Import And Export Instructors</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('import-views') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <div class="custom-file text-left">
                        <input type="file"  name="file" id="file" class='form-control' />
                    </div>
                </div>
                <button class="btn btn-primary">Import Instructors</button>
                <a class="btn btn-success" href="{{ route('export.instructors') }}">Export Instructors</a>
            </form>
        </div>
    </div>
</div>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery-3.6.3.min.js"></script>
<script src="../js/sweetalert.min.js"></script>

@if (Session::has('message'))
    <script>
        swal("Message", "{{ Session::get('message') }}", 'success', {
            button: true,
            button: "Ok",
        });
    </script>
@endif
@endsection
