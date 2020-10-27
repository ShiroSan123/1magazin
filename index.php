<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1','root','','Magazin1');
		$a = mysqli_query($con,'SELECT * FROM product');
		$result1 = $a->fetch_assoc();
		$result2 = $a->fetch_assoc();
		$result3 = $a->fetch_assoc();
		$result4 = $a->fetch_assoc();
		$result5 = $a->fetch_assoc();
		$result6 = $a->fetch_assoc();
	 ?>
	 <!-- Шапка -->
	<div class="col-12 d-flex mx-auto pl-0 pr-0" style="border-radius: 0px 0px 40px 40px; background: #b8b8b8">
		<div class="col-8 mx-auto d-flex">
			<div class="col-3 pl-0 pt-2">
				<h3>My Shop</h3>
				<nav class="ml-auto" style="background: #ff9c38; border-radius: 5px;">
					<ul class="topmenu text-center pt-2 pb-2">
						<img src="img/menu.svg" aria-hidden="true">
						<li><a  style="color: black; " href="">Каталог</a>
						    <ul class="submenu">
							    <li><a href="">...</a></li>
							    <li><a href="">...</a></li>
							    <li><a href="">...</a></li>
							    <li><a href="">...</a></li>
						    </ul>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-12 pr-0">
				<div class="col-12 pl-0 pr-0 d-flex">
					<div class="col-3 pl-0 pr-0 ">
						<a class="ml-3" style="font-size: 100%; color: black; font-family: Arial;" href="">Якутск</a>
						<div class="col-8 pl-0 pr-0">
							<nav class="ml-auto">
								<ul class="topmenu text-left pl-1">
									<li><h5 href="">8 (914) 276-75-20</h5>
									    <ul class="submenu">
										    <li><a href="">...</a></li>
										    <li><a href="">...</a></li>
										    <li><a href="">...</a></li>
										    <li><a href="">...</a></li>
									    </ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-7" style="">
	       				<a class="ml-2" style="font-size:90%; color: black; font-family: Arial;" href="">О компании</a>
						<a class="ml-2" style="font-size:90%; color: black; font-family: Arial;" href="">Оплата и доставка</a>
						<a class="ml-2" style="font-size:90%; color: black; font-family: Arial;" href="">Гарантия и возврат</a>
						<a class="ml-2" style="font-size:90%; color: black; font-family: Arial;" href="">Заявка на ремонт</a>
						<a class="ml-2" style="font-size:90%; color: black; font-family: Arial;" href="admin.php">Admin Panel</a>
					</div>				
				</div>
				<div class="col-12 d-flex">
					<div class="col-5 pl-0 pr-0">
						<div class="input-group mb-3 rounded-left" style="padding-right: 10%; padding-top:2%">
						  <input type="text" class="form-control" placeholder="Поиск" aria-label="Text input with dropdown button" >
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary rounded-right" type="button" id="button-addon2" style="padding-right: 15%;background: #ff9c38; color:black">Найти</button>
						  </div>
						</div>
					</div>
					<div id="account">
						<div style="margin-left:20px; ">
							<button data-toggle="dropdown" title="Войти">
								<img src="img/cabinet2.svg">
								<p style="font-size: 120%; font-family: Arial;" class="">Войти</p> 
							</button>
	        				<ul class="dropdown-menu dropdown-menu-left">
	                       	 	<li><a onclick="register();">Регистрация</a></li>
	           					<li><a onclick="login();">Авторизация</a></li>
	                    	</ul>
		        		</div>
					</div>
					<div id="account" class="ml-5">
						<div style="margin-left:20px; ">
							<button data-toggle="dropdown" title="Войти">
								<img src="img/zakl2.svg">
								<p style="font-size: 120%" class=""><a href="" style="color: black; font-family: Arial;">Избранное</a></p> 
							</button>
		        		</div>
					</div>
					<nav class=" col-2 ml-4" style="background: #ff9c38; border-radius: 15px; height: 45px;">
					<ul class="topmenu ">
						<img src="img/cart.svg" aria-hidden="true">
						<li><a  style="color: black; " href="">Корзина</a>
						    <ul class="submenu">
							    <li><a href="">...</a></li>
							    <li><a href="">...</a></li>
							    <li><a href="">...</a></li>
							    <li><a href="">...</a></li>
						    </ul>
						</li>
					</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Товары -->
	<div class="col-10 mx-auto mt-2 pl-0 pr-0">
		<div class="col-12 d-flex pl-0 pr-0">
			<!-- 1 товар -->
			<div class="col-3 pl-0 pr-0 rounded-lg pl-3" style="background: #d1d1d1">
				<h4><?php echo $result1['name']; ?></h4>
				<div class="d-flex">
					<?php echo "<img src=".$result1['img']." class='w-50'>" ?>
					<div>
						<h5><?php echo $result1['description']; ?></h5>
						<h4><?php echo $result1['price']; ?></h4>
					</div>
				</div>
			</div>
			<!-- 2 товар -->
			<div class="col-5 pl-0 pr-0 ml-5 rounded-lg pl-3" style="background: #d1d1d1">
				<h4><?php echo $result2['name']; ?></h4>
				<div class="d-flex">
					<?php echo "<img src=".$result2['img']." class='w-50'>" ?>
					<div>
						<h5><?php echo $result2['description']; ?></h5>
						<h4><?php echo $result2['price']; ?></h4>
					</div>
				</div>
			</div>
			<!-- 3 товар -->
			<div class="col-3 pl-0 pr-0 ml-5 rounded-lg pl-3" style="background: #d1d1d1">
				<h4><?php echo $result3['name']; ?></h4>
				<div class="d-flex">
					<?php echo "<img src=".$result3['img']." class='w-50'>" ?>
					<div>
						<h5><?php echo $result3['description']; ?></h5>
						<h4><?php echo $result3['price']; ?></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 d-flex mt-3 pl-0 pr-0">
			<!-- 4 товар -->
			<div class="col-3 pl-0 pr-0 rounded-lg pl-3" style="background: #d1d1d1">
				<h4><?php echo $result4['name']; ?></h4>
				<div class="d-flex">
					<?php echo "<img src=".$result4['img']." class='w-50'>" ;
					?>
					<div>
						<h5><?php echo $result4['description']; ?></h5>
						<h4><?php echo $result4['price']; ?></h4>
					</div>
				</div>
			</div>
			<!-- 5 товар -->
			<div class="col-5 pl-0 pr-0 ml-5 rounded-lg pl-3" style="background: #d1d1d1">
				<h4><?php echo $result5['name']; ?></h4>
				<div class="d-flex">
					<?php echo "<img src=".$result5['img']." class='w-50'>" ?>
					<div>
						<h5><?php echo $result5['description']; ?></h5>
						<h4><?php echo $result5['price']; ?></h4>
					</div>
				</div>
			</div>
			<!-- 6 товар -->
			<div class="col-3 pl-0 pr-0 ml-5 rounded-lg pl-3" style="background: #d1d1d1">
				<h4><?php echo $result6['name']; ?></h4>
				<div class="d-flex">
					<?php echo "<img src=".$result6['img']." class='w-50'>" ?>
					<div>
						<h5><?php echo $result6['description']; ?></h5>
						<h4><?php echo $result6['price']; ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Футер -->
	<div class="col-12 bg-dark text-center pt-4" style="height: 60px; margin-top: 66px;">
		<h4 class="text-white">Site by Renat</h4>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript">
		let admin = document.querySelector('.admin');
		admin.onclick = function() {
			window.location.href = 'admin.php';
		}
	</script>
</body>
</html>