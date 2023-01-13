@extends('layout')

@section('content')
    <div class="border-payment">
        <div class="container">
            <div class="centre-content">
                <h1 class="price">Payment</h1>
            </div>

            <hr class="new1">

            <div class="price-donation">
                <h2>My Donation</h2>
                <select class="price-select">
                    <option>Select Price</option>
                    <option>Rp.100.000</option>
                    <option>Rp.250.000</option>
                    <option>Rp.500.000</option>
                    <option>Rp.1.000.000</option>
                </select>
            </div>

            <div class="last-content">
                <button type="button" class="pay-now-btn">
                    Credit Card
                </button>
                <button type="button" class="pay-now-btn">
                    Other
                </button>
            </div>

            <div class="card-details">
                <a href="/paymentsuccess"><button type="submit" class="submit-now-btn">SUBMIT</button></a>
            </div>
        </div>
    </div>
@endsection
