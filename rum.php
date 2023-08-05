<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rum</title>
    
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
                        <img src="./image/oldmonk.jpeg" alt=" old monk" height="100%" width="100%">
                        <input type="submit"name ="oldmonk"value = "old monk" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/cabo.jpg" alt=" cabo" height="100%" width="100%">
                        <input type="submit"name ="cabo" value = "Cabo" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/makazai.png" alt=" Makazai" height="100%" width="100%">
                        <input type="submit" name =" makazai"value = "Makazai" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/aldeia.jpeg" alt="Sagredo Aldeia" height="100%" width="100%">
                        <input type="submit" name ="sagredo"value = "Sagredo Aldeia" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/amrut.jpeg" alt="Amrut" height="100%" width="100%">
                        <input type="submit" name ="amrut"value = "Amrut" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/dowels.jpeg" alt="McDowell's" height="100%" width="100%">
                        <input type="submit" name ="dowels" value = "McDowell's" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/hercules.jpeg" alt="Hercules" height="100%" width="100%">
                        <input type="submit" name ="hercules"value = "Hercules" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/contessa.jpeg" alt="Contessa" height="100%" width="100%">
                        <input type="submit" name ="contessa"value = "Contessa" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/havana.jpg" alt="Havana Club" height="100%" width="100%">
                        <input type="submit" name ="havana"value = "Havana club" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/bacardi.jpeg" alt="Bacardi" height="100%" width="100%">
                        <input type="submit" name ="bacardi"value = "Bacardi" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/morgan.jpg" alt="Captain Morgan" height="100%" width="100%">
                        <input type="submit" name ="morgan"value = "Captain Morgan" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/malibu.jpeg" alt="Malibu" height="100%" width="100%">
                        <input type="submit" name ="malibu"value = "Malibu" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/barcelo.jpeg" alt="Barcelo" height="100%" width="100%">
                        <input type="submit" name ="barcelo"value = "Barcelo" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/dorado.png" alt="El Dorado" height="100%" width="100%">
                        <input type="submit" name ="dorado"value = "El Dorado" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/appleton.jpeg" alt="Appleton" height="100%" width="100%">
                        <input type="submit" name ="appleton"value = "Appleton" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./image/zacapa.jpeg" alt="Zacapa" height="100%" width="100%">
                        <input type="submit" name ="zacapa"value = "Zacapa" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</body>

</html>