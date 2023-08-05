<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> mixer Drinks</title>
    
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
                        <img src="./drink/pineapple.jpeg" height="100%" width="100%">
                        <input type="submit"name ="oldmonk"value = "Pineapple juice" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/coconur.jpeg"  height="100%" width="100%">
                        <input type="submit"name ="cabo" value = "Coconut water" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/hot.jpeg"  height="100%" width="100%">
                        <input type="submit" name =" makazai"value = "Hot chocolate" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/soda.jpg"  height="100%" width="100%">
                        <input type="submit" name ="sagredo"value = "Club soda" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/ginger.jpg"  height="100%" width="100%">
                        <input type="submit" name ="amrut"value = "Ginger beer" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/fruitpunch.jpg"  height="100%" width="100%">
                        <input type="submit" name ="dowels" value = "Fruit punch" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/ice.jpg"  height="100%" width="100%">
                        <input type="submit" name ="hercules"value = "Ice cream" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/apple.jpg" height="100%" width="100%">
                        <input type="submit" name ="contessa"value = "Apple Juice" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/sprite.jpeg" height="100%" width="100%">
                        <input type="submit" name ="havana"value = "Sprite" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/sprk.jpeg" height="100%" width="100%">
                        <input type="submit" name ="bacardi"value = "Sparkling juice" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/lemon.jpg"  height="100%" width="100%">
                        <input type="submit" name ="morgan"value = "Lemonade" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/grape.jpg"  height="100%" width="100%">
                        <input type="submit" name ="malibu"value = "Grape fruit juice" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/cola.jpg"  height="100%" width="100%">
                        <input type="submit" name ="barcelo"value = "Coka cola" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/orange.jpg"  height="100%" width="100%">
                        <input type="submit" name ="dorado"value = "Orange juice" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/tonic.jpg"  height="100%" width="100%">
                        <input type="submit" name ="appleton"value = "Tonic water" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./drink/water.jpg "height="100%" width="100%">
                        <input type="submit" name ="zacapa"value = "Water" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>