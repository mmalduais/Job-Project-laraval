<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="proassets/css/navigation-vert.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="proassets/css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="proassets/css/all.min.css" />
    <!-- Main Template CSS File -->

    <link rel="stylesheet" href="proassets/css/jop-page.css">
    <link rel="stylesheet" href="proassets/css/bootstrap.css">
    <link rel="stylesheet" href="proassets/css/personal-page.css">
    <link rel="stylesheet" href="proassets/css/skill.css">
    <link rel="stylesheet" href="proassets/css/exper.css">
    <link rel="stylesheet" href="proassets/css/exper.css">
    <link rel="stylesheet" href="proassets/css/services-job.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body>
    <!-- <input type="checkbox" id="check">
     <label for="check">
        <i class="fas fa fa-bars" id="btn"></i>
        <i class="fas fa fa-times" id="cancel"></i>
    </label>  -->
    <div class="sidebar">
        <header>Dash Board</header>
        <ul>

            <li id="personalData"><a href="#"><i class="fas fa-qrcode"></i>Personal Data</a></li>
            <li id="skills"><a href="#"><i class="fas fa-link"></i>Skills</a></li>
            <li id="overview"><a href="#"><i class="fas fa-stream"></i>Services</a></li>
            <li id="exp"><a href="#"><i class="fas fa-calendar-week"></i>Experiance</a></li>
            <li id="pre"><a href="#"><i class="fas fa-calendar-week"></i>Prework</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i></a></li>




        </ul>
    </div>
    <section class="tabs-container">
        <div class="tab1 hide">
            <div class="container">
                <div class="row">
                    <div class="card" style=" width: 13rem;">
                        <img src="proassets/image/personal.jpg " style="max-width: 100px ; margin: auto; border-radius: 50%;"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="color: blue; font-size: 20px;">Kevin Anderson</p>
                            <p>Web Designer</p>
                            <i class="fab fa-twitter" style="color: rebeccapurple;"></i>
                            <i class="fab fa-facebook" style="color: rebeccapurple;"></i>
                            <i class="fab fa-instagram-square" style="color: rebeccapurple;"></i>
                            <i class="fab fa-linkedin" style="color: rebeccapurple;"></i>
                        </div>
                        <div class="icon">
                            <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>

                            <i class="fas fa-trash" style="margin-top: 20px;"></i>

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
                                            <a href="personal-Edait"><i class="fas fa-user-edit"></i></a></a>
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
                                            <a href="/add-personal"><i class="fas fa-plus-circle"></i></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>


        </div>

        <!----Start Our-Skill--->
        <div class="tab2 hide">

            <!----Start Our-Skill--->
            <div class="myskill" id="Skill">

                <h2 class="topic" style="font-size: 21px;
        text-align: center;
        padding-top: 20px;">Skills</h2>



                <div class="container">
                    <div class="skills">
                        <div class="skill">
                            <h3>HTML </h3>
                            <div class="the-progress">
                                <span style="width: 80%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>CSS </h3>
                            <div class="the-progress">
                                <span style="width: 85%"></span>
                            </div>
                            <div class="icon">
                                <a href="/edait-skill"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>

                        </div>
                        <div class="skill">
                            <h3>JavaScript </h3>
                            <div class="the-progress">
                                <span style="width: 70%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>Python </h3>
                            <div class="the-progress">
                                <span style="width: 50%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill">
                            <h3>php </h3>
                            <div class="the-progress">
                                <span style="width: 30%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>Java </h3>
                            <div class="the-progress">
                                <span style="width: 85%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>JavaScript </h3>
                            <div class="the-progress">
                                <span style="width: 90%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>C++ </h3>
                            <div class="the-progress">
                                <span style="width: 75%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
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
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div></div>
                <div></div>




            </div>

        </div>

        <!--------->
        <!-- <div class="tab3 hide">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">

                <div class="container-fluid">

                    <a class="navbar-brand" href="#"><img src="image/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Job-Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Companies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Services</a>
                            </li>


                        </ul>
                        <form class="d-flex">

                            <button class="btn btn-outline-success" type="submit"
                                style="font-size: 20px; color: red; background-color: #eee;">Login</button>
                        </form>
                    </div>
                </div>

            </nav>

            <div class="container">
                <div class="row">
                    <div class="filter col-lg-3 col-md-6 col-sm-12">

                        <div class="fil">
                            <h2>Flter</h2>
                            <input type="text" name="" placeholder="Search Keyword">
                            <label>Show able to Company</label><select>
                                <option value="" id=""> Yemen mobile Company </option>
                                <option value="" id="">Alsaaid Company</option>
                                <option value="" id="">Alshibani Company</option>
                                <option value="" id="">Albarh Company</option>
                            </select>
                            <label>Show able to City</label>:
                            <br>
                            <select>

                                <option value="" id="">Sanna'a</option>
                                <option value="" id="">Taiz</option>
                                <option value="" id="">Aden</option>
                            </select>
                            <br>
                            <label>Price range:</label>
                            <br>
                            <input type="range" max="2000$" min="450$">




                        </div>
                    </div>
                    <div class="jobs col-lg-9 col-md-6 col-sm-12">
                        <div class="hed">
                            <h3>Job Listing</h3>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div> -->
        <!-------------------->

        <div class="tab3 hide">

            <div class="services" id="services">
                <h2 class="topic">Services</h2>
                <div class="icon">
                    <a href="/add-services"><i class="fas fa-plus-circle"></i></a>

                </div>

                <div class="container">


                    <div class="card">
                        <div class="box">
                            <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i>
                            <div class="text">
                                <h2>Web Design</h2>

                            </div>
                        </div>
                        <div class="info">
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                                labore
                                eirmod erat clita</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="icon">
                            <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>

                            <i class="fas fa-trash" style="margin-top: 20px;"></i>

                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"
                                style="color: #007bff;"></i>
                            <div class="text">
                                <h2>
                                    Development</h2>

                            </div>
                        </div>
                        <div class="info">
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                                labore
                                eirmod erat clita</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="icon">
                            <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>

                            <i class="fas fa-trash" style="margin-top: 20px;"></i>

                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <i class="fab fa-4x fa-android service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>
                            <div class="text">
                                <h2>Apps Design</h2>

                            </div>
                        </div>
                        <div class="info">
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                                labore
                                eirmod erat clita</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="icon">
                            <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>

                            <i class="fas fa-trash" style="margin-top: 20px;"></i>

                        </div>
                    </div>


                    <div class="card">
                        <div class="box">
                            <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>
                            <div class="text">
                                <h2>Content Creating</h2>

                            </div>
                        </div>
                        <div class="info">
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                                labore
                                eirmod erat clita</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-------------------------------------------------------------->


        <div id="exp" class="container hide tab4">

            <div class="myexper" id="exp">

                <h2 class="topic" style="text-align: center; color: blue;"> My Experiance</h2>
                <a href="/add-exper"><i class="fas fa-plus-circle"></i></a>
                <div class="container">
                    <div class="card">
                        <div class="box">
                            <!-- <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i> -->


                            <div class="text">
                                <h2>{{ $experts[0]['des'] }}</h2>
                                {{-- <h3>Soft Company | Excellen</h3>
                                <p>Install and configure LAN network (WIRED & WIRELESS &
                                    Mikrotik networks )</p> --}}

                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="box">
                            <!-- <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i> -->
                            <div class="text">
                                <h2>Network Engineer</h2>
                                <h3>Soft Company | Excellen</h3>
                                <p>Very good working knowledge in technologies like (LAN,
                                    WAN,DHCP ,DNS, VPN, TCP/ IP, Load Balancing ,Wireless
                                    devices, IP, Servers, Backup devices)</p>

                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="box">
                            <!-- <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i> -->
                            <div class="text">
                                <h2>Free Lancer</h2>
                                <h3>Soft Company | God</h3>
                                <p> Marketing systems belonging to private companies and
                                    installing them for clients and shops</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="icon">
                    <a href="edait-exper.html"><i class="fas fa-user-edit"></i></a></a>
                    <!-- <i  class="fas fa-trash"></i> -->
                    <!--Modal Delet-->
                    <p onclick="document.getElementById('id01').style.display='block'"> <i class="fas fa-trash"></i></p>



                </div>
            </div>
        </div>
        <!----------->


            <div id="exp" class="container hide tab5">

                <div class="prework" id="prework">
                    <h2 class="topic">Pre-Work</h2>
                    <a href="/add-exper"><i class="fas fa-plus-circle" style="margin-top: 25px;"></i></a>

                    <div class="container">


                        <div class="card">
                            <div class="box">
                                <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>


                                <div class="text">
                                    <h2>
                                        Development</h2>

                                </div>
                            </div>
                            <div class="info">
                                <img src="proassets/image/coffee.png " width="250px" height="600px">
                                <a href="#">Read More</a>
                                <div class="icon">
                                    <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>
                                    <i class="fas fa-trash" style="margin-top: 20px;"></i>

                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="box">
                                <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>


                                <div class="text">
                                    <h2>
                                        Development</h2>

                                </div>
                            </div>
                            <div class="info">
                                <img src="proassets/image/Dummy.png " width="200px" height="600px">
                                <a href="#">Read More</a>
                                <div class="icon">
                                    <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>
                                    <i class="fas fa-trash" style="margin-top: 20px;"></i>

                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="box">
                                <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>


                                <div class="text">
                                    <h2>
                                        Development</h2>

                                </div>
                            </div>
                            <div class="info">
                                <img src="proassets/image/protofolio.png " width="200px" height="600px">
                                <a href="#">Read More</a>
                                <div class="icon">
                                    <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>
                                    <i class="fas fa-trash" style="margin-top: 20px;"></i>

                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="box">
                                <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>


                                <div class="text">
                                    <h2>
                                        Development</h2>

                                </div>
                            </div>
                            <div class="info">
                                <img src="proassets/image/protofolio.png " width="250px" height="600px">
                                <a href="#">Read More</a>
                                <div class="icon">
                                    <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>
                                    <i class="fas fa-trash" style="margin-top: 20px;"></i>

                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="box">
                                <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>


                                <div class="text">
                                    <h2>
                                        Development</h2>

                                </div>
                            </div>
                            <div class="info">
                                <img src="proassets/image/job.png " width="250px" height="600px">
                                <a href="#">Read More</a>
                                <div class="icon">
                                    <a href="/edait-exper"><i class="fas fa-user-edit"></i></a></a>
                                    <i class="fas fa-trash" style="margin-top: 20px;"></i>

                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="box">
                                <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>


                                <div class="text">
                                    <h2>
                                        Development</h2>

                                </div>
                            </div>
                            <div class="info">
                                <img src="proassets/image//book-shop.png "width="250px" height="600px">
                                <a href="#">Read More</a>

                            </div>
                        </div>



                    </div>
                </div>




        </div>

