<?php
if (!empty($_POST)){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $params = [
        'page' => 'login',
        'message' => 'Varotojas sėkmingai sukurtas',
        'status' => 'success'
    ];

    if($db->query(
    vsprintf("INSERT INTO users (email, name, username, password) VALUE('%s', '%s','%s', '%s')",
    [$email, $_POST['name'], $_POST['username'], $password]
    )
    )
    ){
header('Location: ?' .http_build_query($params));
    }
}
?>



<link href="style/style.css" rel="stylesheet">
<main class="form-signin w-100 m-auto ">
<form method="POST">
<div class="container col-md-6">
        
            <img class="mb-2" src="img/spotify.png" alt="" width="150" height="150">
            <h3 class="h5 mb-3 fw-normal">Please sign in with your email</h3>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" placeholder="name@gmail.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="name" name="name" class="form-control" placeholder="Jonas" required>
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="name" name="username" class="form-control" placeholder="username" required>
                <label for="floatingInput">Username</label>
            </div>
            <button class="w-100 btn btn-lg btn-info" type="submit">Sign in</button>
    </main>
</div>
</form>
    <!-- <div class="container">
    <div class= "mb-3">
        <label>Name</label>
        <input type="name" name="name" placeholder="Jonas" class="form-control" required>
    </div>
    <div class= "mb-3">
        <label>Email address</label>
        <input type="email" name="email" placeholder="test@gmail.com" class="form-control" required>
    </div>
    <div class= "mb-3">
        <label>Username</label>
        <input type="name" name="username" placeholder="JohnS" class="form-control" required>
    </div>
    <div class = "mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
<button class="btn btn-warning">Sign In</button> -->

