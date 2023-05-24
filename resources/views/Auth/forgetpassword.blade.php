@extends('layouts.layout')

@section('content')
    <section class="contact_section layout_padding">
        <div class="container w-50">
            <div class="heading_container">
                <h2>Forget Password Page</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('auth.forget') }}" method="POST">
                        @csrf
                        <div>
                            <input type="email" placeholder="Email" name="email" class='w-100 form-control' />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-dark">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
