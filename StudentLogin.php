<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{ 
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include("StudentHeader.php") ?> 
    <div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Student  </span> Home </h1>
    
    <div class="row">
        <div class="counter">   
            <div class="info">
                <h3> <span> Students’ Gymkhana is constituted to evolve a disciplined self-governance for carrying out various extracurricular in-campus activities and to establish a responsible and accountable student body. Students’ Gymkhana is governed by Student Senate which is constituted in democratic way through elections among each discipline and batch of the students. Student Senate members are elected through direct ballot voting, every year in the first week of January. Every registered student of the Institute is by-default member of student gymkhana and would have right to vote. All members of the student gymkhana who have their CPI >= 6.5 will be eligible to make their candidature for the Student Senate. </span>  </h3>   
            </div>
        </div>
    
    </div>
    
    </section>
    
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