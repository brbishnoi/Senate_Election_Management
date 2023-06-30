<?php
$college_id=$_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'election'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
$delete = "DELETE FROM student WHERE college_id = '$college_id'";
$results = mysqli_query($link, $delete);
if($results)
{
?>
<script>
    alert("delete successfully");
</script>  
<?php
header('location:ManageStudent.php');  
}

else{
    ?>
    <script>
        alert("something went wrong....");
        window.location.href="ManageStudent.php";
    </script>  
    <?php
}
?>