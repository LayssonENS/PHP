<?php

session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {

    $_SESSION['contador']++;
}
    $msg = "Você ja visitou este site " . $_SESSION['contador'] . " vezes nesta sessão. ";

if ($_SESSION['contador'] > 20) {
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador</title>
</head>

<body>
    <h1>
        <?php echo $msg; ?>
    </h1>
</body>

</html> 