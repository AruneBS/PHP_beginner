<?php

if (empty($_SESSION['user'])) {
    header('Location: ?page=login');
    exit;
}

if (!empty($_POST)) {
print_r($_POST);

     $db->query(
        vsprintf(
            "INSERT INTO playlist(name, user_id) VALUES('%s', %d)",
            [$_POST['name'], $_SESSION['user']['id']]
        )
    );
    $id = $db->insert_id;

    foreach($_POST['song']  as $song_id){

    $db->query("INSERT INTO song_playlist(song_id, playlist_id) VALUES ({$song_id}, {$id})");
    }
    $db->query("UPDATE songs SET playlist_id = {$id} WHERE id= {$_POST['song']}");

    header('Location: index.php');
}

$playlist = $db->query("SELECT p.id, p.name, p.user_id, p.created_at, u.username FROM playlist AS p INNER JOIN users AS u ON u.id = p.user_id;");
$playlist = $playlist->fetch_all(MYSQLI_ASSOC);
$songs = $db->query("SELECT * FROM songs");
$songs = $songs->fetch_all(MYSQLI_ASSOC);
?>

<link href="/style/style.css" rel="stylesheet">
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($playlist as $list) :

        ?>
            <tr>
                <td><?= $list['id']; ?></td>
                <td><a href="?page=playlist&playlist_id=<?= $list['id']; ?>">
                        <?= $list['name'];?></a></td>
                <td><?= $list['username']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form method="POST">
    <h2>Create New Playlist</h2>
    <div class="mb-3">
        <label>Playlist Name:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Song</label>

      
            <?php foreach ($songs as $song) : ?>
                <div class= "form-check">
                <label>
        <input type="checkbox" name="song[]" class="form-check-input" value="<?=$song ['id'] ?>">
                <?= $song['title']; ?>
                </label>
                </div>
            <?php endforeach; ?>
        



    </div>
    <button class="btn btn-warning">Create Playlist</button>
</form>
</div>