<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{ 
        $candidate_id=$_GET['id'];
       //Connect to mysql server 
       $link = mysqli_connect('localhost', 'root', '','election'); 
       //Check link to the mysql server 
       if(!$link) { 
       die('Failed to connect to server: '); 
       } 
       //Create query (if you have a Logins table the you can select login id and password from there)
       
       $qry="SELECT * FROM candidate WHERE candidate_id='$candidate_id'"; 
       //Execute query 
       $result=mysqli_query($link, $qry) ;
       $row = mysqli_fetch_assoc($result)
       //echo mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidate Profile</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="<?php echo $row['image'];?>" alt="">
        <h3 class="name"><?php echo $row['candidate_name'];?></h3>
        <p class="post">Student leader</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span><?php echo $row['candidate_name'];?></span></h1>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

<div class="info">
        <h3> <span> Candidate id : </span> <?php echo $row['candidate_id'];?> </h3>
        <h3> <span> College id : </span> <?php echo $row['college_id'];?> </h3>
        <h3> <span> Name : </span> <?php echo $row['candidate_name'];?> </h3>
        <h3> <span> Year     : </span> <?php echo $row['year'];?> </h3>
        <h3> <span> Branch : </span> <?php echo $row['branch'];?> </h3>
        
        
       
        
    </div>

    

</div>

</section>
<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> <?php echo $row['email'];?> </h3>
            <h3> <i class="fas fa-phone"></i> <?php echo $row['mobile_number'];?> </h3>
            
        </div>

    </div>
</div>

</section>

<!-- contact section ends -->
<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>
<?php
exit();
}
else{
    header('location:student.php');
    exit();
}
?>