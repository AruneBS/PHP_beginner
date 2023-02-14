<!-- M-- Model-->
<!-- V - View -->
<!-- C - Controler -->

<?php

// include_once './views/header.php';
// require_once './views/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parduotuve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include('./views/header.php');
  
    ?>

    <main>
        <?php
        //Paprasto routerio pavyzdys
        $page = isset($_GET['page']) ? $_GET['page'] : '';

        switch ($page) {
            case 'blog';
                include('./views/blog-items.php');
                break;
            default:
                include('./views/new-items.php');
        }

        // if(isset($_GET['page']) AND $_GET['page'] === 'blog') {
        //     include('./views/blog-items.php');
        // }else{
        //     include('./views/new-items.php');
        // }


        ?>
    </main>
    <?php include('./views/footer.php');

    ?>


</body>

</html>