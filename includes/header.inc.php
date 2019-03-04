 <link rel="stylesheet" type="text/css" href="./styles/header.inc.css">
 
    <nav class="navbar navbar-expand-lg fixed-top" id="head">

        <div class="row container-fluid" id="nav-row">

            <div class="col col-lg-4 col-md-4 col-sm-2 text-left">
                <p> Name: <b><?php echo $_SESSION['username'];?></b></p>
                <p> Roll number: <b><?php echo $_SESSION['userrollno'];?></b></p>
            </div>
             
            
            <div class="col col-lg-4 col-md-4 col-sm-2 text-right">
                    <p> School: <b><?php echo $_SESSION['userschool'];?></b></p>
                    <a class="btn btn-primary" href="./includes/endsession.inc.php">Exit Session</a>
            </div>

        </div>
       
    </nav>
    
    <div class="row container-fluid" id="test-heading-row">
            <div class="col col-lg-12 col-md-12 col-sm-12 center-block text-center" id="test-heading"><?php echo $title; ?></div>
    </div>