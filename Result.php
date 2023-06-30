<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{ 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Result</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   

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
                    <a href="#">Dase Board</a>
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
                    <a href="StudentLogout.php">Log Out</a>
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
                        <center><button style="background-color: #1c87c9;" type="button" onclick="window.location.href='VoteDelete.php';" class="btn">All Vote Delete</button></center>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2></h2>
            <div class="mid-containt" style="margin-top: -4px;">
        <h1 style="text-align: center; color: white;"><br> Result</h1><br>
        
        <h3>
        <?php
       //Connect to mysql server 
       $link = mysqli_connect('localhost', 'root', '','election'); 
       //Check link to the mysql server 
       if(!$link) { 
       die('Failed to connect to server: '); 
       } 
       //Create query (if you have a Logins table the you can select login id and password from there)
       $qry='SELECT vote.candidate_id,COUNT(vote.college_id),candidate.candidate_name from vote JOIN candidate on candidate.candidate_id=vote.candidate_id GROUP BY vote.candidate_id'; 
       //Execute query 
       $result=mysqli_query($link, $qry) ;
       //echo mysqli_num_rows($result);
       //if query was successful it should fetch 1 matching record from the table. 
       echo '<center>
       <table border="10" style="width: 50%;color: white;">
       <tr>
       <th>candidate ID</th>
       <th>Name</th>
       <th>Vote</th>
       </tr>';
    
      while ($row = mysqli_fetch_assoc($result))
       { 
    ?>
    
        <td><?php echo $row['candidate_id']; ?></td>
        <td><?php echo $row['candidate_name']; ?></td>
        <td><?php echo $row['COUNT(vote.college_id)']; ?></td>
        </tr>
    <?php
       }
      echo '</table>
        </center>';   
    ?>
    </h3>
    <br><br><br>
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
    header('location:student.php');
    exit();
}
?>