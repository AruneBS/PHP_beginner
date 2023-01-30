<?php

scandir('./');


// $dir = './';

// if(isset($_GET['dir'])) {
//     $dir = $_GET['dir'];
// }

// if(isset($_POST['file name']) AND $_POST['file name'] != '') {
//     file_put_contents($dir . '/' . $_POST['file name'], $_POST['file contents'] );
// }
// $data = scandir($dir);
// ?>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $file){
                ?>
                <tr>
                    <td><?php (is_dir($folder))? '<a href="?dir=' .$folder .' ">' . $folder . '</a>' : $folder ?></td> 
                </tr>
           <?php } ?>

        </tbody>
    </table>

<form method="POST">
<div class = "mb-3">
    <label for="">File name</label>
    <input type="text" name="file name" class="form control"/>
</div>
<div class = "mb-3">
    <label for="">File contents</label>
    <input type="text" name="file contents" class="form control"/>
</div>
<button class="btn btn-primary">Add</button>
</form>
</div>
</body>

</html> -->