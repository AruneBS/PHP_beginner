<?php
// echo '<pre>';
// print_r($_SERVER);

// print_r($_POST);

$request_uri = explode('/', $_SERVER['REQUEST_URI']);

// print_r($request_uri);

$file_query =  $request_uri[count($request_uri) -1];

$result = explode('?' , $file_query);

$result=implode('?', $result);

print_r($result);



$dir = './';

if (isset($_GET['dir'])) {
    $dir = $_GET['dir'];
}

if(isset($_POST['file_name']) AND $_POST['file_name'] !=''){
    file_put_contents($dir . '/' . $_POST['file_name'], $_POST['file_contents']);
    header('Location: ' . $_SERVER['REQUEST_URI']);
}



$data = scandir($dir);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rell="stylesheet" />

</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $folder) { ?>
                    <tr>
                        <td><?= (is_dir($folder)) ? '<a href="?dir=' . $folder . '">' . $folder . '</a>' : $folder ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <h2>Create New File</h2>
        <form method="POST">
            <div class="mb-3">
                <label>File name</label>
                <input type="text" name="file_name" class="form-control" />
            </div>
            <div class="mb-3">
                <label>File contents</label>
                <textarea name="file_contents" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</body>

</html>