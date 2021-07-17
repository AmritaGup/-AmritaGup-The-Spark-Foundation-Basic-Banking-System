<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
   

   <style type="text/css">
body {
    background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(168, 170, 172, 0.1)), url(bank.jpg);
   color:white;
}
button{
    transition: 1.5s;
}
button:hover{
    background-color:black;
    color: white;
}
.logo{
    width: 10%;
    height: 10%;
}
.nav-area {
   float: right;
   list-style: none;
   margin-top: 30px;
}
.nav-area li {
   display: inline-block;
}
.nav-area li a {
   color: white;
   text-decoration: none;
   padding: 5px 20px;
   font-family: poppins;
   font-size: 16px;
   text-transform: uppercase;
}
.nav-area li a:hover {
   background:white;
   color: black;
}
.logo {
   float: left;
}
.logo img {
   width: 100%;
   padding: 15px 0;
}
   </style>

<body>
 <div class="wrapper">
        
        <div class="logo"> 
            <img src="logo.jfif" alt="">
            
        </div>
    
             </nav>
<ul class="nav-area">

<li><a href="index.php">Home</a></li>
<li><a href="transfermoney.php">Transfer money</a></li>
<li><a href="transactionhistory.php">Transaction History</a></li>

</ul>
</div>
	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center" style="color:white;">S.No.</th>
                <th class="text-center" style="color:white;">Sender</th>
                <th class="text-center" style="color:white;">Receiver</th>
                <th class="text-center" style="color:white;">Amount</th>
                <th class="text-center" style="color:white;">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2" style="color:white;"><?php echo $rows['sno']; ?></td>
            <td class="py-2" style="color:white;"><?php echo $rows['sender']; ?></td>
            <td class="py-2" style="color:white;"><?php echo $rows['receiver']; ?></td>
            <td class="py-2" style="color:white;"><?php echo $rows['balance']; ?> </td>
            <td class="py-2" style="color:white;"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>