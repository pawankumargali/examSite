<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quiz | TITA Exam Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./styles/quizstyle.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>
    
<?php

session_start();

if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

include_once 'includes/dbconnect.inc.php';

$title = 'Welcome '.$_SESSION['username']; 

include_once 'includes/header.inc.php';
?>
        <div class="row" id="space-div"></div>
        <form action="./includes/check.inc.php" method="post">
            
            <?php

                for($i=1; $i<11; $i++)  {

                    
                    $randno = mt_rand(1,384);
                    
                     $q = "select * from questions where qid = $randno";

                    $query = mysqli_query($con,$q);
                    
                    while(  $rows = mysqli_fetch_array($query) )  {
            ?>      
                            <p class="card-header" id="qanda-block"> 
                                <?php   echo $i.". ";
                                        print_r($rows['question']); 
                                ?> 
                            </p>
                
                            <?php
                    
                                    $q = "select * from answers where qopt_id = $randno";
                                    
                                    $query = mysqli_query($con, $q);

                                    while( $rows = mysqli_fetch_array($query) ) {
                            ?>            
                            <p class="card-body" id="optionblock"> 
                                <input type="radio" name="quizcheck[<?php echo $rows['qopt_id'] ?>]" value="<?php print_r($rows['aid']); ?>" />
                                <?php echo $rows['answer'];?>
                            <p>    
                                
            <?php
                        }    
                    }  
                }  
            ?>

            <div class="col col-lg-12 col-md-12 col-sm-12 center-block text-center">
                <input class="btn btn-primary" type="submit" value ="Submit Responses" name="submit-response" id="response-sub">
            </div>
            
            
        </form>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <script>
            $(document).ready(function() {
                function disableBack() { window.history.forward() }
                window.onload = disableBack();
                window.onpageshow = function(evt) { 
                    if (evt.persisted) {
                        disableBack();
                    }
                    }
            });
        </script>

    </body>

</html>