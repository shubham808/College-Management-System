<?php

require('include/db_connect.php');
	$roll_number="ipg2015-118";
	$arr=[];
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
	 		echo json_encode($arr);
	 	} else {
	 		echo "Error";
	 	}

?>