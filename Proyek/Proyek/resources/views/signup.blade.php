<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="./main.css" rel="stylesheet">
    <link href="./bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>S
<body>
    <div class="container login text-center">
        <div class="card" style="width: 18rem;">
            <main class="form-signin w-100 m-auto">
                <form action="/signup" enctype="multipart/form-data" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Sign up</h1>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInput" placeholder="(5-20 Letters)" name="name">
                      <label for="floatingInput">Username</label>
                      @if($errors->has('name'))
                      <p>{{$errors->first('name')}}</p>
                      @endif
                    </div>

                    <div class="form-floating">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                      <label for="floatingemail">Email</label>
                      @if($errors->has('email'))
                      <p>{{$errors->first('email')}}</p>
                      @endif
                    </div>

                    <div class="form-floating">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="(5-20 letters)" name="password">
                      <label for="floatingPassword">Password</label>
                      @if($errors->has('password'))
                      <p>{{$errors->first('password')}}</p>
                      @endif
                    </div>

                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingPassword" placeholder="(10-13 numbers)" name="phoneNumber">
                      <label for="floatingphone">Phone Number</label>
                      @if($errors->has('phoneNumber'))
                      <p>{{$errors->first('phoneNumber')}}</p>
                      @endif
                    </div>

                    <p class="h6">Already Register? <a href="/login">Sign In Here</a></p>
                    <a href="/login" class="w-100 btn btn-lg btn-primary" type="submit">Submit</a>

                  </form>

              </main>
        </div>

    </div>

</body>
</html>
