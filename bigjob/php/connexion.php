<?php
require "./include/config.php";

if (isset($_POST['submit'])) {
    $login = htmlspecialchars($_POST['login']);
    $password = $_POST['password'];

    $recupUser = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
    $recupUser->execute([$login]);
    $result = $recupUser->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $passwordHash = $result['password'];
        if ($recupUser->rowCount() > 0 && password_verify($password, $passwordHash)) {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION = $result;
            header("Location: ../index.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/9a09d189de.js" crossorigin="anonymous"></script>

    <title>Connexion</title>
</head>

<body>
    <header>
        <nav>
            <?php require './include/header-include.php' ?>
        </nav>
    </header>
    <main>

        <form method="POST" action="" id="submitConnexion">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <p id="message" class="text-danger text-center"></p>
            <input type="submit" class="btn btn-primary" value="Se connecter" name="submit" id="button">
        </form>
    </main>

    <footer>
        <?php
        include "./include/footer.php"
        ?>
    </footer>
    <script src="../js/connexion.js"></script>
</body>

</html>