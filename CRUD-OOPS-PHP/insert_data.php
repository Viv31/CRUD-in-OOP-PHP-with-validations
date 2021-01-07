<?php 
include('functions.php');
$obj = new Query(); //creating object of the class and fetching data
//print_r($_POST);
if(isset($_POST['submit'])){
	$full_name = $_POST['full_name'];
	$mobile_no = $_POST['mobile_no'];
	$course = $_POST['course'];
	if(empty($full_name) && empty($mobile_no) && empty($course)){
		echo '<div class="row">
	<div class="col-md-6 mx-auto" id="error_div">
	<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Error!</strong> Please fill all fields.
</div>
</div>
</div>';

	}
	else{
		$data_arr = array('full_name'=>$full_name,'mobile_no'=>$mobile_no,'course'=>$course);
		$obj->insetData('students',$data_arr);
		
		header("location:index.php");

	}
	
}
?>