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

    foreach ($_POST['song']  as $song_id) {

        $db->query("INSERT INTO song_playlist(song_id, playlist_id) VALUES ({$song_id}, {$id})");
    }
    // $db->query("UPDATE songs SET playlist_id = {$id} WHERE id= {$_POST['song']}");

    header('Location: index.php');
}

$playlist = $db->query("SELECT p.id, p.name, p.user_id, p.created_at, u.username FROM playlist AS p INNER JOIN users AS u ON u.id = p.user_id;");
$playlist = $playlist->fetch_all(MYSQLI_ASSOC);
$songs = $db->query("SELECT * FROM songs");
$songs = $songs->fetch_all(MYSQLI_ASSOC);

if (isset($_GET['action']) AND $_GET['action']=== 'delete') {
    $delete = $db->query("DELETE FROM playlist WHERE id = {$_GET['id']}"); 
   
}



?>
<div>
    <a href="?page=logout" class="btn btn-danger float-end">Log Out</a>
</div>

<aside>
    <form method="POST">
    <div class="main">
        <div class="container">
            <h2 style="color: darkorchid;">Playlists</h2>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Username</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($playlist as $list) :

                    ?>
                        <tr>
                            <td style="color:darkorchid;"><?= $list['id']; ?></td>
                            <td><a href="?page=playlist&playlist_id=<?= $list['id']; ?>">
                                    <?= $list['name']; ?></a></td>
                            <td><?= $list['username']; ?></td>
                            <td><a href="?page=main&action=delete&id=<?=$list['id']; ?>" class="btn-btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
</svg>
                        </a></td>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </form>
</aside>

<form method="POST" class="create" style="padding-left:100px;">
    <h2 style="color:deeppink;">Create New Playlist</h2>
    <div class="col-2">
        <label style="color:deeppink;">Playlist Name:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Song</label>
        <?php foreach ($songs as $song) : ?>
            <div class="form-check">
                <label>
                    <input type="checkbox" name="song[]" class="form-check-input" value="<?= $song['id'] ?>">
                    <?= $song['title']; ?>
                </label>
            </div>
        <?php endforeach; ?>

    </div>
    <button class="btn btn-dark ">Create Playlist</button>
</form>
</div>