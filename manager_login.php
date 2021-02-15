<html>
<head>
	<title>MANAGER LOGIN</title>
	<link rel="stylesheet" href="manager_login_style.css"> 
	<style>
		@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);

		.sub:hover{
			background: #123456;
		}
		
		form{
				text-align:center;
				margin: auto;
				border: 2px solid white;
				width: 70%;
				background-color: black;
				opacity: 0.5;
				padding:25px;
		}
		::placeholder{
			color: white;
		}
		input,textarea{
			text-align:center;
			outline: 0;
			border-color: red;
			padding: 10px;
			border-radius: 5px;
			background: none;
			border: 1px solid white;
			color: white;
		}
		body{
			 background-image: url("https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"); 
			background-size:cover;
			background-position: center;
			background-repeat: no-repeat;
    		background: linear-gradient(to bottom right,#50a3a2 0%,#53e3a6 100%);

		}
		h2{
			text-shadow: 5px 2px 4px grey;
			font-size: 30pt;
			color:white;
			text-align:center;
		}
		div{
			font-weight: bold;
			color:yellow;
			text-align:center; 
			padding: 20px
		}
		 .bg-bubbles {
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    z-index: 1;
		}
		 .bg-bubbles li {
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
		 .bg-bubbles li:nth-child(1) {
		    left: 10%;
		}
		 .bg-bubbles li:nth-child(2) {
		    left: 20%;
		    width: 80px;
		    height: 80px;
		    animation-delay: 2s;
		    animation-duration: 17s;
		}
		 .bg-bubbles li:nth-child(3) {
		    left: 25%;
		    animation-delay: 4s;
		}
		 .bg-bubbles li:nth-child(4) {
		    left: 40%;
		    width: 60px;
		    height: 60px;
		    animation-duration: 22s;
		    background-color: rgba(255,255,255,0.25);
		}
		 .bg-bubbles li:nth-child(5) {
		    left: 70%;
		}
		 .bg-bubbles li:nth-child(6) {
		    left: 80%;
		    width: 120px;
		    height: 120px;
		    animation-delay: 3s;
		    background-color: rgba(255,255,255,0.2);
		}
		 .bg-bubbles li:nth-child(7) {
		    left: 32%;
		    width: 160px;
		    height: 160px;
		    animation-delay: 7s;
		}
		 .bg-bubbles li:nth-child(8) {
		    left: 55%;
		    width: 20px;
		    height: 20px;
		    animation-delay: 15s;
		    animation-duration: 40s;
		}
		 .bg-bubbles li:nth-child(9) {
		    left: 25%;
		    width: 10px;
		    height: 10px;
		    animation-delay: 2s;
		    animation-duration: 40s;
		    background-color: rgba(255,255,255,0.3);
		}
		 .bg-bubbles li:nth-child(10) {
		    left: 90%;
		    width: 160px;
		    height: 160px;
		    animation-delay: 11s;
		}
		 @-webkit-keyframes square {
		    0% {
		       transform: translateY(0);
		   }
		    100% {
		       transform: translateY(-700px) rotate(600deg);
		   }
		}
		 @keyframes square {
		    0% {
		       transform: translateY(0);
		   }
		    100% {
		       transform: translateY(-700px) rotate(600deg);
		   }
		}*/
	</style>
</head>

<body>
	
	<h2 align="left"><i><b>MANAGER LOGIN</b></i></h2>
	<center>
		<form action="manager_login_support.php" method="post">

			<div>Manager ID:
				<input type="text" name="id" placeholder="Enter your Manager ID"  required>
			</div>

			<div>PASSWORD:
				<input type="password" placeholder="Enter Password" name="password" pattern="^[A-Za-z]*$" required></input>
			</div>

			<div>	
				<input  class="sub" type="submit" placeholder="Submit" name="submit"></input>	
				<input  class="sub"	type="reset" placeholder="Reset" name="reset"></input>
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
