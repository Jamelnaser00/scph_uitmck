<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Silat Cekak Pusaka Hanafi (SCPH)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="logo.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>SCPH</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
	  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-paper-plane fa-fw w3-margin-right"></i>ABOUT US</a> 
	  <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw w3-margin-right"></i>MEMBERSHIP</a>
    <a href="#club" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-layer-group fa-fw w3-margin-right"></i>CLUB</a> 
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw w3-margin-right"></i>ACTIVITY</a>
    <a href="#gallery" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-images fa-fw w3-margin-right"></i>GALLERY</a>
    <a href="#developer" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>DEVELOPER</a>  
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  
  <div class="w3-panel w3-large">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <a href="#" class="fa fa-facebook w3-hover-opacity"></a>
    <a href="#" class="fa fa-instagram w3-hover-opacity"></a>
    <a href="#" class="fa fa-youtube w3-hover-opacity"></a>
  
  </div>


</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to Silat Cekak Pusaka Hanafi</b></h1>
   

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="logo1.jpg" alt="Me" style="width:80%"></p>
    </div>
    

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4 id="about"><b>History of SCPH</b></h4>
    <p>As for Silat Cekak, it is originally from Kedah. It cannot be ascertained whether it exists as a result of one person or as a result of the consensus of various teachers. This silat came to be believed after the arrival of Islam in this country.</p>

    <p>This martial art used to be taught only to commanders in Kedah to prevent outside invasion at that time. The person who is known to have studied this martial art for the longest time was Panglima Ismail who served under Sultan Ahmad Tajuddin. Commander Ismail, at one time defeated a Batak named Tuah (not Hang Tuah) in Kubang Kerian, Perak.</p>

    <p>Next, this martial art was taught to Commander Tok Rashid who at that time had to move to Perak because his place of residence in Kedah at that time was attacked by a cholera epidemic. Finally, Commander Tok Rashid entrusted this silat to Yahya Said (Pak Ya Said) with the message: "If there are any of my grandchildren from Kedah who want to learn, you should bring them back."</p>

    <p>So Mr. Yahya Said was also entrusted to take care of this silat, to be given to the rightful owner.</p>

    <hr>
    
    <h4><b>Silat Cekak Club</b></h4>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

  <h4 id="membership"><b><p align="center"><h3>Membership</h3></p></b></h4>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </p>
    

    <hr>
    
    <h4 id="club"><b><p align="center"><h3>Club Info</h3></p></b></h4>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club Id</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
          
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `club`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </p>
    
  <hr>

    <h4 id="activity"><b><p align="center"><h3>Activity</h3></p></b></h4>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>      
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </p>
    
  <hr>

  <h4 id="gallery" ><b><p><h3 align="center">Gallery</h3></p></b></h4>

  <div align="center">
   <a href="image1.jpeg"><img id="img-gal" src="image1.jpeg" width="30%" height="30%"></a>
   <a href="image2.jpeg"><img id="img-gal" src="image2.jpeg" width="30%" height="30%"></a>
   <a href="image3.jpeg"><img id="img-gal" src="image3.jpeg" width="30%" height="30%"></a>
   <a href="image4.jpeg"><img id="img-gal" src="image4.jpeg" width="30%" height="30%"></a>
   <a href="image5.jpeg"><img id="img-gal" src="image5.jpeg" width="30%" height="30%"></a>
   <a href="image6.jpeg"><img id="img-gal" src="image6.jpeg" width="30%" height="30%"></a>
  </div>

  <hr>

<!-- Developer Content -->

  <header class="w3-container w3-padding-32 w3-center w3-black" id="developer">
    <h1 class="w3-jumbo"><span class="w3-hide-small" style="font-size:50px">Developer</span></h1>
    <p><img src="jamil.jpeg" alt="boy" class="w3-image" width="200" height="300"></p>
    <h2 style="font-size:20px">Muhamad Jamil Bin Md Nasir</h1>
    <h2 style="font-size:20px">2022897948</h1>
    <h2 style="font-size:20px">CDIM2455B</h1>
  </header>



    
  <hr>
    
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>jamilnasir@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Machang, Kelantan</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>019-0381274</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
