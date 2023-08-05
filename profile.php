<?php 
session_start();
if(isset($_SESSION['email']))

{ echo "<div>";
    include ("nav.php");
    echo "</div>";
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
$email = $_SESSION['email'];

$dbcheck = "SELECT * FROM `order` WHERE `email` = '$email';";
    $dbresult = mysqli_query($con,$dbcheck);
    if (mysqli_num_rows($dbresult)>0){
        while ($row = mysqli_fetch_assoc($dbresult))
        {
            $demail = $row['email'];
            $count = mysqli_num_rows($dbresult);
            $ddoor = $row['door'];
            $dvillage = $row['village'];
            $dcity = $row['city'];
            $ddistrict = $row['district'];
            $dstate = $row['state'];
        }
    }

    $sql = "SELECT * FROM `register` where `email` = '$email';";
    $sql = mysqli_query($con,$sql);
    if (mysqli_num_rows($sql)>0)
    {
        while ($row = mysqli_fetch_assoc($sql))
        {
            $name = $row['name'];
            $phone = $row['phone_number'];
            $reg = $row['reg_date'];
        }
    }

?>
<body class = "pbody">
    <h2>my profile</h2>
    <table>
        <tr>
            <th>name</th>
            <th>:</th>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <th>mobile number</th>
            <th>:</th>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <th>email</th>
            <th>:</th>
            <td><?php echo $demail; ?></td>
        </tr>
        <tr>
            <th>order count</th>
            <th>:</th>
            <td><?php echo $count . "orders";?></td>
        </tr>
        <tr>
            <th></th>
            <th>delivery details</th>
            
        </tr>
        <tr>
            <th>door no</th>
            <th>:</th>
            <td><?php echo $ddoor; ?></td>
        </tr>
        <tr>
            <th>villge</th>
            <th>:</th>
            <td><?php  echo $dvillage ; ?></td>
        </tr>
        <tr>
            <th>city</th>
            <th>:</th>
            <td><?php echo $dcity ; ?></td>
        </tr>
        <tr>
            <th>district</th>
            <th>:</th>
            <td><?php  echo $ddistrict ;?></td>
        </tr>
        <tr>
            <th>state</th>
            <th>:</th>
            <td><?php echo $dstate ;?></td>
        </tr>
        <tr>
            <th>registered on</th>
            <th>:</th>
            <td><?php echo $reg ;?></td>
        </tr>
    </table>
</body>
</html>
<?php 
}
else
{
    header("location:index.php");
}
?>