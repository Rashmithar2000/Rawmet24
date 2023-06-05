<?php

session_start();
if (!isset($_SESSION['name'])){
  header("Location: /Rawmet24/PurpleAdmin-Free-Admin-Template-master/pages/samples/login.html");

}
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Auction</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <style>
    a{
      color: #ffffff;
      text-decoration: none;
    }
    a:hover{
      color: #ffffff;
    }
    
    
      </style>
  <body>


    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/logoraw.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Rawmet</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="elements.php">
                  <i class="mdi mdi-login me-2 text-primary"></i>Register now </a>
                   <a class="dropdown-item" href="../../signout.php">
                    <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/logoraw.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">RAWMET </span>
                  <span class="text-secondary text-small">Information System</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auctions.php">
                <span class="menu-title">Auctions</span>
                <i class="mdi mdi-chart-areaspline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tenders.php">
                <span class="menu-title">Tenders</span>
                <i class="mdi mdi-animation menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="deals.php">
                <span class="menu-title">Deals</span>
                <i class="mdi mdi-drawing-box menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exclusivedeals.php">
                <span class="menu-title">Exclusive Deals</span>
                <i class="mdi mdi-diamond menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="informations.php">
                <span class="menu-title">Information</span>
                <i class="mdi mdi-note menu-icon"></i>
              </a>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                <h6 class="font-weight-normal mb-3">Categories</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4"><a href="categories.php">+ Add a Category</a></button>
                <div class="mt-4">
                
                 
                </div>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          
          <table class="table table-hover">
  <thead>
    <tr>
      <th>Sector</th>
      <th>Ownership</th>
      <th>Start Time</th>
      <th>End Time</th>
      <th>Auc Value</th>
      <th>Location</th>
      <th>Quantity</th>
      <th>Material</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
include_once "connect.php";

// Retrieve data from the database
$sql = "SELECT * FROM auction";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $data[] = $row;
    }
} else {
    echo "No data found.";
}

$conn->close();
?>

    <?php foreach ($data as $row) { ?>
      <tr>
     
        <td><?php echo $row['sector']; ?></td>
        <td><?php echo $row['ownership']; ?></td>
        <td><?php echo $row['startDatetime']; ?></td>
        <td><?php echo $row['endDatetime']; ?></td>
        <td><?php echo $row['aucValue']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><?php echo $row['quantity']; ?></td>      
        <td><?php echo $row['material']; ?></td>
        <!-- <td> </td> -->
                <td><form action="fetchAuc.php?g=<?php echo $row['id'];?>" method="GET">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button class="btn btn-block btn-sm btn-gradient-primary mt-4 mx-auto" type="submit" style="width:auto;margin-bottom:22px"><a href="fetchAuc.php? id='.$id.'"><i class="fa fa-solid fa-pen"></i></a> </button>
                </form></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

         
          </div>
        </div>


          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © rawmet24.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="https://www.rawmet24.com/" target="_blank"></a>  rawmet24.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>