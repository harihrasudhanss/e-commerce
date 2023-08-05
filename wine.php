<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wine</title>
    
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
                        <img src="./wine/penfolds.jpg" height="100%" width="100%">
                        <input type="submit"name ="oldmonk"value = "Penfolds" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/jnoon.jpeg"  height="100%" width="100%">
                        <input type="submit"name ="cabo" value = "Jnoon" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/dom.jpg"  height="100%" width="100%">
                        <input type="submit" name ="makazai"value = "Dom perignon" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/barefoot.png"  height="100%" width="100%">
                        <input type="submit" name ="sagredo" value = "Barefoot" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/sette.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="amrut" value = "Sette" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/yellowtail.png"  height="80%" width="50%">
                        <input type="submit" name ="dowels" value = "Yellow tail" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/cambernet.jpeg" alt="Hercules" height="100%" width="100%">
                        <input type="submit" name ="hercules"value = "Cabernet sauvignon" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/arrayan.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="contessa"value = " Arrayan albillo" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/meiomi.png" alt="Havana Club" height="80%" width="60%">
                        <input type="submit" name ="havana"value = "Meiomi pinot noir" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/gallo.png"  height="80%" width="60%">
                        <input type="submit" name ="bacardi"value = "Gallo family" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/casillero.png"  height="100%" width="100%">
                        <input type="submit" name ="morgan"value = "Casillero" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/blackboc.png" height="80%" width="60%">
                        <input type="submit" name ="malibu"value = "Black box" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSotgDT3s-AlK9oKmnU3l6tdKhHkNmqgGooatG0ymplHw&s"  height="100%" width="100%">
                        <input type="submit" name ="barcelo"value = "Big banyan" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/rose.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="dorado"value = "Granache rose" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/zampa.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="appleton"value = "Zampa soiree" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./wine/moil.jpg"  height="100%" width="100%">
                        <input type="submit" name ="zacapa"value = "Moilard grivot" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>