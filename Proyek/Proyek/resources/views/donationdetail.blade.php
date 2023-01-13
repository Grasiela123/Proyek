@extends('layout')

@section('content')
    <div class="container">
        <img src="{{ $donation->image }}" alt="{{ $donation->title }}">
        <div class="donation-title">{{ $donation->title }}</div>
        <div class="donation-detail">{{ $donation->detail }}</div>
        <div class="donation-total">Total: {{ $donation->ttl_donation }}</div>
        <div class="donation-organization">{{ $donation->organization }}</div>
        <a href="/payment"><button type="button" class="donate">Donate</button></a>

    </div>
@endsection
