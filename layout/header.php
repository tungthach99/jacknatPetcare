
<header class="top-navbar">
	<div id="box-tim-kiem">
		<form action="xlsearch.php" method="get">
			<label class="d-none d-lg-block">Nhập sản phẩm:</label>
			<input name="text-box-tim-kiem" type="text" id="text-box-tim-kiem" placeholder="Tìm kiếm sản phẩm..."><br>
			<button type="submit" id="nut-tim-kiem"><i class="fa fa-search"></i></button>
			<a onClick="dongform('box-tim-kiem')" id="nut-thoat-tim-kiem" title="Đóng"><i class="fa fa-close"></i></a>
			<?php
			$sqlHienTheTag = "SELECT * FROM tag ORDER BY luot_xem DESC  LIMIT 8";
			$resultHienTheTag=$con->query($sqlHienTheTag);
			if($resultHienTheTag->num_rows>0)
			{
				?>
			<div style=" position: absolute; left: 16%; right: 16%;top: 37%;">
				<?php
				while($rowHienTheTag=$resultHienTheTag->fetch_assoc())
				{
					?>
					<a class="chiTietTheTag" href="menu.php?tag=<?php echo $rowHienTheTag['id_tag'] ?>"><?php echo $rowHienTheTag['ten_tag'] ?></a> 
					<?php
				}
				?>
			</div>
				<?php
			}
			?>
		</form>
	</div>
	
	<div id="box-tim-kiem2" style="display: none;">
		<form action="xlsearch2.php" method="get">
			<label class="d-none d-lg-block">Nhập dịch vụ:</label>
			<input name="text-box-tim-kiem2" type="text" id="text-box-tim-kiem2" placeholder="Tìm kiếm dịch vụ..."><br>
			<button type="submit" id="nut-tim-kiem2"><i class="fa fa-search"></i></button>
			<a onClick="dongform('box-tim-kiem2')" id="nut-thoat-tim-kiem2" title="Đóng"><i class="fa fa-close"></i></a>
			<?php
			$sqlHienTheTag = "SELECT * FROM tag ORDER BY luot_xem DESC LIMIT 8";
			$resultHienTheTag=$con->query($sqlHienTheTag);
			if($resultHienTheTag->num_rows>0)
			{
				?>
			<div style=" position: absolute; left: 16%; right: 16%;top: 37%;">
				<?php
				while($rowHienTheTag=$resultHienTheTag->fetch_assoc())
				{
					?>
					<a class="chiTietTheTag" href="dichvu.php?tag=<?php echo $rowHienTheTag['id_tag'] ?>"><?php echo $rowHienTheTag['ten_tag'] ?></a> 
					<?php
				}
				?>
			</div>
				<?php
			}
			?>
		</form>
	</div>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img class="logo" src="images/.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">Giới thiệu</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Sản phẩm</a></li>
						<li class="nav-item">
							<a class="nav-link" href="dichvu.php" id="dropdown-a">Dịch vụ</a>
							
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle"  id="dropdown-a" data-toggle="dropdown">Liên hệ</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="contact.php">Đặt lịch tư vấn</a>
								<a class="dropdown-item" href="feedback.php">Gửi feedback</a>
							</div>
						</li>
<!--						<li class="nav-item"><a onClick="hienthiform('box-tim-kiem'),dongFrom('formDangNhap');" class="nav-link"><i class="fa fa-search"></i > Search</a></li>-->
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown-a" data-toggle="dropdown"><i class="fa fa-search"></i > Tìm kiếm</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" onClick="hienthiform('box-tim-kiem'),dongFrom('formDangNhap');">Tìm sản phẩm</a>
								<a class="dropdown-item" onClick="hienthiform('box-tim-kiem2'),dongFrom('formDangNhap');">Tìm dịch vụ</a>
							</div>
						</li>
						
						<li class="nav-item"><a <?php if(isset($_SESSION["giohang"]) or isset($_SESSION["giohang2"])) echo "style='color:red;'" ?> href="giohang.php" onClick="dongFrom('formDangNhap');" class="nav-link"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
						<li class="nav-item"><a <a <?php if(isset($_SESSION["id-user"])) echo "style='color:red;'" ?> onClick="hienthiform('formDangNhap');" class="nav-link"><i class="fa fa-user"></i> Tài khoản</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>