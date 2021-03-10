@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address"  placeholder="Enter your Address"></textarea>                    
                </div>
                <div class="form-group">
                    <label for="payment">Payment Method</label><br>
                    <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br>
                    <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br>
                    <input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span><br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection
