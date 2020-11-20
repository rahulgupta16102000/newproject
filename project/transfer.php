<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Display:wght@600&display=swap" rel="stylesheet">
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
    width: 10em;
    height: 2em;
    font-size: 18px;
    font-weight: bold;
    border-radius: 20px;
    outline: none;
    border: 2px solid #3f1ef7;
    box-shadow: 2p 2px red;
    box-shadow: 3px 3px #e11067;
        }
         input[type=submit]
        { 
            margin-top: 10px;
    width: 6em;
    height: 2em;
    font-size: 18px;
    background-color: pink;
    font-weight: bold;
    border-radius: 25px;
    border: 2px solid navy;
    outline: none;
        }
        .dd{
            margin-top: 160px;
    border: 2px solid navy;
    width: 308px;
    margin-left: 434px;
    box-shadow: 3px 3px 2px 2px black;
        }
       
    </style>
    </head>
    <body>
    <div class="dd">
   
     <form action="credit.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <strong style="color:white; font-family: 'Big Shoulders Inline Display', cursive; font-size:60px;">Transfer Amount:</strong>
          <br>
            <br>
          <input type="text" name="transfer"><br>
          <br>
        
          <input type="submit">
        
        </div>
        </form>

        </div>
    </body>
</html>