<?php
$con = mysqli_connect('localhost', 'root', '','election'); 
//Check link to the mysql server 
if(!$con) { 
die('Failed to connect to server: '); 
} 
if(isset($_POST['check-email'])){
        $email =$_POST['email'];
        $check_email = "SELECT * FROM student WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(99999, 111111);
            $insert_code = "UPDATE student SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: brbishnoi2003@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    session_start();
                    $_SESSION['email']=$email;
                    header('location: StudentReset.php');
                    exit();
                }else{
                ?>
                    <script>
                      alert("failed to sending  code..!");
                   </script>
                <?php
                }
            }else{
            ?>
                <script>
                      alert("something went wrong..!");
                </script>
            <?php
            }
        }else{
            ?>
                    <script>
                      alert("failed to sending  code..!");
                   </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" >
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>