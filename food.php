<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<?php 
session_start();
if(isset($_SESSION["email"]))
{
    if(isset($_POST["oldmonk"]))
    {
        $_SESSION["details"] = $_POST["oldmonk"];
        header("location:details.php");
    }
    elseif(isset($_POST["cabo"]))
    {
        $_SESSION["details"] = $_POST["cabo"];
        header("location:details.php");
    }
    elseif(isset($_POST["makazai"]))
    {
        $_SESSION["details"] = $_POST["makazai"];
        header("location:details.php");
    }
    elseif(isset($_POST["sagredo"]))
    {
        $_SESSION["details"] = $_POST["sagredo"];
        header("location:details.php");
    }
    elseif(isset($_POST["amrut"]))
    {
        $_SESSION["details"] = $_POST["amrut"];
        header("location:details.php");
    }
    elseif(isset($_POST["dowels"]))
    {
        $_SESSION["details"] = $_POST["dowels"];
        header("location:details.php");
    }
    elseif(isset($_POST["hercules"]))
    {
        $_SESSION["details"] = $_POST["hercules"];
        header("location:details.php");
    }
    elseif(isset($_POST["contessa"]))
    {
        $_SESSION["details"] = $_POST["contessa"];
        header("location:details.php");
    }
    elseif(isset($_POST["havana"]))
    {
        $_SESSION["details"] = $_POST["havana"];
        header("location:details.php");
    }
    elseif(isset($_POST["bacardi"]))
    {
        $_SESSION["details"] = $_POST["bacardi"];
        header("location:details.php");
    }
    elseif(isset($_POST["morgan"]))
    {
        $_SESSION["details"] = $_POST["morgan"];
        header("location:details.php");
    }
    elseif(isset($_POST["malibu"]))
    {
        $_SESSION["details"] = $_POST["malibu"];
        header("location:details.php");
    }
    elseif(isset($_POST["barcelo"]))
    {
        $_SESSION["details"] = $_POST["barcelo"];
        header("location:details.php");
    }
    elseif(isset($_POST["dorado"]))
    {
        $_SESSION["details"] = $_POST["dorado"];
        header("location:details.php");
    }
    elseif(isset($_POST["appleton"]))
    {
        $_SESSION["details"] = $_POST["appleton"];
        header("location:details.php");
    }
    elseif(isset($_POST["zacapa"]))
    {
        $_SESSION["details"] = $_POST["zacapa"];
        header("location:details.php");
    }
}
 else
{
    echo "<script>alert('signin to place a order');</script>";
}
?>
<body class="product">
    <div class = nav>
    <?php include("nav.php");
    ?>
    </div>
    <div class="grid-container">
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/peanut.jpeg" height="100%" width="100%">
                        <input type="submit"name ="oldmonk"value = "Peanuts" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/naan.jpeg"  height="100%" width="100%">
                        <input type="submit"name ="cabo" value = "Cheese galic naan" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/chickencrispy.jpg"  height="100%" width="100%">
                        <input type="submit" name =" makazai"value = "Chicken crispy" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/frenchfries.jpg"  height="100%" width="100%">
                        <input type="submit" name ="sagredo"value = "French fries" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/cheeselings.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="amrut"value = "Cheeselings" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/chck.jpg"  height="100%" width="100%">
                        <input type="submit" name ="dowels" value = "Ckicken 65" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/paneertika.jpg"  height="100%" width="100%">
                        <input type="submit" name ="hercules"value = "Paneer tikka" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/vegcrishpy.jpeg" height="100%" width="100%">
                        <input type="submit" name ="contessa"value = "Veg crispy" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/fishfry.jpg" height="100%" width="100%">
                        <input type="submit" name ="havana"value = "Fish fry" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/toast.jpg" height="100%" width="100%">
                        <input type="submit" name ="bacardi"value = "Chicken chili toast" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/pesto.jpg"  height="100%" width="100%">
                        <input type="submit" name ="morgan"value = "Pesto pasta" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/chocolate.jpg"  height="100%" width="100%">
                        <input type="submit" name ="malibu"value = "Chocolate lava cake" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/meatball.jpg"  height="100%" width="100%">
                        <input type="submit" name ="barcelo"value = "Sweet and sour meatballs" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/lamb.jpg"  height="100%" width="100%">
                        <input type="submit" name ="dorado"value = "Slow roast lamb" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/grilledsteak.jpg"  height="100%" width="100%">
                        <input type="submit" name ="appleton"value = "Grilled steak" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./food/delicious-onion-rings-with-sauce.jpg" height="100%" width="100%">
                        <input type="submit" name ="zacapa"value = "Onion rings" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>