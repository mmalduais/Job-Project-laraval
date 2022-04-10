<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!---------first mobile Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrab</title>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/project3.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/jop-page.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/personal-page.css">
  


    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>


    <style>

    </style>
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="card" style=" width: 13rem;">
                <img src="image/personal.jpg " style="max-width: 100px ; margin: auto; border-radius: 50%;"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="color: blue; font-size: 20px;">Kevin Anderson</p>
                    <p>Web Designer</p>
                    <i class="fab fa-twitter" style="color: rebeccapurple;"></i>
                    <i class="fab fa-facebook" style="color: rebeccapurple;"></i>
                    <i class="fab fa-instagram-square" style="color: rebeccapurple;"></i>
                    <i class="fab fa-linkedin" style="color: rebeccapurple;"></i>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row " style="padding-top: 10px;">
                                <div class="col-lg-5 " style="color: blue;">First Name:</div>
                                <div class="col-lg-7 ">Kevin </div>
                                <div class="col-lg-5 " style="color: blue;">Last Name:</div>
                                <div class="col-lg-7 "> Anderson</div>
                                <div class="col-lg-5 " style="color: blue;">Company:</div>
                                <div class="col-lg-7 ">Lueilwitz, Wisoky and Leuschke</div>
                                <div class="col-lg-4 " style="color: blue;">Email:</div>
                                <div class="col-lg-8 ">k.anderson@example.com</div>
                                <div class="col-lg-5 " style="color: blue;">Address:</div>
                                <div class="col-lg-7 ">USA</div>
                                <div class="col-lg-5 " style="color: blue;">Phone:</div>
                                <div class="col-lg-7 ">(436) 486-3538 x29071</div>
                                <div class="col-lg-4 " style="color: blue;">Time-Zone:</div>
                                <div class="col-lg-8 ">k.anderson@example.com</div>
                                <div style="border-bottom: 1px solid black;"></div>

                                <div class="icon">
                                    <a href="personal-Edait.html"><i class="fas fa-user-edit"></i></a></a>
                                    <!-- <i  class="fas fa-trash"></i> -->
                                    <!--Modal Delet-->
                                    <p onclick="document.getElementById('id01').style.display='block'"> <i
                                            class="fas fa-trash"></i></p>

                                    <div id="id01" class="modal">
                                        <span onclick="document.getElementById('id01').style.display='none'"
                                            class="close" title="Close Modal">×</span>
                                        <form class="modal-content" action="/action_page.php">
                                            <div class="container" style="display: flex; flex-direction: column;">
                                                <h1>Delete Account</h1>
                                                <p>Are you sure you want to delete your account?</p>

                                                <div class="clearfix">
                                                    <button type="button"
                                                        onclick="document.getElementById('id01').style.display='none'"
                                                        class="cancelbtn">Cancel</button>
                                                    <button type="button"
                                                        onclick="document.getElementById('id01').style.display='none'"
                                                        class="deletebtn">Delete</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <a href="add-personal.html"><i class="fas fa-plus-circle"></i></a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

    <script>
        // Get the modal

    </script>





    <script src="js/popper.min.js"></script>


    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="js/bootstrap.main.js"></script>  -->

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>