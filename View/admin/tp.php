<!doctype html>
<html lang="en">
    <head>
        <title>Grandiose</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body style="background: linear-gradient(#54a6d6, #c0caf5, #5a88d1)">

        <br><br><br><br><br><br>
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Tour Booking Page</h3></center>
       	</div>
       </div><br><br>

        
       <center><h5>Cox's Bazar Tour</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel");
                $query = "select * from single_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Package Code: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Package Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="booktour.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="user_unbook.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
        </div><br><br>
        <center><h5>Bandarban Tour</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel");
                $query = "select * from single_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Package code: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Package Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="booktour.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="user_unbook.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
        </div><br><br>
        <center><h5>Sylhet Tour</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel");
                $query = "select * from single_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Package Code: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Package Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="user_unbook.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
        </div><br><br>