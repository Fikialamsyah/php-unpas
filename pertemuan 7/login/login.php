<?php
// cek apakah tombol submit sudah tekan atau belum
if(isset($_POST['submit'])){
    // cek apakah username & password
    if($_POST["username"] == 'admin' && $_POST["password"] == "123"){
        header("Location: admin.php");
        exit;
    } else {
        // jika salah 
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)):?>
        <p class="error">Username atau password salah</p>
    <?php endif; ?>    
    <ul>
    <form action="" method="POST">   
            <li>
                <label for="nama">username: </label>
                <input type="text" id="username" name="username">
            </li>
            <br>
            <li>
                <label for="nama">password: </label>
                <input type="password" id="password" name="password">
            </li>
            <br>
            <button type="submit" name="submit">login</button>
    </form>
    </ul>
</body>
</html>