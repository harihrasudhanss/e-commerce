<?php 
session_start();

if(isset($_SESSION['pass']))
{
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
include("config.php"); 
if(isset($_POST['a_submit']))
{
    $product = $_POST["product"];
    $quanity = $_POST["quanity"];
    $price = $_POST["price"];
    $pid = $_POST["pid"];
    $image = $_POST["image"];


    if(empty($product))
    {
        echo "<script>alert('enter the product name');</script>";
    }
    elseif (!preg_match("/^[a-z A-Z]*$/",$product))
    {
        echo "<script>alert('enter the valid product name');</script>";
    }
    // elseif(empty($quanity))
    // {
    //     echo "<script>alert('enter the quanity');</script>";
    // }
    elseif (!preg_match("/^[0-9]*$/",$quanity))
    {
        echo "<script>alert('enter the valid quanity');</script>";
    }
    elseif(empty($price))
    {
        echo "<script>alert('enter the price');</script>";
    }
    elseif (!preg_match("/^[0-9]*$/",$price))
    {
        echo "<script>alert('enter the valid price');</script>";
    }
    elseif (empty($pid))
    {
        echo "<script>alert('enter the product id');</script>";
    }
    
    else 
    {
        
        $sql = "select product_name  ,quanity from product where product_name = '$product' ;" ;
        $quantity_check = mysqli_query($con,$sql);
        if (mysqli_num_rows($quantity_check)>0)
        {
            while ($row = mysqli_fetch_assoc($quantity_check))
            {
                $quantityadd = $row['quanity'];
            }
            
            
            $quanityadded = $quanity + $quantityadd;
            // echo $quanityadd;
            $update = "update product  set quanity = '$quanityadded', price = '$price' where product_name = '$product';";
            $q = mysqli_query($con, $update);
            
            if ($q) 
            {
                echo "<script>alert('updated');</script>";
            }
        }
        else 
        {
            $insert = "insert into product (product_name,quanity,price,product_id) VALUES('$product','$quanity','$price','$pid')";
            $q = mysqli_query($con, $insert);
            
            if ($q) 
            {
                echo "<script>alert('inserted');</script>";
            }

        }
    }
}
?>
<body>
    <?php include('adminnav.php');?>
    <form action="admin.php" method="post" class="addform">
        <legend >add products</legend>
        <feildset>
        <input type="text" class="product" name="product" placeholder="product name"> <br><br>
        <input type="text" class =" quantity" name="quanity" placeholder=" quanity"> <br><br>
        <input type="text" class="price" name = "price" placeholder="price" > <br><br>
        <input type="text" class="pid" name = "pid" placeholder="product id" > <br><br>
        <!-- <input type="text" class="image" name = "image" placeholder="image loction"> --> 
        <input type="submit" class="submit" name="a_submit">
        </feildset>
    </form>
    
   
    
    
    
</body>
</html>
<?php 
}
else
{
    header("location:adminlogin.php");
}
?>