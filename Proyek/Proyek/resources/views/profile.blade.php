@extends('layout')

@section('content')

    <div class="Body-Content-Profile">
        <h1>My Profile</h1>
        <div class="Content-Profile-List">
            <ul>
                <div class="Username-Content">
                    <li><h2>Username: </h2></li>
                    <li><h3>Nama saya</h3></li>
                </div>
                <div class="Email-Content">
                    <li><h2>Email: </h2></li>
                    <li><h3>Email saya</h3></li>
                </div>
                <div class="Phone-Content">
                    <li><h2>Phone Number: </h2></li>
                    <li><h3>Nomor saya</h3></li>
                </div>
                <div class="Password-Content">
                    <li><h2>Password: </h2></li>
                    <li><h3>Password saya</h2></li>
                </div>
                <li><a href="/passchange">Change password</a></li>
            </ul>
        </div>
    </div>

@endsection
