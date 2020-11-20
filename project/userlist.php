<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$Name1=$_SESSION['Name'];
$q="SELECT Name FROM `table` where not Name='$Name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
    </head>
     <style>
          #text{
     color:rgb(109, 15, 15);
 }
 .classs{
    width: 50px;
 }
 .cls{
    
    width: 20%;
    height: 40px;
    /* border: 1px solid; */
    border: 2px solid #bc7070;
    border-radius: 21px;
    font-size: 30px;
    background: #48443e;
    outline: none;
    /* padding: 0px; */
    margin: 5px;
    margin-left: -1000px;
    box-shadow: 3px 3px #4cc63d;
    color: lavender;
    font-family: monospace;
 }
 .cls:hover{
     background:navy;
     transition:2s;
      
 
     </style>
    <body>
    <div class="view">
        <h1>Choose name for credit transfer</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
            
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <!-- <td style="color:white;"> <input   class="classs" type="radio" name="transfer"  value="<?php echo $row["Name"]; ?>"><?php echo $row["Name"]; ?></td> -->
       <button class="cls" name="transfer" value="<?php echo $row["Name"]; ?>"><?php echo $row["Name"];?></button> <br>
        
   </tr>
<?php }
  ?>
       <tr>
          
           <!-- <td ><input style="background: beige;border: 1px solid black;margin-top: 40px;width: 100px;border-radius: 20px;height: 35px;outline: none;font-size: 26px;" type="submit" value="credit"></td> -->
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>