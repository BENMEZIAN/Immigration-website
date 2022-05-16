<?php

session_start();

include 'functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">
    </head>

    <body data-spy="scroll">


        <?php include 'includes/navbar.php';?>

        <main>
        
            <div class="container-fluid mt-3">
                <h1 style="text-align: center;">Canada Immigration website</h1>
                <p style="text-align: center; font-size: 160%;">Welcome to our website which is a guide for anyone who wants to know about the process of
                immigrating in canada for both of students or employees.
                </p>
            </div>

            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                </div>
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/montreal.jpg" alt="montreal" class="d-block" style="width:100%;">
                    </div>
                    <div class="carousel-item">
                        <img src="images/quebec.jpg" alt="quebec" class="d-block" style="width:100%;">
                    </div>
                    <div class="carousel-item">
                        <img src="images/ottawa.jpg" alt="ottawa" class="d-block" style="width:100%;">
                    </div>
                    <div class="carousel-item">
                        <img src="images/ontario.jpg" alt="ontario" class="d-block" style="width:100%;">
                    </div>
                </div>
                <!-- Left and right controls/icons -->
                <div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div>
                <h1 style="text-align: center; color:red; margin-top:1%;">You want to pursue your study abroad!...</h1>
                <h1 style="text-align: center; color:red; margin-top:2%;">You want to work in Canada?!</h1>
                <h2 style="text-align: center; color:green; margin-top:2%;">...so, what do you think about it ?</h2>
                <h1 style="text-align: center; margin-top:2%;">You're in the right place.</h1>
                <p style="text-align: center; color:red; margin-top:2%; font-size: 500%;">Join us and let's begin the journey.</p>
                <h2 style="text-align: center;">Create an account and start your experience with us.</h2>
                
                
                <?php if(!isLoggedIn()): ?>
                    <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                        <a role="button" class="btn btn-primary me-md-2" href="register.php">register</a>
                    </div>   
                <?php else: ?>
                    <?php if($_SESSION['status'] == 'student'):?>
                        <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                            <a role="button" class="btn btn-primary me-md-2" href="studentProfile.php"><i class="fa fa-user" style="margin-right:3px;">
                        </i>Profile</a>
                        </div>   
                    <?php elseif($_SESSION['status'] == 'employee'):?>
                        <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                            <a role="button" class="btn btn-primary me-md-2" href="employeeProfile.php"><i class="fa fa-user" style="margin-right:3px;">
                        </i>Profile</a>
                        </div>   
                    <?php endif;?>
                <?php endif; ?>
                
            </div>

        </main>

        <?php include 'includes/footer.php';?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>    
    </body>
</html>