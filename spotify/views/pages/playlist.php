<?php
if (empty($_SESSION['user'])) {
    header('Location: ?page=login');
    exit;
}

if (empty($_GET['playlist_id'])) {
    header('Location: index.php');
    exit;
}
if (isset($_GET['action']) and $_GET['action'] === 'delete') {
    $delete = $db->query("DELETE FROM playlist WHERE id = {$_GET['id']}");
}
$id = $_GET['playlist_id'];

$result = $db->query("SELECT * FROM playlist WHERE id = {$_GET['playlist_id']}");
$list = $result->fetch_assoc();

$result = $db->query(
    "SELECT s.id, s.photo, s.title, s.author, s.album, s.year, s.youtube_link, s.created_at
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
                    <td><a href="?page=playlist&action=delete&id=<?= $song['id']; ?>" class="btn-btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
                            </svg>
                        </a></td>

                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>