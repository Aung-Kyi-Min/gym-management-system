@extends('layouts.layout')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="subscription" tabindex="-1" role="dialog" aria-labelledby="subscription" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-3 mt-2">

        <div class="mt-3 mx-auto w-50">
            <h2 class="text-center mb-3">Purchase Membership</h2>
            <form action="{{ route('get.price') }}" id="price-form" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <p class="form-control" name="name" value="{{ $user->id }}">{{ $user->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="">Choose Workout</label>
                    <select name="workout" id="workout" class="form-control">
                        <option>--Please choose Workout--</option>
                        @foreach ($workouts as $w)
                            <option value="{{ $w->id }}" {{ old('workout') == $w->id ? 'selected' : '' }}>
                                {{ $w->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Choose Instructor</label>
                    <select name="instructor" id="instructor" class="form-control">
                        <option>--Please choose Instructor--</option>
                        @foreach ($instructors as $i)
                            <option value="{{ $i->id }}" {{ old('instructor') == $i->id ? 'selected' : '' }}>
                                {{ $i->name }} { {{$i->speciality}} , {{$i->access_time}} }
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Subscription Month</label>
                    <div class="quantity">
                        <span class="minus">-</span>
                        <input type="text" value="{{ old('join_duration', 1) }}" id="join_duration"
                            name="join_duration">
                        <span class="plus">+</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="joining_date">Joining Date</label>
                    <input type="date" id="joining_date" name="joining_date" class="form-control" value="{{ old('joining_date') }}">
                </div>

                <div class="mb-3">
                    <label for="">Choose Payment</label>
                    <select name="payment" id="payment" class="form-control">
                        <option value="Online">Online </option>
                        <option value="Cash">Cash</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">See Details</button>
                    <a href="{{ route('user.index') }}" class="btn btn-dark">Back</a>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script src="/js/jquery-3.4.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.minus').click(function() {
                var value = parseInt($(this).next('input').val());
                if (value > 1) {
                    value = value - 1;
                } else {
                    value = 1;
                }
                $(this).next('input').val(value);
            });
            $('.plus').click(function() {
                var value = parseInt($(this).prev('input').val());
                $(this).prev('input').val(value + 1);
            });
        });

    </script>
@endsection