<!----------------------->

<div id="exp" class="container hide tab6">


<div class="services" id="services">
    <h2 class="topic">Services</h2>

    <a href="/add-exper"><i class="fas fa-plus-circle"></i></a>


    <div class="container">

        <a href="add-exper.html"><i class="fas fa-plus-circle"></i></a>
        <div class="card">
            <div class="box">
                <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i>
                <div class="text">
                    <h2>Web Design</h2>

                </div>
            </div>
            <div class="info">
                <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                    labore
                    eirmod erat clita</p>
                <a href="#">Read More</a>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"
                    style="color: #007bff;"></i>
                <div class="text">
                    <h2>
                        Development</h2>

                </div>
            </div>
            <div class="info">
                <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                    labore
                    eirmod erat clita</p>
                <a href="#">Read More</a>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <i class="fab fa-4x fa-android service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>
                <div class="text">
                    <h2>Apps Design</h2>

                </div>
            </div>
            <div class="info">
                <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                    labore
                    eirmod erat clita</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <i class="fab fa-4x fa-apple service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>
                <div class="text">
                    <h2>Apps Development</h2>

                </div>
            </div>
            <div class="info">
                <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                    labore
                    eirmod erat clita</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <i class="fa fa-2x fa-search service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>
                <div class="text">
                    <h2>SEO</h2>

                </div>
            </div>
            <div class="info">
                <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                    labore
                    eirmod erat clita</p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="color: #007bff;"></i>
                <div class="text">
                    <h2>Content Creating</h2>

                </div>
            </div>
            <div class="info">
                <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet
                    labore
                    eirmod erat clita</p>
                <a href="#">Read More</a>
            </div>
        </div>


    </div>
