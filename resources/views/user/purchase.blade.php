@extends('layouts.layout')
@section('content')

<div class="container p-3 mt-2">
        <div class="mt-3 mx-auto w-50">
            <h2 class="text-center mb-3">Purchase Membership</h2>
            <form action="">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                </div>
                <div class="mb-3">
                    <label for="">Choose Workout</label>
                    <select name="workout" id="workout" class="form-control">
                        <option value="">Cardio</option>
                        <option value="">Gym</option>
                        <option value="">Boxing</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Choose Instructor</label>
                    <select name="instructor" id="instructor" class="form-control">
                        <option value="">David</option>
                        <option value="">Lewis</option>
                        <option value="">Willian</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Subscription Month</label>
                    <div class="quantity">
                        <span class="minus">-</span>
                        <input type="text" value="1">
                        <span class="plus">+</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="">Choose Payment</label>
                    <select name="payment" id="payment" class="form-control">
                        <option value="">Online </option>
                        <option value="">Cash</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    <a href="{{ route('user.index') }}" class="btn btn-dark">Back</a>
                </div>

            </form>
        </div>

    </div>

</div>

<script src="/js/jquery-3.4.1.min.js"></script>

<script>

    $(document).ready(function(){
  $('.minus').click(function () {
    var value = parseInt($(this).next('input').val());
    if (value > 1) {
        value = value - 1;
    } else {
        value = 1;
    }
    $(this).next('input').val(value);
  });
  $('.plus').click(function () {
    var value = parseInt($(this).prev('input').val());
    $(this).prev('input').val(value + 1);
  });
});

</script>
@endsection
