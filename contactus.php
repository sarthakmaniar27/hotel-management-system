<html>
<head>
	<title>CONTACT US(HOTEL MANAGEMENT)</title>
	<style>
		@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
        .sub
        {
        	text-transform:Uppercase;
        	background-color:cyan;
        	color:darkblue;
        	font-weight:bold;
        	border:3px solid black;
        }
		.sub:hover
		{   
			color:black;
			background-color:yellow;
			border:3px solid darkblue;
			font-weight:bold;
		}
		
		
		form
		{
				text-align:center;
				margin: auto;
				border: 4px solid white;
				width:70%;
				background-color:black;
				opacity: 0.5;
				padding:25px;
		}
		::placeholder
		{
			color: white;
		}
		input,textarea
		{
			text-align:center;
			outline: 0;
			border:2px solid white;
			padding: 10px;
			border-radius: 20px;
			background: none;
			
			color: white;
		}
		body
		{
			background-size:cover;
			background-position: center;
			background-repeat: no-repeat;
    		background: linear-gradient(to bottom right,purple 0%,blue 100%);

		}
		h2
		{
			text-shadow: 5px 2px 4px black;
			font-size:40px;
			color:white;
			text-align:center;
			font-weight:normal;
			font-family:Arial, Helvetica, sans-serif;
		}

		div
		{
			font-family:Arial, Helvetica, sans-serif;
			font-weight:bold;
			color:yellow;
			text-align:center; 
			padding:20px;
			font-weight:bold;
		}
		 .bg-bubbles
		{
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    z-index: 1;
		}
		 .bg-bubbles li 
		{
		    position: absolute;
		    list-style: none;
		    display: block;
		    width: 40px;
		    height: 40px;
		    background-color: rgba(255,255,255,0.15);
		    bottom: -160px;
		    -webkit-animation: square 25s infinite;
		    animation: square 25s infinite;
		    -webkit-transition-timing-function: linear;
		    transition-timing-function: linear;
		}
		 .bg-bubbles li:nth-child(1)
	    {
		
		    left: 10%;
	    }
		 .bg-bubbles li:nth-child(2) 
		{
		    left: 20%;
		    width: 80px;
		    height: 80px;
		    animation-delay: 2s;
		    animation-duration: 17s;
		}
		 .bg-bubbles li:nth-child(3) 
		{
		    left: 25%;
		    animation-delay: 4s;
		}
		 .bg-bubbles li:nth-child(4)
	   {
		    left: 40%;
		    width: 60px;
		    height: 60px;
		    animation-duration: 22s;
		    background-color: rgba(255,255,255,0.25);
		}
		 .bg-bubbles li:nth-child(5) 
	    {
		    left: 70%;
		}
		 .bg-bubbles li:nth-child(6)
	   {
		    left: 80%;
		    width: 120px;
		    height: 120px;
		    animation-delay: 3s;
		    background-color: rgba(255,255,255,0.2);
		}
		 .bg-bubbles li:nth-child(7) 
		{
		    left: 32%;
		    width: 160px;
		    height: 160px;
		    animation-delay: 7s;
		}
		 .bg-bubbles li:nth-child(8) 
		{
		    left: 55%;
		    width: 20px;
		    height: 20px;
		    animation-delay: 15s;
		    animation-duration: 40s;
		}
		 .bg-bubbles li:nth-child(9) 
		{
		    left: 25%;
		    width: 10px;
		    height: 10px;
		    animation-delay: 2s;
		    animation-duration: 40s;
		    background-color: rgba(255,255,255,0.3);
		}
		 .bg-bubbles li:nth-child(10) 
		{
		    left: 90%;
		    width: 160px;
		    height: 160px;
		    animation-delay: 11s;
		}
		 @-webkit-keyframes square 
		 {
		    0% 
		   {
		       transform: translateY(0);
		   }
		    100% 
		   {
		       transform: translateY(-700px) rotate(600deg);
		   }
		}
		 @keyframes square 
		 {
		    0% 
		   {
		       transform: translateY(0);
		   }
		    100% 
		   {
		       transform: translateY(-700px) rotate(600deg);
		   }
		}
	</style>
</head>

<body>

	
	<h2 align="left">!! REVIEW US !!<b></b></h2>

	<center>
		<form action="thankyou.php" method="post">
			<div>CUSTOMER ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="text" name="Customerid" placeholder="YOUR CUSTOMER ID"  pattern="^[0-9]{4}$"  ></input>
			</div>
			<div>CUSTOMER NAME:&nbsp&nbsp&nbsp
				<input type="text" name="Customername" placeholder="ENTER YOUR NAME" pattern="^[a-zA-Z\s]*$"  required=""></input>
			</div>
			<div>MOBILE NUMBER:&nbsp&nbsp&nbsp&nbsp
				<input type="text" placeholder="ENTER MOBILE NO." name="Mobilenum" pattern="^[0-9]{8}$"></input>
			</div>
			<div><center>ADDRESS:</center>
			<textarea type="text" name="Address" placeholder="ENTER YOUR ADDRESS" style="height:50px; width:40.2%;"></textarea>
			</div>

			
			<div>REVIEW:&nbsp&nbsp&nbsp
				<input type="text" name="Review" placeholder="YOUR REVIEW"  pattern="^[0-9]|10$" style="width:30%;"required=""></input><br>
				<h6 style="color:white;font-size:12px;font-family:Arial, Helvetica, sans-serif;">YOUR REVIEW SHOULD BE OUT OF 10</h6>
			<div>	
			</div>
				<input  class="sub" type="submit" placeholder="SUBMIT" name="SUBMIT" style="width:18%"></input>	
				<input  class="sub"	type="reset" placeholder="RESET" name="RESET" style="width:18%"></input>
				
			</div>
		</form>
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</center>
</body>
</html>

