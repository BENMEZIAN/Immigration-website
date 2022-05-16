<?php

session_start();

include 'functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bachelor cycle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">
    </head>

    <body data-spy="scroll">


        <?php include 'includes/navbar.php';?>


        <main>

            <div class="container-fluid mt-3">
                <h1 style="text-align: center;">Welcome to this guide for Bachelor students</h1>
                <p style="text-align: center; font-size: 160%;"></p>
            </div><br />

            <div class="container mb-6 ">
                <div class="row">
                    <div class="container" style="padding:0px;">
                        <ol>
                            <li>
                                <b>
                                    You have to get a study permit from any college or university in canada by
                                    registering at that website.
                                </b>
                            </li><br/>
                            <li>
                                <b>
                                    After obtaining the study permit from the (college/university), you must send via the university's website the bachelor's 
                                    application documents which are :
                                </b>
                                <ul>
                                    <li>Baccalaureate diploma</li>
                                    <li>School reports</li>
                                    <li>ID photo</li>
                                    <li>Birth act</li>
                                    <li>Motivation letter</li>
                                    <li>Recommendation letter(s)</li>
                                    <li>IELTS exam certificate with a score defined by the university</li>
                                    <li>Passport</li>
                                </ul><br/>
                                <span style="color:red;">You have to translate all these previous documents into english or french depending on the region.</span><br/>
                            </li><br/>
                            <li>
                                <b>
                                    After that you wait for the admission for passing the interview.
                                </b>
                            </li><br>
                            <li>
                                <b>
                                    If you are accepted for the interview, you would travel into canada so, you must have a visa.
                                </b>
                            </li><br/>
                            <li>
                                <b>
                                    The documents that must be sent are :
                                </b>
                                <ul>
                                    <li>Form IMM 1294 </li>
                                    <li>Form IMM 5645 </li>
                                    <li>Form IMM 5257</li>
                                    <li>CAQ (if you will study in quebec)</</li>
                                    <li>Admission letter</li>
                                    <li>Birth act</li> 
                                    <li>Family sheet</li>
                                    <li>Criminal record</li>
                                    <li>Explanatory letter</li>
                                </ul>
                            </li><br/>
                            <li>
                                <b>
                                    Send all of these documents to the global VFS
                                </b>
                            </li><br />
                        </ol>

                    </div>
                </div>
            </div>


            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                <a role="button" class="btn btn-primary me-md-2" href="studentProfile.php"><i class="fa fa-user" style="margin-right:3px;">
                </i>Profile</a>
            </div>  
            <span style="font-size:160%; margin:20%;">For more information you can see the platforms of the universities</span>

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