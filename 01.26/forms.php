<?php

// print_r($_GET);
print_r($_POST);


if(isset($_GET['m'])){
    $message = $_GET['m'];
    $class= $_GET['c'];
}
if (isset($_POST['first_name']) and
    isset($_POST['last_name']) and
    isset($_POST['subject']) and
    isset($_POST['message'])
) {
    if (
        $_POST['first_name'] === '' ||
        $_POST['last_name'] === '' ||
        $_POST['subject'] === '' ||
        $_POST['message'] === ''
    ) {
        $message = 'Netinkamai užpildyta forma';
        $class = 'alert-danger';
    } else {
        $data = implode(',', $_POST);
        file_put_contents('data.txt', $data);
        $message = 'Duomenys sėkmingai išsaugoti';
        $class = 'alert-success';

        header('Location: get.php?m='. $message . '&c=' . $class);
        exit;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rell="stylesheet" />
</head>

<body>
    <div class="container">
        <?php if (isset($message)) { ?>
            <div class="alert <?= $class ?>"> <?= $message ?></div>
        <?php } ?>
     <!-- //HTML formos turi du galimus duomenų persiuntimo metodus: -->
            <!-- GET ir POST// -->
        <form method="POST">
            <div class="mb-3">
                <label>Jūsų vardas</label>
                <input type="text" name="first_name" class="form-control" require />
            </div>
            <div class="mb-3">
                <label>Jūsų pavardė</label>
                <input type="text" name="last_name" class="form-control" require />
            </div>
            <div class="mb-3">
                <label>Užklausos tema</label>
                <input type="text" name="subject" class="form-control" require />
            </div>
            <div class="mb-3">
                <label>Jūsų žinutė</label>
                <textarea name="message" class="form-control" require></textarea>
            </div>
            <button class="btn btn-primary">Siųsti</button>
        </form>
    </div>
    <script>
    </script>
</body>

</html>