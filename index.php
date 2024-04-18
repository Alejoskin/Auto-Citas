<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>User Login</title>
</head>
<body>
    
<form action="Login.php" method="POST">
    <h1>Login</h1>
    <hr>
<?php
if (isset($_GET['error'])){
    ?>
    <p class="error">
    <?php
    echo $_GET['error']
?>
    </p>
<?php
}
?>
</hr>
    <i class="fa-solid fa-user"></i>
    <label> User</label>
    <input type="text" name="User" placeholder="User Name">

    <i class="fa-solid fa-unlock"></i>
    <label> Password</label>
    <input type="text" name="Password" placeholder="Password">
<hr>
    <button type="submit">Log in</button>
    <a href="signup.php">Create Account</a>
</form>
</body>
</html>