<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration | TITA Exam Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./styles/regstyle.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container-fluid" id="cont">
    
            <!--<div class="row center-block text-center">-->
            <!--    <span id="heading">Digithon<span id="trademark">ï¿½</span>-->
            <!--</div>-->

            <div class="row" id="center-row">

        
                <div class="contact-form col-lg-4 col-md-4 col-sm-6 col-xs-6" id="center-col">
                    
                    <br>
                    <br>
                    <h1 class="title text-center" id="reg-title">Digithon<span id="trademark">®</span> Test Portal</h1>
                    <br>
                    <br>

                    <div class="form-section">

                        <form action="./includes/validation.inc.php" method="post" id="regform">
                            <div class="form-group">
                                <label for="Name"><strong>Name</strong></label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>

                            <div class="form-group">
                               <label for="school"><strong>School</strong></label>
                               <input type="text" class="form-control" name="school" placeholder="Your School Name" required>
                            </div>


                            <div class="form-group">
                                <label for="rollno"><strong>Roll No.</strong></label>
                                <input type="number" class="form-control" name="rollno" placeholder="Your Roll Number" required>
                            </div>
                            
                            <br>
                            <br>
                            
                            <button class="btn btn-primary" type="submit" >Take Test</button>
                            
                            

                         </form>
                         <br>
                         <br>

                </div>

            </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

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