


<?php  

        session_start();
        print_r($_SESSION);
        $fname = $_SESSION['fname'];
        $mname = $_SESSION['mname'];
        $lname = $_SESSION['lname'];
        $dob = $_SESSION['dob'];
        $email = $_SESSION['email'];
        $phone = $_SESSION['phone'];
        $pphone = $_SESSION['pphone'];
        $frname = $_SESSION['frname'];
        $mrname = $_SESSION['mrname'];
        $bname = $_SESSION['bname'];
        $age = $_SESSION['age'];
        $gender = $_SESSION['gender'];
        $resume = $_SESSION['resume'];
        $pphoto = $_SESSION['pphoto'];
        $educationLevel = $_SESSION['educationLevel'];
        $degree = $_SESSION['degree'];
        $sname = $_SESSION['sname'];
        $sbname = $_SESSION['sbname'];
        $uname = $_SESSION['uname'];
        $mode = $_SESSION['mode'];
        $stream = $_SESSION['stream'];
        $state = $_SESSION['state'];
        $sdate = $_SESSION['sdate'];
        $edate = $_SESSION['edate'];
        $marks = $_SESSION['marks'];

            




        /*$cname=$depart=$design=$exp=$pack=$hsal=$acctype=$ahname =$accnum =$bankname=$braname =$upinum =$ifsc =$design1=$depart1= $msal = $apack="";*/

        if( isset($_POST['submit']) ){


        
            /*if( empty($_REQUEST["cname"]) ){
                $cname="";
            }else {
                $cname = $_REQUEST["cname"];
            }
            if( empty($_REQUEST["depart"]) ){
               $depart="";
            }else {
                $depart = $_REQUEST["depart"];
            }
            if( empty($_REQUEST["design"]) ){
                $design = "";
            }else {
                $design = $_REQUEST["design"];
            }
            if( empty($_REQUEST["exp"]) ){
                $exp = "";
            }else {
                $exp = $_REQUEST["exp"];
            }
            if( empty($_REQUEST["pack"]) ){
                $pack = "";
            }else {
                $pack = $_REQUEST["pack"];
            }
            if( empty($_REQUEST["hsal"]) ){
                $hsal = "";
            }else {
                $hsal = $_REQUEST["hsal"];
            }
            if( empty($_REQUEST["acctype"]) ){
                $acctype = "";
            }else {
                $acctype = $_REQUEST["acctype"];
            }
            if( empty($_REQUEST["ahname"]) ){
                $ahname = "";
            }else {
                $ahname = $_REQUEST["ahname"];
            }
            if( empty($_REQUEST["accnum"]) ){
                $accnum = "";
            }else {
                $accnum = $_REQUEST["accnum"];
            }
            if( empty($_REQUEST["bankname"]) ){
                $bankname = "";
            }else {
                $bankname = $_REQUEST["bankname"];
            }

            if( empty($_REQUEST["braname"]) ){
                $braname = "";
            }else {
                $braname = $_REQUEST["braname"];
            }
            if( empty($_REQUEST["upinum"]) ){
                $upinum = "";
            }else {
                $upinum = $_REQUEST["upinum"];
            }
            if( empty($_REQUEST["ifsc"]) ){
                $ifsc = "";
            }else {
                $ifsc = $_REQUEST["ifsc"];
            }
            if( empty($_REQUEST["design1"]) ){
                $design1 = "";
            }else {
                $design1 = $_REQUEST["design1"];
            }
            if( empty($_REQUEST["depart1"]) ){
                $depart1="";
             }else {
                 $depart1 = $_REQUEST["depart1"];
             }

            if( empty($_REQUEST["msal"]) ){
                $msal = "";
            }else {
                $msal = $_REQUEST["msal"];
            }
            if( empty($_REQUEST["apack"]) ){
                $apack = "";
            }else {
                $apack = $_REQUEST["apack"];
            }*/



            $_SESSION['cname'] = $_POST['cname'];
            $_SESSION['depart'] = $_POST['depart'];
            $_SESSION['design'] = $_POST['design'];
            $_SESSION['exp'] = $_POST['exp'];
            $_SESSION['pack'] = $_POST['pack'];
            $_SESSION['hsal'] = $_POST['hsal'];
            $_SESSION['acctype'] = $_POST['acctype'];
            $_SESSION['ahname'] = $_POST['ahname'];
            $_SESSION['accnum'] = $_POST['accnum'];
            $_SESSION['bankname'] = $_POST['bankname'];
            $_SESSION['braname'] = $_POST['braname'];
            $_SESSION['upinum'] = $_POST['upinum'];
            $_SESSION['ifsc'] = $_POST['ifsc'];
            $_SESSION['design1'] = $_POST['design1'];
            $_SESSION['depart1'] = $_POST['depart1'];
            $_SESSION['msal'] = $_POST['msal'];
            $_SESSION['apack'] = $_POST['apack'];



    

            $cname = $_SESSION['cname'];
            $depart = $_SESSION['depart'];
            $design = $_SESSION['design'];
            $exp = $_SESSION['exp'];
            $pack = $_SESSION['pack'];
            $hsal = $_SESSION['hsal'];
            $acctype = $_SESSION['acctype'];
            $ahname = $_SESSION['ahname'];
            $accnum = $_SESSION['accnum'];
            $bankname = $_SESSION['bankname'];
            $braname = $_SESSION['braname'];
            $upinum = $_SESSION['upinum'];
            $ifsc = $_SESSION['ifsc'];
            $design1 = $_SESSION['design1'];
            $depart1 = $_SESSION['depart1'];
            $msal = $_SESSION['msal'];
            $apack = $_SESSION['apack'];


            echo $fname;
            echo $sname;
            





            if( !empty($fname) && !empty($email)  && !empty($phone) ){

                // database connection
                require_once "../dbcon.php";

                

                $sql_select_query = "SELECT Email FROM employeepersonaldetails WHERE Email = '$email' ";
                $r = mysqli_query($con , $sql_select_query);

                if( mysqli_num_rows($r) > 0 ){
                    $emailErr = "<p style='color:red'> * Email Already Register</p>";
                } else{

                    $sql = "INSERT INTO EmployeePersonalDetails (FirstName, MiddleName, LastName, DateOfBirth, Email, PhoneNumber, ParentPhoneNumber, FatherName, MotherName, BloodGroup, Age, Gender, Resume, ProfilePhoto)
                     VALUES
                      ('$fname', '$mname', '$lname', '$dob', '$email', '$phone', '$pphone', '$frname', '$mrname', '$bname', '$age', '$gender', '$resume', '$pphoto')";
                      


                    if (mysqli_query($con, $sql)) {
                        echo "Employee record inserted successfully";
                    } else {
                        echo "Error inserting Employee record: " . mysqli_error($con);
                    }

                    // Bind parameters
                    

                    $sql1 = "INSERT INTO EmployeeEducationalDetails 
                    (Email, EducationLevel, Degree, SchoolName, SchoolBoard, UniversityName, Mode, Stream, State, StartDate, EndDate, Marks)
                    VALUES 
                    ('$email', '$educationLevel', '$degree', '$sname', '$sbname', '$uname', '$mode', '$stream', '$state', '$sdate', '$edate', '$marks')";

                    if (mysqli_query($con, $sql1)) {
                        echo "Employee record inserted successfully";
                    } else {
                        echo "Error inserting Employee record: " . mysqli_error($con);
                    }


                    $sql2 = "INSERT INTO EmployeeWorkExperience (Email, CompanyName, Department, Designation, ExperienceYears, Package, TakehomeSalary) 
                    VALUES ('$email', '$cname', '$depart', '$design' ,'$exp', '$pack', '$hsal')";

                    if (mysqli_query($con, $sql2)) {
                        echo "Employee record inserted successfully";
                    } else {
                        echo "Error inserting Employee record: " . mysqli_error($con);
                    }



                    $sql3 = "INSERT INTO EmployeeBankDetails (Email, AccountType, AccountHolderName, AccountNumber, BankName, BranchName, UpiNumber, IfscCode, Designation, Department, MonthlySalary, AnnualPackage) 
                    VALUES ('$email', '$acctype', '$ahname', '$accnum', '$bankname', '$braname', '$upinum', '$ifsc', '$design1', '$depart1', '$msal', '$apack')";

                    if (mysqli_query($con, $sql3)) {
                        echo "Employee record inserted successfully";
                    } else {
                        echo "Error inserting Employee record: " . mysqli_error($con);
                    }

                    session_destroy();

                    
                }

            }
            

           


            
        }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="adminpanel.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="./cvms/index.php">
                            <i class="fa-solid fa-user"></i>RMS</a>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" style="background-color: #E0FFFF;">
            
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="./addemployee.php">
                            <i class="fa-solid fa-user"></i>Employee Master</a>
                            <ul aria-expanded="false">
                            <li><a href="./addemployee.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Employee</span></a></li>
                            <!--<li><a href="./manageemployee.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Employee</span></a></li>-->
                            <!-- <li><a href="./"> <i class="fa fa-bar-chart menu-icon"></i><span class="nav-text">Salary Table</span></a></li> -->

                            </ul>
                        </li>
                        
                        <!--
                        <li>
                            <a href="./cvms/index.php">
                            <i class="fa-solid fa-user"></i>RMS</a>
                        </li>
