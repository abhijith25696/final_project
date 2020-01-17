<?php
 
  class MyModel1  {
 	public  $conn;
 	
  	public function __construct()
  	{
   
         }
  	
  	public function insert($firstname, $lastname,$mobile,$Departmentname,$Coursename,$Password,$Email,$name,$Semno,$year)
  	{
         $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "final_project";
   
  $conn =mysqli_connect($host, $username, $password,$dbname) or die('Not connected to Database<br>' . mysql_error());
         $sql = "INSERT INTO student																						(Fname,Lname,Mobile,Dept_name,Course_name,Password,Email,Name,Sem_no,Years)
         VALUES ('$firstname', '$lastname','$mobile','$Departmentname','$Coursename','$Password','$Email','$name','$Semno','$year')";

        if (mysqli_query($conn,$sql)) {
             echo "New record created successfully";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

    }
    public function select($uname,$upass)
    {
         $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "final_project";
   
  $conn =mysqli_connect($host, $username, $password,$dbname) or die('Not connected to Database<br>' . mysql_error());
      $sql="select * from student where Password='$upass' and Name='$uname'";
    }
	
	}

  ?>