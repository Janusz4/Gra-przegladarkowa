<?php

  session_start();

  if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true){
    header('Location: gra.php');
    exit();
  }

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Osadnicy</title>
	<meta name="description" content="Gra przeglądarkowa.">
	<meta name="keywords" content="osadnicy, gra">
	<meta name="author" content="Janusz Siek">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

</head>

<body>

    <main>

  		<div class="container" style="min-height: 92vh;">
            <h1 class="logo">Osadnicy</h1>
            <h3 class="text-center">Odzyskiwanie hasła</h3>
            <div class="col-md-2"></div>
            <div class="main-div text-center bg-primary col-md-8">
              <form action="reset_request.php" method="post">
                <input type="text" name="email" placeholder="Podaj swój adres e-mail">
                <input type="submit" name="reset_request_submit" value="Odzyskaj hasło">
              </form>

              <?php
                if(isset($_GET["reset"])){
                  if($_GET["reset"] == "success"){
                    echo '<p class="mt-3">Sprawdź swój e-mail!</p>';
                  }
                }
              ?>
            </div>

        </div>

    </main>

    <footer>
        <div class="stopka py-3 text-center footer-bottom">
            Janusz Siek
        </div>
    </footer>

</body>
</html>
