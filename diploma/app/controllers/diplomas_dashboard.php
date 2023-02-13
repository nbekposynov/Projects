<?php

if(isset($_POST['approved']))
{
	$status="Одобрено";
	$id=$_POST['id'];
	
	 $query="UPDATE `applied_requests` set `status`='$status' where `id`='$id'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}

}

if(isset($_POST['rejected']))
{
	$status= "Отказано";
	$id=$_POST['id'];
	
	$query="UPDATE `applied_requests` set `status`='$status' where `id`='$id'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}
}


?>