<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
       //Connect to mysql server 
       $link = mysqli_connect('localhost', 'root', '','election'); 
       //Check link to the mysql server 
       if(!$link) { 
       die('Failed to connect to server: '); 
       } 
       //Create query (if you have a Logins table the you can select login id and password from there)
       $qry='SELECT * FROM candidate'; 
       //Execute query 
       $result=mysqli_query($link, $qry) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->
<?php include('StudentHeader.php') ?>
<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Candidate</span> Profile </h1>
    
    <div class="row">
    
        
    
        <div class="counter">
        <?php
        while ($row = mysqli_fetch_assoc($result))
       { 
        ?>
            <div class="box">
                <span></span>
                <h3><img src="<?php echo $row['image'];?>" alt="" style="height: 150px;"></h3>
            </div>
            <div class="info">
                <h3> <span> name : </span> <?php echo $row['candidate_name'];?> </h3>
                <h3> <span> candidate id : </span> <?php echo $row['candidate_id'];?> </h3>
                <h3> <span> college id : </span> <?php echo $row['college_id'];?> </h3>
            </div>
    
            <div class="box">
                <span><br></span>
                <h3><a href="GiveVote.php?id=<?php echo $row['candidate_id'];?>"><button class="btn"> Vote <i class="icon-resize-full"></i> </button></a></h3>
            </div>
       <?php
       }
       ?>
        </div>
    
    </div>
    
    </section>
</body>
<?php
exit();
}
else{
    header('location:student.php');
    exit();
}
?>