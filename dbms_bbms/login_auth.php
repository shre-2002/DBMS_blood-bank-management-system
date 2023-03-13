<?php
	
	 $username = $_GET['usn'];  
    $password = $_GET['pwd']; 
$link=mysqli_connect("localhost", "root", "", "dbms_bbms"); 
         $sql = "SELECT * FROM admin WHERE username = '$username' and pwd = '$password'";
$result = mysqli_query($link, $sql);  
$count = mysqli_num_rows($result);    
        if($count==1){
		header('Location:admin.php');
		exit;
} else {
echo "Incorrect credentials: " .$link->error;     
}
?>  