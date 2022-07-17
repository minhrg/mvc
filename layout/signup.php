<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
crossorigin="anonymous"></script>   
<section class="vh-100 bg-image"

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form>

                <div class="form-floating">
                  <input type="email" name="login-id" class="form-control" id="floatingInput" placeholder="name@example.com"/>
                  <label for="floatingInput">Your name</label>
                </div>

                <div class="form-floating">
                  <input type="email" name="login-id" class="form-control" id="floatingInput" placeholder="name@example.com"/>
                  <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                  <input type="email" name="password" class="form-control" id="floatingInput" placeholder="name@example.com"/>
                  <label for="floatingInput">Password</label>
                </div>

                <div class="form-floating">
                  <input type="email" name="login-id" class="form-control" id="floatingInput" placeholder="name@example.com"/>
                  <label for="floatingInput">Repeat password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="w-100 btn btn-lg btn-primary">Register</button>
                </div>




              </form>
              <form action="log-in.php" method="post">
                  <p class="text-center text-muted mt-5 mb-0">You already have an account? 
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>