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
    <title>Tender Page</title>
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
              <a class="nav-link" href="information.php">
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
              </span>
            </li>
            
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
          
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tenders Details</h4>
                  <form action="updateTend.php" method="POST" class="forms-sample" enctype="multipart/form-data">
                <?php 
                $id= $_GET['id'];
                $sql="select * from tenders where id=$id";
                $result = mysqli_query($conn , $sql);
               $row =mysqli_fetch_assoc($result);
                ?>
                    <div class="form-group">
                      <label for="category">Category</label>
                      <select name="category" class="form-control form-control-lg">
                      <option ><?php echo  $row['category']; ?></option>
                        <option>Consultancy Tenders</option>
                          <option >Procurement Tenders</option>
                          <option>Manufacturing Tenders</option>
                          <option>Disposal Tenders</option>
                          <option>Business Tenders</option>
                          <option>Public Tenders</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="infoId">Information Number</label>
                      <input type="text" class="form-control" name="infoId" placeholder="Information Number" required value="<?php echo  $row['infoId']; ?>" >
                    </div>
                    
                    <div class="form-group">
                      <label for="ownership">Ownership</label>
                      <input type="text" class="form-control" name="ownership" placeholder="Ownership" required value="<?php echo  $row['ownership']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="tenderLocation">Tender Location</label>
                      <select name="tenderLocation" class="form-control form-control-lg">
                        <option ><?php echo  $row['tenderLocation']; ?></option>
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
                      <label for="sector">Sector</label>
                      <select name="sector" class="form-control form-control-lg" required>
                      <option ><?php echo  $row['sector']; ?></option> 
                      <option>Public</option>
                          <option>Private</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="tenderNumber">Tender Number</label>
                      <input type="text" class="form-control" name="tenderNumber" placeholder="Tender Number" required value="<?php echo  $row['tenderNumber']; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="tenderDesc">Tender Description</label>
                      <textarea class="form-control" placeholder="Tender Description" name="tenderDesc" rows="6" required value=""><?php echo  $row['tenderDesc']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="material">Material</label>
                      <input type="text" class="form-control" name="material" placeholder="Material" required value="<?php echo  $row['material']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" required value="<?php echo  $row['quantity']; ?>">&nbsp&nbsp&nbsp
                        <label for="unit">Unit:</label>
                        <select id="unit" name="unit" required selected value="<?php echo  $row['unit']; ?>">
                          <option value="">-- Select Unit --</option>
                          <option value="kg">KG</option>
                          <option value="ton">TON</option>
                          <option value="mt">MT</option>
                          <option value="nos">Nos</option>
                        </select>
                    </div>
          
                    <div class="form-group">
                      <label for="publishingDatetime">Publishing Date and Time</label>
                      <input type="datetime-local" class="form-control" name="publishingDatetime" placeholder="Publishing Date and Time" required value="<?php echo  $row['publishingDatetime']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="startDatetime">Tender Start Time</label>
                      <input type="datetime-local" class="form-control" name="startDatetime" placeholder="Start Time dd-mm-yy --:--" required value="<?php echo  $row['startDatetime']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="endDatetime">Tender End Time</label>
                      <input type="datetime-local" class="form-control" name="endDatetime" placeholder="End Time -mm-yy --:--" required value="<?php echo  $row['endDatetime']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="emdType">EMD Type</label>
                      <select name="emdType" class="form-control form-control-lg">
                      <option ><?php echo  $row['emdType']; ?></option>    
                      <option>Online Payment/ Net Banking</option>
                          <option>DD</option>
                          <option>Cash</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="emdAmt">EMD Amount</label>
                      <input type="number" class="form-control" name="emdAmt" placeholder="EMD Amount(value only)" required value="<?php echo  $row['emdAmt']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="tenderValue">Tender Value</label>
                      <input type="text" class="form-control" name="tenderValue" placeholder="Tender Value" required value="<?php echo  $row['tenderValue']; ?>">
                    </div>
                   <br>
                   <p class="card-description">Express of Interest</p>
             
                    <div class="form-group">
                      <label for="companyName">Company Name</label>
                      <input type="text" class="form-control" name="companyName" placeholder="Company Name" required value="<?php echo  $row['companyName']; ?>">
                    </div>
                           <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" name="location" placeholder="Location" required value="<?php echo  $row['location']; ?>">
                    </div>
               
                    <div class="form-group">
                      <label for="street">Street</label>
                      <input type="text" class="form-control" name="street" placeholder="Street" required value="<?php echo  $row['street']; ?>">
                    </div>
          
                    <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" name="city" placeholder="City" required value="<?php echo  $row['city']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="telephone">Telephone</label>
                      <input type="text" class="form-control" name="telephone" placeholder="Telephone" required value="<?php echo  $row['telephone']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email" required value="<?php echo  $row['email']; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="contactPerson">Contact Person</label>
                      <input type="text" class="form-control" name="contactPerson" placeholder="Contact Person" required value="<?php echo  $row['contactPerson']; ?>">
                    </div>
                
                      <button type="button" class="btn btn-gradient-primary" data-toggle="modal" data-target="#myModal">
                        Terms and Conditions
                      </button>
                    
                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h1 class="modal-title">Terms of Service</h1>
                              <button type="button" class="close" data-dismiss="modal">x</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                             <p style="text-align: justify;">In accordance with the provisions of Rule 3 (1) of the Information
                              Technology (Intermediaries guidelines) Rules, 2011 that require publishing
                              of the rules and regulations, privacy policy and Terms of Use for access or
                              usage of website and application for mobile and any other handheld devices, this document is herewith published by Shopemet Networks Private
                              Limited ('Shopemet')<br><br>Rawmet24 is a web based information platform developed by Shopemet
                              Networks Pvt ltd. Situated in #23, 3
                              rd Floor, Hariprem Building, Behind
                              Asha Sweets, Binnamangala, Indiranagar, Bangalore -38, which provides
                              the information about the tenders, auctions and other procurement and
                              disposal mechanism and events through out India,</p><br><br><h4>CONSENT</h4><p style="text-align: justify;">
                              By using Rawmet 24 services you are giving us your expressed consent to
                              collect and use your personal data as described in this Terms and
                              Conditions.<br> <br>1. Your relationship with Rawmet24<br>
                              1.1 Your use of Rawmet24’s services and web sites (referred to collectively
                              as the “Services” in this document and excluding any services provided to
                              you by Shopemet Networks Pvt Ltd. under a separate written agreement) is
                              subject to the terms of a legal agreement between you and Shopemet
                              Networks Pvt Ltd. This document explains how the agreement is made up, and sets out some of the terms of that agreement.<br> 1.2 Unless otherwise agreed in writing with Shopemet, your agreement with
                              Shopemet will always include, at a minimum, the terms and conditions set
                              out in this document. These are referred to below as the “Universal Terms”.<br> 1.3 Your agreement with Shopemet will also include the terms of any Legal
                              Notices applicable to the Services, in addition to the Universal Terms. All of
                              these are referred to below as the “Additional Terms”. Where Additional
                              Terms apply to a Service, these will be accessible for you to read either
                              within, or through your use of, that Service. <br>1.4 The Universal Terms, together with the Additional Terms, form a legally
                              binding agreement between you and Shopemet Networks in relation to your
                              use of the Services. It is important that you take the time to read them
                              carefully. Collectively, this legal agreement is referred to below as the
                              “Terms”.<br> 1.5 If there is any contradiction between what the Additional Terms say and
                              what the Universal Terms say, then the Additional Terms shall take
                              precedence in relation to that Service. <br><br>2. Accepting the Terms
                              <br>2.1 In order to use our Services, you must first agree to the Terms. You may
                              not use the Services if you do not accept the Terms.<br> 2.2 You can accept the Terms by:
                              (A) clicking to accept or agree to the Terms, where this option is made
                              available to you by Rawmet24 in the user interface for any Service; or
                              (B) by actually using the Services. In this case, you understand and agree
                              that Rawmet24 will treat your use of the Services as acceptance of the
                              Terms from that point onwards.<br> 2.3 You may not use the Services and may not accept the Terms if
                              (a) you are not of legal age to form a binding contract with Shopemet
                              Networks.<br><br> 3. Provision of the Services by Rawmet24
                              <br>3.1 Rawmet24 is constantly innovating in order to provide the best possible
                              experience for its users. You acknowledge and agree that the form and
                              nature of the Services which Rawmet24 provides may change from time to
                              time without prior notice to you.<br> 3.2 As part of this continuing innovation, you acknowledge and agree that
                              Rawmet24 may stop (permanently or temporarily) providing the Services
                              (or any features within the Services) to you or to users generally at
                              Rawmet24’s sole discretion, without prior notice to you. You may stop
                              using the Services at any time. You do not need to specifically inform
                              Rawmet24 when you stop using the Services.
                              <br>3.3 You acknowledge and agree that if Rawmet24 disables access to your
                              account, you may be prevented from accessing the Services, your account
                              details or any files or other content which is contained in your account.<br> 3.4 You acknowledge and agree that while Rawmet24 may not currently
                              have set a fixed upper limit on the number of services you may request of us.<br><br> 4. Use of the Services by you
                              <br>4.1 In order to access certain Services, you may be required to provide
                              information about yourself (such as identification or contact details) as part
                              of the registration process for the Service, or as part of your continued use of
                              the Services. You agree that any registration information you give to
                              Rawmet24 will always be accurate, correct and up to date. <br>4.2 You agree to use the Services only for purposes that are permitted by (a)
                              the Terms and (b) any applicable law, regulation or generally accepted
                              practices or guidelines in the relevant jurisdictions.<br> 4.3 You agree not to access (or attempt to access) any of the Services by any
                              means other than through the interface that is provided by Rawmet24, unless
                              you have been specifically allowed to do so in a separate agreement with
                              Shopemet Networks. You specifically agree not to access (or attempt to
                              access) any of the Services through any automated means (including use of
                              scripts or web crawlers).<br> 4.4 You agree that you will not engage in any activity that interferes with or
                              disrupts the Services (or the servers and networks which are connected to
                              the Services).<br> 4.5 Unless you have been specifically permitted to do so in a separate
                              agreement with Shopemet Networks, you agree that you will not reproduce, duplicate, copy, sell, trade or resell the Services for any purpose.<br> 4.6 You agree that you are solely responsible for (and that Rawmet24 or
                              Shopemet Networks has no responsibility to you or to any third party for)
                              any breach of your obligations under the Terms and for the consequences
                              (including any loss or damage which Rawmet24 or Shopemet Networks
                              may suffer) of any such breach.<br> <br>5. Your passwords and account security
                              <br>5.1 You agree and understand that you are responsible for maintaining the
                              confidentiality of passwords associated with any account you use to access
                              the Services.
                              <br>5.2 Accordingly, you agree that you will be solely responsible to Rawmet24
                              for all activities that occur under your account.<br> 5.3 If you become aware of any unauthorized use of your password or of
                              your account, you agree to notify Rawmet24 immediately at
                              info@Rawmet24.com.<br><br> 6. Privacy and your personal information
                              <br>6.1 For information about Rawmet24’s data protection practices, please read
                              Rawmet24’s privacy policy at http://localhost/Rawmet24/tender/policy.html. This policy explains how Rawmet24 treats your personal information, and
                              protects your privacy, when you use the Services. 6.2 You agree to the use of your data in accordance with Rawmet24’s
                              privacy policies. <br><br>7. Proprietary rights
                              <br>7.1 You acknowledge and agree that Rawmet24 own all legal right, title and
                              interest in and to the Services, including any intellectual property rights
                              which subsist in the Services (whether those rights happen to be registered
                              or not, and wherever in the world those rights may exist). You further
                              acknowledge that the Services may contain information which is designated
                              confidential by Rawmet24 and that you shall not disclose such information
                              without Rawmet24’s prior written consent.<br> 7.2 Unless you have agreed otherwise in writing with Shopemet Networks, nothing in the Terms gives you a right to use any of Rawmet24’s trade
                              names, trade marks, service marks, logos, domain names, and other
                              distinctive brand features.<br> 7.3 You agree that you shall not remove, obscure, or alter any proprietary
                              rights notices (including copyright and trade mark notices) which may be
                              affixed to or contained within the Services.<br> 7.4 Unless you have been expressly authorized to do so in writing by
                              Shopemet Networks, you agree that in using the Services, you will not use
                              any trade mark, service mark, trade name, logo of any company or
                              organization in a way that is likely or intended to cause confusion about the
                              owner or authorized user of such marks, names or logos. <br><br>8. Content in the Services
                              <br>8.1 You understand that all information (such as data files, written text, computer software, photographs, videos or other images) which you may
                              have access to as part of, or through your use of, the Services are the sole
                              responsibility of the person from which such content originated. All such
                              information is referred to below as the “Content”. <br>8.2 You should be aware that Content presented to you as part of the
                              Services, including but not limited to advertisements in the Services and
                              sponsored Content within the Services may be protected by intellectual
                              property rights which are owned by the sponsors or advertisers who provide
                              that Content to Rawmet24 (or by other persons or companies on their
                              behalf). You may not modify, rent, lease, loan, sell, distribute or create
                              derivative works based on this Content (either in whole or in part) unless
                              you have been specifically told that you may do so by Rawmet24 or by the
                              owners of that Content, in a separate agreement.<br> 8.3 Rawmet24 reserves the right (but shall have no obligation) to pre-screen, review, flag, filter, modify, refuse or remove any or all Content from any
                              Service.<br> 8.4 You understand that by using the Services you may be exposed to
                              Content that you may find offensive, indecent or objectionable and that, in
                              this respect, you use the Services at your own risk.<br> 8.5 You agree that you are solely responsible for (and that Rawmet24 or
                              shopemet Networks has no responsibility to you or to any third party for)
                              any Content that you create, transmit or display while using the Services and
                              for the consequences of your actions (including any loss or damage which
                              Rawmet24 may suffer) by doing so.<br> <br>9. Ending your relationship with Rawmet24
                              <br>9.1 The Terms will continue to apply until terminated by either you or
                              Rawmet24 as set out below.<br> 9.2 If you want to terminate your legal agreement with Rawmet24, you may
                              do so by <br>(a) notifying Rawmet24 at any time and <br>(b) closing your accounts
                              for all of the Services which you use, where Rawmet24 has made this option
                              available to you. Your notice should be sent, in writing, to Rawmet24’s
                              address which is set out at the beginning of these Terms.<br> 9.3 Rawmet24 may at any time, terminate its legal agreement with you if:
                              <br>(A) you have breached any provision of the Terms (or have acted in manner
                              which clearly shows that you do not intend to, or are unable to comply with
                              the provisions of the Terms); or
                             <br> (B) Rawmet24 is required to do so by law (for example, where the provision
                              of the Services to you is, or becomes, unlawful); or
                              <br>(C) the partner with whom Rawmet24 offered the Services to you has
                              terminated its relationship with Rawmet24 or ceased to offer the Services to
                              you; or
                             <br> (D) Rawmet24 is transitioning to no longer providing the Services to users
                              in the country in which you are resident or from which you use the service;
                              or
                             <br> 9.5 When these Terms come to an end, all of the legal rights, obligations and
                              liabilities that you and Rawmet24 have benefited from, been subject to (or
                              which have accrued over time whilst the Terms have been in force) or which
                              are expressed to continue indefinitely, shall be unaffected by this cessation, and the provisions of paragraph 16.7shall continue to apply to such rights, obligations and liabilities indefinitely.<br> <br>10. REFUND POLICY
                              Subscription Fees:
                             <br> 10.1. We offer a subscription-based service for suppliers of raw materials
                              and scrap buyers to access information through our web product "RawMet24 For Business." <br>10.2. Subscription fees are non-refundable unless otherwise stated in this
                              refund policy or required by applicable law.
                             <br> 10.3 Refund Eligibility:
                              Refunds may be considered under the following circumstances:
                             <br> 10.3.1. If the refund request is placed within 24 hours from the time of
                              purchase of the subscription, 75% of the subscription fee paid will be
                              refunded
                             <br> 10.3.2.For the refund requests placed after 24 hours and within 3 days from
                              the date of subscription, 50% of the subscription fee will be refunded.<br> 10.4 Refund Requests:
                             <br> 10.4.1. Users requesting a refund must submit a written refund request to
                              our designated communication channels that is refund@rawmet24.com.
                             <br> 10.4.2. The refund requests made through other means are not valid and no
                              refund will be processed for such requests. 10.5 Refund Process:
                             <br> 10.5.1. Once a refund request is received, we will review it within a
                              reasonable time frame.<br> 10.4.2. If the refund request is approved, we will initiate the refund using the
                              original payment method or an alternative agreed upon with the user. 10.6 Refund Timeframe:
                             <br> 10.6.1. We will make reasonable efforts to process approved refunds
                              promptly. 10.6.2. The time it takes for the refunded amount to be reflected in the user's
                              account may vary depending on the payment method and financial
                              institutions involved. 10.7 Non-Refundable . <br>10.7.1. No refund will be processed for the requests received after 3 days
                              from the date of subscription.<br> 10.8 Contact Information:
                              <br>10.8.1. Users can contact our customer support team for refund inquiries or
                              assistance with the refund process. <br>10.8.2. All refund-related communication should be directed to
                              refund@rawmet24.com
                              <br>10.9 Modification
                             <br> 10.1.1 We may modify this Refund and Cancellation policy from time to
                              time and the Refund Policy which was in effect during the time of purchase
                              of the subscription shall be applicable for the refund request placed by you.<br><br>11. EXCLUSION OF WARRANTIES
                              <br>11.1 RAWMET24 NEVER UNDERTAKES ANY WARRANTEE OR
                              AUTHENTICITY OF THE INFORMATION SHARED IN THE
                              PLATFORM UNDER ANY CIRCUMSTANCES.<br> 11.2 YOU EXPRESSLY UNDERSTAND AND AGREE THAT YOUR
                              USE OF THE SERVICES IS AT YOUR SOLE RISK AND THAT THE
                              SERVICES ARE PROVIDED "AS IS" AND “AS AVAILABLE.” <br>11.3 IN PARTICULAR, RAWMET24, DO NOT REPRESENT OR
                              WARRANT TO YOU THAT:
                              <br>(A) YOUR USE OF THE SERVICES WILL MEET YOUR
                              REQUIREMENTS, <br>(B) YOUR USE OF THE SERVICES WILL BE UNINTERRUPTED, TIMELY, SECURE OR FREE FROM ERROR, <br>(C) ANY INFORMATION OBTAINED BY YOU AS A RESULT OF
                              YOUR USE OF THE SERVICES WILL BE ACCURATE OR RELIABLE, AND
                              <br>(D) THAT DEFECTS IN THE OPERATION OR FUNCTIONALITY OF
                              ANY SOFTWARE PROVIDED TO YOU AS PART OF THE SERVICES
                              WILL BE CORRECTED.<br> 11.4 ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED
                              THROUGH THE USE OF THE SERVICES IS DONE AT YOUR OWN
                              DISCRETION AND RISK AND THAT YOU WILL BE SOLELY
                              RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM
                              OR OTHER DEVICE OR LOSS OF DATA THAT RESULTS FROM THE
                              DOWNLOAD OF ANY SUCH MATERIAL. <br>11.5 NO ADVICE OR INFORMATION, WHETHER ORAL OR
                              WRITTEN, OBTAINED BY YOU FROM RAWMET24 OR THROUGH
                              OR FROM THE SERVICES SHALL CREATE ANY WARRANTY NOT
                              EXPRESSLY STATED IN THE TERMS.<br> 11.6 RAWMET24 FURTHER EXPRESSLY DISCLAIMS ALL
                              WARRANTIES AND CONDITIONS OF ANY KIND, WHETHER
                              EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO THE
                              IMPLIED WARRANTIES AND CONDITIONS OF
                              MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE
                              AND NON-INFRINGEMENT.<br> <br>12. LIMITATION OF LIABILITY
                              <br>12.1 SUBJECT TO OVERALL PROVISION IN PARAGRAPH 9.1
                              ABOVE, YOU EXPRESSLY UNDERSTAND AND AGREE THAT
                              RAWMET24 SHALL NOT BE LIABLE TO YOU FOR:
                              <br>(A) ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL
                              CONSEQUENTIAL OR EXEMPLARY DAMAGES WHICH MAY BE
                              INCURRED BY YOU, HOWEVER CAUSED AND UNDER ANY
                              THEORY OF LIABILITY.. THIS SHALL INCLUDE, BUT NOT BE
                              LIMITED TO, ANY LOSS OF PROFIT (WHETHER INCURRED
                              DIRECTLY OR INDIRECTLY), ANY LOSS OF GOODWILL OR
                              BUSINESS REPUTATION, ANY LOSS OF DATA SUFFERED, COST
                              OF PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES, OR
                              OTHER INTANGIBLE LOSS;
                              <br>(B) ANY LOSS OR DAMAGE WHICH MAY BE INCURRED BY YOU, INCLUDING BUT NOT LIMITED TO LOSS OR DAMAGE AS A
                              RESULT OF:
                              <br>(I) ANY RELIANCE PLACED BY YOU ON THE COMPLETENESS, ACCURACY OR EXISTENCE OF ANY ADVERTISING, OR AS A
                              RESULT OF ANY RELATIONSHIP OR TRANSACTION BETWEEN
                              YOU AND ANY ADVERTISER OR SPONSOR WHOSE ADVERTISING
                              APPEARS ON THE SERVICES;
                              <br>(II) ANY CHANGES WHICH RAWMET24 MAY MAKE TO THE
                              SERVICES, OR FOR ANY PERMANENT OR TEMPORARY
                              CESSATION IN THE PROVISION OF THE SERVICES (OR ANY
                              FEATURES WITHIN THE SERVICES);
                              <br>(III) THE DELETION OF, CORRUPTION OF, OR FAILURE TO STORE, ANY CONTENT AND OTHER COMMUNICATIONS DATA
                              MAINTAINED OR TRANSMITTED BY OR THROUGH YOUR USE OF
                              THE SERVICES;
                              <br>(III) YOUR FAILURE TO PROVIDE RAWMET24 WITH ACCURATE
                              ACCOUNT INFORMATION;
                              <br>(IV) YOUR FAILURE TO KEEP YOUR PASSWORD OR ACCOUNT
                              DETAILS SECURE AND CONFIDENTIAL;
                              <br>12.2 THE LIMITATIONS ON RAWMET24’S LIABILITY TO YOU IN
                              PARAGRAPH 12.1 ABOVE SHALL APPLY WHETHER OR NOT
                              RAWMET24 HAS BEEN ADVISED OF OR SHOULD HAVE BEEN
                              AWARE OF THE POSSIBILITY OF ANY SUCH LOSSES ARISING. <br>13. Copyright and trade mark policies
                             <br> 13.1 It is Rawmet24’s policy to respond to notices of alleged copyright
                              infringement that comply with applicable international intellectual property
                              law (including in the Digital Millennium Copyright Act) and to terminating
                              the accounts of repeat infringers.<br><br> 14. Advertisements
                             <br> 14.1 Some of the Services are supported by advertising revenue and may
                              display advertisements and promotions. These advertisements may be
                              targeted to the content of information stored on the Services, queries made
                              through the Services or other information.<br> 14.2 The manner, mode and extent of advertising by Rawmet24 on the
                              Services are subject to change without specific notice to you. 14.3 In consideration for Rawmet24 granting you access to and use of the
                              Services, you agree that Rawmet24 may place such advertising on the
                              Services.<br> <br>15. Other content
                              <br>15.1 The Services may include hyperlinks to other web sites or content or
                              resources. Rawmet24 may have no control over any web sites or resources
                              which are provided by companies or persons other than Rawmet24.<br> 15.2 You acknowledge and agree that Rawmet24 is not responsible for the
                              availability of any such external sites or resources, and does not endorse any
                              advertising, products or other materials on or available from such web sites
                              or resources.<br> 15.3 You acknowledge and agree that Rawmet24 is not liable for any loss or
                              damage which may be incurred by you as a result of the availability of those
                              external sites or resources, or as a result of any reliance placed by you on the
                              completeness, accuracy or existence of any advertising, products or other
                              materials on, or available from, such web sites or resources.<br><br> 16. Changes to the Terms
                              <br>16.1 Rawmet24 may make changes to the Universal Terms or Additional
                              Terms from time to time. When these changes are made, Rawmet24 will
                              make a new copy of the Universal Terms available at <Link for
                              disclaimer> and any new Additional Terms will be made available to you
                              from within, or through, the affected Services.<br> 16.2 You understand and agree that if you use the Services after the date on
                              which the Universal Terms or Additional Terms have changed, Rawmet24
                              will treat your use as acceptance of the updated Universal Terms or
                              Additional Terms.<br><br> 17. General legal terms
                              <br>17.1 Sometimes when you use the Services, you may (as a result of, or
                              through your use of the Services) use a service or download a piece of
                              software, or purchase goods, which are provided by another person or
                              company. Your use of these other services, software or goods may be
                              subject to separate terms between you and the company or person concerned. If so, the Terms do not affect your legal relationship with these other
                              companies or individuals. <br>17.2 The Terms constitute the whole legal agreement between you and
                              Shopemet Networks and govern your use of the Services (but excluding any
                              services which Shopemet Networks may provide to you under a separate
                              written agreement), and completely replace any prior agreements between
                              you and Shopemet Networks in relation to the Services. <br>17.3 You agree that Shopemet Networks may provide you with notices, including those regarding changes to the Terms, by email, regular mail, or
                              postings on the Services from Rawmet24.<br> 17.4 You agree that if Rawmet24 does not exercise or enforce any legal
                              right or remedy which is contained in the Terms (or which Rawmet24 has
                              the benefit of under any applicable law), this will not be taken to be a formal
                              waiver of Rawmet24’s rights and that those rights or remedies will still be
                              available to Rawmet24.<br> 17.5 If any court of law, having the jurisdiction to decide on this matter, rules that any provision of these Terms is invalid, then that provision will be
                              removed from the Terms without affecting the rest of the Terms. The
                              remaining provisions of the Terms will continue to be valid and enforceable.<br> 17.6 The Terms, and your relationship with Rawmet24/Shopemet Networks
                              Pvt Ltd. under the Terms, shall be governed by the laws of the State of
                              Karnataka without regard to its conflict of laws provisions. You and
                              Rawmet24 agree to submit to the exclusive jurisdiction of the courts located
                              within the county of India, Karnataka, Bangalore to resolve any legal matter
                              arising from the Terms. Notwithstanding this, you agree that Rawmet24
                              shall still be allowed to apply for injunctive remedies (or an equivalent type
                              of urgent legal relief) in any jurisdiction.</p>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            

              
                </div></div></div>
                    
                    <div class="form-check mx-sm-2">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked>I agree terms and conditions </label>
                    </div>                      
                      
                    <div class="form-group">
                      <label>Tender Image upload</label>
                      <input type="file" name="img[]" class="file-upload-default" multiple>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info"  placeholder="Upload Image" value="<?php echo  $row['img']; ?>" >
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Tender File upload</label>
                      <input type="file" name="file[]" class="file-upload-default" multiple>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info"  placeholder="Upload File" value="<?php echo  $row['file']; ?>">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
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