
<?php
require('include/db_connect.php');
	
	$arr=[];
	$roll_number=$_POST['roll_number'];
 	$query="SELECT * FROM student_data WHERE student_id='$roll_number'";
	 	$res=mysqli_query($db,$query) ;
	 	if($res){
	 		$arr = mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
	 	} else {
	 		echo "Error";
	 	}
 	$query="SELECT * FROM bank WHERE student_id='$roll_number'";
	 	$res=mysqli_query($db,$query) ;
	 	if($res){
	 		$arr = array_merge($arr,mysqli_fetch_all($res,MYSQLI_ASSOC)[0]);
	 	
	 	} else {
	 		echo "Error";
	 	}
 	$query="SELECT * FROM fee_status WHERE student_id='$roll_number'";
	 	$res=mysqli_query($db,$query) ;
	 	if($res){
	 		$arr = array_merge($arr,mysqli_fetch_all($res,MYSQLI_ASSOC)[0]);
	 	
	 	} else {
	 		echo "Error";
	 	}
 	$query="SELECT * FROM class_data WHERE year= ( SELECT year from student_data WHERE student_id='$roll_number')";
	 	$res=mysqli_query($db,$query) ;
	 	if($res){
	 		$arr = array_merge($arr,mysqli_fetch_all($res,MYSQLI_ASSOC)[0]);
	 		
	 	} else {
	 		echo "Error";
	 	}
	 $query="SELECT * FROM library WHERE borrowed_by='$roll_number'";
	 	$res=mysqli_query($db,$query);
	 	if($res){
	 		$arr2=mysqli_fetch_all($res,MYSQLI_ASSOC);
	 		for ($i=0; $i < sizeof($arr2); $i++) { 
	 			$arr1 = array(
	 				'book_id'.$i => $arr2[$i]['book_id'], 
	 				'ISBN'.$i => $arr2[$i]['ISBN'],
	 				'book_name'.$i => $arr2[$i]['book_name']
	 				);
	 			$arr = array_merge($arr,$arr1);
	 			
	 		}
	 		$arr1 = array('number_of_books' => $i );
	 		$arr = array_merge($arr,$arr1);
	 		echo json_encode($arr);
	 	} else {
	 		echo "Error";
	 	}

 	

?>





