<?php
$link = mysqli_connect('localhost', 'root', '', 'election'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
$delete = "TRUNCATE TABLE vote";
$results = mysqli_query($link, $delete);
if($results)
{
?>
<script>
    alert("all data successfully deleted");
    window.location.href="Result.php";
</script>  
<?php

}
else{
    ?>
    <script>
        alert("something went wrong....");
        window.location.href="Result.php";
    </script>  
    <?php
       
}
?>