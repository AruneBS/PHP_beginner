<?php
if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $user = $db->query("SELECT id, role FROM users WHERE username='{$username}' AND password = '{$password}'");
    // $user= select('users', 'id, role',[
    //     'username' => $username,
    //     'password' => $password
    // ]);


    $params = [
        'page' => 'login',
        'message' => 'Toks vartotojas nerastas arba blogai įvestas slaptažodis',
        'status' => 'danger'
    ];

    if ($user->num_rows === 0) {
        header('Location: ?' . http_build_query($params));
        exit;
    }
    $user = $user->fetch_row();
    $_SESSION['user']['id'] = $user[0];
    $_SESSION['user']['role'] = $user[1];

    header('Location:  index.php');
    exit;
}

?>


<div class="container col-md-6">
    <link href="style/style.css" rel="stylesheet">
    <main class="form-signin w-100 m-auto ">
        <form method="POST">
            <img class="mb-2" src="img/spotify.png" alt="" width="150" height="150">
            <h3 class="h3 mb-3 fw-normal">Please log in</h3>
            <div class="form-floating">
                <input type="name" name="username" class="form-control" placeholder="username" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-info" type="submit">Log in</button>

        </form>
    </main>
</div>