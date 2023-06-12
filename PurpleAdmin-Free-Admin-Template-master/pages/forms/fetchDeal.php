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
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Deals Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
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
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Auctions</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-chart-areaspline menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="auctions.php">Add Auction</a></li>
                  <li class="nav-item"> <a class="nav-link" href="editAuclist.php">Edit Auctions</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Tenders</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-animation menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="tenders.php">Add Tender</a></li>
                  <li class="nav-item"> <a class="nav-link" href="editTendlist.php">Edit Tender</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Deals</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-diamond menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="deals.php">Add Deal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="editDeallist.php">Edit Deal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="exclusivedeals.php">Add Exclusive Deal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="editExcllist.php">Edit Exclusive Deal</a></li>
               
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Informations</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-note menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="informations.php">Add Info</a></li>
                  <li class="nav-item"> <a class="nav-link" href="editInfolist.php">Edit Info</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-archive menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic4">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="categories.php">Add Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="editCatlist.php">Edit Category</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Subscriber List</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-human-male-female menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic5">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="editSublist.php">Edit Subscriber</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Metal Price List</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-archive menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic6">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="editMetlist.php">Edit Metal Price</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Deals Details</h4>
                    <form action="updateDeal.php" method="POST" class="forms-sample" enctype="multipart/form-data">
                    <?php 
                        $id= $_GET['id'];
                        $sql="select * from deals where id=$id";
                        $result = mysqli_query($conn , $sql);
                        $row =mysqli_fetch_assoc($result);
                        $valueParts = explode(' ', $row['quantity'], 2);
                        $quantity = isset($valueParts[0]) ? $valueParts[0] : '';
                        $unit = isset($valueParts[1]) ? $valueParts[1] : '';
                ?>
                      <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control form-control-lg" required>
                          <option value="<?php echo  $row['category']; ?>"><?php echo  $row['category']; ?></option>
                            <option>Consultancy Tenders</option>
                            <option>Procurement Tenders</option>
                            <option>Manufacturing Tenders</option>
                            <option>Disposal Tenders</option>
                            <option>Business Tenders</option>
                            <option>Public Tenders</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="infoId">Information Number</label>
                        <input type="text" class="form-control" name="infoId" placeholder="Information Number" required value="<?php echo  $row['infoId']; ?>">
                      </div>
                      
                      <div class="form-group">
                        <label for="ir">IR Executive</label>
                        <input type="text" class="form-control" name="ir" placeholder="IR Executive" required value="<?php echo  $row['ir']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="fe">FE Executive</label>
                        <input type="text" class="form-control" name="fe" placeholder="FE Executive" required value="<?php echo  $row['fe']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" required value="<?php echo  $quantity ?>">&nbsp&nbsp&nbsp
                        <label for="unit">Unit:</label>
                        <select id="unit" name="unit" >
                        <option value="<?php echo  $unit; ?>"><?php echo  $unit; ?></option>
                        <option value="nos">BAG</option>
                        <option value="">-- Select Unit --</option>
                          <option value="BAG">BAG-BAGS</option>
                          <option value="BKL">BKL-BUCKLES</option>
                          <option value="BTL">BTL-BOTTLES</option>
                          <option value="CBM">CBM-CUBIC METERS</option>
                          <option value="CTN">CTN-CARTONS</option>
                          <option value="GGK">GGK-GREAT GROSS</option>
                          <option value="GYD">GYD-GROSS YARDS</option>
                          <option value="KME">KME-KILOMETER</option>
                          <option value="MTR">MTR-METRES</option>
                          <option value="OTH">OTH-OTHERS</option>
                          <option value="PRS">PRS-PAIRS</option>
                          <option value="SET">SET-SETS</option>
                          <option value="BAL">BAL-BALE</option>
                          <option value="BOU">BOU-BILLION OF UNITS</option>
                          <option value="BUN">BUN-BUNCHES</option>
                          <option value="CCM">CCM-CUBIC CENTIMETERS</option>
                          <option value="DOZ">DOZ-DOZES</option>
                          <option value="GMS">GMS-GRAMMES</option>
                          <option value="KGS">KGS-KILOGRAMS</option>
                          <option value="LTR">LTR-LITRES</option>
                          <option value="MTS">MTS-METRIC TON</option>
                          <option value="PAC">PAC-PACKS</option>
                          <option value="QTL">QTL-QUILTAL</option>
                          <option value="BDL">BDL-BUNDLES</option>
                          <option value="BOX">BOX-BOX</option>
                          <option value="CAN">CAN-CANS</option>
                          <option value="CMS">CMS-CENTIMETERS</option>
                          <option value="DRM">DRM-DRUMS</option>
                          <option value="GRS">GRS-GROSS</option>
                          <option value="KLR">KLR-KILOLITRE</option>
                          <option value="MLT">MLT-MILLITRE</option>
                          <option value="NOS">NOS-NUMBERS</option>
                          <option value="PCS">PCS-PIECES</option>
                          <option value="ROL">ROL-ROLLS</option>
                          <option value="SQM">SQM-SQUARE METERS</option>
                          <option value="TUB">TUB-TUBS</option>
                          <option value="TGM">TGM-TEN GROSS</option>
                          <option value="TON">TON-TONNES</option>
                          <option value="TBS">TBS-TABLETS</option>
                          <option value="THD">THD-THOUSANDS</option>
                          <option value="SQY">SQY-SQUARE YARDS</option>

                        </select>
                      </div>
          
                      <div class="form-group">
                        <label for="dealValue">Deal Value</label>
                        <input type="number" class="form-control" name="dealValue" placeholder="Deal Value" required value="<?php echo  $row['dealValue']; ?>">
                      </div>
                     
                      <div class="form-group">
                        <label for="dealDatetime">Deal Date and Time</label>
                        <input type="datetime-local" class="form-control" name="dealDatetime" placeholder="Deal Date and Time" required value="<?php echo  $row['dealDatetime']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="docCreatedby">Lead Document Created by</label>
                        <input type="text" class="form-control" name="docCreatedby" placeholder="Document Created by" required value="<?php echo  $row['docCreatedby']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="location">Deal Location</label>
                        <select name="location" class="form-control form-control-lg" required>
                        <option ><?php echo  $row['location']; ?></option>
                          <option>Andhra Pradesh</option>
                          <option>Arunachal Pradesh</option>
                          <option>Assam</option>
                          <option>Bihar</option>
                          <option>Chhattisgarh</option>
                          <option>Gujarat</option>
                          <option>Haryana</option>
                          <option>Himachal Pradesh</option>
                          <option>Jammu and Kashmir</option>
                          <option>Goa</option>
                          <option>Jharkhand</option>
                          <option>Karnataka</option>
                          <option>Kerala</option>
                          <option>Madhya Pradesh</option>
                          <option>Maharashtra</option>
                          <option>Manipur</option>
                          <option>Meghalaya</option>
                          <option>Mizoram</option>
                          <option>Nagaland</option>
                          <option>Odisha</option>
                          <option>Punjab</option>
                          <option>Rajasthan</option>
                          <option>Sikkim</option>
                          <option>Tamil Nadu</option>
                          <option>Telangana</option>
                          <option>Tripura</option>
                          <option>Uttarakhand</option>
                          <option>Uttar Pradesh</option>
                          <option>West Bengal</option>
                          <option>Andaman and Nicobar Islands</option>
                          <option>Chandigarh</option>
                          <option>Dadra and Nagar Haveli</option>
                          <option>Daman and Diu</option>
                          <option>Lakshadweep</option>
                          <option>Puducherry</option>
                        </select>
                      
                      
                      </div>
                      <div class="form-group">
                        <label for="industrialArea">Industrial Area </label>
                        <input type="text" class="form-control" name="industrialArea" placeholder="Industrial Area" required value="<?php echo  $row['docCreatedby']; ?>">
                      </div>
                     <br>
                     <p class="card-description">Client Details</p>
                  
                      <div class="form-group">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" name="companyName" placeholder="Company Name" required value="<?php echo  $row['companyName']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="contactPerson">Contact Person</label>
                        <input type="text" class="form-control" name="contactPerson" placeholder="Contact Person" required value="<?php echo  $row['contactPerson']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Email Id</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required value="<?php echo  $row['email']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" required value="<?php echo  $row['address']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" placeholder="City" required value="<?php echo  $row['city']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="state">State</label>
                        <select name="state" class="form-control form-control-lg" required>
                        <option ><?php echo  $row['state']; ?></option>
                          <option>Andhra Pradesh</option>
                          <option>Arunachal Pradesh</option>
                          <option>Assam</option>
                          <option>Bihar</option>
                          <option>Chhattisgarh</option>
                          <option>Gujarat</option>
                          <option>Haryana</option>
                          <option>Himachal Pradesh</option>
                          <option>Jammu and Kashmir</option>
                          <option>Goa</option>
                          <option>Jharkhand</option>
                          <option>Karnataka</option>
                          <option>Kerala</option>
                          <option>Madhya Pradesh</option>
                          <option>Maharashtra</option>
                          <option>Manipur</option>
                          <option>Meghalaya</option>
                          <option>Mizoram</option>
                          <option>Nagaland</option>
                          <option>Odisha</option>
                          <option>Punjab</option>
                          <option>Rajasthan</option>
                          <option>Sikkim</option>
                          <option>Tamil Nadu</option>
                          <option>Telangana</option>
                          <option>Tripura</option>
                          <option>Uttarakhand</option>
                          <option>Uttar Pradesh</option>
                          <option>West Bengal</option>
                          <option>Andaman and Nicobar Islands</option>
                          <option>Chandigarh</option>
                          <option>Dadra and Nagar Haveli</option>
                          <option>Daman and Diu</option>
                          <option>Delhi</option>
                          <option>Lakshadweep</option>
                          <option>Puducherry</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="contactNumber">Contact Number</label>
                        <input type="number" class="form-control" name="contactNumber" placeholder="Contact Number" maxlength="10" required value="<?php echo  $row['contactNumber']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="whatsappNumber">Whatsapp Number</label>
                        <input type="number" class="form-control" name="whatsappNumber" placeholder="Whatsapp Number" maxlength="10" required value="<?php echo  $row['whatsappNumber']; ?>"> 
                      </div>
                      <div class="form-group">
                        <label for="gstin">GSTIN</label>
                        <input type="text" class="form-control" name="gstin" placeholder="GSTIN"  maxlength="15" required value="<?php echo  $row['gstin']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="orderType">Order Type</label>
                        <select name="orderType" class="form-control form-control-lg" required>
                        <option ><?php echo  $row['orderType']; ?></option>
                            <option>Procurement</option>
                            <option>Service</option>
                  
                          </select>
                      </div>
                      <p class="card-description">Requirement Description</p>
                      <div class="form-group">
                    <label for="material">Material</label>
                      <input type="text" class="form-control" name="material" placeholder="Material" required value="<?php echo $row['material']; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="matDics">Material Description</label>
                      <input type="text" class="form-control" name="matDesc" placeholder="Material Description" required value="<?php echo $row['matDesc']; ?>">
                    </div>
                      <!-- <div class="form-group">
                        <label for="material">Material</label> 
                        <select name="material" id="" style="inline-size:100%" required>
                    
                          <hr>
                          <?php
                          $sql = "SELECT DISTINCT metal FROM metal";
                          $result= mysqli_query($conn,$sql);
                          if ($result) {
        ?>
        <option value="<?php echo $row['material']; ?>"><?php echo $row['material']; ?></option>
      <?php
                
                            while ($ra = mysqli_fetch_assoc($result)) {
        
                              ?>
                              <option value="<?php echo $ra['metal']; ?>"><?php echo $ra['metal']; ?></option>
                            <?php }
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="matDesc">Material Description</label>
         
                        <select name="matDesc" id="id_category" class='dependent-selects__category'
                  style="padding:13px; margin-left: 15px; margin-right: 8px; border-radius:3px;" placeholder="Search " required>
          
                  <?php $sql = "SELECT * from metal";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    ?>
                    <option value="<?php echo $row['matDesc']; ?>"><?php echo $row['matDesc']; ?></option>
                  <?php
                    while ($r = mysqli_fetch_assoc($result)) {
                      //print_r($row);
                      //die;
                      ?>
                      <option value="<?php echo $r['scrap_metal']; ?>"><?php echo $r['scrap_metal']; ?></option>
                    <?php }
                  }
                  ?>
                </select>
                        
                      </div>
                       -->
                      <div class="form-group">
                        <label for="specification">Specification</label>
                        <textarea class="form-control" placeholder="Specification" name="specification" rows="6" required value=""><?php echo  $row['specification']; ?></textarea>
                      </div>
                     
                      <div class="form-group">
                        <label for="dor">Date of Requirement</label>
                        <input type="datetime-local" class="form-control" name="dor" placeholder="Start Time dd-mm-yy --:--" required value="<?php echo  $row['dor']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="expQuotation">Expected Quotation</label>
                        <input type="number" class="form-control" name="expQuotation" placeholder="Expected Quotation" required value="<?php echo  $row['expQuotation']; ?>">
                      </div>
                  
                      <div class="form-group">
                        <label>Deal Image upload</label>
                        <input type="file" name="img[]" class="file-upload-default" multiple>
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload Image" value="">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <?php 
                     $a = unserialize($row['img']);
                    if($a){

                    foreach($a as $shalom){
                     
                    
                    
                    ?>
                    <input type="checkbox" name="image[]" value="<?php echo $shalom; ?>" checked>&nbsp<img src="<?php echo "uploads/".$shalom."";?>" width="55px;" >&nbsp&nbsp&nbsp
                    
                    <br><br>
                    <br>
                    <?php  }} ?>
                    
                      <div class="form-group">
                        <label>Deal File upload</label>
                        <input type="file" name="filename2[]" class="file-upload-default" multiple>
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload File" value="">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <?php 
                     $a = unserialize($row['filenames']);
                    if($a){
                  
                    foreach($a as $sindu){
                
                    ?>
                    <input type="checkbox" name="existingfile[]" value="<?php echo $sindu; ?>" checked>&nbsp;<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" width="30px;"><?php echo $sindu; ?></h4>&nbsp&nbsp&nbsp
                    
                    <br><br>
                    <br>
                    <?php  }} ?>

                                     
                      
                    <input type="hidden" name="id" value="<?php echo $id; ?>">           
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>

                    
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div></div>


          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © rawmet24.com 2023</span>
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