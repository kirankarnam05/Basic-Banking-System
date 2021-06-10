<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
h2{
    font-size: 40px;
}
table{
    letter-spacing: 1.2px;
}
td{
    text-align: center;
}
button{
    border:none;
    background: #d9d9d9;
    transition: 1s;
}
@media only screen and (orientation: portrait){
    *{
        letter-spacing: 1px;
    }
}
#preloader{
        background: #000 url('https://miro.medium.com/max/1600/1*e_Loq49BI4WmN7o9ItTADg.gif') no-repeat center center;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;
        background-size: 30%;
    }
    </style>
</head>

<body style="width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('https://dawnsandovalresidential.co.uk/wp-content/uploads/2020/01/canary-wharf.jpg');
    background-size: cover;">
    <div id="preloader"></div>
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;font-size: 70px;font-family: 'Staatliches', cursive;font-weight: 900px;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm" style="background-color: white;">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
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

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    var loader=document.getElementById("preloader");

    window.addEventListener("load", function(){
        loader.style.display="none";
    })
</script>

</body>
</html>