-->
                        
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="background-color: #ADD8E6;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                    
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Your name</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Name</a>
                                                    </h5>
                                                    <span class="email">abc@example.com</span>
                                                </div>
                                            </div>
                                            <form method="POST">
                                            <div class="account-dropdown__footer" name="Logout">
                                                <a href="crm.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <br>
            <br>
            <br>
            <div class="card login-form mb-0">
            <div class="card-body pt-4 justify-content-between">                       
                                    
                                <form method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="empform">
                                <h4 class="text-center text-info pb-3 border-bottom">Work Experience</h4>
                                <br>
                                <div id="workExp">
                                <div id="workExp1">
                                    <div class="row justify-content-center">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="cname">Company Name:</label>
                                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter your Company Name" value>
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="depart">Department:</label>
                                            <input type="text" class="form-control" id="depart" name="depart" placeholder="Enter your Department" value>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="design">Designation:</label>
                                            <select id="design" name="design" class="form-control">
                                            <option>Select</option>
                                            <option>NA</option>
                                            <option>Branch Manager</option>
                                            <option>Custom Manager</option>
                                            <option>Operation Manager</option>
                                            <option>Admin Manager</option>
                                            <option>Sales Manager</option>
                                            <option>Relationship Manager</option>
                                            <option>HR Manager</option>
                                            <option>Receptionist</option>
                                            <option>Guard</option>
                                            <option>Support Staff</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exp">Experience:</label>
                                            <select id="exp" name="exp" class="form-control">
                                            <option>Select</option>
                                            <option>No Experience</option>
                                            <option>0-2 Years</option>
                                            <option>2-4 Years</option>
                                            <option>4-6 Years</option>
                                            <option>6-8 Years</option>
                                            <option>8-10 Years</option>
                                            <option>10+ Years</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="pack">Package:</label>
                                            <input type="text" class="form-control" name="pack" id="pack" placeholder="Enter your Salary Package" value>
                                        </div>
                                        </div>
                                        <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="hsal">Take Home Salary:</label>
                                            <input type="text" class="form-control" name="hsal" id="hsal" placeholder="Enter your Salary" value>
                                        </div>
                                        </div>
                                    </div>
                                    

                                    <div class="form-row justify-content-center">
                                
                                    <div class="form-group col-md-5">
                                        
                                    </div>

                                    <div class="form-group col-md-5">
                                        <button  class="btn btn-outline-primary btn-sm float-right remove-Exp" type="button">Remove</button> 
                                        <button  class="btn btn-outline-primary btn-sm float-right add-Exp" type="button">&nbsp; &nbsp;  Add &nbsp; &nbsp;  </button>
                                    </div>

                                    </div>


                                    </div>
                                    
                                </div>

                                <br>
                                <br>
                                
                                <h4 class="text-center text-info pb-3 border-bottom">Bank Details:</h4>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="acctype">Account Type:</label>
                                            <select name="acctype" class="form-control">
                                                <option value="">Select Account Type</option>
                                                <option value="savings">Savings Account</option>
                                                <option value="Salary">Salary Account</option>
                                                <option value="checking">Checking Account</option>
                                                <option value="credit">Credit Card Account</option>
                                                <option value="loan">Loan Account</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ahname">Account Holder Name:</label>
                                            <input type="text" class="form-control" name="ahname" id="ahname" placeholder="Enter account holder name" value>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="accnum">Account Number:</label>
                                            <input type="text" class="form-control" name="accnum" id="accnum" placeholder="Enter your account number" value>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="bankname">Bank Name:</label>
                                            <select id="bankname" name="bankname" class="form-control">
                                                <option>Select</option>
                                                <!--public sector banks-->
                                                <option value="bank-of-baroda">Bank of Baroda</option>
                                                <option value="bank-of-india">Bank of India</option>
                                                <option value="bank-of-maharashtra">Bank of Maharashtra</option>
                                                <option value="canara-bank">Canara Bank</option>
                                                <option value="central-bank-of-india">Central Bank of India</option>
                                                <option value="indian-bank">Indian Bank</option>
                                                <option value="indian-overseas-bank">Indian Overseas Bank</option>
                                                <option value="punjab-and-sind-bank">Punjab and Sind Bank</option>
                                                <option value="punjab-national-bank">Punjab National Bank</option>
                                                <option value="state-bank-of-india">State Bank of India</option>
                                                <option value="uco-bank">UCO Bank</option>
                                                <option value="union-bank-of-india">Union Bank of India</option>
                                                <!--private sector banks-->
                                                <option value="HDFC Bank">HDFC Bank</option>
                                                <option value="ICICI Bank">ICICI Bank</option>
                                                <option value="Axis Bank">Axis Bank</option>
                                                <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                                <option value="IndusInd Bank">IndusInd Bank</option>
                                                <option value="Yes Bank">Yes Bank</option>
                                                <option value="IDFC First Bank">IDFC First Bank</option>
                                                <option value="Bandhan Bank">Bandhan Bank</option>
                                                <option value="RBL Bank">RBL Bank</option>
                                                <option value="Federal Bank">Federal Bank</option>
                                                <option value="South Indian Bank">South Indian Bank</option>
                                                <option value="City Union Bank">City Union Bank</option>
                                                <option value="Karur Vysya Bank">Karur Vysya Bank</option>
                                                <option value="Tamilnad Mercantile Bank">Tamilnad Mercantile Bank</option>
                                                <option value="DCB Bank">DCB Bank</option>
                                                <option value="Lakshmi Vilas Bank">Lakshmi Vilas Bank</option>
                                                <option value="Jammu &amp; Kashmir Bank">Jammu &amp; Kashmir Bank</option>
                                                <option value="Karnataka Bank">Karnataka Bank</option>
                                                <option value="Nainital Bank">Nainital Bank</option>
                                                <option value="AU Small Finance Bank">AU Small Finance Bank</option>
                                                <option value="Equitas Small Finance Bank">Equitas Small Finance Bank</option>
                                                <option value="Ujjivan Small Finance Bank">Ujjivan Small Finance Bank</option>
                                                <option value="ESAF Small Finance Bank">ESAF Small Finance Bank</option>
                                                <option value="Fincare Small Finance Bank">Fincare Small Finance Bank</option>
                                                <option value="Suryoday Small Finance Bank">Suryoday Small Finance Bank</option>
                                                <option value="North East Small Finance Bank">North East Small Finance Bank</option>
                                                <option value="Jana Small Finance Bank">Jana Small Finance Bank</option>
                                                <option value="Capital Small Finance Bank">Capital Small Finance Bank</option>
                                                <option value="Utkarsh Small Finance Bank">Utkarsh Small Finance Bank</option>
                                                <option value="India Post Payments Bank">India Post Payments Bank</option>
                                                <!--State co-oparative banks-->
                                                <option value="jharkhand">Jharkhand State Cooperative Bank Ltd.</option>
                                                <option value="kerala">The Kerala State Co-operative Bank Ltd.</option>
                                                <option value="andaman">The Andaman and Nicobar State Co-operative Bank Ltd.</option>
                                                <option value="andhra">The Andhra Pradesh State Co-operative Bank Ltd.</option>
                                                <option value="arunachal">The Arunachal Pradesh State co-operative Apex Bank Ltd.</option>
                                                <option value="assam">The Assam Co-operative Apex Bank Ltd.</option>
                                                <option value="bihar">The Bihar State Co-operative Bank Ltd.</option>
                                                <option value="chandigarh">The Chandigarh State Co-operative Bank Ltd.</option>
                                                <option value="chhattisgarh1">The Chhattisgarh Rajya Sahakari Bank.</option>
                                                <option value="chhattisgarh2">The Chhattisgarh RajyaSahakari Bank Maryadit</option>
                                                <option value="delhi">The Delhi State Co-operative Bank Ltd.</option>
                                                <option value="goa">The Goa State Co-operative Bank Ltd.</option>
                                                <option value="gujarat">The Gujarat State Co-operative Bank Ltd.</option>
                                                <option value="haryana">The Haryana State Co-operative Apex Bank Ltd.</option>
                                                <option value="himachal">The Himachal Pradesh State Co-operative Bank Ltd.</option>
                                                <option value="jammu">The Jammu and Kashmir State Co-operative Bank Ltd.</option>
                                                <option value="karnataka">The Karnataka State Co-operative Apex Bank Ltd.</option>
                                                <option value="madhya">The Madhya Pradesh Rajya Sahakari Bank Maryadit</option>
                                                <option value="maharashtra">The Maharashtra State Co-operative Bank Ltd.</option>
                                                <option value="manipur">The Manipur State Co-operative Bank Ltd.</option>
                                                <option value="meghalaya">The Meghalaya Co-operative Apex Bank Ltd.</option>
                                                <option value="mizoram">The Mizoram Co-operative Apex Bank Ltd.</option>
                                                <option value="nagaland">The Nagaland State Co-operative Bank Ltd.</option>
                                                <option value="orissa">The Orissa State Co-operative Bank Ltd.</option>
                                                <option value="pondichery">The Pondichery State Co-operative Bank Ltd.</option>
                                                <option value="punjab">The Punjab State Co-operative Bank Ltd.</option>
                                                <option value="rajasthan">The Rajasthan State Co-operative Bank Ltd.</option>
                                                <option value="sikkim">The Sikkim State Co-operative Bank Ltd.</option>
                                                <option value="tamil">The Tamil Nadu State Apex Co-operative Bank Ltd.</option>
                                                <option value="telangana">The Telangana State Cooperative Apex Bank Ltd.</option>
                                                <option value="tripura">The Tripura State Co-operative Bank Ltd.</option>
                                                <option value="uttar">The Uttar Pradesh Co-operative Bank Ltd.</option>
                                                <option value="uttaranchal">The Uttaranchal Rajya Sahakari Bank Ltd.</option>
                                                <option value="west">The West Bengal State Co-operative Bank Ltd.</option>

                                                <!--Urban co-oparative banks-->
                                                <option value="Abhyudaya Co-operative Bank Ltd.">Abhyudaya Co-operative Bank Ltd.</option>
                                                <option value="Ahmedabad Mercantile Co-Op Bank Ltd.">Ahmedabad Mercantile Co-Op Bank Ltd.</option>
                                                <option value="Amanath Co-operative Bank Ltd.">Amanath Co-operative Bank Ltd.</option>
                                                <option value="Andhra Pradesh Mahesh Co-Op Urban Bank Ltd.">Andhra Pradesh Mahesh Co-Op Urban Bank Ltd.</option>
                                                <option value="Bassein Catholic Co-operative Bank Ltd.">Bassein Catholic Co-operative Bank Ltd.</option>
                                                <option value="Bharat Co-operative Bank (Mumbai) Ltd.">Bharat Co-operative Bank (Mumbai) Ltd.</option>
                                                <option value="Bharati Sahakari Bank Limited.">Bharati Sahakari Bank Limited.</option>
                                                <option value="Bombay Mercantile Co-operative Bank Limited">Bombay Mercantile Co-operative Bank Limited</option>
                                                <option value="Buldana Urban Cooperative Credit Society">Buldana Urban Cooperative Credit Society</option>
                                                <option value="Charminar Co-operative Urban Bank Ltd.">Charminar Co-operative Urban Bank Ltd.</option>
                                                <option value="Citizen Credit Co-operative Bank Ltd.">Citizen Credit Co-operative Bank Ltd.</option>
                                                <option value="Cosmos Co-operative Bank Ltd.">Cosmos Co-operative Bank Ltd.</option>
                                                <option value="Dombivli Nagari Sahakari Bank Ltd.">Dombivli Nagari Sahakari Bank Ltd.</option>
                                                <option value="Darrusalam Co-operative Bank Ltd.">Darrusalam Co-operative Bank Ltd.</option>
                                                <option value="Goa Urban Co-operative Bank Limited.">Goa Urban Co-operative Bank Limited.</option>
                                                <option value="Gopinath Patil Parsik Janata Sahakari Bank Ltd.">Gopinath Patil Parsik Janata Sahakari Bank Ltd.</option>
                                                <option value="Greater Bombay Co-operative Bank Limited">Greater Bombay Co-operative Bank Limited</option>
                                                <option value="Indian Mercantile Co-operative Bank Ltd.">Indian Mercantile Co-operative Bank Ltd.</option>
                                                <option value="Jalgaon Janata Sahakari Bank Ltd.">Jalgaon Janata Sahakari Bank Ltd.</option>
                                                <option value="Janakalyan Sahakari Bank Ltd.">Janakalyan Sahakari Bank Ltd.</option>
                                                <option value="Janalaxmi Co-operative Bank Ltd.">Janalaxmi Co-operative Bank Ltd.</option>
                                                <option value="Janata Sahakari Bank Ltd.">Janata Sahakari Bank Ltd.</option>
                                                <option value="Kallappanna Awade Ichalkaranji Janata Sahakari Bank Ltd.">Kallappanna Awade Ichalkaranji Janata Sahakari Bank Ltd.</option>
                                                <option value="Kalupur Commercial Co-Op. Bank Ltd.">Kalupur Commercial Co-Op. Bank Ltd.</option>
                                                <option value="Kalyan Janata Sahakari Bank Ltd.">Kalyan Janata Sahakari Bank Ltd.</option>
                                                <option value="Karad Urban Co-operative Bank Ltd.">Karad Urban Co-operative Bank Ltd.</option>
                                                <option value="Madhavpura Mercantile Cooperative Bank Ltd.">Madhavpura Mercantile Cooperative Bank Ltd.</option>
                                                <option value="Mahanagar Co-operative Bank Ltd.">Mahanagar Co-operative Bank Ltd.</option>
                                                <option value="Mapusa Urban Co-operative Bank of Goa Ltd.">Mapusa Urban Co-operative Bank of Goa Ltd.</option>
                                                <option value="Mehsana Urban Co-Op Bank Ltd.">Mehsana Urban Co-Op Bank Ltd.</option>
                                                <option value="Nagar Urban Co-operative Bank Ltd.">Nagar Urban Co-operative Bank Ltd.</option>
                                                <option value="Nagpur Nagrik Sahakari Bank Ltd.">Nagpur Nagrik Sahakari Bank Ltd.</option>
                                                <option value="Nasik Merchant's Co-operative Bank Ltd.">Nasik Merchant's Co-operative Bank Ltd.</option>
                                                <option value="New India Co-operative Bank Ltd.">New India Co-operative Bank Ltd.</option>
                                                <option value="NKGSB Co-operative Bank Ltd.">NKGSB Co-operative Bank Ltd.</option>
                                                <option value="Nutan Nagarik Sahakari Bank Ltd.">Nutan Nagarik Sahakari Bank Ltd.</option>
                                                <option value="Pravara Sahakari Bank Ltd.">Pravara Sahakari Bank Ltd.</option>
                                                <option value="Punjab and Maharashtra Co-operative Bank Ltd.">Punjab and Maharashtra Co-operative Bank Ltd.</option>
                                                <option value="Rajkot Nagrik Sahakari Bank Ltd.">Rajkot Nagrik Sahakari Bank Ltd.</option>
                                                <option value="Rohtak Co-Operative Bank Ltd.">Rohtak Co-Operative Bank Ltd.</option>
                                                <option value="Rupee Co-operative Bank Ltd.">Rupee Co-operative Bank Ltd.</option>
                                                <option value="Sangli Urban Co-operative Bank Ltd.">Sangli Urban Co-operative Bank Ltd.</option>
                                                <option value="Saraswat Co-operative Bank Ltd.">Saraswat Co-operative Bank Ltd.</option>
                                                <option value="Sardar Bhiladwala Pardi Peoples Coop Bank Ltd.">Sardar Bhiladwala Pardi Peoples Coop Bank Ltd.</option>
                                                <option value="Shamrao Vithal Co-operative Bank Ltd.">Shamrao Vithal Co-operative Bank Ltd.</option>
                                                <option value="Shikshak Sahakari Bank Ltd.">Shikshak Sahakari Bank Ltd.</option>
                                                <option value="Solapur Janata Sahakari Bank Ltd.">Solapur Janata Sahakari Bank Ltd.</option>
                                                <option value="The Sonipat Urban Co-operative Bank Ltd.">The Sonipat Urban Co-operative Bank Ltd.</option>
                                                <option value="Surat Peoples Coop Bank Ltd.">Surat Peoples Coop Bank Ltd.</option>
                                                <option value="Thane Bharat Sahakari Bank Ltd.">Thane Bharat Sahakari Bank Ltd.</option>
                                                <option value="Thane Janata Sahakari Bank">Thane Janata Sahakari Bank</option>
                                                <option value="The Akola Janata Commercial Co-operative Bank Ltd.">The Akola Janata Commercial Co-operative Bank Ltd.</option>
                                                <option value="The Akola Urban Co-operative Bank Ltd.">The Akola Urban Co-operative Bank Ltd.</option>
                                                <option value="The Panipat Urban Co-operative Bank Ltd.">The Panipat Urban Co-operative Bank Ltd.</option>
                                                <option value="The Kapol Co-operative Bank Ltd.">The Kapol Co-operative Bank Ltd.</option>
                                                <option value="The Khamgaon Urban Co-operative Bank Ltd.">The Khamgaon Urban Co-operative Bank Ltd.</option>
                                                <option value="Vasavi Coop Urban Bank Limited.">Vasavi Coop Urban Bank Limited.</option>
                                                <option value="Vidyasagar cooperative bank limited, midnapore.">Vidyasagar cooperative bank limited, midnapore.</option>
                                                <option value="Zoroastrian Co-operative Bank Ltd.">Zoroastrian Co-operative Bank Ltd.</option>



                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="braname">Branch Name:</label>
                                            <input type="text" class="form-control" id="braname" name="braname" placeholder="Enter your Bank Branch" value>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="upinum">UPI Number:</label>
                                            <input type="text" class="form-control" id="upinum" name="upinum" placeholder="Enter your UPI Number" value>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="ifsc">IFSC Code:</label>
                                            <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="Enter your IFSC Code" value>
                                        </div>
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="design1">Designation:</label>
                                            <input type="text" class="form-control" id="design1" name="design1" placeholder="Enter your Designation" value>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="depart1">Department:</label>
                                            <input type="text" class="form-control" id="depart1" name="depart1"  placeholder="Enter your Department" value>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="msal">Monthly Salary:</label>
                                            <input type="text" class="form-control" id="msal" name="msal" placeholder="Enter your monthly salary" value>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="apack">Annual Package:</label>
                                            <input type="text" class="form-control" id="apack" name="apack" placeholder="Enter your annual package" value>
                                        </div>
                                    </div>
                                    
                                </div>

                               


                               
                                  </form>
                                  <br>

                                 <div class="form-row justify-content-center">
                                
                                    <div class="form-group col-md-5">
                                      <button class="btn btn-outline-primary"><a href="./addemp1.php">Previous</a></button><br>
                                    </div>
                                    <div class="form-group col-md-5">
                                     <button type="submit" name="submit" class="btn btn-outline-primary float-right"><a href="">Submit</a></button>
                                    </div>
                                </div>


                            </div>
    </div>
                        </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
           

    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
