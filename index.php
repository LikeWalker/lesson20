<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.cur{

		}
		.link-box{
			height: 125px;
			background:;
		}
		.link-box2{
			background:;
			height: 125px;
		}
		.avatar{
			height: 125px;
		}
		.links{
			background:black;
			height: 55px;
		}
		.middle-box{
			height: 700px;
			background: red;
		}
		.middle-box2{
			height: 700px;
			background: green;
		}
		.middle{
			height: 700px;
			
			background-image: url(background.jpg);
			background-size: 100% 100%;
		}
		.content-box{
			height: 710px;
			background: 
		}
		.content-box2{
			height: 350px;
			background:
		}
		.content{
			height: 300px;
			background:
		}
		.bg{
			background-size: 100% 100%;
		}
	</style>
</head>
<body>
	<?php
		$connect = mysqli_connect("127.0.0.1", "root","", "store");
		$query = mysqli_query($connect, 'SELECT * FROM products');

		$stroka = $query->fetch_assoc();
		$stroka_2 = $query->fetch_assoc();
		$stroka_3 = $query->fetch_assoc();
		$stroka_4 = $query->fetch_assoc();
		$stroka_5 = $query->fetch_assoc();
		$stroka_6 = $query->fetch_assoc();
	?>
	<?php
		echo $stroka_4["title"];
	?>
	<?php
		echo $stroka_4["description"];
	?>
	<?php
		echo $stroka_4["img"];
	?>
	<?php
		echo $stroka_4["price"];
	?>
	<?php
		echo $stroka_5["title"];
	?>
	<?php
		echo $stroka_5["description"];
	?>
	<?php
		echo $stroka_5["img"];
	?>
	<?php
		echo $stroka_5["price"];
	?>
	<div class="col-12 link-box pr-0 pl-0">
		<div class="col-8 mx-auto link-box2 row pl-0 pr-0">
			<div class="avatar col-2">
				<?php
				echo "<img src = '". $stroka_4['img'] ."' class= 'w-100 rounded-circle'></img>";
				?>
			</div>
			<div style="margin-top: 90px;" class="links col-2 border">
				<a class="text-white" href="">SHOP ONLINE</a>
			</div>
			<div style="margin-top: 90px;" class="links col-2 border">
				<a class="text-white" href="">EXPLORE</a>
			</div>
			<div style="margin-top: 90px;" class="links col-2 border">
				<a class="text-white" href="">ABOUT</a>
			</div>
			<div style="margin-top: 90px;" class="links col-2 border">
				<a class="text-white" href="">STORE LOCATOR</a>
			</div>
			<div style="margin-top: 90px;" class="links col-2 border">
				<a class="text-white" href="http://lesson20/admin.php">ADD PRODUCT</a>
			</div>
		</div>
	</div>
	<div class="col-12 middle-box border-top pr-0 pl-0">
		<div class="col-12 mx-auto middle-box2 pl-0 pr-0">
			<div class="col-12 middle"></div>
		</div>
	</div>
	<div class="col-10 mx-auto content-box border-top pr-0 pl-0">
		<div class="col-12 mx-auto content-box2 row">
			<div style="background-image: url(1.jpg);" class="col-4 content border bg">
				<?php
				echo "<img src = '". $stroka['img'] ."' class= 'w-100'></img>";
				echo "<p>". $stroka["description"] ."</p>";
				?>
			</div>
			<div style="background-image: url(2.jpg);" class="col-4 content border bg">
				<?php
				echo "<img src = '". $stroka_2['img'] ."' class= 'w-100 h-100'></img>";
				echo "<p>". $stroka_2["description"] ."</p>";
				?>
			</div>
			<div style="background-image: url(3.jpg);" class="col-4 content border bg">
				<?php
				echo "<img src = '". $stroka_3['img'] ."' class= 'w-100 h-100'></img>";
				echo "<p>". $stroka_3["description"] ."</p>";
				?>
			</div>
		</div>
		<div class="col-12 mx-auto content-box2 mt-1 row">
			<div style="background-image: url(4.jpg);" class="col-4 content border bg">
				<?php
				echo "<img src = '". $stroka_5['img'] ."' class= 'w-100 h-100'></img>";
				echo "<p>". $stroka_5["description"] ."</p>";
				?>
			</div>
			<div style="background-image: url(5.jpg);" class="col-4 content border bg">
				<?php
				echo "<img src = '". $stroka_6['img'] ."' class= 'w-100 h-100'></img>";
				echo "<p>". $stroka_6["description"] ."</p>";
				?>
			</div>
			<div style="background-image: url(6.jpg);" class="col-4 content border bg">
				<?php
				echo "<img src = '". $stroka_7['img'] ."' class= 'w-100 h-100'></img>";
				echo "<p>". $stroka_7["description"] ."</p>";
				?>
			</div>
		</div>
	</div>
</body>
</html>