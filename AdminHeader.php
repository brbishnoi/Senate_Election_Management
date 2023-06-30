<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    
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