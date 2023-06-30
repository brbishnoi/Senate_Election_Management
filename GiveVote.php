<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
        <?php
            $id=$_GET['id'];
            //Connect to mysql server 
            $link = mysqli_connect('localhost', 'root', '','election'); 
            //Check link to the mysql server 
            if(!$link) { 
            die('Failed to connect to server: '); 
            } 
            //Create query (if you have a Logins table the you can select login id and password from there)
                //Collect POST values  
                $candidate_id=$id;
                session_start();
                $college_id=$_SESSION['id'];  
                $qry="INSERT INTO vote VALUES('$candidate_id','$college_id','NULL')";
                 $result=mysqli_query($link, $qry) ; 
            if($result)
            {?>
                <script>
                    alert("voted successfully");
                </script>
            <?php
            }
            else{
                ?>
                <script>
                    alert("can'not voted twice");
                </script>
            <?php
            }
            include('Vote.php');
            ?>
</body>
</html>