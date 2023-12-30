<div class="col">
	<!-- <?php
		var_dump($userinfo);
	?> -->
	<div class="userinfo table-bordered">
		<img src="./images/user.png" alt="">
		<h3>Thông tin tài khoản người dùng</h3><br>
		<?php
		echo '<p>Tên tài khoản: '.$userinfo[0]['username'].'</p>';
		if($userinfo[0]['name']=="")
			echo '<p>Họ tên: Chưa cập nhật.</p>';
		else
			echo '<p>Họ tên: '.$userinfo[0]['name'].'</p>';
		if($userinfo[0]['email']=="")
			echo '<p>Email: Chưa cập nhật.</p>';
		else
			echo '<p>Email: '.$userinfo[0]['email'].'</p>';
		if($userinfo[0]['address']=="")
			echo '<p>Địa chỉ: Chưa cập nhật.</p>';
		else
			echo '<p>Địa chỉ: '.$userinfo[0]['address'].'</p>';
		?>
		<a class="text-reset" href="index.php?quanly=edituser&username=<?=$userinfo[0]['username'];?>"><i class="fa fa-pen"></i>cập nhật thông tin</a>
	</div>
</div>