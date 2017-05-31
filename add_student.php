
<?php
require('include/db_connect.php');

        $arr=$_POST['arr'];
	
 	$query="INSERT INTO student_data (name,student_id,date_of_birth,address,gender,contact,year) VALUES ('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]','$arr[5]','$arr[6]')";
 	$res=mysqli_query($db,$query);
 	if($res){
 		 print_r($arr);
 	}else {
 		echo "failed";
 	}
   
?>





