<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HelpingHand</title>
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
</head>

<body>
    <div class="Navbar">
        <div class="works">
            <ul class="Ullist">
                <a href="#" class="Logo-name">
                    <h1>Helping Hand Foundation</h1>
                </a>
                {{-- <ul class="Log">
                    <li class="Signup-menu"><a href="/signup">Sign-Up</a></li>
                    <li class="Login-menu"><a href="/login">Login</a></li>
                </ul> --}}
                <div class="All-menus">
                    <li class="Home-menu"><a href="/home">Home</a></li>
                    {{-- <li class="History-menu"><a href="#">History</a></li> --}}
                    <li class="Category-menu">
                        <a href="#">Category</a>
                        <ul class="dropdown">
                            <li><a class="dropdown-item" href="category/1">Pendidikan</a></li>
                            <li><a class="dropdown-item" href="category/2">Bencana</a></li>
                            <li><a class="dropdown-item" href="category/3">Penyakit</a></li>
                            <li><a class="dropdown-item" href="category/4">Bantuan</a></li>
                            {{-- @foreach ($categories as $category)

                            @endforeach --}}
                        </ul>
                    </li>
                    <li class="Profile-menu"><a href="/profile">Profile</a></li>
                    <li class="About-menu"><a href="/aboutus">About us</a></li>
                    {{-- <li class="Profile-menu"><a href="#">Profile</a></li> --}}
                </div>
            </ul>
        </div>
    </div>

    {{-- <div>
        @yield('Search')
    </div> --}}

    {{-- Bagian Quote --}}


    @yield('content')

    {{-- <div class="Body-Content-Donation">
        <h6 class="">Show Your Support</h6>
        <div class="Content-List">
            <ul class="Donation-List">
                <li class="Donation-image"></li>
                <li class="Donation-title"></li>
                <li class="Donation-description"></li>
                <li><a href=""><input type="button" value="More Details" id="detailsprod"></a></li>
            </ul>
        </div>
    </div> --}}


</body>

</html>
