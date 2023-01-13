@extends('layout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="./pc.css" rel="stylesheet">
        <link href="./bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container login text-center">
            <div class="card" style="width: 18rem;">
                <main class="form-signin w-100 m-auto">
                    <form>
                        <h1 class="h3 mb-3 fw-normal">Change Password</h1>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingemail">Old Password</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingemail">New Password</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="(5-20 letters)">
                            <label for="floatingPassword">Confirm New Password</label>
                        </div>
                        <a href="/profile" class="w-100 btn btn-lg btn-primary" type="submit">Confirm Change</a>

                    </form>

                </main>
            </div>

        </div>

    </body>

    </html>
@endsection
