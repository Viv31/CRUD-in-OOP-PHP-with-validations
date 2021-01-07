<?php
include('database.php');
class Query extends database{

	public function fetchData($table,$field='*'){
		$sql="select $field from $table ";
		 $result =$this->connect()->Query($sql);
		 //print_r($result);
		 if($result->num_rows > 0){
		 	$records = array();
		 	while($row =$result->fetch_assoc() ){
		 		//print_r($row);
		 		 $records[] = $row;
		 	}
		 	return $records;
		 }

	}

	//Function for adding data here $table is first parameter which is table name and $data_arr is fields array 
	public function insetData($table,$data_arr){
		if($data_arr!=''){
			foreach($data_arr as $key => $value){
				$field_name[] = $key; //fields name goes here
				$field_val[] = $value; // fields value goes here 

			}
			$field = implode(",",$field_name);
			$values = implode("','",$field_val);
			$values = "'".$values."'";
			$insert_data = " INSERT INTO $table($field) values($values) ";
			$res = $this->connect()->query($insert_data);

		}

	}
	//Delete function 
	public function DeleteData($table,$id){
		$delete_data = " DELETE FROM $table WHERE id = $id ";
		$result = $this->connect()->query($delete_data);
	}

	//get  data for update function
	public function GetUpdateData($id,$table){
		$get_update_data = " SELECT * FROM $table WHERE id = $id";
		$result = $this->connect()->query($get_update_data);
		if($result->num_rows > 0){
		 	$records = array();
		 	while($row =$result->fetch_assoc() ){
		 		//print_r($row);
		 		 $records[] = $row;
		 	}
		 	return $records;
		 }

	}
	//Update data function
	public function UpdateData($table,$data_arr,$id){
		if($data_arr!=''){
		     $update_query = " UPDATE $table SET ";
			$c = count($data_arr); //count numbers of fields in table	
			$i = 1;
			foreach($data_arr as $k=>$v){
				if($i==$c){
					//if count is equal to first field so it will update first field otherwise it will update next fields.
					$update_query.="$k='$v'";

				}else{
					$update_query.="$k='$v', ";
				}
				$i++;
			}
			
			$update_query.= "WHERE id = $id";
			$result = $this->connect()->query($update_query);
			
		}
	}

}
?>