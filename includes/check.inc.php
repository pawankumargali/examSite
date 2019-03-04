<!--<script type="text/javascript">  -->
<!--    location='../result.php';-->
<!--    window.open(location);-->
<!--</script>-->

<?php

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../index.php');
}

include_once 'dbconnect.inc.php';

if( isset($_POST['submit-response']) ) {

        if(!empty($_POST['quizcheck'])) {

            $anscount = count($_POST['quizcheck']);
            //   echo "Out of 10, you have answered ".$anscount." questions<br>";     

         }
       
                $seloptn = $_POST['quizcheck'];
                //  print_r($seloptn);
    
                $q = "select * from questions";
                $query = mysqli_query($con, $q);

                $testscore = 0;
                $i = 1;
                while( $rows = mysqli_fetch_array($query) ) {
    
                    //  print_r($rows['ans_id']);
                    
                    $check = ($rows['ans_id'] == $seloptn[$i]);
                    
    
                    if($check) {
    
                       $testscore++;
                    }
                    
                    $i++;
                } 

                // echo $testscore;
                 $wrongans = $anscount - $testscore;
                if($testscore>=3) {
                    $result = "Pass";
                }
                else {
                    $result = "Fail";
                }   
            
                //assigning page values to session variables
                $_SESSION['ans_count'] = $anscount; 
                // $_SESSION['user_response'] = $seloptn;
                $_SESSION['user_score'] = $testscore;
                $_SESSION['wrong_ans'] = $wrongans;
                $_SESSION['user_result'] = $result;
                
            
                //assigning session values to page varibles
                $name = $_SESSION['username'];
                $school = $_SESSION['userschool'];
                $rollno = $_SESSION['userrollno'];

                $qr = "insert into userdata(name, school, rollno, answered_ques, score, wrong_ans, result) values ('$name', '$school', '$rollno',  '$anscount', '$testscore', $wrongans, '$result')";

                $queryresult = mysqli_query($con, $qr);

                if($queryresult) {
                    header('Location: ../result.php');
                }
            
    }
?>

    

