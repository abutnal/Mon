<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Monster</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Monster
  </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="./assets/css/style.css" rel="stylesheet" />
  <script type="text/javascript" src="./assets/js/validation.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <style type="text/css" media="screen">
    .bcolor{
      border-color: red !important;
    }
    .green_bcolor{
      border: 1px solid green !important;
    }
    .label{
      margin-left: 18px;
      font-size: 13px; 
      background: #fff;
      color:#2196f3b8;
      padding: 0px 3px 0px 3px;
    }
    .label_val{
      color:red;
    }

    .green_label_val{
      color:green;
    }
  </style>

</head>
<body>


  <!-- NavBar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background:#fff">
    <a class="navbar-brand" href="#"> <img src="./assets/img/monster-logo.svg" alt="Logo"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav w-100">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li> -->


      <li class="nav-item dropdown ml-auto nav-item-right-menu-li-button" align="right">
        <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark jobseeker_btn" >Job Seeker
         <!-- <i class="fa fa-external-link-square" aria-hidden="true"></i> -->
         <img src="./assets/img/jobseeker.png" alt="jobseeker" class="jobseeker-icon-png">
       </button></a>
     </li>




     <li class="nav-item dropdown  nav-item-right-menu-li">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="menu_text">For Online Product Queries</div>
        <div class="menu_text"><span id="ist_time"></span></div>
        <span class="phone_icon_nav">
          <!-- <i class="fa fa-phone " aria-hidden="true"></i>  -->
          <img src="./assets/img/phone.png" alt="phone" class="phone-icon-png">
        </span>
        <span class="phone_icon_color"><span id="country_contact_phone"></span></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <!-- <a class="dropdown-item" href="#">India</a>
          <a class="dropdown-item" href="#">Hong Kong</a>
          <a class="dropdown-item" href="#">Singapore</a>
          <a class="dropdown-item" href="#">Thailand</a> -->
          <div class="contact_us_menu_dropdwon">
            <p class="contact_us_dropdown_heading">For Online - Product Queries</p>

            <p class="contact_us_dropdown"><b>Call us at:</b>
             <span id="Country_contact_details"></span>
           </p>
           <p class="contact_us_dropdown text-center">
            <small>
              <span id="ist_time_details"></span>
            </small></p>

            <div class="contact_us_dropdown_email"><b>Email us at:</b> <a href = "mailto: buyonline@monsterindia.com" style="color:#333"><u>buyonline@monsterindia.com</u></a>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item dropdown nav-item-right-menu-li-country" id="select_country">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!-- <img src="./assets/img/india.png" class="flag_menu_icon" alt="Inda"> -->
          
          <span id="country_logo"></span>
        </a>
        
        <div class="dropdown-menu dropdown-menu-right dropdown-country" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item dropdown-country-item " href="#" data-id="91">
            <img src="./assets/img/india.png" class="flag_icon" alt="Inda"> India</a>

            <a class="dropdown-item dropdown-country-item" href="#" data-id="971">
              <img src="./assets/img/gulf.jpg" class="flag_icon" alt="Gulf"> Gulf</a>

              <a class="dropdown-item dropdown-country-item" href="#" data-id="65">
                <img src="./assets/img/singapore.jpg" class="flag_icon" alt="Singapore"> Singapore</a>

                <a class="dropdown-item dropdown-country-item" href="#" data-id="60">
                  <img src="./assets/img/malaysia.png" class="flag_icon" alt="Malaysia"> Malaysia</a>

                  <a class="dropdown-item dropdown-country-item" href="#" data-id="63">
                    <img src="./assets/img/philippines.png" class="flag_icon" alt="Philippines"> Philippines</a>


                    <a class="dropdown-item dropdown-country-item" href="#" data-id="852">
                      <img src="./assets/img/hongkong.jpeg" class="flag_icon" alt="Hong Kong"> Hong Kong</a>


                      <a class="dropdown-item dropdown-country-item" href="#" data-id="66">
                        <img src="./assets/img/thailand.jpg" class="flag_icon" alt="Thailand"> Thailand</a>

                        <a class="dropdown-item dropdown-country-item" href="#" data-id="62">
                          <img src="./assets/img/indonesia.jpeg" class="flag_icon" alt="Indonesia"> Indonesia</a>

                          <a class="dropdown-item dropdown-country-item" href="#" data-id="84">
                            <img src="./assets/img/vietnam.png" class="flag_icon" alt="Vietnam"> Vietnam</a>


                          </div>
                        </li> 


                      </ul>  
                    </div>
                  </nav>
                  <!-- /NavBar -->
                  <br>
                  <br>
                  <br>


                  <div class="container">
                    <div class="row">

                      <div class="col-md-12" align="center">

                        <br/>
                        <div class=""><span class="custom_heading"> Discover a </span><span id="heading_bold">Faster, Flexible</span> <span class="custom_heading"> Way to Find Talent</span></div>
                        <div class="custom_subheading">Choose from Monster's Online Products to Speed Up Your Talent Search</div>
                      </div>
                    </div>
                  </div>


                  <div class="row main_content">


                    <div class="col-md-12 col-sm-12 col-lg-12 main_content">
                     <!-- Tab Items--> 
                     <nav>
                      <div class="nav nav-tabs justify-content-center  tab_1" id="nav-tab" role="tablist">
                        <a class="nav-item nav_tab_item nav-link 1st_tab" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Job Posting</a>

                        <a class="nav-item nav_tab_item nav-link 2nd_tab active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                          Resume Database Access
                          <div class="tab_title" style="line-height: 3px; font-size: 16px;"><small>(+ Free Premium Job Post)</small>
                          </div>

                        </a>
                        <a class="nav-item nav_tab_item nav-link 3rd_tab" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                          Customised Solution
                        </a>
                      </div>
                    </nav>
                    <!-- / Tab Items-->


                    <!-- 1st Tab  -->
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="container">
                          <div class="row card_top_margin">
                            <!-- India & Gulf Jop Posting  -->
                            <div class="col-md-6 india-gulf col-sm-6 col-lg-6 col-xs-6">
                              <div class="card shadow package_card">
                                <div class="card-body">
                                  <h4 class="card-title text-center job-posting-headings">QUICK  JOB POST</h4>

                                  <h1 class="card-subtitle mb-2 text-muted text-center">
                                   <span class="currency_sym text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">1400</span>
                                 </h1>

                                 <p class="p_item card-text"><span class="icon light green check-icon"></span> Posted Job will remain live for <b>30 days</b></p>
                                 <p class="p_item"><span class="icon light green check-icon"></span> Receive applications on registered <b>Email ID</b></p>
                                 <p class="p_item"><span class="icon light red cross-icon"></span> <b>Company info</b> in Job Posting</p>
                                 <p class="p_item"><span class="icon light red cross-icon"></span> Access to <b>Monster's Application Management System</b></p>
                                 <hr/>
                                 <div class="row">
                                  <div class="col-md-2" style="margin-top: 5px; padding-top: 0px;padding-bottom: 0px;padding-right: 0px">  Qty: </div>
                                  <div class="col-md-7" style="margin: 0px; padding: 0px;">
                                    <select class="form-control select_job_package" size="sm" id="exampleFormControlSelect1">
                                      <option> 1 Job Posting (&#x20b9; 700 Per Job)</option>
                                      <option>2 Job Posting (&#x20b9; 700 Per Job)</option>
                                      <option>3 Job Posting (&#x20b9; 700 Per Job)</option>
                                      <option>5 Job Posting (&#x20b9; 700 Per Job)</option>
                                      <option>8 Job Posting (&#x20b9; 700 Per Job)</option>
                                      <option>10 Job Posting (&#x20b9; 700 Per Job)</option>

                                    </select>  
                                    <!-- <i class="fa fa-caret-down" aria-hidden="true"></i> -->
                                  </div>
                                  <div class="col-md-3" style="margin-top: 5px; text-align: right; margin-left: -10px;  padding-left:0px; padding-top: 0px; padding-bottom: 0px; padding-right: 3px;">Total: <b><i class="fa fa-inr job_inr" aria-hidden="true"></i> 1400</b></div>
                                </div>

                                <hr/>
                                <div class="text-center"> <a href="#" class="card-link btn btn-success btn-lg btn_custom">BUY NOW</a></div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-6 col-sm-6 india-gulf col-lg-6">
                            <div class="card shadow package_card">
                              <div class="card-body">
                                <h4 class="card-title text-center job-posting-headings">PREMIUM JOB POST</h4>
                                <h1 class="card-subtitle mb-2 text-muted text-center">
                                 <span class="currency_sym text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">1799</span>
                               </h1>

                               <p class="p_item card-text"><span class="icon light green check-icon"></span> Posted Job will remain live for <b>180 days</b></p>
                               <p class="p_item"><span class="icon light green check-icon"></span> Receive applications on registered <b>Email ID</b></p>
                               <p class="p_item"><span class="icon light green check-icon"></span> <b>Company info</b> in Job Posting</p>
                               <p class="p_item"><span class="icon light green check-icon"></span> Access to <b>Monster's Application Management System</b></p>
                               <hr/>
                               <div class="row">
                                <div class="col-md-2" style="margin-top: 5px; padding-top: 0px;padding-bottom: 0px;padding-right: 0px">  Qty: </div>
                                <div class="col-md-7" style="margin: 0px; padding: 0px;">
                                  <select class="form-control select_job_package" size="sm" id="exampleFormControlSelect1">
                                    <option> 1 Job Posting (&#x20b9; 1799 Per Job)</option>
                                    <option>2 Job Posting (&#x20b9; 700 Per Job)</option>
                                    <option>3 Job Posting (&#x20b9; 700 Per Job)</option>
                                    <option>5 Job Posting (&#x20b9; 700 Per Job)</option>
                                    <option>8 Job Posting (&#x20b9; 700 Per Job)</option>
                                    <option>10 Job Posting (&#x20b9; 700 Per Job)</option>
                                  </select>  
                                </div>
                                <div class="col-md-3" style="margin-top: 5px; text-align: right; margin-left: -10px;  padding-left:0px; padding-top: 0px; padding-bottom: 0px; padding-right: 3px;">Total: <b><i class="fa fa-inr job_inr" aria-hidden="true"></i> 1799</b></div>
                              </div>

                              <hr/>
                              <div class="text-center"> <a href="#" class="card-link btn btn-success btn-lg btn_custom">BUY NOW</a></div>
                            </div>
                          </div>
                        </div>
                        <!--/ India & Gulf Jop Posting  -->

                        <!-- HangKong Job Posting  -->

                        <div class="col-md-6 hongkong col-sm-6 col-lg-6 offset-3">
                          <div class="card shadow package_card">
                            <div class="card-body">
                              <h4 class="card-title text-center job-posting-headings">PREMIUM JOB POST</h4>
                              <h1 class="card-subtitle mb-2 text-muted text-center">
                               <span class="currency_sym text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">25000</span>
                             </h1>

                             <p class="p_item card-text"><span class="icon light green check-icon"></span> Posted Job will remain live for <b>60 days</b></p>
                             <p class="p_item"><span class="icon light green check-icon"></span> Receive applications on registered <b>Email ID</b></p>
                             <p class="p_item"><span class="icon light green check-icon"></span> <b>Company info</b> in Job Posting</p>
                             <p class="p_item"><span class="icon light green check-icon"></span> Access to <b>Monster's Application Management System</b></p>
                             <hr/>
                             <div class="row">
                              <div class="col-md-2" style="margin-top: 5px; padding-top: 0px;padding-bottom: 0px;padding-right: 0px">  Qty: </div>
                              <div class="col-md-7" style="margin: 0px; padding: 0px;">
                                <select class="form-control select_job_package" size="sm" id="exampleFormControlSelect1">
                                  <option> 2 Job Posting (&#x20b9; 1799 Per Job)</option>
                                  <option>2 Job Posting (&#x20b9; 700 Per Job)</option>
                                  <option>3 Job Posting (&#x20b9; 700 Per Job)</option>
                                  <option>5 Job Posting (&#x20b9; 700 Per Job)</option>
                                  <option>8 Job Posting (&#x20b9; 700 Per Job)</option>
                                  <option>10 Job Posting (&#x20b9; 700 Per Job)</option>
                                </select>  
                              </div>
                              <div class="col-md-3" style="margin-top: 5px; text-align: right; margin-left: -10px;  padding-left:0px; padding-top: 0px; padding-bottom: 0px; padding-right: 3px;">Total: <b><i class="fa fa-inr job_inr" aria-hidden="true"></i> 1799</b></div>
                            </div>

                            <hr/>
                            <div class="text-center"> <a href="#" class="card-link btn btn-success btn-lg btn_custom">BUY NOW</a></div>
                          </div>
                        </div>
                      </div>
                      <!-- /HangKong Job Posting  -->


                      <!-- Other Countries Job Posting  -->

                      <div class="col-md-6 others col-sm-6 col-lg-6 offset-3">
                        <div class="card shadow package_card">
                          <div class="card-body">
                            <h4 class="card-title text-center job-posting-headings">PREMIUM JOB POST</h4>
                            <h1 class="card-subtitle mb-2 text-muted text-center">
                             <span class="currency_sym text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">21000</span>
                           </h1>

                           <p class="p_item card-text"><span class="icon light green check-icon"></span> Posted Job will remain live for <b>30 days</b></p>
                           <p class="p_item"><span class="icon light green check-icon"></span> Receive applications on registered <b>Email ID</b></p>
                           <p class="p_item"><span class="icon light green check-icon"></span> <b>Company info</b> in Job Posting</p>
                           <p class="p_item"><span class="icon light green check-icon"></span> Access to <b>Monster's Application Management System</b></p>
                           <hr/>
                           <div class="row">
                            <div class="col-md-2" style="margin-top: 5px; padding-top: 0px;padding-bottom: 0px;padding-right: 0px">  Qty: </div>
                            <div class="col-md-7" style="margin: 0px; padding: 0px;">
                              <select class="form-control" size="sm" id="exampleFormControlSelect1" style="font-size:13px; background: #eee; color:#333; margin: 0px; margin-left: -15px;">
                                <option> 1 Job Posting (&#x20b9; 2199 Per Job)</option>
                                <option>2 Job Posting (&#x20b9; 700 Per Job)</option>
                                <option>3 Job Posting (&#x20b9; 700 Per Job)</option>
                                <option>5 Job Posting (&#x20b9; 700 Per Job)</option>
                                <option>8 Job Posting (&#x20b9; 700 Per Job)</option>
                                <option>10 Job Posting (&#x20b9; 700 Per Job)</option>
                              </select>  
                            </div>
                            <div class="col-md-3" style="margin-top: 5px; text-align: right; margin-left: -10px;  padding-left:0px; padding-top: 0px; padding-bottom: 0px; padding-right: 3px;">Total: <b><i class="fa fa-inr" aria-hidden="true job_inr"></i> 1799</b></div>
                          </div>

                          <hr/>
                          <div class="text-center"> <a href="#" class="card-link btn btn-success btn-lg btn_custom">BUY NOW</a></div>
                        </div>
                      </div>
                    </div>
                    <!--/ Other Countries Job Posting  -->

                  </div>
                </div>

              </div>
              <!--/ 1st Tab  -->





              <!-- 2nd Tab -->
              <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
               <div class="container">
                 <div class="row main_content row_card-desk-mt">


                   <div class="col-md-3  col-sm-3 col-lg-3" >
                     <div class="card-deck custom_card-desk">
                      <div class="card shadow package_card">
                        <div class="card-header custom_card-header">
                          <div class="text-center card_package_title">
                            <span><b>3 DAYS</b></span>
                          </div>
                          <div class="text-center card_package_subtitle"> All India Database Accessos </div>
                          <div class="text-center card_package_subtitle"> +1 Premium Job Posting </div>

                        </div>
                        <div class="card-body">
                         <h2 class="card-subtitle mb-2 text-muted text-center card-job-pirce">
                           <span class="currency_sym_card text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">3499</span>
                         </h2>

                         <p class="card-body-text"><b>3 days</b> Validity  </p>
                         <p class="card-body-text"><b>250</b> Profile views </p>
                         <p class="card-body-text"><b>250</b> Excel Downloads </p>
                         <p class="card-body-text"><b>2,500</b> Emails</p>                 
                         <div class="text-center"><a href="" class="btn btn-success btn-sm btn-buy-card">BUY NOW</a></div> 
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3" >
                   <div class="card-deck custom_card-desk">
                    <div class="card shadow package_card">
                      <div class="card-header custom_card-header">
                        <div class="text-center card_package_title">
                          <span><b>7 DAYS</b></span>
                        </div>
                        <div class="text-center card_package_subtitle"> All India Database Accessos </div>
                        <div class="text-center card_package_subtitle"> +2 Premium Job Posting </div>

                      </div>
                      <div class="card-body">
                       <h2 class="card-subtitle mb-2 text-muted text-center card-job-pirce">
                         <span class="currency_sym_card text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">6499</span>
                       </h2>

                       <p class="card-body-text"><b>7 days</b> Validity  </p>
                       <p class="card-body-text"><b>500</b> Profile views  </p>
                       <p class="card-body-text"><b>500</b> Excel Downloads </p>
                       <p class="card-body-text"><b>5,000</b> Emails    </p>                 
                       <div class="text-center"><a href="" class="btn btn-success btn-sm btn-buy-card">BUY NOW</a></div> 
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-3">
                <div class="card-deck custom_card-desk">
                 <div class="card shadow package_card">
                   <div class="card-header custom_card-header">
                     <div class="text-center card_package_title">
                       <span><b>15 DAYS</b></span>
                     </div>
                     <div class="text-center card_package_subtitle"> All India Database Accessos</div>
                     <div class="text-center card_package_subtitle"> +3 Premium Job Posting </div>

                   </div>
                   <div class="card-body">
                    <h2 class="card-subtitle mb-2 text-muted text-center card-job-pirce">
                      <span class="currency_sym_card text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">9499</span>
                    </h2>

                    <p class="card-body-text"><b>15 days</b> Validity  </p>
                    <p class="card-body-text"><b>1000</b> Profile views  </p>
                    <p class="card-body-text"><b>1000</b> Excel Downloads </p>
                    <p class="card-body-text"><b>10,000</b> Emails    </p>                 
                    <div class="text-center"><a href="" class="btn btn-success btn-sm btn-buy-card">BUY NOW</a></div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-deck custom_card-desk">
               <div class="card shadow package_card">
                 <div class="card-header custom_card-header">
                   <div class="text-center card_package_title">
                     <span><b>30 DAYS</b></span>
                   </div>
                   <div class="text-center card_package_subtitle"> All India Database Accessos </div>
                   <div class="text-center card_package_subtitle"> +4 Premium Job Posting </div>

                 </div>
                 <div class="card-body">
                  <h2 class="card-subtitle mb-2 text-muted text-center card-job-pirce">
                    <span class="currency_sym_card text-success"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="text-success">2499</span>
                  </h2>

                  <p class="card-body-text"><b>30 days</b> Validity  </p>
                  <p class="card-body-text"><b>2000</b> Profile views  </p>
                  <p class="card-body-text"><b>2000</b> Excel Downloads </p>
                  <p class="card-body-text"><b>20,000</b> Emails    </p>                 
                  <div class="text-center"><a href="" class="btn btn-success btn-sm btn-buy-card">BUY NOW</a></div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!--/ 2rd Tab -->




    <!-- 3rd Tab -->
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

     <div class="container"><div class="row">
       <div class="col-md-12">


         <div class="row main_content row_card-desk-mt">
          <div class="col-md-7">
            <table class="table  content_tbl" >

              <tbody>
                <tr >
                  <td colspan="2" class="content_tabl"><h4>Find the <b>Right Solution</b> for your hiring needs</h4></td>
                </tr>
                <tr>
                  <td width="1%"  class="content_tabl text-center">
                     <div class="icon light check-icon"></div>
                  </td>
                  <td width="99%" class="content_tabl">

                    
    <div class="icon light expand-icon"></div>
    
 
                    <p class="customized-sol-text">


                     Post <b style="font-weight: bold">Jobs</b> viewed by millions of jobseekers and manage
                     applications on Monster's <b style="font-weight: bold">Application Management System</b></p>
                   </td>

                 </tr>
                 <tr>
                  <td class="content_tabl"><span class="icon light check-icon"></span></td>
                  <td class="content_tabl">
                   <p class="customized-sol-text">

                     Buy <b style="font-weight: bold">Database Access</b> & <b style="font-weight: bold">Resume View</b> based on your needs</p>
                   </td>

                 </tr>
                 <tr>
                  <td class="content_tabl"><span class="icon light check-icon"></span></td>
                  <td class="content_tabl">
                    <p class="customized-sol-text">
                     Advertise you <b style="font-weight: bold">Walk-ins</b> with high performing ads on Monster</p>
                   </td>
                 </tr>

                 <tr>
                  <td class="content_tabl"><span class="icon light check-icon"></span></td>
                  <td class="content_tabl">
                    <p class="customized-sol-text">
                    Increase you Brand visibility with a dedicated <b style="font-weight: bold">Company Page</b> on Moster</p>
                   </td>
                 </tr>

                 <tr>
                  <td class="content_tabl"><span class="icon light check-icon"></span></td>
                  <td class="content_tabl">
                    <p class="customized-sol-text">
                    Get you own Career Site & Manage you condidate Database with <b style="font-weight: bold">Career Site Solution</b> From Monster</p>
                   </td>
                 </tr>

               </tbody>
             </table>


           <!--  <h4>Find the <b>Right Solution</b> for your hiring needs</h4>

            <p class="customized-sol-text">
             <i class="fa fa-check" aria-hidden="true"></i>
             Post <b>Jobs</b> viewed by millions of jobseekers and manage
             applications on Monster's <b>Application Management System</b></p>

             <p class="customized-sol-text">
               <i class="fa fa-check" aria-hidden="true"></i>
               Buy <b>Database Access</b> & <b>Resume View</b> based on your needs</p>

               <p class="customized-sol-text">
                 <i class="fa fa-check" aria-hidden="true"></i>
                 Advertise you <b>Walk-ins</b> with high performing ads on Monster</p>

                 <p class="customized-sol-text">
                   <i class="fa fa-check" aria-hidden="true"></i>
                   Increase you Brand visibility with a dedicated <b>Company Page</b> on Moster</p>

                   <p class="customized-sol-text">
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Get you own Career Site & Manage you condidate Database with <b>Career Site Solution</b> From Monster</p> -->
                   </div>

                   <div class="col-md-5">
                    <div class="card-deck">
                     <div class="card">
                      <div class="card-body">
                        <form action="" id="submitForm" method="POST">
                         <div class="form-group">
                          <label class="custom_form_label label-name" for="formGroupExampleInput">Name (Optional)</label>
                          <input type="text" name="name" id="input-name" class="form-control"   placeholder="Your full name">
                        </div>
                        <div class="form-group">
                          <label class="custom_form_label label-email" for="input-email">Email</label>
                          <input type="text" name="email" id="input-email" class="form-control"  placeholder="Email">
                        </div>

                        <div class="form-group">
                          <label class="custom_form_label label-phone"  for="formGroupExampleInput2">Mobile</label>
                          <div class="input-group mb-3">
                           <div class="input-group-prepend">
                            <button class="btn btn-outline-success dropdown-toggle ccode_btn" style="border-color:#ddd" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span id="c_Code"></span></button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">+91</a>
                              <a class="dropdown-item" href="#">+971</a>
                              <a class="dropdown-item" href="#">+65</a>
                              <a class="dropdown-item" href="#">+60</a>
                              <a class="dropdown-item" href="#">+63</a>
                              <a class="dropdown-item" href="#">+852</a>
                              <a class="dropdown-item" href="#">+66</a>
                              <a class="dropdown-item" href="#">+62</a>
                              <a class="dropdown-item" href="#">+84</a>

                              <!-- <div role="separator" class="dropdown-divider"></div> -->
                              <!-- <a class="dropdown-item" href="#">Separated link</a> -->
                            </div>
                          </div>
                          <input type="text" class="form-control" id="input-phone" name="phone"  placeholder="Phone"  aria-label="Text input with dropdown button">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="custom_form_label label-orgnisation" for="formGroupExampleInput2">Orgnisation</label>
                        <input type="text" name="orgnisation" id="input-orgnisation" class="form-control"  placeholder="Orgnisation">
                      </div>

                      <div class="text-center">
                        <input type="submit" class="btn btn-success" value="REQUEST A CALL BACK" id="submit">
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div></div>      

    </div>
    <!--/ 3rd Tab  -->



  </div>
</div>


<div class="col-md-12"  id="pol_content_id">

  <div class="container">
    <div class="pol_content_margin">

      <p class="pol_content">* All amounts are exclusive of taxes. Appropriate taxes will be levied as applicable.</p>
      <p class="pol_content">* Amount paid for Monster Services is non-refundable.</p>
      <p class="pol_content">* Purchaser assumes responsibility for the purchase of Services.</p>
      <p class="pol_content">* Purchaser can contact us at buyonline@monsterindia.com for any information of    support & service related concerns.</p>
    </div>
  </div>
</div>



<div class="col-md-12 main_content faq">
  <h1 class="text-center faq-heading">
  <br>
  <b>Frequently Asked Questions</b> 
</h1>

<h6 class="text-center faq-subheading">Explore more about Job Posting Service & Resume Database Access Service</h6>

<div class="col-md-12">



  <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
    <div class="container">

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                How soon will I start getting the response after the job posting is live? How many applications can I expect to receive?
              </a>
            </h3>
          </div>
          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body px-3 mb-4">
             Responses are based on the jobseeker applying to the job posting. You will receive them instantly as soon as a jobseeker applies to it.
           </div>
         </div>
       </div>

       <div class="panel panel-default">
        <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
          <h3 class="panel-title">
            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
              How will my job posting look like, when it is live?
            </a>
          </h3>
        </div>
        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
          <div class="panel-body px-3 mb-4">
            <p>
              You may have a look at below link  <br>

              View Example <br>

            </p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
          <h3 class="panel-title">
            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
             What do you mean by two functions/ category? Does that mean I can use the same posting for two different openings?
           </a>
         </h3>
       </div>
       <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
        <div class="panel-body px-3 mb-4">
          <p>
            No, same posting cannot be used for two different opening s. You can choose up to two functions/categories from the list provided at the time of posting.
          </p>
        </div>
      </div>
    </div>


  </div>

</div>
</section>

<h5 class="text-center view-more-faq"><a href="">VIEW MORE</a></h5>

<!-- Model Message -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-defualt float-right" data-toggle="modal" data-target="#thankYouMsg">
  View Popup message
</button>
<!-- .modal.show .modal-dialog -->
<!-- Modal -->
<div class="modal fade"  id="thankYouMsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="padding: 50px;" role="document">
    <div class="modal-content">
      <div class="modal-header1" style="margin-right: 20px; margin-top: 15px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <div class="text-center" style="margin-top: -25px; margin-bottom: 20px;"><img src="./assets/img/right-arrow.png" alt="right-"></div>
        <h4 class="text-center">Thank you for sharing you details</h4>
        <h5 class="text-center" style="color:#666">We will reach out to you soon</h5>
        <br/>
        <br/>
      </div>
    </div>
  </div>
</div>
<!-- /Model Message -->

<!-- Reqest call a back popup -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-defualt" data-toggle="modal" data-target="#requestCallBack">
  Request call a Back Popup
</button>
<!-- .modal.show .modal-dialog -->
<!-- Modal -->
<div class="modal  fade"  id="requestCallBack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="margin-top:70px;"  role="document">
    <div class="modal-content">
      <div class="" style="margin-right: 15px; margin-top: 10px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <div class="text-center popup-maintitle">Didn't get what you were looking for?</div>
        <div class="text-center popup-subtitle">Share your details & our executive will connect with you</div>


        <form>
          <div class="row" style="margin-top: 20px; margin-right: 20px; margin-left: 20px;">
            <div class="col-md-8 offset-2">
              <div class="form-group">
                <label class="custom_form_label" for="formGroupExampleInput2">Orgnisation</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Orgnisation">
              </div>

              <div class="form-group">
                <label class="custom_form_label" for="formGroupExampleInput2">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
              </div>

              <div class="form-group">
                <label class="custom_form_label" for="formGroupExampleInput2">Mobile</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary dropdown-toggle" style="border-color:#ddd; " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+91</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">+91</a>
                      <a class="dropdown-item" href="#">+971</a>
                      <a class="dropdown-item" href="#">+65</a>
                      <a class="dropdown-item" href="#">+60</a>
                      <a class="dropdown-item" href="#">+63</a>
                      <a class="dropdown-item" href="#">+852</a>
                      <a class="dropdown-item" href="#">+66</a>
                      <a class="dropdown-item" href="#">+62</a>
                      <a class="dropdown-item" href="#">+84</a>


                      <!-- <div role="separator" class="dropdown-divider"></div> -->
                      <!-- <a class="dropdown-item" href="#">Separated link</a> -->
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Phone" aria-label="Text input with dropdown button">
                </div>
              </div>

              <div class="form-group">
                <label class="custom_form_label" for="formGroupExampleInput">Name (Optional)</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" placeholder="Your full name">
              </div>
              <div class="text-center">
                <input type="submit" class="btn btn-success " value="REQUEST A CALL BACK" style="margin-top:10px; padding-top: 12px; padding-bottom: 12px; padding-right: 40px; font-size: 14px; padding-left: 40px" id="formGroupExampleInput2">
              </div>
              <br/>
            </div>
          </div>
        </form>





      </div>
    </div>
  </div>
</div>
<!--/ Reqest call a back popup-->
<br/>
<br/>
</div>
</div>
</div>


<!-- Footer -->
<div class="row main_content">

  <!-- Footer Col-1 -->
  <div class="col-md-3">
    <div class="footer-align">

      <img src="./assets/img/footerlogo.png" class="footer-logo" alt="Logo">
      
      
      <p class="footer-content"> Monster provides a platform for hiring
      managers and jobseekers to connect to each other.</p>

      <h6><b>Follow Us</b></h6>
    </div>

    <ul class="footer-ul" id="horizontal-list">

      <li class="social-icon-item">

       <a href=""> <span class="social_logo">
         <i class="fa fa-facebook" aria-hidden="true"></i>
       </span></a>

     </li>
     <li class="social-icon-item">
       <a href=""> <span class="social_logo"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
     </li>

     <li class="social-icon-item">
      <a href=""><span class="social_logo"><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
    </li>

  </ul>
</div>
<!--/ Footer Col-1 -->

<!-- Footer Col-2 -->
<div class="col-md-3 main_content ">
  <ul class="footer-ul">

    <li class="footer-li-item">
      <b><a href="" class="footer-a-item">About Company</a></b></li>
      <li class="footer-li-item">
        <a href="" class="footer-a-item">Contact Us</a>
      </li>
      <li class="footer-li-item"><a href="" class="footer-a-item">About Monster</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Privacy Commitment</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Be Safe</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Terms of Use</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Report a Bug</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Customer Speaks</a></li>

    </ul>
  </div>

  <!--/ Footer Col-2 -->  

  <!-- Footer Col-3 -->
  <div class="col-md-3 main_content" style="margin-left: -120px;">
    <ul class="footer-ul">
      <li class="footer-li-item"><b><a href="" class="footer-a-item">For Employers</a></b></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Home</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Buy Resume Database Access</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Buy Job Postings</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Advertise with Us</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Employer Login</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Research Reports</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">mThinking</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Better Together</a></li>
    </ul>
  </div>
  <!--/ Footer Col-3 -->

  
  <!-- Footer Col-4 -->
  <div class="col-md-3 main_content" style="margin-left: -100px;">
    <ul class="footer-ul">
      <li class="footer-li-item">  <b><a href="" class="footer-a-item">For Jobseeker</a></b></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Home</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Search Jobs</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Submit Resume</a></li>
      <li class="footer-li-item"><a href="" class="footer-a-item">Jobs In Your Inbox</a></li>
      <li class="footer-li-item">
        <a href="" class="footer-a-item">Know about Companies</a></li>
        <li class="footer-li-item"><a href="" class="footer-a-item">My Monster</a></li>
        <li class="footer-li-item"><a href="" class="footer-a-item">Career Center</a></li>
        <li class="footer-li-item"><a href="" class="footer-a-item">Help</a></li>
      </ul>
    </div>
    <!--/ Footer Col-4 -->
    <div class="col-md-12 main_content">
      <hr/>
    </div>

    <div class="col-md-6 copyright-content">
      <span class="copyright-content-align-left">Toll free: 1-800-4196666, +91-40-66116611 or info@monsterindia.com</span>
    </div>
    <div class="col-md-6 copyright-content text-right">
      <span class="copyright-content-align-right">&#9400; 2019 - All Rights Reserved</span>
    </div>
    <br/>
    </div
    >
    <div class="col-md-12" style="margin-bottom: 40px;">
    </div>
    <!-- /Footer -->
  </div>

  <script type="text/javascript">
   $(document).ready(function(){
        // alert('I am ready');
        $(document).on('click', '.3rd_tab', function(){
          $('#pol_content_id').hide();
        });

        $(document).on('click', '.2nd_tab', function(){
          $('#pol_content_id').show();
        });

        $(document).on('click', '.1st_tab', function(){
          $('#pol_content_id').show();
        });

        $('body').on('mouseenter mouseleave','.dropdown',function(e){
          var _d=$(e.target).closest('.dropdown');
          if (e.type === 'mouseenter')_d.addClass('show');
          setTimeout(function(){
            _d.toggleClass('show', _d.is(':hover'));
            $('[data-toggle="dropdown"]', _d).attr('aria-expanded',_d.is(':hover'));
          },300);
        });

      });

// Set Country and Contact Details
  // Select Country
  $(document).ready(function(){
    $('.india-gulf').show();
    $('.hongkong').hide();
    $('.others').hide();
    $('#country_logo').html('  <img src="./assets/img/india.png" class="flag_menu_icon" alt="Inda"> </a> ');

    $('#ist_time').html('(9:30 AM TO 6:30 PM IST)');
    $('#country_contact_phone').html('+91 4066116146');
    $('#Country_contact_details').html('<a href="tel:4066116146">+91-40-66116146<a>  / <a href="tel:4066116309">+91-40-66116309</a>');
    $('#ist_time_details').html('(Mon - Fri 9:30 AM to 6:30 PM IST)');
    $('#c_Code').html('+91');
    $(document).on('click', '#select_country', function(e){
      e.preventDefault();

      $anchor = $(e.target);
      var id = $anchor.attr('data-id');
      localStorage.setItem('todoData', id);
      location.reload();
    });

    if(localStorage.getItem('todoData')){
        // $('#edit').val(localStorage.getItem('todoData'));
        $('#show').html(localStorage.getItem('todoData'));
        var id = localStorage.getItem('todoData');

        if(id=='91'){
          $('#country_logo').html('\
            <img src="./assets/img/india.png" class="flag_menu_icon" alt="Inda">\
            </a>\
            ');
          $('#c_Code').html('+91');
          $('#ist_time').html('(9:30 AM TO 6:30 PM IST)');
          $('#country_contact_phone').html('+91 4066116146');
          $('#Country_contact_details').html('<a href="tel:4066116146">+91-40-66116146<a>  / <a href="tel:4066116309">+91-40-66116309</a>');
          $('#ist_time_details').html('(Mon - Fri 9:30 AM to 6:30 PM IST)');


        }

        if(id=='971'){
          $('#country_logo').html('\
            <img src="./assets/img/gulf.jpg" class="flag_menu_icon" alt="Gulf">\
            </a>\
            ');
          $('#c_Code').html('+971');
          $('#ist_time').html('(9:00 AM TO 6:00 PM GST)');
          $('#country_contact_phone').html('00-91-40-6611-6800');
          $('#Country_contact_details').html('<a href="tel:00914066116800">00-91-40-6611-6800<a> / <a href="tel:9603944411">+91-9603944411</a> ');
          $('#ist_time_details').html('(Sun – Thu 9:00 AM to 6:00 PM KSA / UAE)');
        }

        if(id=='65'){
          $('#country_logo').html('\
            <img src="./assets/img/singapore.jpg" class="flag_menu_icon" alt="Singapore">\
            </a>\
            ');
          $('#c_Code').html('+65');
        }

        if(id=='60'){
          $('#country_logo').html('\
            <img src="./assets/img/malaysia.png" class="flag_menu_icon" alt="Malaysia">\
            </a>\
            ');
          $('#c_Code').html('+60');
        }

        if(id=='63'){
          $('#country_logo').html('\
            <img src="./assets/img/philippines.png" class="flag_menu_icon" alt="Philippines">\
            </a>\
            ');
          $('#c_Code').html('+63');
        }

        if(id=='852'){
          $('#country_logo').html('\
            <img src="./assets/img/hongkong.jpeg" class="flag_menu_icon" alt="HangKong">\
            </a>\
            ');
          $('#c_Code').html('+852');
        }

        if(id=='66'){
          $('#country_logo').html('\
            <img src="./assets/img/thailand.jpg" class="flag_menu_icon" alt="Thailand">\
            </a>\
            ');
          $('#c_Code').html('+66');
        }

        if(id=='62'){
          $('#country_logo').html('\
            <img src="./assets/img/indonesia.jpeg" class="flag_menu_icon" alt="Indonesia">\
            </a>\
            ');
          $('#c_Code').html('+62');
        }

        if(id=='84'){
          $('#country_logo').html('\
            <img src="./assets/img/vietnam.png" class="flag_menu_icon" alt="Vietnam">\
            </a>\
            ');
          $('#c_Code').html('+84');
        }



        if(id=='65' || id=='60' || id=='63' || id=='852'  || id=='66'  || id=='62' || id=='84'){
         $('#ist_time').html('(8:00 AM TO 6:00 PM SGT)');
         $('#country_contact_phone').html('1800-101-2439 Ext: 6070');
         $('#Country_contact_details').html('<a href="">1800-101-2439 Ext: 6070<a> / <a href="tel:04066116070">040-6611-6070</a> ');
         $('#ist_time_details').html('(Mon-Fri 8:00 AM to 6:00 PM SGT)');
       }
        // console.log(id);

        if(id=='91' || id=='971'){
         $('.india-gulf').show();
         $('.hongkong').hide();
         $('.others').hide();
       }

       if(id=='65' || id=='60' || id=='63' || id=='66' || id=='62' || id=='81'){
        $('.others').show();
        $('.india-gulf').hide();
        $('.hongkong').hide();
      }

      if(id=='852'){
        $('.hongkong').show();
        $('.india-gulf').hide();
        $('.others').hide();
      }

    }
  });

  // Set Country and Contacts




//    // Select Country
//    $(document).ready(function(){
//     $('.india-gulf').show();
//     $('.hongkong').hide();
//     $('.others').hide();
//     $('#country_logo').html('  <img src="./assets/img/india.png" class="flag_menu_icon" alt="Inda"> </a> ');

//     $('#ist_time').html('(9:30 AM TO 6:30 PM IST)');
//     $('#country_contact_phone').html('+91 4066116146');
//     $('#Country_contact_details').html('<a href="tel:4066116146">+91-40-66116146<a>  / <a href="tel:4066116309">+91-40-66116309</a>');
//     $('#ist_time_details').html('(Mon - Fri 9:30 AM to 6:30 PM IST)');

//     $(document).on('click', '#select_country', function(e){
//       e.preventDefault();
//         // alert('I am ready');
// // India  91
// // Gulf  971
// // Singapore 65
// // Malaysia  60
// // Philippines 63
// // Hongkong 852
// // Thailand 66
// // Indonesia 62
// // Vietnam 84

// // singapore.jpg
// // malaysia.png
// // philippines.png
// // hongkong.jpeg
// // thailand.jpg
// // indonesia.jpeg
// // vietnam.png

//         $anchor = $(e.target);
//         var id = $anchor.attr('data-id');
//         if(id=='91'){
//           $('#country_logo').html('\
//           <img src="./assets/img/india.png" class="flag_menu_icon" alt="Inda">\
//         </a>\
//             ');

//           $('#ist_time').html('(9:30 AM TO 6:30 PM IST)');
//     $('#country_contact_phone').html('+91 4066116146');
//     $('#Country_contact_details').html('<a href="tel:4066116146">+91-40-66116146<a>  / <a href="tel:4066116309">+91-40-66116309</a>');
//     $('#ist_time_details').html('(Mon - Fri 9:30 AM to 6:30 PM IST)');


//         }

//         if(id=='971'){
//           $('#country_logo').html('\
//           <img src="./assets/img/gulf.jpg" class="flag_menu_icon" alt="Gulf">\
//         </a>\
//             ');

//           $('#ist_time').html('(9:00 AM TO 6:00 PM GST)');
//     $('#country_contact_phone').html('00-91-40-6611-6800');
//     $('#Country_contact_details').html('<a href="tel:00914066116800">00-91-40-6611-6800<a> / <a href="tel:9603944411">+91-9603944411</a> ');
//     $('#ist_time_details').html('(Sun – Thu 9:00 AM to 6:00 PM KSA / UAE)');
//         }

//          if(id=='65'){
//           $('#country_logo').html('\
//           <img src="./assets/img/singapore.jpg" class="flag_menu_icon" alt="Singapore">\
//         </a>\
//             ');
//         }

//          if(id=='60'){
//           $('#country_logo').html('\
//           <img src="./assets/img/malaysia.png" class="flag_menu_icon" alt="Malaysia">\
//         </a>\
//             ');
//         }

//         if(id=='63'){
//           $('#country_logo').html('\
//           <img src="./assets/img/philippines.png" class="flag_menu_icon" alt="Philippines">\
//         </a>\
//             ');
//         }

//         if(id=='852'){
//           $('#country_logo').html('\
//           <img src="./assets/img/hongkong.jpeg" class="flag_menu_icon" alt="HangKong">\
//         </a>\
//             ');
//         }

//       if(id=='66'){
//           $('#country_logo').html('\
//           <img src="./assets/img/thailand.jpg" class="flag_menu_icon" alt="Thailand">\
//         </a>\
//             ');
//         }

//         if(id=='62'){
//           $('#country_logo').html('\
//           <img src="./assets/img/indonesia.jpeg" class="flag_menu_icon" alt="Indonesia">\
//         </a>\
//             ');
//         }

//         if(id=='84'){
//           $('#country_logo').html('\
//           <img src="./assets/img/vietnam.png" class="flag_menu_icon" alt="Vietnam">\
//         </a>\
//             ');
//         }



//       if(id=='65' || id=='60' || id=='63' || id=='852'  || id=='66'  || id=='62' || id=='84'){
//          $('#ist_time').html('(8:00 AM TO 6:00 PM SGT)');
//     $('#country_contact_phone').html('1800-101-2439 Ext: 6070');
//     $('#Country_contact_details').html('<a href="">1800-101-2439 Ext: 6070<a> / <a href="tel:04066116070">040-6611-6070</a> ');
//     $('#ist_time_details').html('(Mon-Fri 8:00 AM to 6:00 PM SGT)');
//       }
//         // console.log(id);

//         if(id=='91' || id=='971'){
//          $('.india-gulf').show();
//          $('.hongkong').hide();
//          $('.others').hide();
//        }

//        if(id=='65' || id=='60' || id=='63' || id=='66' || id=='62' || id=='81'){
//         $('.others').show();
//         $('.india-gulf').hide();
//         $('.hongkong').hide();
//       }

//       if(id=='852'){
//         $('.hongkong').show();
//         $('.india-gulf').hide();
//         $('.others').hide();
//       }

//     });
//   });

</script>

</body>
</html>