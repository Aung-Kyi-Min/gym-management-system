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
                            <h3 class="card-title">Admin Change Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <form method="POST" action="{{ url('/admin/password/{id}'.$loginuser->id.'/change') }}" >
                                @csrf
                               
                                <div class="mt-2">
                                    <label for="old_password">Old Password</label>
                                    <input type="password" placeholder="*******" id="old_password" name="old_password" class='form-control'/>
                                    <span class="error">@error('old_password'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="new_password">New Password</label>
                                    <input type="password" placeholder="********" id="new_password" name="new_password" class="form-control" value="{{ old('new_password') }}" />
                                    <span class="error">@error('new_password'){{$message}}@enderror</span>
                                </div>

                                <div class="mt-2">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" placeholder="********" id="confirm_password" name="confirm_password" class="form-control" value="{{ old('confirm_password') }}" required />
                                    @if ($errors->has('confirm_password'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('confirm_password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-dark ">
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-dark pr-4">
                                    <a href="{{ route('admin.edit', $loginuser->id) }}" class=" text-decoration-none text-white text-center">Back</a>
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

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif