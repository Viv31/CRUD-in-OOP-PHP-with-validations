<?php
include('functions.php');
$id = $_POST['id'];
//echo $id;
$obj = new Query();
$full_name = $_POST['full_name'];
		$mobile_no = $_POST['mobile_no'];
		$course = $_POST['course'];
		echo $full_name;

if(isset($_POST['update'])){
	if(!empty($full_name) && !empty($mobile_no) && !empty($course)){
		
		$data_arr = array('full_name'=>$full_name,'mobile_no'=>$mobile_no,'course'=>$course);
		$obj->UpdateData('students',$data_arr,$id);
		header("location:index.php");

	}
	else{
		echo '<div class="row">
	<div class="col-md-6 mx-auto">
	<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Error!</strong> Please fill all fields.
</div>
</div>
</div>';
	}
	
	
}
?>