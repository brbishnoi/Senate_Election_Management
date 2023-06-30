<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
            $employee_id=$_GET['employee_id'];
             
            //Connect to mysql server 
            $link = mysqli_connect('localhost', 'root', '','election'); 
            //Check link to the mysql server 
            if(!$link) { 
            die('Failed to connect to server: '); 
            } 
            //Create query (if you have a Logins table the you can select login id and password from there)
            $qry="SELECT * FROM admin WHERE employee_id='$employee_id'"; 
            //Execute query 
            $result=mysqli_query($link, $qry) ;
            $row = mysqli_fetch_assoc($result);
            if (isset($_POST['submit'])){ 
                //Collect POST values  
                $employee_id=$_GET['employee_id'];
                $employe_id=$_POST['employee_id'];  
                $admin_name=$_POST['admin_name'];
                $email=$_POST['email'];
                $admin_password=$_POST['admin_password'];
                 $qry="UPDATE admin SET employee_id='$employe_id',admin_name='$admin_name',email='$email',admin_password='$admin_password' WHERE employee_id='$employee_id'";
                 $result=mysqli_query($link, $qry) ; 
            if($result)
            {?>
                <script>
                    alert("updated successfully")
                    window.location.href="ManageAdmin.php";
                </script>
            <?php
            }
            
            }
            ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Section</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Senate Voting</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Admin</p>
                <li class="active">
                    <a href="AdminLogin.php">Dase Board</a>
                </li>
                <li>
                    <a href="Result.php">Result</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="AddAdmin.php">Add Admin</a>
                        </li>
                        <li>
                            <a href="ManageAdmin.php">Manage Admin</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#StudentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Student</a>
                    <ul class="collapse list-unstyled" id="StudentSubmenu">
                        <li>
                            <a href="AddStudent.php">Add Student</a>
                        </li>
                        <li>
                            <a href="ManageStudent.php">Manage Student</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#noteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Notification</a>
                    <ul class="collapse list-unstyled" id="noteSubmenu">
                        <li>
                            <a href="AddNotification.php">Add Notification</a>
                        </li>
                        <li>
                            <a href="ManageNotification.php">Manage Notification</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#candSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Candidate</a>
                    <ul class="collapse list-unstyled" id="candSubmenu">
                        <li>
                            <a href="AddCandidate.php">Add Candidate</a>
                        </li>
                        <li>
                            <a href="ManageCandidate.php">Manage Candidate</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="AdminChangePassword.php">Change Password</a>
                </li>
                <li>
                    <a href="AdminLogout.php">Log Out</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                           
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="mid-containt" style="background-color: wheat;margin-top: -4px; height: 570px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="">
                    <h2 class="text-center">Update Admin</h2>
                    <p class="text-center">Edit the details</p>
                    <div class="form-group">
                        <input class="form-control" type="text" name="employee_id"  value="<?php echo $row['employee_id']; ?>"> 
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="admin_name" value="<?php echo $row['admin_name']; ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email"  value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="admin_password" value="<?php echo $row['admin_password']; ?>">
                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> 
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
<?php
exit();
}
else{
    header('location:admin.php');
    exit();
}
?>