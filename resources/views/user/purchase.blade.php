@extends('layouts.layout')
@section('content')
    <div class="container p-3 mt-2">

        <div class="row mt-3">
            <h3 class="text-center mb-3">Purchase Membership</h3>
            <div class="col-md-4">
                <h3>Discounts Promotion</h3>
            <table class="table table-striped mt-2 text-center">
                <thead class="bg-dark text-light">
                    <th>Min_month</th>
                    <th>Max_months</th>
                    <th>Discount Percentage</th>
                </thead>
                <tbody>

                        @foreach ($discount as $d)
                        <tr>
                            <td>{{$d->min_months}} month</td>
                            <td>{{$d->max_months}} months</td>
                            <td>{{$d->dis_percent}} %</td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
            <div class="col-md-8">
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
                                {{ $i->name }} { {{ $i->speciality }} , {{ $i->access_time }} }
                            </option>
                        @endforeach
                        @if ($errors->has('instructor'))
                            <span class="text-danger">{{ $errors->first('instructor') }}</span>
                        @endif
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
                    @if ($errors->has('join_duration'))
                        <span class="text-danger">{{ $errors->first('join_duration') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="joining_date">Joining Date</label>
                    <input type="date" id="joining_date" name="joining_date" class="form-control"
                        value="{{ old('joining_date') }}">
                </div>

                <div class="mb-3">
                    <label for="">Choose Payment</label>
                    <select name="payment" id="payment" class="form-control">
                        <option value="Online">Online </option>
                        <option value="Cash">Cash</option>
                    </select>
                    @if ($errors->has('payment'))
                        <span class="text-danger">{{ $errors->first('payment') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">See Details</button>
                    <a href="{{ route('user.index') }}" class="btn btn-dark">Back</a>
                </div>
            </form>
        </div>
        {{--<div class="col-md-4">--}}

        {{--</div>--}}
        </div>
    </div>
    </div>

    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>

    @if (Session::has('errors'))
        <script>
            swal("Message", "Hey , You Need to check Again...", 'success', {
                button: true,
                button: "Ok",
            });
        </script>
    @endif

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
