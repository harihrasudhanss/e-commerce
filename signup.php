<?php
session_start();
if(isset($_SESSION['email']))
{
    header("location:index.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
include("config.php");
session_start();
if(isset($_POST["usubmit"]))
{
    $name = $_POST["uname"];
    $phone = $_POST["uphone"];
    $email = $_POST["uemail"];
    $password = $_POST["upass"];
    $confirmpassword = $_POST["ucpass"];
    $_SESSION['email'] = $email;

    //name
    if(empty($name))
    {
        echo "<script>alert('enter the name')</script>;";
    }
    elseif(strlen($name)>25)
    {
        echo "<script>alert('enter less than 25 characters')</script>;";
    }
    elseif( !preg_match("/^[a-zA-Z]*$/",$name))
    {
        echo "<script>alert('ivalid name')</script>;";

    }
    //mobile number
    elseif(empty($phone))
    {
        echo "<script>alert('enter mobile number')</script>;";    
    }
    elseif(strlen($phone )!=10)
    {
        echo "<script>alert('ivalid mobile number')</script>;";    
    }
    elseif (!preg_match("/^[0-9]*$/",$phone))
    {
        echo "<script>alert('ivalid mobile number')</script>;";
    }

    //email feild

    elseif(empty($email))
    {
        echo "<script>alert('enter email')</script>;";
    }
    //password
    elseif (empty($password)) {
        echo "<script>alert('enter password')</script>;";
    }
    elseif(strlen($password) <=5)
    {
        echo "<script>alert('password is not strong')</script>;";

    }
    //confirm password
    elseif($confirmpassword != $password)
    {
        echo "<script>alert('password & confirm password not matching')</script>;";
    }
    // email verification
    else 
    {
        $check_remail = "SELECT email,phone_number FROM register WHERE email = '$email' || phone_number = '$phone';";
        $result = mysqli_query($con ,$check_remail);
        $remailresult = mysqli_fetch_array($result);
        if ( $remailresult > 0)
        {
            echo "<script>alert('user already exist')</script>;";
        }
        //inserting to database
        else 
        {
            $insertreg = "INSERT INTO register(name,phone_number,email,password) VALUES('$name','$phone','$email','$password');";
                    $q = mysqli_query($con, $insertreg);
                    
                    if ($q) 
                    {
                        header("location:index.php");
                    }
        }
    }

    
     
}
?>
<body class="ubody">
    <div class="left">
        <img src="./image/Korina Claudia.png" alt="logo">
        <form action="signup.php" method="post">
            <table>
                <tr>
                    <th> name</th>
                    <th>:</th>
                    <td><input type="text" name="uname" > </td>
                </tr>
                <tr>
                    <th> mobile number</th>
                    <th>:</th>
                    <td><input type="text" name="uphone"> </td>
                </tr>
                <tr>
                    <th>email</th>
                    <th>:</th>
                    <td><input type="text" name="uemail"> </td>
                </tr>
                <tr>
                    <th> password</th>
                    <th>:</th>
                    <td><input type="password" name="upass"> </td>
                </tr>
                <tr>
                    <th> confirm password</th>
                    <th>:</th>
                    <td><input type="password" name="ucpass"> </td>
                </tr>
                <tr>
                    <th> </th>
                    <th></th>
                    <td><input type="submit" name="usubmit" value="register" class="usubmit"></td>
                </tr>
                <tr>
                    <th>already have a account </th>
                    <th></th>
                    <td><a href="sign.php">signin</a></td>
                </tr>
            </table>
        </form>
    </div> 
</body>
</html>
<?php 
}?>