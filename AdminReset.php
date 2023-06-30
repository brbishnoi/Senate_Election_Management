<?php
 $con = mysqli_connect('localhost', 'root', '','election'); 
 //Check link to the mysql server 
 if(!$con) { 
 die('Failed to connect to server: '); 
 }
if(isset($_POST['check-reset-otp'])){
    session_start();
    $email=$_SESSION['email'];
    if($email == false){
        header('Location: Admin.php');
      }
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM admin WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        header('location: AdminNewPassword.php');
        exit();
    }
?>
    <script>
            alert("You've entered incorrect code!");
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>