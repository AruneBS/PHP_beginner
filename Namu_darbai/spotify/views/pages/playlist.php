<?php
if (empty($_SESSION['user'])) {
    header('Location: ?page=login');
    exit;
}

if (empty($_GET['playlist_id'])) {
    header('Location: index.php');
    exit;
}

$id = $_GET['playlist_id'];

$result = $db->query("SELECT * FROM playlist WHERE id = {$_GET['playlist_id']}");
$list = $result->fetch_assoc();

$result = $db->query(
    "SELECT s.id, s.title, s.author, s.album, s.year, s.youtube_link, s.created_at
FROM song_playlist AS sp 
JOIN songs AS s 
ON sp.song_id = s.id 
WHERE sp.playlist_id ={$id}"
);
$songs = $result->fetch_all(MYSQLI_ASSOC);


?>
    
<div class="playlist">
<h3><span style="color:darkorchid;">Songs in playlist "<?= $list['name']; ?>"</span></h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Album</th>
            <th>Year</th>
            <th>Youtube Link</th>
            <th>Date</th>
            <th>Remove</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($songs as $song) : ?>
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
</div>