<?php include('header.php'); ?>
<div  style="border:3px solid red;width:450px;height: 300px;margin-top:50px;margin-left:450px;text-align: center ">
<form name="login" method="post">
<h1 align="center">LOGIN</h1>
PASSWORD:<input type="password" name="pwd" ><br><br>
USER NAME:<input type="text" name="pwd" ><br><br>
<input type="radio" name="keep" value="keep">Keep Me Logged In<br><br>
<input type="radio" name="keep" value="forgot"><a href="change_pwd.php">Forgot Password</a><br><br>
<input type="submit" name="reset" value="Cancel">
<input type="submit" name="submit" value="Submit">
</form>
</div>
<?php include ('footer.php');?>