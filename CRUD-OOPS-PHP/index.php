<?php
include('header.php');
/*include('database.php');*/
include('functions.php');
$obj = new Query(); //creating object of the class and fetching data
$data = $obj->fetchData('students');
//print_r($data);

?>
<div class="row">
  <div class="col-md-8 mx-auto">
    <a href="add_data.php" class="btn btn-success pull-right mb-2">Add</a>
  </div>
  <div class="col-md-8 mx-auto" id="all_data">
      
  <table class="table">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if(isset($data['0'])){
        $sno=1;
      foreach ($data as  $value) {

        ?>
         <tr>
        <td><?php echo $sno; ?></td>
        <td><?php echo $value['full_name']; ?></td>
        <td><?php echo $value['mobile_no']; ?></td>
        <td><?php echo $value['course']; ?></td>
        <td colspan="2">
          <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick=" return confirm('Do You want to Delete this ?');">Delete </a> 
        </td>
        <td>
          <a href="update.php?id=<?php echo $value['id']; ?>" class="btn btn-success">Update </a> 
        </td>
      </tr>
        <?php
        $sno++;
      }
    }
    else{
      ?>
      <tr>
        <td>No Data Found</td>
      </tr>
      <?php
    }

      ?>
     
    </tbody>
  </table>
</div>
</div>
<?php include('footer.php'); ?>