<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>
    <?php
    session_start();

    date_default_timezone_set('Asia/Kolkata');
    // Check if the session 'user' is not set
    if (!isset($_SESSION['user'])) {
        // Redirect to login page if session is not set
        header('Location: ./index.php?session');
        exit();
    }

    // Get the current hour
    $hour = date('H'); // 'H' gives the hour in 24-hour format (00 to 23)

    // Set the appropriate greeting based on the current hour
    if ($hour >= 5 && $hour < 12) {
        $greeting = "Good Morning";
    } elseif ($hour >= 12 && $hour < 17) {
        $greeting = "Good Afternoon";
    } elseif ($hour >= 17 && $hour < 21) {
        $greeting = "Good Evening";
    } else {
        $greeting = "Good Night";
    }

    // Get the current time formatted as 'h:i A'
    $current_time = date('h:i A'); // Example: 02:30 PM

    // Output time aligned to the left and greeting with username aligned to the right
    echo "<div style='display: flex; justify-content: space-between;' class='bh'>
            <h4 style='text-align: left;'>$current_time</h4>
            <h4 style='text-align: right;'>$greeting, " . $_SESSION['user'] . "</h4>
          </div>";


          echo "<div class='sd' style='text-align: right; margin-top: 20px;'>
          <form method='POST' action='dbfiles/logout.php'>
              <button class='sd' type='submit' style='padding: 10px 20px; background-color: #ff4d4d; color: white; border: none; cursor: pointer;'>Logout</button>
          </form>
        </div>";      
    ?>


</br></br></br></br>
        <section class=" text-light p-5 ">
            <div class="container">
                <div class="d-sm-flex">
                    <img data-aos="zoom-out" data-aos-delay="50" data-aos-duration="1500" class="d-none d-lg-block" src="images/star.png" width="400px" height="350px">
                    <div data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" class="ms-auto "></br></br></br>
                        <!--desk abt me-->
                        <h1 class="text-dark ">About</h1>
                        <p class="lead text-dark ">
                            Lorem ipsum dolor sit amet consectetur</br> adipisicing elit. Ad molestias eos recusandae</br> consequuntur quia illum fugiat facilis quidem?</br> Minima quisquam voluptatem accusamus dolores!
                        </br><a href="projects.php" class="btn mt-3 btn-outline-dark ">Quote</a>
                        </p>

                    </div>

                </div>
            </div>

        </section>

        <style>
 .bh{
    background-color: pink;
    text-decoration:none;
  }

  a.bh{
    text-decoration:none;
    color: black;
  }

  .sd{
    border-radius: 100px;
  }
</style>
<center>
  <footer class="pb-2 bh pt-2 fixed-bottom">

<b>© Copyright</b>  | Designed and developed by </br><a class="bh" href="https://www.thesara.one"><b>Thesara Subasinghe</b> </a> </br>
</footer>

</center>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>