<?php
if (isset($_POST['login'])){ 
    //Collect POST values 
     $college_id=$_POST['college_id'];
     $student_password=$_POST['student_password']; 
    //Connect to mysql server 
    $link = mysqli_connect('localhost', 'root', '','election'); 
    //Check link to the mysql server 
    if(!$link) { 
    die('Failed to connect to server: '); 
    } 
    session_start(); 
     $_SESSION['id'] = $college_id; 
    //Create query (if you have a Logins table the you can select login id and password from there)
    $qry="SELECT college_id,student_password FROM student WHERE college_id = '$college_id' AND student_password = '$student_password'"; 
    //Execute query 
    $result=mysqli_query($link, $qry) ;
    //echo mysqli_num_rows($result);
    //if query was successful it should fetch 1 matching record from the table. 
    if(mysqli_num_rows($result)==1){ 
    //Login successful set session variables and redirect to main page.
    session_start(); 
    $_SESSION['IS_AUTHENTICATED'] = 1;  
    header('location:StudentLogin.php'); 
    } 
    else{ 
    ?>
    <script>
        alert('please enter correct detail !')
    </script>
    <?php 
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your college id and password.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" name="college_id" placeholder="Collge id" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="student_password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="StudentForgot.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>