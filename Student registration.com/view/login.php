<html>
<body>
	<div>
		<form action="" method="post">
		 <input type="text" name="uname" placeholder="username" />
		 <input type="text" name="upass" placeholder="Password" />
		 <input type="submit" name="login"/>
		 <?php
		 include_once"controller/Mycontroller.php";
		 	$obj=new Mycontroller();
		 if(isset($_POST['login']))
		 {
		 	$uname=$_POST['uname'];
		 	$upass=$_POST['upass'];
		 	$obj->select($uname,$upass);
		 }
		 ?>
		New user?<input type="submit" name="register" value="click here" />
		<?php
		include_once"controller/Mycontroller.php";
		$obj=new Mycontroller();
		 if(isset($_POST['register']))
		 {
		 	
		 	$obj->registration();
		 }
		 ?>
		</form>
	</div>
</body>
</html>