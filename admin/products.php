<?php
session_start(); 
if(isset($_SESSION['pass']))
{

?>
<link rel="stylesheet" href="style.css">
<?php 

    include ("adminnav.php");
    include ("config.php");
    $sql = "SELECT id,product_name ,quanity, product_id FROM product";
    $result = mysqli_query($con,$sql);
    echo "<br>";
    echo "<table  class='dashboard'>";
    echo "<tr>";
        echo "<th>"."s.no"."</th>";
        echo "<th>"."product name"."</th>";
        echo "<th> available quanity</th>";
        echo "<th>product id</th>";
        echo "</tr>";
    while ($row = mysqli_fetch_assoc($result))
    {
        
        echo"<tr>";

        foreach($row as $cfeild => $value)
        {
            echo "<td>".$value."</td>";
            
        }
        
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <form action="products.php" method="post">
        <input type="submit" name="deletebtn" class="deletebtn" value="Delete" >
    </form>
    <?php 
    if(isset($_POST['deletebtn']))  {?>
    
    <form action="products.php" method="post" class="delete-form">
        <legend>product remove form</legend>
        <br>
        <input type="text" name="productidd" placeholder="enter the product id" ><br><br>
        <input type="submit" name="bfd" value="Delete" class="submit">
        </feildset>
    </form>

    <?php }
    if(isset($_POST['bfd']))
    {
        $productid = $_POST['productidd'];
        if(empty($productid))
        {
            echo "<script>alert('enter the product id');</script>";
        }
        else
        {
            $search = "SELECT product_id FROM product WHERE product_id = '$productid';";
            $result = mysqli_query($con ,$search);
            $resultid = mysqli_fetch_array($result);
            if($resultid == 1)
            {
                $delete  = "DELETE FROM product where product_id = '$productid';";
                $d = mysqli_query($con,$delete);
                if($d)
                {
                    echo "<script>alert('deleted sucessfully');</script>";
                }
                else
                {
                    echo "<script>alert('product id not deleted');</script>";
                }
            }
            elseif($resultid>1)
            {
                echo "<script>alert('multi-products exists in same id');</script>";
            }
            else 
            {
                echo "<script>alert('product not found');</script>";
            }
        }
    }
    ?>
   
    
<?php 
}
else
{
    header("location:adminlogin.php");
}
?>





