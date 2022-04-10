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
  <link rel="stylesheet" href="css/exper.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="css/jop-page.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/personal-page.css">


  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
</head>

<body>



  <div class="myexper" id="exp">
    <h2 class="topic" style="text-align: center; color: blue;"> My Experiance</h2>
    <div class="container">
      <div class="card">
        <div class="box">
          <!-- <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i> -->
          <div class="text">
            <h2>Microtik</h2>
            <h3>Soft Company | Excellen</h3>
            <p>Install and configure LAN network (WIRED & WIRELESS &
              Mikrotik networks )</p>

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

      <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content" action="/action_page.php">
          <div class="container" style="display: flex; flex-direction: column;">
            <h1>Delete Account</h1>
            <p>Are you sure you want to delete your account?</p>

            <div class="clearfix">
              <button type="button" onclick="document.getElementById('id01').style.display='none'"
                class="cancelbtn">Cancel</button>
              <button type="button" onclick="document.getElementById('id01').style.display='none'"
                class="deletebtn">Delete</button>
            </div>
          </div>
        </form>
      </div>
      <a href="add-exper.html"><i class="fas fa-plus-circle"></i></a>
    </div>
  </div>

  <!----------End My experiance-->









  <script src="js/popper.min.js"></script>


  <script src="js/jquery-3.6.0.min.js"></script>
  <!-- <script src="js/bootstrap.main.js"></script>  -->

  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/bootstrap.js"></script>
  <script src="js/main.js"></script>
</body>

</html>