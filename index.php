<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./admin/style.css">
    <script src="index.js"></script>
</head>

<body class="in-body">
<div>
<?php
    session_start();
    if(isset($_SESSION['email']))
    {
    include("nav.php"); }
    else
    {
    include("nav.php");
    }
    ?>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade" >
            <div class="numbertext"> 1/4</div>
            <img src="./cor/1st.png" alt="img" width="100%" height="100%">
            <div class="text" > hw whisky is now available  on online </div>
        </div>
        <div class="mySlides fade" >
            <div class="numbertext"> 2/4</div>
            <img src="./cor/2nd.jpeg" alt="img" width="100%" height="100%" >
            <div class="text" > you can order online and enjoy your drink where you want</div>
        </div>
        <div class="mySlides fade" >
            <div class="numbertext"> 3/4</div>
            <img src="./cor/3rd.jpeg" alt="img" width="100%" height="100%" >
            <div class="text" > we provide branded mixers drinks for the liqours </div>
        </div>
        <div class="mySlides fade" >
            <div class="numbertext"> 4/4</div>
            <img src="./cor/4th.jpeg" alt="img" width="100%" height="100%" >
            <div class="text" > enjoy the party with our drinks and pairings </div>
        </div>
        <a class="next" onclick=" plusSlides(1)" >&#10095</a>   
        <a class="prev" onclick=" plusSlides(-1)" >&#10094</a>
    </div>
    
  
    
    
    <?php 
    
    include('config.php');
    if(isset($_SESSION['email']))
    {
        $id = $_SESSION['email'];
        $sq = " SELECT  `email`,`quanity`,`product`,`price`,`ordered_date` FROM `order` where `email`= '$id';";
        $resultl = mysqli_query($con,$sq);
        echo "<br>";
        echo "<table  class='dashboard'>";
        echo "<tr>";
            echo "<th>email</th>";
            echo "<th> quanity</th>";
            echo "<th>product name</th>";
            echo "<th>amount</th>";
            echo "<th> ordered date</th>";
            echo "</tr>";
        while ($row = mysqli_fetch_assoc($resultl))
        {
            
            echo"<tr>";
    
            foreach($row as $cfeild => $value)
            {
                echo "<td>".$value."</td>";
                
            }
            
            echo "</tr>";
        }
        echo "</table>";
    
    }
    ?>

</body>

</html>

