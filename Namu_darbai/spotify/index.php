<?php
session_start();
try {
    $db = new mysqli('localhost', 'root', '', 'spotify');
} catch (Exception $mistake) {
    echo '<h2></h2>Impossible to connect </h2>';
    exit;
}
//  echo 'Code compiles';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rell="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="style/login.css" rel="stylesheet">
</head>


<body>
    <?php
include('views/format/header.php')
?>
    <div class="container">
        <?php if (isset($_GET['message'])) : ?>
            <div class="alert alert-<?= $_GET['status']; ?>">
                <?= $_GET['message']; ?>
            </div>

        <?php endif; ?>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : '';

        switch ($page) {
            case 'register':
                include './views/pages/register.php';
                break;
            case 'login':
                include './views/pages/login.php';
                break;
            case 'admin':
                include './views/pages/admin.php';
                break;
                case 'user_playlist':
                include './views/pages/user_playlist.php';
                break;
            case 'playlist':
                include './views/pages/playlist.php';
                break;
                case 'logout':
                    session_destroy();
                    include './views/pages/login.php';
                    break;
            default:
                include './views/pages/main.php';
        }
        ?>
    </div>
</body>

</html>