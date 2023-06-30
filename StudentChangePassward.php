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
            //Execute query 

            if (isset($_POST['submit'])){ 
                //Collect POST values  
                
                $college_id=$_SESSION['id'];
                $student_password=$_POST['student_password'];
                $student_cpassword=$_POST['student_cpassword'];
                if($student_password==$student_cpassword)
                {
                         $qry="UPDATE student SET student_password='$student_password' WHERE college_id='$college_id'";
                         $result=mysqli_query($link, $qry) ; 
                        
                    if($result)
                    {?>
                        <script>
                            alert("password changed successfully")
                        </script>
                    <?php
                    }
        
                    
                }
                else{
                    ?>
                    <script>
                        alert('Enter Same password in field');
                    </script>
                    <?php
                }
            }
                    ?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Change Password</title>

    <!-- font awesome cdn link  -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
    
<!-- header section starts  -->
<?php include('StudentHeader.php') ?>


<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>
    <h1 class="heading"> <span>Student</span> Change Password </h1>
<section class="about" id="about">

<div class="mid-containt" style="margin-top: -4px; height: 570px;">
    <div class="container" style="left: 29%;">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="">
                    <h2 class="text-center">Change Password</h2>
                    <p class="text-center"></p>
                    
                    <div class="form-group">
                        <input class="form-control" type="password" name="student_password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="student_cpassword" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
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