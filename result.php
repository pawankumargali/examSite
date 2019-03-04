<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Result | TITA Exam Portal </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./styles/resultstyle.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php

session_start();
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

include_once 'includes/dbconnect.inc.php';

$title = 'Result';
include_once 'includes/header.inc.php';

?>

    

    <div class="container-fluid" id="tabrow">
        <div class="row">
            <div class="col col-lg-12 col-md-12 col-sm-12 center-block" >
                <table class="table mx-auto" >
                 
                    <tbody>
                        
                      
                        <tr class="table-warning">
                          <td class="text-left">Total Questions</td>
                          <td class="text-right">10</td>
                        </tr>
                        
                        <tr class="table-active">
                          <td class="text-left">Questions Answered</td>
                          <td class="text-right"><?php echo $_SESSION['ans_count']; ?></td>
                        </tr>
                        
                        <tr class="table-success">
                          <td class="text-left">Correct</td>
                          <td class="text-right"><?php echo $_SESSION['user_score']; ?></td>
                        </tr>
                        
                        <tr class="table-danger">
                          <td class="text-left">Wrong Answer</td>
                          <td class="text-right"><?php echo $_SESSION['wrong_ans'];?></td>
                        </tr>
                        
                        <tr class="table-info">
                          <td class="text-left">Result</td>
                          <td class="text-right"><?php echo $_SESSION['user_result'];?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="row mx-auto center-block text-center" id="button-row">
        <a class="btn btn-primary mx-auto" href="./includes/endsession.inc.php" id="logout">Log Out</a>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <script>
            $(document).ready(function() {
                function disableBack() { window.history.forward() }
                window.onload = disableBack();
                window.onpageshow = function(evt) { if (evt.persisted) disableBack()}
            });
        </script>
</body>
</html>