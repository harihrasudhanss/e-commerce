<?php 
session_start();
if(isset($_SESSION['email'])){
    header("location:index.php");
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
include("config.php");
session_start();
if(isset($_POST["isubmit"]))
{
    $email = $_POST["iemail"];
    $password = $_POST["ipass"];
    $_SESSION["email"] = $email;
    $dbcheck = "select email,password from register where email = '$email'&& password = '$password';";
    $dbresult = mysqli_query($con,$dbcheck);
    if (mysqli_num_rows($dbresult)>0){
        while ($row = mysqli_fetch_assoc($dbresult)){
            //  $_SESSION['username'] = $username;
            header("location:index.php");
        }
    }else {
        echo "<script>alert('ivalid email or password')</script>;";;
    
}
}
?>
<body class="ibody">
<div class="left">
        <img src="./image/Korina Claudia.png" alt="logo">
        <form action="sign.php" method="post">
            <table>
            <tr>
                <th>Email</th>
                <th>:</th>
                <td><input type="text" name="iemail" ></td>
            </tr>
            <tr>
                <th>Password</th>
                <th>:</th>
                <td><input type="password"  name="ipass" ></td>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <td><input type="submit" name="isubmit" value="login" class="isubmit"></td>
            </tr>
            <tr>
                <th>new user</th>
                <th></th>
                <td><a href="signup.php">Signup</a></td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>
<?php 
}?>