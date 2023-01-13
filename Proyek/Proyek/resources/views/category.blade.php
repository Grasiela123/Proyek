@extends('layout')

@section('content')
    <div>
        <h3>{{ $categories->category }}</h3>
    </div>

    <div class="Body-Content-Donation">
        <div class="Content-List">
            @foreach ($categories->donation as $donation)
                <ul class="Donation-List">
                    <li class="Donation-image"><img src="{{ $donation->image }}" alt=""></li>
                    <h3 class="Donation-title">{{ $donation->title }}</h3>
                    <li class="Donation-description">{{ $donation->ttl_donation }}</li>
                    <li><a href="donationdetail/{{ $donation->id }}"><input type="button" value="More Details"
                                id="detailsprod"></a></li>
                </ul>
            @endforeach
        </div>
        <div class="Paginate">

        </div>
    </div>
@endsection
