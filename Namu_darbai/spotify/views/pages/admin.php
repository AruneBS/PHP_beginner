<?php

if (empty($_SESSION['user']) or $_SESSION['user']['role'] === '0') {
    header('Location: ?page=login');
    exit;
}

if (isset($_GET['action']) and $_GET['action'] === 'delete') {
    $delete = $db->query("DELETE FROM songs WHERE id = {$_GET['id']}");
}


if (!empty($_POST)) {

    if(!isset($_FILES['photo'])){
        if(!is_dir('./uploads')){
            mkdir('./uploads');
        }

$filename= explode('.', $_FILES['photo']['name']);
$filename = time() . '.' . $filename[count($filename)-1];

$allowedTypes = ['image/jpeg' , 'image/png', 'image/gif' , 'image/webp'];

       if(!in_array($_FILES['photo']['type'], $allowedTypes)){
        $params = [
            
            'message' => 'Incorrect file format',
            'status' => 'danger'
        ];
        header('Location ?' . http_build_query($params));
        exit;
       }   
    
    move_uploaded_file($_FILES['photo']['tmp_name'], './uploads/' . $filename);
    

   
    $_POST['photo'] = $filename;

    }

    $query = vsprintf("INSERT INTO songs (title, author, album, year, youtube_link, photo) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
        $_POST);


    $db->query($query);
}


$songs = $db->query("SELECT * FROM songs");
$songs = $songs->fetch_all(MYSQLI_ASSOC);


?>


<h1>Admin</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Picture</th>
            <th>Song title</th>
            <th>Author</th>
            <th>Album</th>
            <th>Year</th>
            <th>Youtube Link</th>
            <th>Date added</th>
            <th>Delete</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($songs as $song) : ?>
            <tr>
                <td><?= $song['id'] ?></td>
                <td>
                    <img src="./uploads/<?= $song['photo'] ?>" alt = "photo" style="width: 30px;"></td>
                <td><?= $song['title'] ?></td>
                <td><?= $song['author'] ?></td>
                <td><?= $song['album'] ?></td>
                <td><?= $song['year'] ?></td>
                <td><?= $song['youtube_link'] ?></td>
                <td><?= $song['created_at'] ?></td>
                <td><a href="?page=admin&action=delete&id=<?= $song['id']; ?>" class="btn-btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
</svg>
                    </a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<form method="POST" class="admin" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Song Name:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Song Author:</label>
        <input type="text" name="author" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Album:</label>
        <input type="text" name="album" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Year:</label>
        <input type="text" name="year" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Youtube Link:</label>
        <input type="text" name="youtube_link" class="form-control">
    </div>
    <div class="mb-3">
        <label>Picture</label>
        <input type="file" name="photo" class="form-control">
    </div>
    <button class="btn btn-dark">Add song</button>
</form>