
<head>
 
</head>
<div class="navbar">
    <a href="index.php">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Products
            <i class="fa fa-carret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="rum.php">Rum</a>
            <a href="wine.php">Wine</a>
            
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Pairings
            <i class="fa fa-carret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="drinks.php">drinks</a>
            <a href="food.php">food</a>
            <a href="cigar.php">cigar</a>
        </div>
    </div>
    <a href="profile.php">Profile</a>
    <?php 
    // session_start();
    if(isset($_POST["logout"]))
    {
        include ("logout.php");
    }
    elseif(isset($_POST["nsignin"])){
        header("location:sign.php");
    }
    if (isset($_SESSION['email'])){
    ?>
    <form action="nav.php" method="post">
    <input type="submit" name = "logout" value="logout" class='nsignin'>
    </form>
    <?php 
    }
    else
    {
        ?>
        <form action="nav.php" method="post">
        <input type="submit" name = "nsignin" value="signin" class="nsignin">
        </form>   
        <?php
    }
    ?>

    <script>
        window.onscroll =function()
        {myFunction()};
        var navbar = document.getElementsByClassName('navbar');
        var sticky = nav.offsetTop;

        function myFunction(){
            if (window.pageYOffset >= sticky){
                nav.classList.add("sticky")
            }else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    
   