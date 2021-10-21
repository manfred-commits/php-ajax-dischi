<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php 

require_once __DIR__ . "/./partials/database.php";
require_once __DIR__ . "/./partials/vars.php";
require_once __DIR__ . "/./partials/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link to font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- link to font style -->

    <!-- link to css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- /link to css -->

    <title>php-ajax-dischi</title>
</head>
<body>

    <?php require_once __DIR__ . "/./partials/template/header.php"; ?>
    <?php require_once __DIR__ . "/./partials/template/main.php"; ?>

</body>
</html>