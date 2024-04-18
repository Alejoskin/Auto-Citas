
<?php
if(isset($_POST['submit'])){
include "conection.php";
$User =$_POST['user'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$Sql = "SELECT * FROM users WHERE Usuario ='$User'";
$result = mysqli_query($conection, $Sql);
$count_user = mysqli_num_rows($result);

if($count_user==0 ){
if($Password == $cpassword){
$hash = password_hash($Password, PASSWORD_DEFAULT);
$Sql = "INSERT INTO users (Usuario, Email, Password) values('$User',
'$Email', '$Password')";

$result = mysqli_query($conection, $Sql);

    header("Location: Index.php");
    echo '<script>alert("Succesful");
    window.location.href = "signup.php";
    </script>';
  
}
else{
echo '<script>
alert("Password do not match");
window.location.href = "signup.php";
</script>';

}
}
else{
   echo '<script>alert("User already exists!!!");
    window.location.href = "index.php";
    </script>';

}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>SignUp</title>
</head>
<body>
    


    
    <form name="form" action="signup.php" method="POST">
    <h1>Signup Form</h1>
    <hr>
        <label> Enter Username</label>
        <input type="text" id="user" name="user" required><br><br>

        <label> Enter Full Name</label>
        <input type="text" id="user" name="user" required><br><br>

        <label> Enter Email</label>
        <input type="email" id="email" name="email" required><br><br>

        <label> Enter Password</label>
        <input type="password" id="password" name="password" required><br><br>

        <label> Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" required><br><br>
<hr>
<button type="submit" id ="btn" value="Signup" name ="submit">Submit</button>

        
        <a href="index.php">Log In</a>
</form>

</body>
</html>