<?php 
$con = mysqli_connect('localhost', 'root', '','election'); 
//Check link to the mysql server 
if(!$con) { 
die('Failed to connect to server: '); 
} 
if(isset($_POST['change-password'])){
session_start();
$email = $_SESSION['email'];
if($email == false){
  header('Location: Student.php');
}
    $password = mysqli_real_escape_string($con, $_POST['student_password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['student_cpassword']);
    if($password !== $cpassword){
        ?>
        <script>
            alert('Confirm password not matched!');
        </script>
        <?php
    }else{
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass =$password;
        $update_pass = "UPDATE student SET code = $code, student_password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if($run_query){
            ?>
                <script>
                    alert("updated successfully")
                    window.location.href="Student.php";
                </script>
            <?php
        }else{
            ?>
        <script>
            alert('failed to change password!');
        </script>
        <?php
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <div class="form-group">
                        <input class="form-control" type="password" name="student_password" placeholder="Create new password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="student_cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>