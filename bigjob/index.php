<?php
require "./php/include/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/common.css">
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/9a09d189de.js" crossorigin="anonymous"></script>

    <title>Index</title>
</head>

<body>
    <header>
        <nav>
            <?php require './php/include/header-index.php' ?>
        </nav>
    </header>

    <main>
        <h1 class="">
            <?php
            if (isset($_SESSION['login'])) {
                echo "Bon retour ".strtoupper($_SESSION['login'])." !";
            }else{
                echo "Bienvenue cher inconnu !";
            }
            var_dump($_SESSION);
            ?>
        </h1>
    </main>
    <footer>
        <?php
        include "./php/include/footer.php"
        ?>
    </footer>
</body>

</html>