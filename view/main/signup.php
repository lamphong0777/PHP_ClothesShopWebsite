<div class="login-form-div">
	<div class="login-form">
		<h1 class="login-title">ĐĂNG KÝ THÀNH VIÊN</h1>
		<form action="index.php?quanly=signup" method="post" id="signupForm">
			<?php
				if(isset($register_err) && $register_err!=""){
					echo '<font color=red>'.$register_err.'</font><br>';
				}
			?>
			<label for="username" class="label-form"><i class="fas fa-user"></i></label>
			<input type="text" id="username" name="username" placeholder="Tài khoản" class="input-form">
			<br>

			<label for="name" class="label-form"><i class="fas fa-id-card"></i></label>
			<input type="text" name="name" placeholder="Họ tên của bạn (Không bắt buộc)" class="input-form">
			<br>

			<label for="email" class="label-form"><i class="fas fa-envelope"></i></label>
			<input type="text" name="email" placeholder="email.@gmail.com (Không bắt buộc)" class="input-form">
			<br>

			<label for="address" class="label-form"><i class="fas fa-map-marked-alt"></i></label>
			<input type="text" name="address" placeholder="Địa chỉ (Không bắt buộc)" class="input-form">
			<br>

			<label for="password" class="label-form"><i class="fa fa-key"></i></label>
			<input type="password" id="password" name="password" placeholder="Mật khẩu (Mật khẩu từ 5 đến 8 ký tự)" class="input-form">
			<br>

			<label for="confirmpassword" class="label-form"><i class="fa fa-key"></i></label>
			<input type="password" name="confirmpassword" placeholder="Nhập lại mật khẩu" class="input-form">
			<br>

			<input type="submit" name="dangky" class="btn btn-success" value="ĐĂNG KÝ">
			<br>
			<p>Bạn đã có tài khoản? <a href="index.php?quanly=dangnhap">Đăng nhập</a></p>
		</form>
	</div>
</div>