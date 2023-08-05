<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
if(isset($_POST['adminsubmit']))
{
    session_start();
    $password = $_POST['password'];
    $_SESSION['pass'] = $password;
    $p = 1821;
    if($password == $p){
        header('location:admin.php');
    }
    else{
        echo "<script>alert('incorrect password');</script>";
    }
}
?>
<body class="alogin" >
    <form action="adminlogin.php" method="post">
        <input type="password" name="password" class="apass" placeholder="enter the password"> <br> <br>
        <input type="submit" name="adminsubmit" class="adminsubmit" >
    </form>
</body>
</html>