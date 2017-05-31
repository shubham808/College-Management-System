
<?php
require('include/db_connect.php');
//taking inputs after validation
if(isset($_POST['arr'])){
	$arr = $_POST['arr'];
 	$query="UPDATE student_data SET student_id='$arr[0]',name ='$arr[1]', date_of_birth='$arr[2]',address='$arr[3]',gender='$arr[4]',contact='$arr[5]',year='$arr[6]' WHERE student_id = '$arr[7]'";
 	$res=mysqli_query($db,$query);
 	if($res){
 		echo $arr[0];
 	}else {
 		echo "Error";
 	}
 	
 } else {
 	header("Location: index.php");
 } 
?>