<script
      src="https://kit.fontawesome.com/deb4d1b812.js"
      crossorigin="anonymous"
    ></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>


    <script>
        $('.btn-outline-primary').hover(function() {
            $(this).find('a').css('color', 'white');
        }, function() {
            $(this).find('a').css('color', '');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add education details
            $(document).on("click", ".add-Exp", function() {
                var html = `<div id="workExp1">
                                    <div class="row justify-content-center">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="cname">Company Name:</label>
                                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter your Company Name" value>
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="depart">Department:</label>
                                            <input type="text" class="form-control" id="depart" name="depart" placeholder="Enter your Department" value>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="design">Designation:</label>
                                            <select id="design" name="design" class="form-control">
                                            <option>Select</option>
                                            <option>NA</option>
                                            <option>Branch Manager</option>
                                            <option>Custom Manager</option>
                                            <option>Operation Manager</option>
                                            <option>Admin Manager</option>
                                            <option>Sales Manager</option>
                                            <option>Relationship Manager</option>
                                            <option>HR Manager</option>
                                            <option>Receptionist</option>
                                            <option>Guard</option>
                                            <option>Support Staff</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exp">Experience:</label>
                                            <select id="exp" name="exp" class="form-control">
                                            <option>Select</option>
                                            <option>No Experience</option>
                                            <option>0-2 Years</option>
                                            <option>2-4 Years</option>
                                            <option>4-6 Years</option>
                                            <option>6-8 Years</option>
                                            <option>8-10 Years</option>
                                            <option>10+ Years</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="pack">Package:</label>
                                            <input type="text" class="form-control" name="pack" id="pack" placeholder="Enter your Salary Package" value>
                                        </div>
                                        </div>
                                        <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="hsal">Take Home Salary:</label>
                                            <input type="text" class="form-control" name="hsal" id="hsal" placeholder="Enter your Salary" value>
                                        </div>
                                        </div>
                                    </div>
                                    

                                    <div class="form-row justify-content-center">
                                
                                    <div class="form-group col-md-5">
                                        
                                    </div>

                                    <div class="form-group col-md-5">
                                        <button  class="btn btn-outline-primary btn-sm float-right remove-Exp" type="button">Remove</button> 
                                        <button  class="btn btn-outline-primary btn-sm float-right add-Exp" type="button">&nbsp; &nbsp;  Add &nbsp; &nbsp;  </button>
                                    </div>

                                    </div>


                                    </div>`
                            $("#workExp").append(html);
            });

            // Remove education details
            $(document).on("click", ".remove-Exp", function() {
                $(this).closest("#workExp1").remove();
            });
        });
        
    </script>

</body>

</html>
<!-- end document-->
