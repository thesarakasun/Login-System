<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Signup</title>
</head>

<body>
  <?php
  include_once('header.php')
  ?>

  <section>
    <div class="container-md for mt-5 w-50 ">
      <form onsubmit="return verifyPasswords()" action="dbfiles/enter.php" method="POST">
        <div class="mb-3 text-center">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">
            Email address
          </label>
          <input type="email" class="form-control" id="email" name="email" required />
          <div id="emailHelp" class="form-text">
            Your email is safe with us :)
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="pass1" name="pass" required onkeyup="hideError()" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Retype</label>
          <input type="password" class="form-control" id="pass2" required onkeyup="hideError()" />
        </div>

        <div class='d-grid mt-3  mx-auto'>
          <center>
            <button type="submit" class="btn btn-dark subm">Signup</button>
          </center>
        </div>

        <div class='d-grid mt-3 pt-3 mx-auto'>
          <center>
            <h4 class="cer">Already registered ? <a href="index.php" class="btn cer ms-3 btn-outline-dark">Login</a></h4>


          </center>
        </div>


        <div class="alert alert-danger mt-5" role="alert" id="error" style="visibility:hidden">
          Passwords Do Not Match
        </div>
        <?php
        if (isset($_GET['ok'])) {
          echo ("<div class='alert alert-success  d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                <div>
                  Successfuly registered... Please Login.
                </div>");
        }
        ?>

        <?php
        if (isset($_GET['fail']) && $_GET['fail'] == 'email_exists') {
          echo ("<div class='alert alert-danger d-flex align-items-center mt-3' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
            <div>
              This email is already registered. Please use a different email.
            </div>
          </div>");
        }
        ?>


      </form>
    </div>
  </section>

  <script>
    function verifyPasswords() {
      var p1 = document.getElementById("pass1").value;
      var p2 = document.getElementById("pass2").value;
      if (p1 != p2) {
        document.getElementById("error").style.visibility = "visible";
        return false;
      } else {
        return true;
      }
    }

    function hideError() {
      document.getElementById("error").style.visibility = "hidden";
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>