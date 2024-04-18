<?php

session_start();
include('conection.php');

if(isset($_POST['User']) && isset($_POST['Password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }

    $User = validate($_POST['User']);
    $Password = validate($_POST['Password']);

if (empty($User)) {
    header("Location: Index.php?error=El Usuario es Requerido");
    exit();
}elseif (empty($Password)){
    header("Location: Index.php?error=El Password es Requerido");
    exit();
}else{

   // $Password = md5($Password);

    $Sql = "SELECT * FROM users WHERE Usuario = '$User' AND Password = '$Password'";
    $result = mysqli_query($conection, $Sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['Usuario'] === $User && $row['Password'] === $Password)
        {
           $_SESSION['Usuario']  = $row['Usuario'];
           $_SESSION['Nombre_Completo']  = $row['Nombre_Completo'];
           $_SESSION['id']  = $row['id'];
           header("Location: Home.php");
           exit();
        }else{
            header("Location: Index.php?error=El usuario o el password es incorrecto");
            exit();
        }
    }else{
        header("Location: Index.php?error=El usuario o el password es incorrecto");
        exit();
    }
}
}else{
    header("Location: Index.php");
    exit();
}