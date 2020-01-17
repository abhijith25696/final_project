<?php
include("header.php");
?>
<link rel="stylesheet" href="style.css">
<?php
		include_once"../controller/Mycontroller.php";
		$obj=new Mycontroller();
		 if(isset($_POST['submit']))
		 {
		 	
		 	$obj->insert();
		 }
		 ?>
<center>
<div>
<h2> REGISTRATION FORM </h2>
<form method="post" name="reg" onsubmit="return validate()" action="">
<table align="center" width="50%" border="0" style="padding:10px;" class="table">
<tr> 
<td>First Name</td><td><input type="text" name="fname" class="fld"> </td>
</tr>
<tr> 
<td>Last Name</td><td><input type="text" name="lname" class="fld"> </td>
</tr>
<tr> 
<td>Mobile</td><td><input type="mobile" name="mobile" class="fld"> </td>
</tr>
<tr> 
<td>Department Name</td><td><input type="text" name="dept_name" class="fld"> </td>
</tr>
<tr> 
<td>Course Name</td><td><input type="text" name="cname" class="fld"> </td>
</tr>
<tr> 
<td>Password</td><td><input type="password" name="password" class="fld"> </td>
</tr>
<tr> 
<td>Email</td><td><input type="email" name="email" class="fld"> </td>
</tr>
<tr> 
<td>User Name</td><td><input type="text" name="user_name"class="fld"> </td>
</tr>
<tr> 
<td>Semester No</td><td><input type="number" name="semno" class="fld"> </td>
</tr>
<tr> 
<td>Year</td><td><input type="number" name="year" class="fld"> </td>
</tr>
<tr> 
<td></td><td><input type="submit" name="submit" value="Submit" class="btn"> </td>
</tr>
</td>
</tr>
</table>
</form>
</div>
</center>
<?php include("footer.php"); ?>
