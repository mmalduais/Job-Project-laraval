<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!---------first mobile Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrab</title>
    <link rel="stylesheet" href="assets/pagesAssetscss/css/bootstrap.css">
    <link rel="stylesheet" href="assets/pagesAssetscss/css/style.css">


    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="assets/pagesAssetscss/css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="assets/pagesAssetscss/css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="assets/pagesAssetscss/css/project3.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/pagesAssetscss/css/login.css">
    <link rel="stylesheet" href="assets/pagesAssetscss/css/signup.css">

    <script src="assets/pagesAssetscss/js/html5shiv.min.js"></script>
    <script src="assets/pagesAssetscss/js/respond.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/pagesAssetscss/image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: white; font-size: 18px;"
                            href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="/jop-page">Jobs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="/details-job">Details</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="#">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: white; font-size: 18px;"
                            href="/services-job">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="/contact-job">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;"
                            href="sliderVertical.html">DashBord</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">

                    <button class="btn btn-outline-success" id="show-dialog" type="submit"
                        style="font-size: 20px; color: red; background-color: #eee; width: fit-content;">Login</button>
                </form> -->

            </div>

        </div>
        <form class="d-flex">

            <button class="btn btn-outline-success" id="show-dialog" type="submit"
                style="font-size: 20px; color: red; background-color: #eee; width: fit-content;">Login</button>
        </form>
    </nav>



    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-primary " style=" height: 76px;">

        <div class="container-fluid">

            <a class="navbar-brand" href="#"><img src="image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: white; font-size: 18px;"
                            href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="jop-page.html">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="details-job.html">Details</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="#">Companies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;" href="contact.html">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " style="color: white; font-size: 18px;"
                            href="sliderVertical.html">DashBord</a>
                    </li>


                </ul>
                <form class="d-flex">

                    <button class="btn btn-outline-success" id="show-dialog" type="submit"
                        style="font-size: 20px; color: red; background-color: #eee;;">Login</button>
                </form>
            </div>
        </div>

    </nav> -->

    <!--------End ---Header--------------------------------------------->

    <!--------Start---Modeling--------------------------------------------->

    <div class="overlay  hide"></div>
    <div class="logIn hide ">
        <button id="hide-dialog">
            <img src="imgs/svg/cancel.svg" alt="" />
        </button>
        <h2>تسجيل الدخول</h2>

        <form action="">
            <input type="text" name="" placeholder="البريد الالكتروني او رقم الجوال" id="" />
            <div class="password">
                <input type="password" name="" placeholder="كلمة المرور" id="" />
                <a href="" class="forgot">نسيت ؟</a>
            </div>
            <input type="submit" value=" تسجيل الدخول
        " />
        </form>

        <div class="create-account">
            <p>ليس لديك حساب ؟</p>
            <button id="create-new-account">إنشاء حساب جديد</button>
        </div>
    </div>
    <div class="signUp hide">
        <button id="hide-signUpDialog">
            <img src="imgs/svg/cancel.svg" alt="" />
        </button>
        <h2>إنشاء حساب</h2>

        <form action="">
            <div class="phone-number">
                <input type="number" name="" placeholder="رقم الجوال" id="phone" />
                <select name="countryCode" id="countryCode">
                    <option data- value="+970">+970</option>
                    <option style="background-image: url(imgs/svg/country.svg)">
                        +970
                    </option>
                </select>
            </div>
            <p>سوف نرسل لك <strong>رمز التحقق عن طريق رسالة نصية</strong></p>

            <button class="btn">إرسال رمز التحقق</button>
            <input type="text" name="" placeholder="الإسم الأول" id="" />
            <input type="text" name="" placeholder="أسم العائلة" id="" />
            <input type="email" name="" placeholder="البريد الإلكتروني" id="" />
            <input type="email" name="" placeholder="تأكيد البريد الإلكتروني" id="" />
            <input type="text" name="" placeholder="كلمة المرور" id="" />

            <div class="check">
                <input type="checkbox" name="agree" id="" />
                <label for="agree">أوافق علي <a href="">الشروط والاحكام</a></label>
            </div>
            <div class="check">
                <input type="checkbox" name="email-post-signIn" id="" />
                <label for="agree">التسجيل للإنضمام للنشرة الإخبارية</label>
            </div>
            <input type="submit" class="btn" value="إنشاء حساب" />
        </form>

        <p class="login">
            لديك حساب ؟
            <a href="">
                تسجيل الدخول <img src="imgs/svg/rightArrowBlue.svg" alt="" /></a>
        </p>
    </div>


    <!--------End---Modeling--------------------------------------------->

    <!--------Start---Slider--------------------------------------------->


    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="1000">
                    <img src="assets/pagesAssetscss/image/sli3.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="assets/pagesAssetscss/image/sli2.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="assets/pagesAssetscss/image/sli.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-------------------------------End slider--------------------------------------------------------->



    <!-------------------------------Start Adver--------------------------------------------------------->



    <!-------------------------------Start Card------------->
    <div class="container">
        <div class="card-adver d-flex justify-content-around row ">
            <div class="card col-lg-3 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="assets/pagesAssetscss/image/svgexport-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Logistics Jobs</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary"
                        style="background-color: #5e529d; color: white; font-weight: bold; font-size: 14px;">Go
                        somewhere</a>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="assets/pagesAssetscss/image/svgexport-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">HR Jobs</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary"
                        style="background-color: #5e529d; color: white; font-weight: bold; font-size: 14px;">Go
                        somewhere</a>
                </div>
            </div>


            <div class="card col-lg-3 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="assets/pagesAssetscss/image/svgexport-3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">finance jobs</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary"
                        style="background-color: #5e529d; color: white; font-weight: bold; font-size: 14px;">Go
                        somewhere</a>
                </div>
            </div>




        </div>
    </div>
    <!---------------------------------------------------------------------------------------->
    <div class="container">

        <h2 style="text-align: center; color: blue;">Last Jobs</h2>
        <div class="cards">
            <div class="image">
                <img style="margin-right: 5px;  " src="assets/pagesAssetscss/image/microsoft1.png" alt="">
                <div class="text">
                    <a href="/details-job">
                        <p>Camp Coordination and Management Manager</p>
                    </a>
                    <p id="ico" style="
                    color: #777;
                    font-weight: bold;
                    font-size: 15px;
                "><i class="fas fa-mobile-alt"></i><small>SHS</small> final date <i
                            class="far fa-clock"></i><small>14/02/2022</small></p>
                </div>

            </div>
            <div class="time">
                <p>New Time</p>
                <i class="far fa-clock"></i><small>About 7 H</small>
            </div>
        </div>
        <div class="cards">
            <div class="image">
                <img src="assets/pagesAssetscss/image/job4.jpg" alt="">
                <div class="text">
                    <p id="sty" style="
    color: #777;
    font-size: 14px;
    font-weight: bold;
