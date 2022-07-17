<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
crossorigin="anonymous"></script>    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="login.php" method = "post">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="login-id" class="form-control 
      <?php if(isset($_SESSION['error']['login-id'])): ?>is-invalid<?php endif ?>" 
        id="floatingInput" placeholder="name@example.com" 
        value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['login-id'];}?>">
      <label for="floatingInput">Email address</label>
        <?php if(isset($_SESSION['error']['login-id'])):?>
        <div class="invalid-feedback">
            <?php echo $_SESSION['error']['login-id']?>
        </div>
    </div>
      <?php endif;?>
    <div class="form-floating">
<input type="password" name="password" class="form-control 
<?php if(isset($_SESSION['error']['password'])): ?>is-invalid<?php endif ?>"
         id="floatingPassword" placeholder="Password" 
         value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['password'];}?>" >
      <label for="floatingPassword">Password</label>
      <?php if(isset($_SESSION['error']['password'])):?>
        <div class="invalid-feedback">
            <?php echo $_SESSION['error']['password'];
            ?>
        </div>
    </div>
    <?php endif;?>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="remember-me" value="1"> Remember me
      </label>
      </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
  <form action="signup.php" method="post">
  <p class="mt-5 mb-3 text-muted"> You can also sign-up here</p>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
  </form>
  <p class="mt-5 mb-3 text-muted">&copy; 2018–2023</p>
  <?php
  session_unset();
  ?>
</main>    
  </body>
</html>