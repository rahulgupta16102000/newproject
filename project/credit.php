<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$Name1=$_SESSION['Name'];
$q="SELECT credit FROM `table` where Name='$Name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['credit'];
$from=$_SESSION['Name'];
//echo $var;
//echo $_POST["transfer"];
//echo $_SESSION['to'];
$to=$_SESSION['to'];
//echo $_SESSION['name'];
$q1="SELECT credit FROM `table` where Name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['credit'];
session_destroy();
if ( $var > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update `table` set credit='$sub' where Name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update `table` set credit='$sum' where Name='$to' ";
    $result=mysqli_query($con,$q);
    
        $message="Successfully transfer";
    echo "  <script type='text/javascript'> alert('$message');
   </script>";
     include 'index.php';
//    echo "   from $from  $message to $to"; 
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.php';

}
?>
</body>
</html>