 <head>
     <style>
         /* Basic Reset */
         .main-navigation {
             position: relative;
         }

         .menu {
             list-style: none;
             padding: 0;
             margin: 0;
             display: flex;
             flex-wrap: wrap;
         }

         .menu>li {
             position: relative;
             padding: 10px 15px;
         }

         .menu a {
             text-decoration: none;
             color: #333;
             font-weight: 500;
         }

         .menu li:hover>.megamen,
         .menu li:hover>.sub-menu {
             display: block;
         }

         .main-navigation {
             position: relative;
         }

         /* Megamenu Container */
         .megamen {
             display: none;
             border-top: 3px solid orangered;
             position: absolute;
             left: 0;
             top: 100%;
             width: 100vw;
             height: 460px;
             background: #fff;
             padding: 30px 52px;
             box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
             z-index: 999;
         }

         /* Column Styling */


         .megamen .head {

             color: teal;
             font-size: 14px !important;
             padding: 0 !important;
             margin: 0px !important;

             text-decoration: none;
         }

         .megamen .head ul,
         li {
             font-size: 12px !important;
             padding: 0 !important;
             margin: 0px !important;

             text-decoration: none;
         }

         .megamenu-list {
             list-style: none;
             padding: 0;
             margin: 0;
         }

         .megamen li a {
             display: block;
             font-size: 13px;
             visibility: visible !important;
             opacity: 1 !important;
         }

         .megamen li a:hover {
             background: orange;
             color: #333;
         }


         .megamenu-list li a {
             display: block;
             padding: 5px 0;
             color: #555;
             transition: 0.3s ease;
         }

         .megamen ul,
         li,
         a {

             visibility: visible !important;
             opacity: 1 !important;
         }

         .megamenu-list li a:hover {
             color: teal;
         }

         /* Submenus */
         .sub-menu {
             display: none;
             position: absolute;
             top: 100%;
             left: 0;
             min-width: 200px;
             background: #fff;
             padding: 15px;
             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
             z-index: 999;
         }

         .sub-menu li {
             margin: 5px 0;
         }

         .custom-megamenu {
             position: absolute;
             border-top: 3px solid orangered;
             top: 100%;
             padding-top: 20px !important;
             padding-left: 0px !important;
             padding-right: 70px !important;
             left: 0;
             color: #000 !important;
             width: 100vw;
             background-color: #fff;
             display: none;
             z-index: 999;
             text-transform: none !important;
             padding: 0px 0px;
             box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
         }

         /* Force black text */
         .custom-megamenu,
         .custom-megamenu a {
             color: #000 !important;
         }

         /* Show megamenu on hover */
         .custom-menu-item:hover+.custom-megamenu {
             display: block;
         }

         /* Megamenu anchor style */
         .megamenu-list li a {
             display: block;
             padding: 0px 0px !important;
             /* Updated padding */
             color: black;
             text-decoration: none;
             transition: all 0.3s ease;
             font-size: 12px !important;
             /* Confirmed font size */
         }

         .megamenu-list li a:hover {
             color: orangered !important;
             background-color: #fff;
             letter-spacing: 1px;
         }

         /* Responsive */
         @media (max-width: 991px) {
             .menu {
                 flex-direction: column;
             }

             .megamen {
                 position: static;
                 width: 100%;
                 padding: 20px 10px;
                 box-shadow: none;
             }

             .menu>li {
                 width: 100%;
             }



             .row {
                 display: flex;
                 flex-wrap: wrap;
             }

             .megacol {
                 flex: 1 1 100%;
                 width: 100% !important;
             }
         }

         .footer {
             text-align: left;
             background-color: navy;
             color: wheat;
             font-weight: bold;
             width: 100%;
             padding: 10px;
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         }
     </style>

 </head>

 <body class="royal_preloader">
     <?php include 'websiteConfig.php'; ?>
     <div id="page" class="site">

         <header id="site-header" class="site-header mobile-header-blue header-style-1">
             <!-- Main header start - Header Home-1, Default -->
             <!-- Top bar start / class css: topbar-dark -->
             <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                             <!-- social icons -->
                             <ul class="social-list fleft">
                                 <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i>+91-844-7037-100</a>
                                 </li>

                             </ul>

                             <p class="text-center" id="typewriter" style="display:inline-block;padding-left:160px;color:white;font-size:14px;text-decoration:none;"></p>


                             <!-- social icons close -->
                             <div class="topbar-text fright"> Opening Hours : Monday to Saturday - 8am to 9pm</div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Top bar close -->
             <!--topbar 2-->
             <!--topbar 2-->

             <!--/topbar 2-->

             <!-- Main header start -->
             <div class="main-header md-hidden sm-hidden px-0">
                 <div class="main-header-top" style="background-color: white;">
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-md-12 px-0">
                                 <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 mx-0">
                                     <div class="container-fluid px-0">
                                         <div class="topnav"><img src="<?php echo $logoPath; ?>" alt="TexEsquire"></div>

                                         <div class="collapse navbar-collapse topnav" id="navbarTogglerDemo01">
                                             <form class="d-flex">
                                                 <button class="btn btn-primary" id="back">BECOME AN ASSOCIATE</button>&nbsp;&nbsp;
                                                 <div class="cart-wrapper position-relative">
                                                     <span class="fa fa-shopping-cart" id="cart" style="font-size: 24px;"></span>
                                                     <span class="cart-count">0</span>
                                                 </div>
                                                 &nbsp;&nbsp;
                                                 <button class="btn btn-warning" type="submit" id="signup">SIGN UP</button>
                                                 <button type="button" class="btn btn-outline-primary" id="login">LOG IN</button>

                                             </form>
                                         </div>
                                     </div>
                                 </nav>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="main-header-bottom">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="header-mainnav">

                                     <div class="search-cart-box fright">
                                         <div class="h-cart-btn fright"><a href="#cart/"><i class="fa fa-shopping-cart"
                                                     aria-hidden="true"></i></a></div>

                                         <div class="toggle_search fright"><i class="fa fa-search"
                                                 aria-hidden="true"></i></div>
                                         <div class="h-search-form-field">
                                             <form role="search" method="get" id="search-form" class="search-form"
                                                 action="#">
                                                 <input type="search" class="search-field" placeholder="Enter keyword..."
                                                     value="" name="s">
                                                 <button type="submit" class="search-submit"><i
                                                         class="fa fa-search"></i></button>
                                             </form>
                                         </div>

                                     </div>
                                     <div id="site-navigation" class="main-navigation fleft">
                                         <ul id="primary-menu" class="menu">
                                             <!-- Menu Item with Dropdown -->
                                             <li class="custom-menu-item ">
                                                 <a href="#">
                                                     StartUp <i class="fa fa-caret-down custom-caret-icon" aria-hidden="true"></i>
                                                 </a>
                                             </li>
                                             <!-- Megamenu -->
                                             <div class="custom-megamenu">
                                                 <div class="container-fluid">
                                                     <div class="row">
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Registration for Indians</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Private Limited Company </a></li>
                                                                 <li><a href="#">LLP Registration <span class="pop">Trendy</span></a></li>
                                                                 <li><a href="#">One Person Company</a></li>
                                                                 <li><a href="#">Partnership Firm</a></li>
                                                                 <li><a href="#">Proprietorship</a></li>
                                                                 <li><a href="#">Public Limited Company</a></li>
                                                             </ul>

                                                         </div>

                                                         <!-- Column 2 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Registration for NRIs/Foreigners</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Private Limited (NR)</a></li>
                                                                 <li><a href="#">Private Foreigner</a></li>
                                                                 <li><a href="#">Wholly Owned Subsidiary</a></li>
                                                                 <li><a href="#">LLP Registration (NRIs)</a></li>
                                                                 <li><a href="#">LLP Registration (NRIs)</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 3 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Licenses</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">GST Registration</a></li>
                                                                 <li><a href="#">MSME Registration <span class="pop">Trendy</span></a></li>
                                                                 <li><a href="#">Import Export Code</a></li>
                                                                 <li><a href="#">FSSAI Registration <span class="pop">Essential</span></a></li>
                                                                 <li><a href="#">PF Registration</a></li>
                                                                 <li><a href="#">ESI Registration</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 4 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Support</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Startup India Registration </a></li>
                                                                 <li><a href="#">Book Keeping <span class="pop">Essential</span></a></li>
                                                                 <li><a href="#">Business Project Report</a></li>
                                                                 <li><a href="#">Business Valuation</a></li>
                                                                 <li><a href="#">Pitch Deck <span class="pop">Popular</span></a></li>
                                                                 <li><a href="#">ISO Certification </a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 5 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Alteration</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Director Appointment</a></li>
                                                                 <li><a href="#">Director Resignation</a></li>
                                                                 <li><a href="#">Foreign Director Exit</a></li>
                                                                 <li><a href="#">Change Address</a></li>
                                                                 <li><a href="#">Change Business Object</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 6 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">IPR</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Trademark Registration</a></li>
                                                                 <li><a href="#">Trademark Objection </a></li>
                                                                 <li><a href="#">Trademark Renewal</a></li>
                                                                 <li><a href="#">Copyright</a></li>
                                                                 <li><a href="#">Provisional Patent</a></li>
                                                             </ul>
                                                         </div>
                                                     </div>

                                                     <!-- Megamenu Footer -->
                                                     <div class="megamenu-footer bg-navy text-white text-start px-3 py-2">
                                                         <a href="#" class="text-white fw-bold">Check All Services</a>
                                                     </div>
                                                 </div>
                                             </div>


                                             <!-- Menu Item with Dropdown -->
                                             <li class="custom-menu-item">
                                                 <a href="#">
                                                     Compliances/Filings <i class="fa fa-caret-down custom-caret-icon" aria-hidden="true"></i>
                                                 </a>
                                             </li>

                                             <!-- Megamenu -->
                                             <div class="custom-megamenu">
                                                 <div class="container-fluid">
                                                     <div class="row">
                                                         <!-- Column 1 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Annual Compliances for companies</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Private Limited (Non XBRL)</a></li>
                                                                 <li><a href="#">Private Limited(XBRL)</a></li>
                                                                 <li><a href="#">Limited Liability Partnership</a></li>
                                                                 <li><a href="#">Private Limited (Non XBRL)</a></li>
                                                                 <li><a href="#">Private Limited(XBRL)</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 2 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Annual Filings for companies</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Private Limited (Non XBRL)</a></li>
                                                                 <li><a href="#">Private Limited(XBRL)</a></li>
                                                                 <li><a href="#">Public Limited(Non XBRL)</a></li>
                                                                 <li><a href="#">Public Limited (XBRL)</a></li>
                                                                 <li><a href="#">One Person Company(OPC)</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 3 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Other mandatory filings</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Commencement Certificate (Form 20A)<span class="pop">Essential</span></a></li>
                                                                 <li><a href="#">MSME FORM-Return(ROC)</a></li>
                                                                 <li><a href="#">ACTIVE Compliances (FORM 22 A)</a></li>
                                                                 <li><a href="#">Auditor Appointment-RoC </a></li>
                                                                 <li><a href="#">FLA return</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 4 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Intimation of DIN to the registrer</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">DIR -3 KYC WEB (For Indian National)</a></li>
                                                                 <li><a href="#">DIR -3 KYC WEB(For NRI Foreigner )</a></li>
                                                                 <li><a href="#">DIR -3 KYC (For Indian National)</a></li>
                                                                 <li><a href="#">DIR -3 KYC (For NRI Foreigner)</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 5 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Compliances Under GST & Income Tax</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">PF return filings</a></li>
                                                                 <li><a href="#">TDS filings 24 Q</a></li>
                                                                 <li><a href="#">TDS filings 26 Q</a></li>
                                                                 <li><a href="#">ITR 1-Filings</a></li>
                                                                 <li><a href="#">ITR 2-Filings</a></li>
                                                                 <li><a href="#">ITR 3-Filings</a></li>
                                                             </ul>
                                                         </div>

                                                         <!-- Column 6 -->
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Business Sport</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Trademark Registration</a></li>
                                                                 <li><a href="#">Trademark Objection</a></li>
                                                                 <li><a href="#">Trademark Renewal</a></li>
                                                                 <li><a href="#">Copyright</a></li>
                                                                 <li><a href="#">Provisional Patent</a></li>
                                                             </ul>
                                                         </div>
                                                     </div>

                                                     <!-- Megamenu Footer -->
                                                     <div class="megamenu-footer text-center py-2 bg-skyblue text-white">
                                                         <a href="#" class="text-white fw-bold">Check all services</a>
                                                     </div>
                                                 </div>
                                             </div>

                                             <!-- Menu Item with Dropdown -->
                                             <li class="custom-menu-item">
                                                 <a href="#">
                                                     NRI'S & Foreigner <i class="fa fa-caret-down custom-caret-icon" aria-hidden="true"></i>
                                                 </a>
                                             </li>
                                             <!-- Megamenu -->
                                             <div class="custom-megamenu">
                                                 <div class="container-fluid">
                                                     <div class="row">
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Incorporation</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">
                                                                         Private Limited (NRIs without FDI)

                                                                     </a></li>
                                                                 <li><a href="#">Private Limited (NRIs & Foreign Nationals with FDI)</a></li>
                                                                 <li><a href="#">Company for Foreign Subsidiary (Wholly Owned)</a></li>
                                                                 <li><a href="#">Private Limited (Non XBRL)</a></li>
                                                                 <li><a href="#">Private Limited(XBRL)</a></li>
                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">License</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">
                                                                         GST Registration (Regular)



                                                                     </a></li>
                                                                 <li><a href="#">GST Registration (Foreign or Non-Resident)</a></li>
                                                                 <li><a href="#">Import Export Code (IEC)</a></li>
                                                                 <li><a href="#">MSME Registration</a></li>
                                                                 <li><a href="#">Startup India Registration</a></li>
                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Business Suport</p>
                                                             <ul class="megamenu-list">

                                                                 <li><a href="#">TradeMark Registration</a></li>
                                                                 <li><a href="#">Appointment of Director (Indian)</a></li>
                                                                 <li><a href="#">Appointment of Foreign Director</a></li>
                                                                 <li><a href="#">Resignation of Director (Indian)</a></li>
                                                                 <li><a href="#">Digital Signature-Class2- (For NRI/Foreigner)</a></li>
                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Regular Compliance</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">
                                                                         DIR 3 KYC WEB (For NRI/Foreigner)


                                                                     </a></li>
                                                                 <li><a href="#">DIRECTOR KYC-3 (For NRI/Foreigner)</a></li>
                                                                 <li><a href="#">MSME FORM I Return</a></li>
                                                                 <li><a href="#">ACTIVE Compliance (Form 22A)</a></li>
                                                                 <li><a href="#">
                                                                         Annual Compliance of Private Limited Company</a></li>

                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Filings</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#"> ITR-6 FILLING</a></li>
                                                                 <li><a href="#">FLA Return (RBI)</a></li>
                                                                 <li><a href="#">TDS Return Filing (Salary)</a></li>
                                                                 <li><a href="#">TDS Return Filing (Others)</a></li>
                                                                 <li><a href="#">Auditor Appointment ROC FIling</a></li>
                                                                 <li><a href="#">Commencement Certificate (Form 20A)</a></li>
                                                             </ul>
                                                         </div>

                                                     </div>

                                                     <!-- Megamenu Footer -->
                                                     <div class="megamenu-footer bg-skyblue text-white text-start px-3 py-2">
                                                         <a href="#" class="text-white fw-bold">Check all services</a>
                                                     </div>
                                                 </div>
                                             </div>


                                             <li class="custom-menu-item">
                                                 <a href="#">Marketing <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                             </li>

                                             <!-- Megamenu directly outside li -->
                                             <div class="custom-megamenu">
                                                 <div class="container-fluid">
                                                     <div class="row">
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Design</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Logo Design <span class="pop">Essential</span> </a></li>
                                                                 <li><a href="#">
                                                                         Corporate Profile Design


                                                                     </a></li>
                                                                 <li><a href="#">Poster Design</a></li>

                                                                 <li><a href="#">Packaging Design</a></li>
                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head"></p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">
                                                                         Pitch Deck DesignPopular


                                                                     </a></li>
                                                                 <li><a href="#">Presentation Design</a></li>
                                                                 <li><a href="#">E-mailer Design</a></li>
                                                                 <li><a href="#">Banner Design</a></li>

                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Management</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">
                                                                         Social Media ManagementPopular
                                                                     </a></li>
                                                                 <li><a href="#">Search Engine OptimisationEssential</a></li>
                                                                 <li><a href="#">PPC Management</a></li>
                                                                 <li><a href="#">YouTube Campaign</a></li>
                                                                 <li><a href="#">Instagram CampaignTrendy</a></li>
                                                                 <li><a href="#">LinkedIn Campaign</a></li>

                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Web</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#">Informative Website DesignEssential</a></li>
                                                                 <li><a href="#">Dynamic Website Design</a></li>
                                                                 <li><a href="#">E-commerce Portal</a></li>
                                                                 <li><a href="#">Blog Website Design</a></li>
                                                                 <li><a href="#">Mobile App</a></li>
                                                                 <li><a href="#">Blog Website Design</a></li>
                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Audio -Visual</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#"> White Board AnimationTrendy </a></li>
                                                                 <li><a href="#">Explainer Video</a></li>
                                                                 <li><a href="#">Corporate Video</a></li>
                                                                 <li><a href="#">Video ProfilePopular</a></li>
                                                                 <li><a href="#">Corporate Photoshoot</a></li>
                                                             </ul>
                                                         </div>
                                                         <div class="col-md-2 megacol">
                                                             <p class="head">Content</p>
                                                             <ul class="megamenu-list">
                                                                 <li><a href="#"> Content Writing </a></li>
                                                                 <li><a href="#">Copy Writing</a></li>
                                                                 <li><a href="#">Emailer Writing</a></li>
                                                                 <li><a href="#">Partnership Firm</a></li>
                                                                 <li><a href="#">Profile WritingEssential</a></li>
                                                             </ul>
                                                         </div>

                                                     </div>
                                                     <div class="megamenu-footer">
                                                         <a href="#" style="color:white;">Check All Services</a>
                                                     </div>

                                                 </div>
                                             </div>



                                             <li><a href="contact.php">HAVE A ENQUIRY?</a></li>
                                         </ul>
                                     </div>
                                     <!-- #site-navigation -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
             <!-- Main header close -->

             <div class="header_mobile">
                 <div class="mlogo_wrapper clearfix">
                     <div class="mobile_logo">
                         <a href="#"><img src="<?php echo $logoPath; ?>" alt="TexEsquire"></a>
                     </div>
                     <div id="mmenu_toggle">
                         <button></button>
                     </div>
                 </div>
                 <div class="mmenu_wrapper">
                     <div class="mobile_nav collapse">
                         <ul id="menu-main-menu" class="mobile_mainmenu">
                             <li class="menu-item-has-children">
                                 <a href="#">StartUp</a>
                                 <ul class="sub-menu">
                                     <li class="menu-heading">Registration for Indians</li>
                                     <li><a href="#">Private Limited Company</a></li>
                                     <li><a href="#">LLP Registration</a></li>
                                     <li><a href="#">One Person Company</a></li>
                                     <li><a href="#">Partnership Firm</a></li>
                                     <li><a href="#">Proprietorship</a></li>

                                     <li class="menu-heading">Registration for NRIs/Foreigners</li>
                                     <li><a href="#">Private Limited (NR)</a></li>
                                     <li><a href="#">Private Foreigner</a></li>
                                     <li><a href="#">Wholly Owned Subsidiary</a></li>
                                     <li><a href="#">LLP Registration (NRIs)</a></li>

                                     <li class="menu-heading">Licenses</li>
                                     <li><a href="#">GST Registration</a></li>
                                     <li><a href="#">MSME Registration</a></li>
                                     <li><a href="#">Import Export Code</a></li>
                                     <li><a href="#">FSSAI Registration</a></li>
                                     <li><a href="#">PF Registration</a></li>

                                     <li class="menu-heading">Support</li>
                                     <li><a href="#">Startup India Registration</a></li>
                                     <li><a href="#">Book Keeping</a></li>
                                     <li><a href="#">Business Project Report</a></li>
                                     <li><a href="#">Business Valuation</a></li>
                                     <li><a href="#">Pitch Deck</a></li>

                                     <li class="menu-heading">Alteration</li>
                                     <li><a href="#">Director Appointment</a></li>
                                     <li><a href="#">Director Resignation</a></li>
                                     <li><a href="#">Foreign Director Exit</a></li>
                                     <li><a href="#">Change Address</a></li>
                                     <li><a href="#">Change Business Object</a></li>

                                     <li class="menu-heading">IPR</li>
                                     <li><a href="#">Trademark Registration</a></li>
                                     <li><a href="#">Trademark Objection</a></li>
                                     <li><a href="#">Trademark Renewal</a></li>
                                     <li><a href="#">Copyright</a></li>
                                     <li><a href="#">Provisional Patent</a></li>

                                     <li class="menu-footer text-center">
                                         <a href="#" class="fw-bold">Check all services</a>
                                     </li>
                                 </ul>
                             </li>

                             <!-- Other menu items below remain unchanged -->
                             <li class="menu-item-has-children">
                                 <a href="#">Compliances/Filings</a>
                                 <ul class="sub-menu">
                                     <li class="menu-heading">Annual Compliances for companies</li>
                                     <li><a href="#">Private Limited (Non XBRL)</a></li>
                                     <li><a href="#">Private Limited(XBRL)</a></li>
                                     <li><a href="#">Limited Liability Partnership</a></li>
                                     <li><a href="#">Private Limited (Non XBRL)</a></li>
                                     <li><a href="#">Private Limited(XBRL)</a></li>

                                     <li class="menu-heading">Annual Filings for companies</li>
                                     <li><a href="#">Private Limited (Non XBRL)</a></li>
                                     <li><a href="#">Private Limited(XBRL)</a></li>
                                     <li><a href="#">Public Limited(Non XBRL)</a></li>
                                     <li><a href="#">Public Limited (XBRL)</a></li>
                                     <li><a href="#">One Person Company(OPC)</a></li>

                                     <li class="menu-heading">Other mandatory filings</li>
                                     <li><a href="#">Commencement Certificate (Form 20A)<span class="pop">Essential</span></a></li>
                                     <li><a href="#">MSME FORM-Return(ROC)</a></li>
                                     <li><a href="#">ACTIVE Compliances (FORM 22 A)</a></li>
                                     <li><a href="#">Auditor Appointment-RoC </a></li>
                                     <li><a href="#">FLA return</a></li>

                                     <li class="menu-heading">Intimation of DIN to the registrer</li>
                                     <li><a href="#">DIR -3 KYC WEB (For Indian National)</a></li>
                                     <li><a href="#">DIR -3 KYC WEB(For NRI Foreigner )</a></li>
                                     <li><a href="#">DIR -3 KYC (For Indian National)</a></li>
                                     <li><a href="#">DIR -3 KYC (For NRI Foreigner)</a></li>

                                     <li class="menu-heading">Compliances Under GST & Income Tax</li>
                                     <li><a href="#">PF return filings</a></li>
                                     <li><a href="#">TDS filings 24 Q</a></li>
                                     <li><a href="#">TDS filings 26 Q</a></li>
                                     <li><a href="#">ITR 1-Filings</a></li>
                                     <li><a href="#">ITR 2-Filings</a></li>
                                     <li><a href="#">ITR 3-Filings</a></li>

                                     <li class="menu-heading">Business Sport</li>
                                     <li><a href="#">Trademark Registration</a></li>
                                     <li><a href="#">Trademark Objection</a></li>
                                     <li><a href="#">Trademark Renewal</a></li>
                                     <li><a href="#">Copyright</a></li>
                                     <li><a href="#">Provisional Patent</a></li>

                                     <li class="menu-footer text-center">
                                         <a href="#" class="fw-bold">Check all services</a>
                                     </li>
                                 </ul>
                             </li>

                             <li class="menu-item-has-children">
                                 <a href="#">NRI'S & Foreigner</a>
                                 <ul class="sub-menu">
                                     <li class="menu-heading">Incorporation</li>
                                     <li><a href="#">Private Limited (NRIs without FDI)</a></li>
                                     <li><a href="#">Private Limited (NRIs & Foreign Nationals with FDI)</a></li>
                                     <li><a href="#">Company for Foreign Subsidiary (Wholly Owned)</a></li>
                                     <li><a href="#">Private Limited (Non XBRL)</a></li>
                                     <li><a href="#">Private Limited(XBRL)</a></li>
                                     <li class="menu-heading">License</li>
                                     <li><a href="#">GST Registration (Regular)</a></li>
                                     <li><a href="#">GST Registration (Foreign or Non-Resident)</a></li>
                                     <li><a href="#">Import Export Code (IEC)</a></li>
                                     <li><a href="#">MSME Registration</a></li>
                                     <li><a href="#">Startup India Registration</a></li>

                                     <li class="menu-heading">Business Suport</li>
                                     <li><a href="#">TradeMark Registration</a></li>
                                     <li><a href="#">Appointment of Director (Indian)</a></li>
                                     <li><a href="#">Appointment of Foreign Director</a></li>
                                     <li><a href="#">Resignation of Director (Indian)</a></li>
                                     <li><a href="#">Digital Signature-Class2- (For NRI/Foreigner)</a></li>

                                     <li class="menu-heading">Regular Compliance</li>
                                     <li><a href="#">DIR 3 KYC WEB (For NRI/Foreigner) </a></li>
                                     <li><a href="#">DIRECTOR KYC-3 (For NRI/Foreigner)</a></li>
                                     <li><a href="#">MSME FORM I Return</a></li>
                                     <li><a href="#">ACTIVE Compliance (Form 22A)</a></li>
                                     <li><a href="#">Annual Compliance of Private Limited Company</a></li>

                                     <li class="menu-heading">Filings</li>
                                     <li><a href="#">ITR-6 FILLING</a></li>
                                     <li><a href="#">FLA Return (RBI)</a></li>
                                     <li><a href="#">TDS Return Filing (Salary)</a></li>
                                     <li><a href="#">TDS Return Filing (Others)</a></li>
                                     <li><a href="#">Auditor Appointment ROC FIling</a></li>
                                     <li><a href="#">Commencement Certificate (Form 20A)</a></li>

                                 </ul>
                             </li>
                             <li class="menu-item-has-children">
                                 <a href="#">Marketing</a>
