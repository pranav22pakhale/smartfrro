<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <span class="navbar-brand mb-0 h1 "><h1>Navbar</h1></span>
        <button tyep="submit" class="btn btn-danger">log out</button>
    </nav>

    <section>
        <div>
            <div class="w-100 p-3" style="background-color: #eee;">
              
              <?php

                    session_start();

                    echo "Name: ".$_SESSION["username"]."  ";
                    echo "Passport No: ".$_SESSION["passport_no"]; 

              ?>

            </div>
        </div>
    </section>


</body>
</html>