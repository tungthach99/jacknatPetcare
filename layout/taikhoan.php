<div id="formDangNhap">
	<?php 
	if(!isset($_SESSION["id-user"])){?>
	<form action="customer/Account/xldangnhap.php" method="post">
		<br>
		<input type="text" placeholder="Tên đăng nhập" id="txttendangnhap" name="txttendangnhap"><br>
		<input type="password" placeholder="Mật khẩu" id="txtmatkhau" name="txtmatkhau"><br>
		<div class="noiDungFormDangNhap">
			<a href="quenmatkhau.php">Quên mật khẩu?</a>
		</div>
		<input type="submit" value="Đăng nhập">
	</form>
	<div class="noiDungFormDangNhap">
		Bạn chưa có tài khoản? <a href="taotaikhoan.php">Tạo tài khoản.</a>
	</div>
	
	<?php

require_once( 'login/Facebook/autoload.php' );
$fb = new Facebook\Facebook([
'app_id' => '415708562813552',
'app_secret' => 'e856b55f333d67994e08e1dccc064629',
'default_graph_version' => 'v10.0',
]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
///=============
// $loginUrl = $helper->getLoginUrl('https://vzn.vn/demo/fb-callback.php', $permissions);
$loginUrl = $helper->getLoginUrl('http://localhost/jacknatPetcare/login/fb-callback.php', $permissions);
//==============
//echo '<a href="' . $loginUrl . '" style="">Log in Facebook!</a>';
?>
	
	<a href="<?php echo $loginUrl ?>"><img width="60%;" src="images/facebook.png"></a>
	<?php }?>
	<?php if(isset($_SESSION["id-user"])){?>
	<h4>XIN CHÀO <?php echo $_SESSION["ten-user"]?>
	</h4>
	<div style="margin: 10% 0;">
		<img src="images/user.png" width="120px" height="120px"; style="max-width: 150px; max-height: 150px; border: 2px solid; border-radius: 50%;">
	</div>
	<div class="danhMucDieuHuong"><a href="thongtintaikhoan.php">Cài đặt tài khoản</a></div>
	<div class="danhMucDieuHuong"><a href="lichsumuahang.php">Lịch sử mua hàng</a></div>
	<div class="danhMucDieuHuong"><a href="thongtintaikhoan.php?&thaotac=doi">Đổi mật khẩu</a></div>
	<div class="danhMucDieuHuong"><a style="color: #d8a23f; font-weight: bold;" href="yeuthich.php?">Yêu thích</a></div>
	<div class="danhMucDieuHuong"><a href="customer/Account/xldangxuat.php"><b>Đăng xuất&nbsp;</b></a></div>
	<?php }?>
	<div class="danhMucDieuHuong"><a onClick="dongform('formDangNhap')"><b>Đóng</b></a></div>
</div>