<?php include('header.php'); ?>
<div  style="border:3px solid red;width:450px;height: 300px;margin-top:50px;margin-left:450px;text-align: center ">
<form name="login" method="post">
<h1 align="center">CHANGE PASSWORD</h1>
CURRENT PASSWORD:<input type="password" name="pwd" ><br><br>
NEW PASSWORD:<input type="text" name="npwd" ><br><br>
RETYPE PASSWORD:<input type="text" name="cpwd" ><br><br>
<input type="submit" name="reset" value="Cancel">
<input type="submit" name="submit" value="Submit">
</form>
</div>
<?php include ('footer.php');?>