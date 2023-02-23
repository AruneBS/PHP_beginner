<?php

if(empty ($_SESSION ['user'])OR $_SESSION['user']['role']=== '0') {
    header('Location: ?page=login');
    exit;
}

if(!empty($_POST)){
    $query = vsprintf(
        "INSERT INTO songs (title, author, album, year, youtube_link) VALUES ('%s', '%s', '%s', %d, '%s')",
$_POST
);

    $db->query($query);
}

$songs = $db->query("SELECT * FROM songs");
$songs = $songs->fetch_all(MYSQLI_ASSOC);


?>


<h1>Admin</h1>

<table class="table">
    <thead></thead>
    <tr>
        <th>ID</th>
        <th>Song title</th>
        <th>Author</th>
        <th>Album</th>
        <th>Year</th>
        <th>Youtube Link</th>
        <th>Date added</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($songs as $song) : ?>
            <tr>
                <td><?= $song['id'] ?></td>
                <td><?= $song['title'] ?></td>
                <td><?= $song['author'] ?></td>
                <td><?= $song['album'] ?></td>
                <td><?= $song['year'] ?></td>
                <td><?= $song['youtube_link'] ?></td>
                <td><?= $song['created_at'] ?></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>


<form method="POST">
<div class= "mb-3">
    <label for="">Song Name:</label>
    <input type="text" name="name" class="form-control">
</div>
<div class= "mb-3">
    <label for="">Song Author:</label>
    <input type="text" name="author" class="form-control">
</div>
<div class= "mb-3">
    <label for="">Album:</label>
    <input type="text" name="album" class="form-control">
</div>
<div class= "mb-3">
    <label for="">Year:</label>
    <input type="text" name="year" class="form-control">
</div>
<div class= "mb-3">
    <label for="">Youtube Link:</label>
    <input type="text" name="youtube_link" class="form-control">
</div>
<button class="btn btn-danger">Add song</button>
</form>