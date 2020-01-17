<?php
  
class Mycontroller{
			 var $firstname;
			 var $lastname;
			 var $mobile;
			 var $Departmentname;
			 var $Coursename;
			 var $Password;
			 var $Email;
			 var $name;
			 var $Semno;
			 var $year;
 
 //private $password;

public function __construct()
{
   
}
	public function login()
	{
		include_once"view/login.php";
	}
	public function registration()
	{

	
		header('Location:view/registration.php');
	}

	public function insert()
{
	   $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "final_project";
	 
	$conn =mysqli_connect($host, $username, $password,$dbname) or die('Not connected to Database<br>' . mysql_error());
  echo "insert";
   $firstname= $_POST['fname'];
   $lastname= $_POST['lname'];
   $mobile= $_POST['mobile'];
   $Departmentname= $_POST['dept_name'];
   $Coursename= $_POST['cname'];
   $Password= $_POST['password'];        
   $Email= $_POST['email'];
   $name= $_POST['user_name'];
   $Semno= $_POST['semno'];
   $year= $_POST['year'];
   echo $firstname." ".$lastname." ".$mobile." ".$Departmentname." ".$Coursename;
  include '../model/MyModel1.php';
  $mod= new MyModel1();
  $mod->insert($firstname,$lastname,$mobile,$Departmentname,$Coursename,$Password,$Email,$name,$Semno,$year);
  echo "ok";

}
 public function select($uname,$upass)
    {
     $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "final_project";
   
  $conn =mysqli_connect($host, $username, $password,$dbname) or die('Not connected to Database<br>' . mysql_error());
   include 'model/MyModel1.php';
  $mod= new MyModel1();
  $mod->select($uname,$upass);
  echo "ok";
      
    }

 /* public function login($uname,$upass)
 {
  include 'model/model.php';
  include 'config/connection.php';
 echo  $sql="select * from students where Password='$upass' and name='$uname'";
  if($uname=='admin' && $upass=='adadmin'){
  include 'view/home.php';
}*/


 }


?>