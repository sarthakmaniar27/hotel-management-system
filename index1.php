<!DOCTYPE html>
<head>
	<title>HOME(HOTEL MANAGEMNT)</title>
	<link rel="stylesheet" type="text/css"  href="css/style.css">
	<link href="img/LOGO.jpeg"  type="img/icon" rel="icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>
       .carousel-inner img 
       {
         width:100%;
         height:100%;
       }
       body{
        background-color: #aed8e6;
       }
        </style>
</head>
<body>
	<div id="full">	
                <div id="header">
			<div id="logo">
				<h1 style="background-color:#ffcc00;border:3px solid black;border-radius:30px;"><font  color="black">HOTEL HARDROCK</font></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="customer_signup.php"><font color="white">BOOKING</font></a></li>
					<li><a href="manager_login.php"><font color="white">MANAGEMENT</font></a></li>
					<li><a href="facilities.php"><font color="white">FACILITIES</font></a></li>
                    <li><a href="aboutus.php"><font color="white">ABOUT US</font></a></li>
                    <li><a href="contactus.php"><font color="white">CONTACT US</font></a></li>

				</ul>
			</div>
                </div>
                <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul>
  
                <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://www.arnhotel.com/upload/slider/1.jpg" alt="EXTERNAL VIEW" width="1000" height="200">
                </div>
                <div class="carousel-item">
                <img src="https://q-cf.bstatic.com/images/hotel/max1024x768/681/68184730.jpg" alt="POOL SIDE" width="1000" height="200">
                </div>
                <div class="carousel-item">
                <img src="https://q-cf.bstatic.com/images/hotel/max1024x768/159/159680965.jpg" alt="RECEPTION" width="1000" height="200">
                </div>
                </div>
  
  
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
                </div>
        </div>
        <br>
        <!--Bottom-->

        <?php
            include('dbconn.php');
            $sql1 = "SELECT `room_cost` FROM `deluxeroom`";
            $sql2 = "SELECT `room_cost` FROM `suiteroom`";
            $run1 = mysqli_query($conn,$sql1);
            $run2 = mysqli_query($conn,$sql2);
            $data1 = mysqli_fetch_assoc($run1);
            $data2 = mysqli_fetch_assoc($run2);

        ?>    

        <h1 style="margin-left: 40px; font-family:sans-serif; font-size:32px;">Suite Room starting from <span style="text-decoration: line-through">12,000 /-</span>&nbsp<b><?php echo $data2['room_cost']," /-"?></b>  &nbsp&nbsp&nbsp&nbsp Dulexe Room starting from <span style="text-decoration: line-through">18,000 /-</span>&nbsp<b><?php echo $data1['room_cost']," /-"?></b></h1>


        <div class="row">
          <div class="column">
            <img src="suite.jpeg" alt="Suite Room" style="width:95%; margin-left:30px; ">
          </div>

          <div class="column">
            <img src="deluxe.jpg" alt="Dulexe Room" style="width:95%; margin-right:30px; ">
          </div>
        </div>


</body>
</html>
