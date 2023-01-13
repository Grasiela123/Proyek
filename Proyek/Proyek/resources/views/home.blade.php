@extends('layout')

@section('content')
    {{-- Bagian Quote --}}

    <div class="Body-Content">
        <div class="Content-Quote">
            <ul>
                <li><img src="https://img.freepik.com/premium-photo/hands-man-woman-reaching-each-other-support-giving-helping-hand-lending-helping-hand-solidarity-compassion-charity-rescue-hands-man-woman-blue-sky-background_293990-2799.jpg"
                        alt=""></li>
                <li class="Content-Text">

                    <div class="Sub-Text">
                        <ul>
                            <li class="Quote">
                                <h1>"The more we help others, the more we help ourselves"</h1>
                            </li>
                            <li>
                                <p>--Mohammad Ali--</p>
                            </li>
                        </ul>
                    </div>

                </li>
            </ul>
        </div>
    </div>

    {{-- Bagian List Donasi --}}

    <div class="Body-Content-Donation">
        <h6 class="">Show Your Support</h6>
        <div class="Content-List">
            @foreach ($donations as $donation)
                <ul class="Donation-List">
                    <li class="Donation-image"><img src="{{ $donation->image }}" alt=""></li>
                    <h3 class="Donation-title">{{ $donation->title }}</h3>
                    <li class="Donation-description">{{ $donation->ttl_donation }}</li>
                    <li><a href="donationdetail/{{$donation->id}}"><input type="button" value="More Details"
                                id="detailsprod"></a></li>
                </ul>
            @endforeach

        </div>

    </div>
@endsection
