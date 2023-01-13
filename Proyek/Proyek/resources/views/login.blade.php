<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./main.css" rel="stylesheet">
    <link href="./bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container login text-center">
        <div class="card" style="width: 18rem;">
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="POST">
                @csrf
                  <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>

                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <div class="text-center">
                    <p>Not a member? <a href="/signup">Register</a></p>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>

              </main>
        </div>

    </div>

</body>
</html>
