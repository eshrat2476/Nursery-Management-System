<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<head>
  <meta charset="UTF-8">

  @notifyCss

  <style>
    .notify {
      z-index: 1000000;
    }
  </style>



  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <x-notify::notify />



  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h1 class="mb-5">Admin Panel</h1>
              <form action="{{route('admin_login_post')}}" method="post">
                @csrf
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="typeEmail" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmail">Email</label>
                  @error('email')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="typePassword" class="form-control form-control-lg" />
                  <label class="form-label" for="typePassword">Password</label>
                  @error('password')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>

                <style>
                  .btn-primary {
                    background-color: #28a745;
                    /* Set the fixed background color */
                    border-color: #218838;
                    /* Set the fixed border color */
                    color:  #ffffff;
                    /* Set the fixed text color */
                  }
                </style>
                <button class="btn btn-primary btn-lg btn-primary " type="submit">Login</button>

                <hr class="my-4">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  @notifyJs


</body>

</html>