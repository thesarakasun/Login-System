<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>

<body>
  <?php
  include_once('header.php')
  ?>

  <section>
    <div class="container-md for mt-5 w-50 ">
      <form onsubmit="" action="dbfiles/login.php" method="POST">
        <div class="mb-3 text-center">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">
            Email address
          </label>
          <input type="email" class="form-control" id="email" name="email" required />

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="pass" name="pass" required onkeyup="" />
        </div>


        <div class='d-grid mt-3 pt-3  mx-auto'>
          <center>
            <button type="submit" class="btn btn-dark subm">Login</button>


          </center>
        </div>
        <div class='d-grid mt-3 pt-3 mx-auto'>
          <center>
            <h4 class="cer">Not registered yet ? <a href="signup.php" class="btn cer ms-3 btn-outline-dark">Register</a></h4>


          </center>
        </div>

        <?php
        if (isset($_GET['session'])) {
          echo ("<div class='alert alert-danger  d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                <div>
                  Please Login first....
                </div>");
        }
        ?>
        <?php
        if (isset($_GET['retry'])) {
          echo ("<div class='alert alert-danger  d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                <div>
                  Wrong Credentials :(
                </div>");
        }
        ?>



      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>