<?php
$id=$_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'election'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
$delete = "DELETE FROM candidate WHERE candidate_id = '$id'";
$results = mysqli_query($link, $delete);
if($results)
{
?>
<script>
    alert("delete successfully");
</script>  
<?php
header('location:ManageCandidate.php');  
}

else{
}
?>