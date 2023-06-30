<?php
$serial_number=$_GET['serial_number'];
$link = mysqli_connect('localhost', 'root', '', 'election'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
$delete = "DELETE FROM notification WHERE serial_number = '$serial_number'";
$results = mysqli_query($link, $delete);
if($results)
{
?>
<script>
    alert("delete successfully");
</script>  
<?php
header('location:ManageNotification.php');  
}

else{
      
}
?>