<ul class="sub-menu">

                             <li class="menu-heading">Design</li>
                             <li><a href="#">Logo Design <span class="pop">Essential</span> </a></li>
                             <li><a href="#">Corporate Profile Design</a></li>
                             <li><a href="#">Poster Design</a></li>
                             <li><a href="#">Packaging Design</a></li>


                             <li><a href="#">Pitch Deck DesignPopular</a></li>
                             <li><a href="#">Presentation Design</a></li>
                             <li><a href="#">E-mailer Design</a></li>
                             <li><a href="#">Banner Design</a></li>

                             <li class="menu-heading">Management</li>
                             <li><a href="#">Social Media ManagementPopular</a></li>
                             <li><a href="#">Search Engine OptimisationEssential</a></li>
                             <li><a href="#">PPC Management</a></li>
                             <li><a href="#">YouTube Campaign</a></li>
                             <li><a href="#">Instagram CampaignTrendy</a></li>
                             <li><a href="#">LinkedIn Campaign</a></li>
                             <li><a href="contact.php">HAVE A ENQUIRY</a></li>

                             <li class="menu-heading">Web</li>
                             <li><a href="#">Informative Website DesignEssential</a></li>
                             <li><a href="#">Dynamic Website Design</a></li>
                             <li><a href="#">E-commerce Portal</a></li>
                             <li><a href="#">Blog Website Design</a></li>
                             <li><a href="#">Mobile App</a></li>
                             <li><a href="#">Blog Website Design</a></li>

                             <li class="menu-heading">Audio-Visual</li>
                             <li><a href="#"> White Board AnimationTrendy</a></li>
                             <li><a href="#">Explainer Video</a></li>
                             <li><a href="#">Corporate Video</a></li>
                             <li><a href="#">Video ProfilePopular</a></li>
                             <li><a href="#">Corporate Photoshoot</a></li>

                         </ul>
                     </div>
                 </div>
             </div>

         </header>
         <script>
             const text = "Be your own  boss ! Company registration @ Rs.2999 ";
             const element = document.getElementById("typewriter");
             let index = 0;

             function type() {
                 if (index < text.length) {
                     element.innerHTML += text.charAt(index);
                     index++;
                     setTimeout(type, 100);
                 }
             }

             type();
         </script>
         <script>
             window.onscroll = function() {
                 stickyHeader();
             };

             var header = document.querySelector('.main-header');
             var sticky = header.offsetTop; // Position at which the header becomes sticky

             function stickyHeader() {
                 if (window.pageYOffset > sticky) {
                     header.style.position = 'fixed';
                     header.style.top = '0';
                     header.style.left = '0';
                     header.style.width = '100%';
                     header.style.zIndex = '9999';
                 } else {
                     header.style.position = 'relative';
                     header.style.top = '';
                     header.style.left = '';
                     header.style.width = '';
                 }
             }
         </script>
         <script>
             // Get all menu items and megamenus
             const menuItems = document.querySelectorAll('.custom-menu-item');

             menuItems.forEach(item => {
                 const megaMenu = item.nextElementSibling;

                 if (megaMenu && megaMenu.classList.contains('custom-megamenu')) {
                     // Show on hover
                     item.addEventListener('mouseenter', () => {
                         megaMenu.style.display = 'block';
                     });

                     // Hide when mouse leaves both menu item and megamenu
                     item.addEventListener('mouseleave', () => {
                         setTimeout(() => {
                             if (!megaMenu.matches(':hover') && !item.matches(':hover')) {
                                 megaMenu.style.display = 'none';
                             }
                         }, 100); // small delay to allow transition to megamenu
                     });

                     megaMenu.addEventListener('mouseenter', () => {
                         megaMenu.style.display = 'block';
                     });

                     megaMenu.addEventListener('mouseleave', () => {
                         megaMenu.style.display = 'none';
                     });
                 }
             });
         </script>