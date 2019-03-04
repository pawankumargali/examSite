<?php

session_start();

include_once 'dbconnect.inc.php';

$name = $_POST['name'];
$school = $_POST['school'];
$rollno = $_POST['rollno'];

$q = "select * from registered where name ='$name' && rollno ='$rollno'";


$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);


if($num == 1) {
    ?>

    <script type="text/javascript"> alert('User already exists'); 
    url='../index.php';
    location.replace(url);
    </script>

    <?php
        
}
else {
    $qy = "insert into registered (name, school, rollno) values ('$name', '$school', '$rollno')";
    mysqli_query($con, $qy);
    $_SESSION['username'] = $name;
    $_SESSION['userschool'] = $school;
    $_SESSION['userrollno'] = $rollno;
    header('Location: ../instructions.php');
}

    
?>
