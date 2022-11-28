<?php
$password_length = $_GET["password"] ?? "";


include __DIR__ . "/partials/function.php";

if ($password_length === "") {
    $password_generated = "";
} else {
    $password_generated = randomPassword($password_length);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center bg-warning p-5">
        <h1 class="light">Generatore di Password</h1>
        <p></p>
        <form action="index.php" method="GET">
            <label for="password">
                <span class="pe-4">Lunghezza della password: </span>
                <input type="text" id="password" name="password">
                <button class="btn btn-primary" type="submit">Invia</button>
                <button class="btn btn-danger" type="reset">Resetta</button>
            </label>
        </form>
        <h3 class="pt-5">La tua password è: <?php echo $password_generated ?></h3>
        <div class="alert <?php echo $password_length !== "" ? "alert-success" : "alert-danger" ?>">
            <?php if ($password_length === "") {
                echo "inserisci la lunghezza della password";
            } else {
                echo "ecco la tua password";
            }
            ?>
        </div>
    </div>
</body>

</html>