</div>
</div>

        <!----End Our-Skill--->



    </section>
    <!--------------------------------------->
    <!--------------------------------------->
    <script src="proassets/js/main.js"></script>

    <script src="proassets/js/jQuery.min.js"></script>
    <script>
        $('#personalData').click(function (e) {
            e.preventDefault();
            $('.tab1').removeClass("hide");
            $('.tab2').addClass("hide");
            $('.tab3').addClass("hide");
            $('.tab4').addClass("hide");
            $('.tab5').addClass("hide");
        })

        $('#skills').click(function (e) {
            e.preventDefault();
            $('.tab2').removeClass("hide");
            $('.tab1').addClass("hide");
            $('.tab3').addClass("hide");
            $('.tab4').addClass("hide");
            $('.tab5').addClass("hide");

        })
        $('#overview').click(function (e) {
            e.preventDefault();
            $('.tab3').removeClass("hide");
            $('.tab1').addClass("hide");
            $('.tab2').addClass("hide");
            $('.tab4').addClass("hide");
            $('.tab5').addClass("hide");
        })


        $('#exp').click(function (e) {
            e.preventDefault();
            $('.tab4').removeClass("hide");
            $('.tab1').addClass("hide");
            $('.tab2').addClass("hide");
            $('.tab3').addClass("hide");
            $('.tab5').addClass("hide");

        })
        $('#pre').click(function (e) {
            e.preventDefault();
            $('.tab5').removeClass("hide");
            $('.tab1').addClass("hide");
            $('.tab2').addClass("hide");
            $('.tab3').addClass("hide");
            $('.tab4').addClass("hide");


        })



    </script>
</body>

</html>
