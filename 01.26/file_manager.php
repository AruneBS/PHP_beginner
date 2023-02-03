<?php
// echo '<pre>';
// // print_r($_SERVER);

// print_r($_POST);
// exit();

// $request_uri = explode('/', $_SERVER['REQUEST_URI']);

// // print_r($request_uri);

// $file_query =  $request_uri[count($request_uri) -1];

// $result = explode('?' , $file_query);

// $result=implode('?', $result);

// print_r($result);



$dir = './';
$back = '';


if (isset($_GET['dir']) and $_GET['dir'] != '') {
    $dir = $_GET['dir'];

    $path_array = explode('/', $dir);


    if ($dir != './') {
        if (count($path_array) > 1) {
            unset($path_array[count($path_array) - 1]);
            $back = implode('/', $path_array);
        } else {
            $back = './';
        }
        $back = '<tr> 
     <td><a href="?dir=' . $back . '">Back</a></td>
     <tr>';
    }
}

if (isset($_POST['data_type']) and $_POST['data_type'] === '1') {
    if (isset($_POST['folder_name']) and $_POST['folder_name'] != '') {
        mkdir($dir . '/' . $_POST['folder_name']);
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }
} else {

    if (isset($_POST['file_name']) and $_POST['file_name'] != '') {
        file_put_contents($dir . '/' . $_POST['file_name'], $_POST['file_contents']);
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }
}


$data = scandir($dir);

unset($data[0]);
unset($data[1]);
// print_r($data);


//Edit
// if(isset($_GET['edit']) AND $_GET['edit']) {
//     echo 'forma';
// }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rell="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <!-- <th></th> -->
                </tr>
            </thead>
            <tbody>
                <?= $back ?>
                <?php
                foreach ($data as $documents) {
                    $path = $dir . '/' . $documents;
                    if ($dir === './') {
                        $path = $documents;
                    }

                    //   echo $path = $dir . '/' . $folder;

                    $icon =  'folder';

                    $file_formats = [
                        'pdf' => 'file-earmark-pdf',
                        'txt => filetype-txt',
                        'jpg' => 'filetype-jpg',
                        'css' => 'filetype-css',
                        'exe' => 'filetype-exe',
                        'js' => 'filetype-js',
                        'json' => 'filetype-json',
                        'svg' => 'filetype-svg',
                        'png' => 'filetype-png',
                        'gif' => 'filetype-gif',
                        'php' => 'filetype-php'

                    ];

                    if (!is_dir($path)) {
                        $icon = 'file-earmark';



                        $filename = explode('.', $documents);
                        // print_r($filename);
                        $filename = $filename[count($filename) - 1];

                        if (array_key_exists($filename, $file_formats)) {
                            $icon = $file_formats[$filename];
                        }
                    }
                ?>
                    <tr>
                        <td>
                            <i class="bi bi-<?= $icon ?>"></i>
                            <?= (is_dir($path)) ? '<a href="?dir=' . $path . '">' . $documents . '</a>' : $documents ?>
                        </td>
                        <td><a href="?edit=<?= $path ?>">Edit</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <h2>Create New File/Folder</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Select data type</label>
                <select name="data_type" class="form-control">
                    <option value="1">Folder</option>
                    <option value="2">File</option>
                </select>
            </div>
            <div class="folder">
                <div class="mb-3">
                    <label>Folder name</label>
                    <input type="text" name="folder_name" class="form-control" />
                </div>
            </div>
            <div class="file">
                <div class="mb-3">
                    <label>File name</label>
                    <input type="text" name="file_name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>File contents</label>
                    <textarea name="file_contents" class="form-control"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
    <script>
        document.querySelector('.file').style.display = 'none';


        document.querySelector('[name="data_type"]').addEventListener('change', (e) => {
            if (e.target.value === '1') {
                document.querySelector('.file').style.display = 'none';
                document.querySelector('.folder').style.display = 'block';
            } else {
                document.querySelector('.file').style.display = 'block';
                document.querySelector('.folder').style.display = 'none';


            }
        });
    </script>
</body>

</html>