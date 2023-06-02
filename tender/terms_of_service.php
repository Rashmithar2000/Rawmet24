<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Terms of Service</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/_buttons.scss">
  <link rel="stylesheet" href="css/buttons.scss">
  <!-- <link rel="stylesheet" href="css/buttons.scss"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">

  <script
    nonce="10103964-004b-4a99-b2c8-e02088e28228">(function (w, d) { !function (bg, bh, bi, bj) { bg[bi] = bg[bi] || {}; bg[bi].executed = []; bg.zaraz = { deferred: [], listeners: [] }; bg.zaraz.q = []; bg.zaraz._f = function (bk) { return function () { var bl = Array.prototype.slice.call(arguments); bg.zaraz.q.push({ m: bk, a: bl }) } }; for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm); bg.zaraz.init = () => { var bn = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj), bp = bh.getElementsByTagName("title")[0]; bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text); bg[bi].x = Math.random(); bg[bi].w = bg.screen.width; bg[bi].h = bg.screen.height; bg[bi].j = bg.innerHeight; bg[bi].e = bg.innerWidth; bg[bi].l = bg.location.href; bg[bi].r = bh.referrer; bg[bi].k = bg.screen.colorDepth; bg[bi].n = bh.characterSet; bg[bi].o = (new Date).getTimezoneOffset(); if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({ ...bu[1], ...bv[1] }))))) zaraz.set(bt[0], bt[1], { scope: "page" }); bg[bi].q = []; for (; bg.zaraz.q.length;) { const bw = bg.zaraz.q.shift(); bg[bi].q.push(bw) } bo.defer = !0; for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => { try { bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by)) } catch { bg[bi]["z_" + by.slice(7)] = bx.getItem(by) } })); bo.referrerPolicy = "origin"; bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi]))); bn.parentNode.insertBefore(bo, bn) };["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
  <style>
    .scroller {
      height: 300px !important;
      overflow-y: scroll !important;
      scroll-snap-type: y mandatory !important;
      
    }

    .scroller section {
      scroll-snap-align: start !important;
    }
  </style>

  <div class="strip">
    <a href="#"><i class="fa-solid fa-phone"></i>&nbsp Helpline No: 08042332722</a>
    <div class="container-fluid px-md-5">
      <div id="typedtext" class="ml-5">
      </div>
    </div>
  </div>
  <style>


.strip {
    width: 100%;
    background-color: #3b8beb;
    overflow: auto;
}

.strip a {
    float: right;
    margin-right: 15px;
    padding-left: 10px;
    color: white;
    text-decoration: none;
    font-size: 15px;
}

    h4,
    h5,
    h6 {
      color: black;
      text-align: center;
      font-family:"Helvetica";
      font-size:18px;

    }

    .space {
      padding: 6px;


    }
    .color{
      color: #fff !important;
    }
    .modal-body img {
      width: 100%;
      height: auto;
    }
    @media (max-width: 767px) {
  .desktop-view {
    display:none;
  }
}

@media (min-width: 768px) {
  .mobile-view {
    display: none;
  }
}
   
  </style>
    <section class="ftco-section" style="padding-top: 5px;">

<section
         class="d-flex justify-content-between p-3"
         style="background-color:white"
         >
  <div class="me-5">
    <img src="image/rawmetlogo.jpeg" width="80px" height="auto" style="border-radius: 5px; margin-left: 40px;">

  </div>&nbsp   <p style=" position:absolute; margin-left:130px; margin-top: 25px;" class="tft desktop-view">RAWMET24</p>
  <?php 
     
     if(!isset($_SESSION['name'])){

     ?>
       <form class="form-inline" action="verify.php" method="post">
         <label for="email"></label>
         <input type="email" class="form-control" name="email" placeholder="Username" name="email">
         <label for="pwd"></label>&nbsp
         <input type="password" class="form-control" name="password" placeholder="Password" name="pswd">&nbsp&nbsp
         <div class="form-check">

         </div><br>
         <button class="btn btn-primary" type="submit">Sign in</button>
         <a href="signup.html" style="font-size: medium; padding: 20px; ">
           <i class="fa-solid fa-user-plus"></i>SignUp
         </a>
       </form>
    
       
       
       <?php }else{ ?>
          <div class="user" style="padding-top:25px;padding-right:30px"> <p style="color:#3b8beb;">
          Hi! <?php echo $_SESSION['name'];?>&nbsp&nbsp
              <button class="btn btn-primary" ><a href="signout.php" style="color:white;"> Signout </a></button>

          </p></div>

</div><?php
} ?>
</section>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav m-auto">
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tender.php" class="nav-link">Tenders</a></li>

            <li class="nav-item"><a href="auction.php" class="nav-link">Auctions</a></li>
            </li>

            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="exclusivedeals.php" class="nav-link">Exclusive Deals</a></li>
            <li class="nav-item"><a href="metalsearch.php" class="nav-link">Metal Prices</a></li>

            <li class="nav-item"><a href="info_page.html" class="nav-link">Information Document</a></li>
            <li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>


<div class="container-fluid" style="background-color: #3b8beb; padding: 30px;"><br>

<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 80px 120px 120px 120px;">
           <center> <h3>Terms of Service</h3></center><hr>
            <p style="font-family: Helvetica ;text-align:justify;">In accordance with the provisions of Rule 3 (1) of the Information
                Technology (Intermediaries guidelines) Rules, 2011 that require publishing
                of the rules and regulations, privacy policy and Terms of Use for access or
                usage of website and application for mobile and any other handheld devices, this document is herewith published by Shopemet Networks Private
                Limited ('Shopemet')<br><br>Rawmet24 is a web based information platform developed by Shopemet
                Networks Pvt ltd. Situated in #23, 3
                rd Floor, Hariprem Building, Behind
                Asha Sweets, Binnamangala, Indiranagar, Bangalore -38, which provides
                the information about the tenders, auctions and other procurement and
                disposal mechanism and events through out India,</p><br><h4>CONSENT</h4>
                <p style="font-family: Helvetica ;text-align:justify;">
                By using Rawmet 24 services you are giving us your expressed consent to
                collect and use your personal data as described in this Terms and
                Conditions.<br> <br><b>1. Your relationship with Rawmet24</b><br>
               <b> 1.1</b> Your use of Rawmet24’s services and web sites (referred to collectively
                as the “Services” in this document and excluding any services provided to
                you by Shopemet Networks Pvt Ltd. under a separate written agreement) is
                subject to the terms of a legal agreement between you and Shopemet
  Networks Pvt Ltd. This document explains how the agreement is made up, and sets out some of the terms of that 
  agreement.<br> <b>1.2</b> Unless otherwise agreed in writing with Shopemet, your agreement with
 Shopemet will always include, at a minimum, the terms and conditions set
                out in this document. These are referred to below as the “Universal Terms”.<br> <b>1.3</b> Your agreement with Shopemet will also include the terms of any Legal
                Notices applicable to the Services, in addition to the Universal Terms. All of
                these are referred to below as the “Additional Terms”. Where Additional
                Terms apply to a Service, these will be accessible for you to read either
                within, or through your use of, that Service. <br> <b>1.4</b> The Universal Terms, together with the Additional Terms, form a legally
                binding agreement between you and Shopemet Networks in relation to your
                use of the Services. It is important that you take the time to read them
                carefully. Collectively, this legal agreement is referred to below as the
                “Terms”.<br> <b> 1.5 </b>  If there is any contradiction between what the Additional Terms say and
                what the Universal Terms say, then the Additional Terms shall take
                precedence in relation to that Service. <br><br><b>2. Accepting the Terms</b>
                <br> <b>2.1</b> In order to use our Services, you must first agree to the Terms. You may
                not use the Services if you do not accept the Terms.<br> <b>2.2</b> You can accept the Terms by:
                (A) clicking to accept or agree to the Terms, where this option is made
                available to you by Rawmet24 in the user interface for any Service; or
                (B) by actually using the Services. In this case, you understand and agree
                that Rawmet24 will treat your use of the Services as acceptance of the
                Terms from that point onwards.<br> <b>2.3</b> You may not use the Services and may not accept the Terms if
                (a) you are not of legal age to form a binding contract with Shopemet
                Networks.<br><br> <b>3. Provision of the Services by Rawmet24</b>
                <br> <b>3.1 </b> Rawmet24 is constantly innovating in order to provide the best possible
                experience for its users. You acknowledge and agree that the form and
                nature of the Services which Rawmet24 provides may change from time to
                time without prior notice to you.<br> <b>3.2</b> As part of this continuing innovation, you acknowledge and agree that
                Rawmet24 may stop (permanently or temporarily) providing the Services
                (or any features within the Services) to you or to users generally at
                Rawmet24’s sole discretion, without prior notice to you. You may stop
                using the Services at any time. You do not need to specifically inform
                Rawmet24 when you stop using the Services.
                <br> <b>3.3</b> You acknowledge and agree that if Rawmet24 disables access to your
                account, you may be prevented from accessing the Services, your account
                details or any files or other content which is contained in your account.<br> <b>3.4</b> You acknowledge and agree that while Rawmet24 may not currently
                have set a fixed upper limit on the number of services you may request of us.<br><br> <b>4. Use of the Services by you</b>
                <br> <b>4.1</b> In order to access certain Services, you may be required to provide
                information about yourself (such as identification or contact details) as part
                of the registration process for the Service, or as part of your continued use of
                the Services. You agree that any registration information you give to
                Rawmet24 will always be accurate, correct and up to date. <br> <b>4.2 </b> You agree to use the Services only for purposes that are permitted by (a)
                the Terms and (b) any applicable law, regulation or generally accepted
                practices or guidelines in the relevant jurisdictions.<br> <b>4.3</b> You agree not to access (or attempt to access) any of the Services by any
                means other than through the interface that is provided by Rawmet24, unless
                you have been specifically allowed to do so in a separate agreement with
                Shopemet Networks. You specifically agree not to access (or attempt to
                access) any of the Services through any automated means (including use of
                scripts or web crawlers).<br> <b>4.4</b> You agree that you will not engage in any activity that interferes with or
                disrupts the Services (or the servers and networks which are connected to
                the Services).<br> <b>4.5</b> Unless you have been specifically permitted to do so in a separate
                agreement with Shopemet Networks, you agree that you will not reproduce, duplicate, copy, sell, trade or resell the Services for any purpose.<br> <b> 4.6 </b> You agree that you are solely responsible for (and that Rawmet24 or
                Shopemet Networks has no responsibility to you or to any third party for)
                any breach of your obligations under the Terms and for the consequences
                (including any loss or damage which Rawmet24 or Shopemet Networks
                may suffer) of any such breach.<br> <br><b>5. Your passwords and account security</b>
                <br> <b>5.1</b> You agree and understand that you are responsible for maintaining the
                confidentiality of passwords associated with any account you use to access
                the Services.
                <br> <b>5.2 </b> Accordingly, you agree that you will be solely responsible to Rawmet24
                for all activities that occur under your account.<br> <b>5.3</b> If you become aware of any unauthorized use of your password or of
                your account, you agree to notify Rawmet24 immediately at
                info@Rawmet24.com.<br><br> <b>6. Privacy and your personal information</b>
                <br> <b>6.1</b> For information about Rawmet24’s data protection practices, please read
                Rawmet24’s privacy policy at http://localhost/Rawmet24/tender/policy.html. This policy explains how Rawmet24 treats your personal information, and
                protects your privacy, when you use the Services. <br> <b>6.2</b> You agree to the use of your data in accordance with Rawmet24’s
                privacy policies. <br><br><b>7. Proprietary rights</b>
                <br> <b>7.1</b> You acknowledge and agree that Rawmet24 own all legal right, title and
                interest in and to the Services, including any intellectual property rights
                which subsist in the Services (whether those rights happen to be registered
                or not, and wherever in the world those rights may exist). You further
                acknowledge that the Services may contain information which is designated
                confidential by Rawmet24 and that you shall not disclose such information
                without Rawmet24’s prior written consent.<br> <b>7.2</b> Unless you have agreed otherwise in writing with Shopemet Networks, nothing in the Terms gives you a right to use any of Rawmet24’s trade
                names, trade marks, service marks, logos, domain names, and other
                distinctive brand features.<br> <b>7.3</b> You agree that you shall not remove, obscure, or alter any proprietary
                rights notices (including copyright and trade mark notices) which may be
                affixed to or contained within the Services.<br> <b>7.4</b> Unless you have been expressly authorized to do so in writing by
                Shopemet Networks, you agree that in using the Services, you will not use
                any trade mark, service mark, trade name, logo of any company or
                organization in a way that is likely or intended to cause confusion about the
                owner or authorized user of such marks, names or logos. <br><br><b>8. Content in the Services</b>
                <br> <b>8.1</b> You understand that all information (such as data files, written text, computer software, photographs, videos or other images) which you may
                have access to as part of, or through your use of, the Services are the sole
                responsibility of the person from which such content originated. All such
                information is referred to below as the “Content”. <br> <b> 8.2</b> You should be aware that Content presented to you as part of the
                Services, including but not limited to advertisements in the Services and
                sponsored Content within the Services may be protected by intellectual
                property rights which are owned by the sponsors or advertisers who provide
                that Content to Rawmet24 (or by other persons or companies on their
                behalf). You may not modify, rent, lease, loan, sell, distribute or create
                derivative works based on this Content (either in whole or in part) unless
                you have been specifically told that you may do so by Rawmet24 or by the
                owners of that Content, in a separate agreement.<br> <b>8.3</b> Rawmet24 reserves the right (but shall have no obligation) to pre-screen, review, flag, filter, modify, refuse or remove any or all Content from any
                Service.<br> <b>8.4</b> You understand that by using the Services you may be exposed to
                Content that you may find offensive, indecent or objectionable and that, in
                this respect, you use the Services at your own risk.<br> <b>8.5</b> You agree that you are solely responsible for (and that Rawmet24 or
                shopemet Networks has no responsibility to you or to any third party for)
                any Content that you create, transmit or display while using the Services and
                for the consequences of your actions (including any loss or damage which
                Rawmet24 may suffer) by doing so.<br> <br><b>9. Ending your relationship with Rawmet24</b>
                <br> <b>9.1</b> The Terms will continue to apply until terminated by either you or
                Rawmet24 as set out below.<br> <b>9.2</b> If you want to terminate your legal agreement with Rawmet24, you may
                do so by <br> <b>(a)</b> notifying Rawmet24 at any time and <br> <b>(b)</b> closing your accounts
                for all of the Services which you use, where Rawmet24 has made this option
                available to you. Your notice should be sent, in writing, to Rawmet24’s
                address which is set out at the beginning of these Terms.<br> <b>9.3</b> Rawmet24 may at any time, terminate its legal agreement with you if:
                <br> <b>(A)</b>  you have breached any provision of the Terms (or have acted in manner
                which clearly shows that you do not intend to, or are unable to comply with
                the provisions of the Terms); or
               <br> <b>(B)</b> Rawmet24 is required to do so by law (for example, where the provision
                of the Services to you is, or becomes, unlawful); or
                <br> <b>(C)</b> the partner with whom Rawmet24 offered the Services to you has
                terminated its relationship with Rawmet24 or ceased to offer the Services to
                you; or
               <br> <b>(D)</b> Rawmet24 is transitioning to no longer providing the Services to users
                in the country in which you are resident or from which you use the service;
                or
               <br> <b>9.4</b> When these Terms come to an end, all of the legal rights, obligations and
                liabilities that you and Rawmet24 have benefited from, been subject to (or
                which have accrued over time whilst the Terms have been in force) or which
                are expressed to continue indefinitely, shall be unaffected by this cessation, and the provisions of paragraph 16.7shall continue to apply to such rights, obligations and liabilities indefinitely.<br> <br>
                <b> 10. REFUND POLICY</b><br>
                <b>Subscription Fees:</b>
               <br> <b>10.1.</b> We offer a subscription-based service for suppliers of raw materials
                and scrap buyers to access information through our web product "RawMet24 For Business." <br> <b>10.2.</b> Subscription fees are non-refundable unless otherwise stated in this
                refund policy or required by applicable law.
               <br> <b>10.3</b> Refund Eligibility:
                Refunds may be considered under the following circumstances:
               <br> <b>10.3.1.</b> If the refund request is placed within 24 hours from the time of
                purchase of the subscription, 75% of the subscription fee paid will be
                refunded
               <br>  <b>10.3.2.</b> For the refund requests placed after 24 hours and within 3 days from
                the date of subscription, 50% of the subscription fee will be refunded.<br> <b>10.4</b> Refund Requests:
               <br> <b>10.4.1.</b> Users requesting a refund must submit a written refund request to
                our designated communication channels that is refund@rawmet24.com.
               <br> <b>10.4.2.</b> The refund requests made through other means are not valid and no
                refund will be processed for such requests. <b>10.5</b> Refund Process:
               <br> <b>10.5.1.</b> Once a refund request is received, we will review it within a
                reasonable time frame.<br> <b>10.5.2.</b> If the refund request is approved, we will initiate the refund using the
                original payment method or an alternative agreed upon with the user. <br>  <b>10.6</b> Refund Timeframe:
               <br> <b>10.6.1.</b> We will make reasonable efforts to process approved refunds
                promptly. <br><b>10.6.2.</b> The time it takes for the refunded amount to be reflected in the user's
                account may vary depending on the payment method and financial
                institutions involved. <br><b>10.7</b> Non-Refundable . <br> <b>10.7.1.</b> No refund will be processed for the requests received after 3 days
                from the date of subscription.<br> <b>10.8</b> Contact Information:
                <br> <b>10.8.1.</b> Users can contact our customer support team for refund inquiries or
                assistance with the refund process. <br> <b>10.8.2.</b> All refund-related communication should be directed to
                refund@rawmet24.com
                <br> <b>10.9</b> Modification
               <br> <b>10.9.1</b> We may modify this Refund and Cancellation policy from time to
                time and the Refund Policy which was in effect during the time of purchase
                of the subscription shall be applicable for the refund request placed by you.<br><br><b>11. EXCLUSION OF WARRANTIES</b>
                <br> <b>11.1</b> RAWMET24 NEVER UNDERTAKES ANY WARRANTEE OR
                AUTHENTICITY OF THE INFORMATION SHARED IN THE
                PLATFORM UNDER ANY CIRCUMSTANCES.<br> <b>11.2</b> YOU EXPRESSLY UNDERSTAND AND AGREE THAT YOUR
                USE OF THE SERVICES IS AT YOUR SOLE RISK AND THAT THE
                SERVICES ARE PROVIDED "AS IS" AND “AS AVAILABLE.” <br> <b>11.3</b> IN PARTICULAR, RAWMET24, DO NOT REPRESENT OR
                WARRANT TO YOU THAT:
                <br>(A) YOUR USE OF THE SERVICES WILL MEET YOUR
                REQUIREMENTS, <br>(B) YOUR USE OF THE SERVICES WILL BE UNINTERRUPTED, TIMELY, SECURE OR FREE FROM ERROR, <br>(C) ANY INFORMATION OBTAINED BY YOU AS A RESULT OF
                YOUR USE OF THE SERVICES WILL BE ACCURATE OR RELIABLE, AND
                <br>(D) THAT DEFECTS IN THE OPERATION OR FUNCTIONALITY OF
                ANY SOFTWARE PROVIDED TO YOU AS PART OF THE SERVICES
                WILL BE CORRECTED.<br> <b>11.4</b> ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED
                THROUGH THE USE OF THE SERVICES IS DONE AT YOUR OWN
                DISCRETION AND RISK AND THAT YOU WILL BE SOLELY
                RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM
                OR OTHER DEVICE OR LOSS OF DATA THAT RESULTS FROM THE
                DOWNLOAD OF ANY SUCH MATERIAL. <br> <b>11.5</b> NO ADVICE OR INFORMATION, WHETHER ORAL OR
                WRITTEN, OBTAINED BY YOU FROM RAWMET24 OR THROUGH
                OR FROM THE SERVICES SHALL CREATE ANY WARRANTY NOT
                EXPRESSLY STATED IN THE TERMS.<br> <b>11.6</b> RAWMET24 FURTHER EXPRESSLY DISCLAIMS ALL
                WARRANTIES AND CONDITIONS OF ANY KIND, WHETHER
                EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO THE
                IMPLIED WARRANTIES AND CONDITIONS OF
                MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE
                AND NON-INFRINGEMENT.<br> <br><b>12. LIMITATION OF LIABILITY</b>
                <br> <b>12.1</b> SUBJECT TO OVERALL PROVISION IN PARAGRAPH 9.1
                ABOVE, YOU EXPRESSLY UNDERSTAND AND AGREE THAT
                RAWMET24 SHALL NOT BE LIABLE TO YOU FOR:
                <br> <b>(A)</b> ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL
                CONSEQUENTIAL OR EXEMPLARY DAMAGES WHICH MAY BE
                INCURRED BY YOU, HOWEVER CAUSED AND UNDER ANY
                THEORY OF LIABILITY.. THIS SHALL INCLUDE, BUT NOT BE
                LIMITED TO, ANY LOSS OF PROFIT (WHETHER INCURRED
                DIRECTLY OR INDIRECTLY), ANY LOSS OF GOODWILL OR
                BUSINESS REPUTATION, ANY LOSS OF DATA SUFFERED, COST
                OF PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES, OR
                OTHER INTANGIBLE LOSS;
                <br> <b>(B)</b> ANY LOSS OR DAMAGE WHICH MAY BE INCURRED BY YOU, INCLUDING BUT NOT LIMITED TO LOSS OR DAMAGE AS A
                RESULT OF:
                <br> <b>(I)</b> ANY RELIANCE PLACED BY YOU ON THE COMPLETENESS, ACCURACY OR EXISTENCE OF ANY ADVERTISING, OR AS A
                RESULT OF ANY RELATIONSHIP OR TRANSACTION BETWEEN
                YOU AND ANY ADVERTISER OR SPONSOR WHOSE ADVERTISING
                APPEARS ON THE SERVICES;
                <br> <b>(II)</b> ANY CHANGES WHICH RAWMET24 MAY MAKE TO THE
                SERVICES, OR FOR ANY PERMANENT OR TEMPORARY
                CESSATION IN THE PROVISION OF THE SERVICES (OR ANY
                FEATURES WITHIN THE SERVICES);
                <br> <b>(III)</b> THE DELETION OF, CORRUPTION OF, OR FAILURE TO STORE, ANY CONTENT AND OTHER COMMUNICATIONS DATA
                MAINTAINED OR TRANSMITTED BY OR THROUGH YOUR USE OF
                THE SERVICES;
                <br> <b>(IV)</b> YOUR FAILURE TO PROVIDE RAWMET24 WITH ACCURATE
                ACCOUNT INFORMATION;
                <br> <b>(V)</b> YOUR FAILURE TO KEEP YOUR PASSWORD OR ACCOUNT
                DETAILS SECURE AND CONFIDENTIAL;
                <br> <b>12.2</b> THE LIMITATIONS ON RAWMET24’S LIABILITY TO YOU IN
                PARAGRAPH 12.1 ABOVE SHALL APPLY WHETHER OR NOT
                RAWMET24 HAS BEEN ADVISED OF OR SHOULD HAVE BEEN
                AWARE OF THE POSSIBILITY OF ANY SUCH LOSSES ARISING. <br> <br><b>13. Copyright and trade mark policies</b>
               <br> <b>13.1</b> It is Rawmet24’s policy to respond to notices of alleged copyright
                infringement that comply with applicable international intellectual property
                law (including in the Digital Millennium Copyright Act) and to terminating
                the accounts of repeat infringers.<br><br> <b>14. Advertisements</b>
               <br> <b>14.1</b> Some of the Services are supported by advertising revenue and may
                display advertisements and promotions. These advertisements may be
                targeted to the content of information stored on the Services, queries made
                through the Services or other information.<br> <b>14.2</b> The manner, mode and extent of advertising by Rawmet24 on the
                Services are subject to change without specific notice to you. <br> <b>14.3</b>  In consideration for Rawmet24 granting you access to and use of the
                Services, you agree that Rawmet24 may place such advertising on the
                Services.<br> <br><b>15. Other Content</b>
                <br> <b>15.1</b> The Services may include hyperlinks to other web sites or content or
                resources. Rawmet24 may have no control over any web sites or resources
                which are provided by companies or persons other than Rawmet24.<br> <b>15.2</b> You acknowledge and agree that Rawmet24 is not responsible for the
                availability of any such external sites or resources, and does not endorse any
                advertising, products or other materials on or available from such web sites
                or resources.<br> <b>15.3</b> You acknowledge and agree that Rawmet24 is not liable for any loss or
                damage which may be incurred by you as a result of the availability of those
                external sites or resources, or as a result of any reliance placed by you on the
                completeness, accuracy or existence of any advertising, products or other
                materials on, or available from, such web sites or resources.<br><br> <b>16. Changes to the Terms</b>
                <br> <b>16.1</b> Rawmet24 may make changes to the Universal Terms or Additional
                Terms from time to time. When these changes are made, Rawmet24 will
                make a new copy of the Universal Terms available at <Link for
                disclaimer> and any new Additional Terms will be made available to you
                from within, or through, the affected Services.<br> <b>16.2</b> You understand and agree that if you use the Services after the date on
                which the Universal Terms or Additional Terms have changed, Rawmet24
                will treat your use as acceptance of the updated Universal Terms or
                Additional Terms.<br><br> <b>17. General legal terms</b>
                <br> <b>17.1</b> Sometimes when you use the Services, you may (as a result of, or
                through your use of the Services) use a service or download a piece of
                software, or purchase goods, which are provided by another person or
                company. Your use of these other services, software or goods may be
                subject to separate terms between you and the company or person concerned. If so, the Terms do not affect your legal relationship with these other
                companies or individuals. <br> <b>17.2</b> The Terms constitute the whole legal agreement between you and
                Shopemet Networks and govern your use of the Services (but excluding any
                services which Shopemet Networks may provide to you under a separate
                written agreement), and completely replace any prior agreements between
                you and Shopemet Networks in relation to the Services. <br> <b>17.3</b> You agree that Shopemet Networks may provide you with notices, including those regarding changes to the Terms, by email, regular mail, or
                postings on the Services from Rawmet24.<br> <b>17.4</b> You agree that if Rawmet24 does not exercise or enforce any legal
                right or remedy which is contained in the Terms (or which Rawmet24 has
                the benefit of under any applicable law), this will not be taken to be a formal
                waiver of Rawmet24’s rights and that those rights or remedies will still be
                available to Rawmet24.<br> <b>17.5</b> If any court of law, having the jurisdiction to decide on this matter, rules that any provision of these Terms is invalid, then that provision will be
                removed from the Terms without affecting the rest of the Terms. The
                remaining provisions of the Terms will continue to be valid and enforceable.<br> <b>17.6</b> The Terms, and your relationship with Rawmet24/Shopemet Networks
                Pvt Ltd. under the Terms, shall be governed by the laws of the State of
                Karnataka without regard to its conflict of laws provisions. You and
                Rawmet24 agree to submit to the exclusive jurisdiction of the courts located
                within the county of India, Karnataka, Bangalore to resolve any legal matter
                arising from the Terms. Notwithstanding this, you agree that Rawmet24
                shall still be allowed to apply for injunctive remedies (or an equivalent type
                of urgent legal relief) in any jurisdiction.</p>
              </div></div>
    
    </div>
</div>


<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-between p-3" style="background-color:#3b8beb">
    <!-- Left -->

    <div class="me-5">

      <img src="image/rawmetlogo.jpeg" width="60px" height="50px" style="border-radius: 5px;">
    </div>
    <div class="icon" style="font-size: 35px; padding-right: 0px;word-spacing: 10px;">
      <a href="https://www.facebook.com/profile.php?id=100089553145382" class="text-white me-4">
        <i class="fa-brands fa-square-facebook"></i>
      </a>
      <a href="https://www.linkedin.com/company/shopemet/" class="text-white me-4">
        <i class="fa-brands fa-linkedin"></i>
      </a>
      <a href="https://www.instagram.com/shopemet/" class="text-white me-4">
        <i class="fa-brands fa-instagram"></i>
      </a>

    </div>
    <!-- Left -->

  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Rawmet24</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p>
            Our concept is to provide the complete information solution that enables each trader to 
            diversify their trading profile in order to maximize their returns.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Key links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p>
            <a href="aboutus.php" class="text-white">About Us</a>
          </p>
       
          <p>
            <a href="policy.php" class="text-white">Privacy Policy</a>
          </p>
          <p>
            
            <a href="#" class="text-white">Terms of Service</a>
          </p>

        </div>
   
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Contact</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p><i class="fa fa-envelope" aria-hidden="true"></i> info@Rawmet24.com
          </p>
          <p><i class="fa fa-envelope" aria-hidden="true"></i>support@Rawmet24.com
          </p>
          <p><i class="fa fa-phone" aria-hidden="true"></i>08042332722</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">

    © 2023
    <a class="text-white" href="https://mdbootstrap.com/">info@Rawmet24.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c68315d0b4f26b5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>