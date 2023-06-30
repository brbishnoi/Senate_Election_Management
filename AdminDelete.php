<?php
$employee_id=$_GET['employee_id'];
$link = mysqli_connect('localhost', 'root', '', 'election'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
$delete = "DELETE FROM admin WHERE employee_id = '$employee_id'";
$results = mysqli_query($link, $delete);
if($results)
{
?>
<script>
    alert("delete successfully");
</script>  
<?php
header('location:ManageAdmin.php');  
}

else{
}
?>