">Camp Coordination and Management Manager</p>
                    <p id="ico"><i class="fas fa-mobile-alt"></i><small>SHS</small> final date <i
                            class="far fa-clock"></i><small>14/02/2022</small></p>
                </div>

            </div>
            <div class="time">
                <p>New Time</p>
                <i class="far fa-clock"></i><small>About 7 H</small>
            </div>
        </div>
        <div class="cards">
            <div class="image">
                <img src="assets/pagesAssetscss/image/job5.PNG" alt="">
                <div class="text">
                    <p>Camp Coordination and Management Manager</p>
                    <p id="ico"><i class="fas fa-mobile-alt"></i><small>SHS</small> final date <i
                            class="far fa-clock"></i><small>14/02/2022</small></p>
                </div>

            </div>
            <div class="time">
                <p>New Time</p>
                <i class="far fa-clock"></i><small>About 7 H</small>
            </div>
        </div>
        <div class="cards">
            <div class="image">
                <img src="assets/pagesAssetscss/image/job4.jpg" alt="">
                <div class="text">
                    <p>Camp Coordination and Management Manager</p>
                    <p id="ico"><i class="fas fa-mobile-alt"></i><small>SHS</small> final date <i
                            class="far fa-clock"></i><small>14/02/2022</small></p>
                </div>

            </div>
            <div class="time">
                <p>New Time</p>
                <i class="far fa-clock"></i><small>About 7 H</small>
            </div>
        </div>
        <div class="cards">
            <div class="image">
                <img src="assets/pagesAssetscss/image/job5.PNG" alt="">
                <div class="text">
                    <p>Camp Coordination and Management Manager</p>
                    <p id="ico"><i class="fas fa-mobile-alt"></i><small>SHS</small> final date <i
                            class="far fa-clock"></i><small>14/02/2022</small></p>
                </div>

            </div>
            <div class="time">
                <p>New Time</p>
                <i class="far fa-clock"></i><small>About 7 H</small>
            </div>
        </div>
        <div class="cards">
            <div class="image">
                <img src="assets/pagesAssetscss/image/job6.PNG" alt="">
                <div class="text">
                    <p>Camp Coordination and Management Manager</p>
                    <p id="ico"><i class="fas fa-mobile-alt"></i><small>SHS</small> final date <i
                            class="far fa-clock"></i><small>14/02/2022</small></p>
                </div>

            </div>
            <div class="time">
                <p>New Time</p>
                <i class="far fa-clock"></i><small>About 7 H</small>
            </div>
        </div>
        <div class="cards">
            <div class="image">
                <img src="assets/pagesAssetscss/image/job2.jpg" alt="">
                <div class="text">
                    <p>Camp Coordination and Management Manager</p>
                    <p id="ico"><i class="fas fa-mobile-alt"></i><small>SHS</small> final date <i
                            class="far fa-clock"></i><small>14/02/2022</small></p>
                </div>

            </div>
            <div class="time">
                <p>New Time</p>
                <i class="far fa-clock"></i><small>About 7 H</small>
            </div>
        </div>
    </div>


    <!---------------------------------------------------------------------------------------->

    <div class="container">
        <h2 style="text-align: center; color: blue;">Our clints</h2>
        <p style="text-align: center; font-size: 20px;">We are proud to provide our services to many local institutions
            and organizations</p>
        <div class="row justify-content-between" style="gap: 15px  ;font-size: 15px;">
            <!-- <div class="cardss "> -->
            <div class="card col-lg-2 " style="width: 10rem; ">
                <img src="assets/pagesAssetscss/image/clint1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 10rem;">
                <img src="assets/pagesAssetscss/image/clint8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 10rem;">
                <img src="assets/pagesAssetscss/image/clint5.gif" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 10rem;">
                <img src="assets/pagesAssetscss/image/clint4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 10rem;">
                <img src="assets/pagesAssetscss/image/clint5.gif" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 10rem;">
                <img src="assets/pagesAssetscss/image/clint6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <!---------------------------------------------------------------------------------------->

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4" style="background-color: #001d38; color: white;">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Content -->
                    <a class="navbar-brand" href="#"><img src="assets/pagesAssetscss/image/logo.png"></a>
                    <p>finloan@support.com</p>
                    <p>+10 873 672 6782</p>
                    <p>600/D, Green road, NewYork</p>

                </div>
                <!-- Grid column -->



                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Company</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">About </a>
                        </li>
                        <li>
                            <a href="#!">Pricing</a>
                        </li>
                        <li>
                            <a href="#!">Carrier Tips</a>
                        </li>
                        <li>
                            <a href="#!">FAQ</a>
                        </li>
                    </ul>

                </div>

                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Category</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Design & Art</a>
                        </li>
                        <li>
                            <a href="#!">Engineering</a>
                        </li>
                        <li>
                            <a href="#!">Sales & Marketing
                            </a>
                        </li>
                        <li>
                            <a href="#!">Finance</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->

                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Subscribe</h5>
                    <div class="btnn d-flex flex-column">
                        <input type="email" placeholder="Enter Your Email" name=""
                            style="border-radius: 7px; padding: 10px">
                        <button style="border-radius: 7px;">Subscribe</button>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->


        <!-- Call to action -->

        <!-- Call to action -->

        <hr>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Copyright ©2022 All rights reserved |
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



    <script src="assets/pagesAssetscss/js/popper.min.js"></script>


    <script src="assets/pagesAssetscss/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="js/bootstrap.main.js"></script>  -->

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="assets/pagesAssetscssjs/bootstrap.js"></script>
    <script src="assets/pagesAssetscss/js/main.js"></script>

</body>

</html>
