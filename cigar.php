<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cigar</title>
    
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
                        <img src="./cigar/afuente.jpeg"  height="100%" width="100%">
                        <input type="submit"name ="oldmonk"value = "Arturo fuenteau" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/cohiba.jpeg" height="100%" width="100%">
                        <input type="submit"name ="cabo" value = "Cohiba" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/romeo.png"  height="100%" width="100%">
                        <input type="submit" name =" makazai"value = "Romeo y julieta" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/montecristo.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="sagredo"value = "Montecristo" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/davidoff.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="amrut"value = "Davidoff" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/partagas.jpeg" height="100%" width="100%">
                        <input type="submit" name ="dowels" value = "Partagas" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
        <div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/punch.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="hercules"value = "Punch" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/bolivar.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="contessa"value = "Bolivar" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/trinidad.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="havana"value = "Trinidad" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/lighter.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="bacardi"value = "Lighter" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/cutter.jpeg" height="100%" width="100%">
                        <input type="submit" name ="morgan"value = "Cigar cutter" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/padron.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="malibu"value = "Padron" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/camacho.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="barcelo"value = "Camacho" class ="title"> 
                    </div>
                </div>
            </form>
        </div><div class="grid-item">
            <form action="rum.php" method="post">
                <div class="card">
                    <div class="card-info">
                        <img src="./cigar/tatuaje.jpeg"  height="100%" width="100%">
                        <input type="submit" name ="dorado" value = "Tatuaje" class ="title"> 
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>