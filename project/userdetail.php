<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');
$Name=$_POST['Name'];
$q="SELECT * FROM `table` where Name='$Name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['Name']=$Name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Display:wght@600&display=swap" rel="stylesheet">

</head>
    <body>
    <div class="view">
        <h2 style="    color: lightblue;
    font-size: 44px;
    font-family:'Big Shoulders Inline Display', cursive;
">User Information</h2>
       <table class="flat-table flat-table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" style="margin-left:-50px" >
                 <p class="css-button-text">Transfer To</p>
                 <div class="css-button-inner">
                 <a href="userlist.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>


               <br> <br> <br> <br> <br>
               
               


    </body>
</html>