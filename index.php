<!DOCTYPE html>
<html>
<head>
	<title>BASIC BANKING SYSTEM</title>
</head>
<body>
	<div id="preloader"></div>
	<div class="banner">
		<div class="navbar">
			<img src="">
			<ul>
				<li><a href="index.php">Home</a></li>
				
				<li><a href="transfermoney.php">Transfer Money</a></li>
				<li><a href="transactionhistory.php">Transaction History</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>Welcome to <br>KVK BANKS</h1>
			<p>Fresh Paint and Bright Smiles make it life.<br>And Our Bank make it happen for You
			</p>
			<div>
				<button type="button" onclick="window.location.href='transfermoney.php'"><span></span>VIEW ALL CUSTOMERS</button>
			</div>
		</div>
	</div>

<style>
	*{
		margin:0;
		padding: 0;
		font-family: sans-serif;
	}
	#preloader{
		background: #000 url('https://miro.medium.com/max/1600/1*e_Loq49BI4WmN7o9ItTADg.gif') no-repeat center center;
		height: 100vh;
		width: 100%;
		position: fixed;
		z-index: 100;
		background-size: 30%;
	}
	.banner{
		width: 100%;
		height: 100vh;
		background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmFua3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80');
		background-size: cover;
	}
	.navbar{
		width: 85%;
		margin: auto;
		padding: 35px 0;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.logo{
		width: 120px;
		cursor: pointer;
	}
	.navbar ul li{
		list-style: none;
		display: inline-block;
		margin: 0 20px;
		position: relative;
	}
	.navbar ul li a{
		text-decoration: none;
		color: #fff;
		text-transform: uppercase;
	}
	.navbar ul li::after{
		content: '';
		height: 3px;
		width: 0;
		background: #009688;
		position: absolute;
		left: 0;
		bottom: -10px;
		transition: 0.5s;
	}
	.navbar ul li:hover::after{
		width: 100%;

	}
	.content{
		width: 100%;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		text-align: center;
		color: #fff;
	}
	.content h1{
		font-size: 70px;
		margin-top: 80px;
	}
	.content p{
		margin: 20px auto;
		font-weight: 100;
		line-height: 25px; 
	}
	button{
		width: 200px;
		padding: 15px 0;
		text-align: center;
		margin: 20px 10px;
		border-radius: 25px;
		font-weight: bold;
		border: 2px solid #009688;
		background: transparent;
		color: #fff;
		cursor: pointer;
		position: relative;
		overflow: hidden;
	}
	span{
		background: #009688;
		height: 100%;
		width: 0;
		border-radius: 25px;
		position: absolute;
		left: 0;
		bottom: 0;
		z-index: -1;
		transition: 0.5s;
	}
	button:hover span{
		width: 100%;

	}
	button:hover{
		border: none;
	}
</style>
<script>
	var loader=document.getElementById("preloader");

	window.addEventListener("load", function(){
		loader.style.display="none";
	})
</script>

</body>
</html>