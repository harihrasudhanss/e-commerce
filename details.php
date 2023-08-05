<?php 
 include("config.php");
 session_start();
 $demail = $_SESSION['email'];
 if(isset($_SESSION['email']))
 {
    echo "<div>".include("nav.php");"</div>";
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
//fetching  from product
$product = $_SESSION["details"];

$dbcheck = "select * from product where product_name = '$product';";
    $dbresult = mysqli_query($con,$dbcheck);
    if (mysqli_num_rows($dbresult)>0)
    {
        while ($row = mysqli_fetch_assoc($dbresult))
        {
            $product_name = $row['product_name'];
            $quanity = $row['quanity'];
            $_SESSION["quanity"] = $row['quanity'];;
            $price = $row['price'];
            $pid = $row['product_id'];
        }
    }
        
        if(isset($_POST["dsubmit"]))
        {
            global $quanity;
            $dquanity = $_POST['dquanity'];
            if($dquanity <= $quanity)
            {
            $_SESSION['dquanity'] = $_POST['dquanity'];
            $dquanity = $_POST['dquanity'];
            $_SESSION['door'] = $_POST['door'];
            $_SESSION['village'] = $_POST['village'];
            $_SESSION['city'] = $_POST['city'];
            $_SESSION['district'] =$_POST['district'];
            $_SESSION['state'] = $_POST['state'];
            $dprice =  $dquanity * $price;
            $_SESSION['dprice'] = $dprice;
            $_SESSION['order_id'] = rand(0,200000);

            header("location:confirm.php");
        }
            else
            {
                echo "<script>alert('check the stock availabilty');</script>";
            }
        }
        
    
    

    ?>
<body class="details">
    <form action="details.php" method="post">
    <h2>enter your order</h2>
        <table>
            <tr>
                <th>product</th>
                <th>:</th>
                <td><?php echo $product_name;?></td>
            </tr>
            <tr>
                <th> available quantity</th>
                <th>:</th>
                <td><?php echo $quanity;?></td>
            </tr>
            <tr>
                <th>quantity</th>
                <th>:</th>
                <td><input  type="number" name= "dquanity"  ></td>
            </tr>
            <tr>
                <th>price</th>
                <th>:</th>
                <td><?php echo $price ; ?></td>
            </tr>
            <tr>
                <th>door no</th>
                <th>:</th>
                <td><input type="text" name= "door" ></td>
            </tr>
            <tr>
                <th>village</th>
                <th>:</th>
                <td><input type="text" name= "village" ></td>
            </tr>
            <tr>
                <th>city</th>
                <th>:</th>
                <td><input type="text" name= "city" ></td>
            </tr>
            <tr>
                <th>district</th>
                <th>:</th>
                <td><input type="text" name= "district" ></td>
            </tr>
            <tr>
                <th>state</th>
                <th>:</th>
                <td><input type="text" name= "state" ></td>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" name="dsubmit" class= "detailssubmit"></th>
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
 
