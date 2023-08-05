<?php 
 
session_start();
$demail = $_SESSION['email'];
if(isset($_SESSION['email']))
{  
   
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 

$product = $_SESSION["details"];
$updatequanityy = $_SESSION['quanity'];
$dquanity = $_SESSION['dquanity'];
$door = $_SESSION['door'];
$village = $_SESSION['village'];
$city =$_SESSION['city'];
$district =$_SESSION['district'];
$state = $_SESSION['state'];
$dprice = $_SESSION['dprice'];
$orderid = $_SESSION['order_id'];
if (isset($_POST['check']))
{
    include("config.php");
    $quanity = $_SESSION['quanity'];
    $dquanity = $_SESSION['dquanity'];
    $product = $_SESSION["details"];
    $dprice = $_SESSION['dprice'];
    $orderid = $_SESSION['order_id'];
    $door = $_SESSION['door'];
    $village = $_SESSION['village'];
    $city =$_SESSION['city'];
    $district =$_SESSION['district'];
    $state = $_SESSION['state'];

    

    $insert =  "INSERT INTO `order` (`id`, `email`, `quanity`, `product`, `price`, `order_id`, `door`, `village`, `city`, `district`, `state`) VALUES ('null','$demail','$dquanity','$product','$dprice','$orderid','$door','$village','$city','$district','$state');";
    $q = mysqli_query($con, $insert);
    if ($q)
    {
        $updatequanity = $quanity - $dquanity;
    $update = "UPDATE  product  set quanity ='$updatequanity'WHERE product_name = '$product'; ";
    $u = mysqli_query($con, $update);
    if($u)
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("orderd sucessfully");'; 
        echo 'window.location.href = "details.php";';
        echo '</script>'; 
    }
    }
    else
    {
        echo "<script>alert('error')</script>;";
    }
    
}
?>
<body class="confirm">
<form action="confirm.php" method="post">
<h2>confirm your order</h2>
<button class='back'><a href="details.php">back</a></button>
<!-- <a href="details.php"><button class="back">back</button></a> -->
                <table>
                    
                        
                        
                        
                    
                    <tr>
                        <th>email</th>
                        <th>:</th>
                        <td><?php echo $demail ;?></td>
                        
                    </tr>
                    <tr>
                        <th>product</th>
                        <th>:</th>
                        <td><?php echo $product ;?></td>
                    </tr>
                    <tr>
                        <th>quanity</th>
                        <th>:</th>
                        <td><?php echo $dquanity ;?></td>
                    </tr>
                    <tr>
                        <th>total price</th>
                        <th>:</th>
                        <td><?php echo $dprice ;?></td>
                    </tr>
                    <tr>
                        <th>order id</th>
                        <th>:</th>
                        <td><?php echo $orderid ;?></td>
                    </tr>
                    <tr>
                        <th>door no</th>
                        <th>:</th>
                        <td><?php echo $door ;?></td>
                    </tr>
                    <tr>
                        <th>village</th>
                        <th>:</th>
                        <td><?php echo $village ;?></td>
                    </tr>
                    <tr>
                        <th>city</th>
                        <th>:</th>
                        <td><?php echo $city ;?></td>
                    </tr>
                    <tr>
                        <th>district</th>
                        <th>:</th>
                        <td><?php echo $district ;?></td>
                    </tr>
                    <tr>
                        <th>state</th>
                        <th>:</th>
                        <td><?php echo $state ;?></td>
                    </tr>
                    <tr>
                        <th></th>
                        <th><input type="submit" name="check" class="checksubmit"></th>
                    </tr>
                </table>
            </form>

</body>
</html>
<?php 
}
else
{
    header("location:rum.php");
}
?>
 