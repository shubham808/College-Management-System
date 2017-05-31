
<?php

require('include/db_connect.php');
if(isset($_POST['roll_number'])){
	$student_id = $_POST['roll_number'];
	$query="DELETE FROM bank WHERE student_id='$student_id'";
	$res=mysqli_query($db,$query);
	$query="DELETE FROM fee_status WHERE student_id='$student_id'";
	$res=mysqli_query($db,$query);
	$query="DELETE FROM library WHERE borrowed_by='$student_id'";
	$res=mysqli_query($db,$query);
	$query="DELETE FROM student_data WHERE student_id='$student_id'";
	$res=mysqli_query($db,$query);
	if($res){
		echo $id;
	}else {
 		echo "Error";
 	}

} else {
	header("Location: index.php");
}
?>












