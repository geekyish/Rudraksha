
<?php


if(isset($_POST["submit"])){
  $first_name=$_POST["first_name"];
  $middle_name=$_POST["middle_name"];
  $last_name=$_POST["last_name"];
  $dob=$_POST["dob"];
  $age=$_POST["age"];
  $gender=$_POST["gender"];
  $email=$_POST["email"];
  $father_name=$_POST["father_name"];
  $mother_name=$_POST["mother_name"];
  $contact=$_POST["contact"];
  $address1=$_POST["address1"];
  $address2=$_POST["address2"];
  $city=$_POST["city"];
  $pincode=$_POST["pincode"];
  $state=$_POST["state"];
  $education=$_POST["education"];
  $stream=$_POST["stream"];
  $degree=$_POST["degree"];
  $board_name=$_POST["board_name"];
  $college_name=$_POST["college_name"];
  $uni_name=$_POST["uni_name"];
  $current_company=$_POST["current_company"];
  $designation=$_POST["designation"];
  $experience=$_POST["experience"];
  $vaccination=$_POST["vaccination"];
  $remarks=$_POST["remarks"];
  $resume=$_POST["resume"];


  

  

  $conn= mysqli_connect("localhost", "root", "", "rudra_675");
  $query="INSERT INTO recruitments VALUES('', NOW(), '$first_name', '$middle_name', '$last_name', '$dob', '$age', '$gender', '$email', '$father_name', '$mother_name', '$contact', '$address1', '$address2', '$city', '$pincode', '$state', '$education', '$stream', '$degree', '$board_name', '$college_name', '$uni_name', '$current_company', '$designation', '$experience', '$vaccination','$remarks', '$resume')";
  mysqli_query($conn, $query);


}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rudraksha Welfare Foundation</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,400;0,500;1,300&family=Lora:ital,wght@0,500;0,600;1,400;1,600&family=Roboto:wght@500&family=Urbanist:wght@200;300;400;500;600&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  </head>
  <body>
    <header>
      <section class="section-1">
        <img src="./Images/Website Header Strip.png" alt="" style="align-items: center; width: 100%;">
        
      </section>
      <img src="./Images/vision statement .jpg" alt="" class="img-fluid"> 

      <nav
        class="navbar navbar-expand-sm navbar-dark bg-dark mb-0"
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"            
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <div class="ps-3">
                <li class="nav-item">
                  <a class="nav-link"      
                    href="index.html"
                    style="
                      margin-left: 7px;
                      font-family: 'Open Sans', sans-serif;
                      color: white;
                    ">Home</a>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a class="nav-link"
                    href="agenda.html"                                       
                    style="
                    margin-left: 7px;
                      font-family: 'Open Sans', sans-serif;                     
                      color: white;"
                    >Agenda</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="aboutus.html"                   
                    style="
                      font-family: 'Open Sans', sans-serif;
                      margin-left: 7px;
                      color: white;
                    "
                    >About Us</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"                    
                    href="vision.html"                   
                    style="
                      font-family: 'Open Sans', sans-serif;
                      color: white;
                      margin-left: 7px;
                    "
                    >Vision</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"                   
                    href="corevalues.html"                    
                    style="
                      font-family: 'Open Sans', sans-serif;                      
                      color: white;
                      margin-left: 7px;
                    "
                    >Core Values</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="mission.html"              
                    style="
                      font-family: 'Open Sans', sans-serif;
                      color: white;
                      margin-left: 7px;
                    "
                    >Mission</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"                   
                    data-bs-toggle="dropdown"
                    role="button"                   
                    aria-expanded="false"
                    style="                      
                      font-family: 'Open Sans', sans-serif;  
                      color: white;
                      margin-left: 7px;
                      "
                      
                  >
                    Projects
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="pr1.html">1. Art, Literature, Culture & Religion</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr2.html">2. Blood Donation</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr3.html">3. Drug De-Addiction</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr4.html">4. Environment Armour</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr5.html">5. Gender Justice</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr6.html">6. Gracious Justice</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr7.html">7. Human Rights</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr8.html"
                        >8. Old Age, Orphanage & Blind Home</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr9.html"
                        >9. Sports Training Support</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr10.html"
                        >10. True Eternal Warriors</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr11.html"
                        >11. Training & Skill Enhancement</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr12.html"
                        >12. True Wisdom Devotees</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr13.html"
                        >13. Vigour and Vitality</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr14.html"
                        >14. Voiceless Souls Protectin</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr15.html"
                        >15. Women Empowerment</a
                      >
                    </li>
                  </ul>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"                   
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="
                      
                      font-family: 'Open Sans', sans-serif;
                      margin-left: 7px;
                      color: white;
                    "
                  >
                  Organogram
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="orniogram.html">Organogram</a></li>
                    <li><a class="dropdown-item" href="management.html">Management</a></li>
                    <li>
                      <a class="dropdown-item" href="codeofconduct.html">Code of Conduct</a>
                    </li>
                  </ul>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="
                     
                      font-family: 'Open Sans', sans-serif;
                      margin-left: 7px;
                      color: white;
                    "
                  >
                    Career
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="recruitment.html">Recruitments</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Interview form</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Joining form</a></li>
                  </ul>
                </li>
              </div>
              
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="refundpolicy.html"                                      
                    style="
                      font-family: 'Open Sans', sans-serif;
                      margin-left: 7px;
                      color: white;
                      
                    "
                    >Refund Policy</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="crm.php"                                      
                    style="
                    margin-left: 7px;
                      font-family: 'Open Sans', sans-serif;                     
                      color: white;
                    "
                    >CRM</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="faq.html"                   
                    style="
                    margin-left: 7px;
                      font-family: 'Open Sans', sans-serif;                     
                      color: white;
                    "
                    >FAQ</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"                  
                    href="#"                   
                    style="
                    margin-left: 7px;
                      font-family: 'Open Sans', sans-serif;                                          
                      color: white;
                    "
                    >Contact Us</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="
                      font-family: 'Open Sans', sans-serif;
                      margin-left: 7px;
                      color: white;
                    "
                  >
                    Survey
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="surveyform.php">Survey Form</a></li>
                    <li>
                      <a class="dropdown-item" href="feedback.php">Feedback form</a>
                    </li>
                    
                  </ul>
                </li>
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </header>

      <div class="recheader">
        <img src="./Images/Rec.jpg" alt="">
      </div>
<div class="recmain container">
  <div class="recdiv1heading">
    <h4 class="perhead">Personal Information</h4>
    <hr>
  </div>
  <form method="POST">
    <div class="recdiv1">
      <div>
        <label for="FirstName">First Name</label>
        <input type="text" required class="form-control" name="first_name" id="FirstName" placeholder="Enter your First name" value>
      </div>
      <div>
        <label for="MiddleName">Middle Name</label>
        <input type="text" class="form-control" name="middle_name" id="MiddleName" placeholder="Enter your Middle name" value>
      </div>
      <div>
        <label for="LastName">Last Name</label>
        <input type="text" class="form-control" name="last_name" id="LastName" placeholder="Enter your Last name" value>
      </div>
      <div>
        <label for="dob">Date Of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter your Date Of Birth" value>
      </div>
      <div>
        <label for="age">Age</label>
        <input type="text" class="form-control" readonly id="age" onmousemove="FindAge()" name="age" placeholder="Your Age" value>
      </div>
   
    <div>
      <label for="gender">Gender</label>
      <select name="gender" id="gender" class="form-control">
        <option>Select</option>
        <option>Male</option>
        <option>Female</option>
        <option>Transgender</option>
      </select>
    </div>
    </div>

<div class="recdiv1heading">
  <h4>Contact</h4>
  <hr>
</div>
<div class="recdiv2">
  <div>
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" value>
  </div>
  <div>
    <label for="FatherName">Father's Name</label>
    <input type="text" class="form-control" name="father_name" id="FatherName" placeholder="Enter your Father's Name" value>
  </div>
  <div>
    <label for="MotherName">Mother's Name</label>
    <input type="text" class="form-control" name="mother_name" id="MotherName" placeholder="Enter your Mother's Name" value>
  </div>
</div>
<div class="recdiv3">
  <div>
    <label for="phone">Contact No.</label>
    <input type="text" class="form-control" name="contact" id="phone" placeholder="Enter your Contact No." value>
  </div>
  <div>
    <label for="address1">Address Line 1</label>
    <input type="text" class="form-control" name="address1" id="address1" placeholder="Enter your Address Line 1" value>
  </div>
  <div>
    <label for="address2">Address Line 2</label>
    <input type="text" class="form-control" name="address2" id="address2" placeholder="Enter your Address Line 2" value>
  </div>
</div>
<div class="recdiv4">
  <div>
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Enter your City" value>
  </div>
  <div>
    <label for="pincode">Pincode</label>
    <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter your Pincode" value>
  </div>
  <div>
    <label for="state">State</label>
    <input type="text" class="form-control" name="state" id="state" placeholder="Enter your State" value>
  </div>
</div>
<div class="recdiv1heading">
  <h4>Qualifications</h4>
  <hr>
</div>

<div class="recdiv5">
  <div>
    <label for="education">Education</label>
    <select id="education" name="education" required class="form-control">
      <option>Select</option>
      <option>Secondary</option>
      <option>Higher Secondary</option>
      <option>Under-Graduate</option>
      <option>Graduate</option>
      <option>Post-Graduate</option>
    </select>
  </div>
  <div>
    <label for="stream">Stream</label>
      <select id="stream" name="stream" required class="form-control" style="display: inline;">
        <option>Select</option>
      <option>Science</option>
      <option>Commerce</option>
      <option>Arts</option>
      </select>
      </div>
      <div>
      <label for="degree">Degree</label>
      <select id="degree" name="degree" required class="form-control" style="display: inline;">
        <option>Select</option>
        <option>NA</option>
      <option>BE/BTech</option>
      <option>BCom</option>
      <option>Bsc</option>
      <option>BA</option>
      <option>LAW</option>
      <option>BBA</option>
      <option>BCA</option>
      </select>
  </div>
</div>
<div class="recdiv6">
  <div>
    <label for="board">Board Name</label>
    <select id="board" name="board_name" required class="form-control">
      <option>Select</option>
      <option>State Boards</option>
      <option>Central Board of Secondary Education (CBSE)</option>
      <option>Indian Certificate of Secondary Education (ICSE)</option>
      <option>Council for the Indian School Certificate Examination (CISCE)</option>
      <option>National Institute of Open Schooling (NIOS)</option>
      <option>International Baccalaureate (IB)</option>
      <option>Cambridge International Examinations (CIE)</option>
    </select>
  </div>
  <div>
    <label for="collegename">College Name</label>
    <input type="text" class="form-control" name="college_name" id="collegename" placeholder="Enter your College Name" value>
  </div>
  <div>
    <label for="uniname">University Name</label>
    <input type="text" class="form-control" name="uni_name" id="uniname" placeholder="Enter your University Name" value>
  </div>
</div>
<div class="recdiv1heading">
  <h4>Work Experience</h4>
  <hr>
</div>
<div class="recdiv7">
  <div>
    <label for="currentcompany">Current Company</label>
    <input type="text" class="form-control" name="current_company" id="currentcompany" placeholder="Enter your Current Company" value>
  </div>
  <div>
    <label for="designation">Designation</label>
    <select id="designation" name="designation" required class="form-control" style="display: inline;">
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
<div>
  <label for="experience">Experience</label>
    <select id="experience" name="experience" required class="form-control" style="display: inline;">
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
<div class="recdiv8">
  <div>
    <label for="vaccination">Vaccination</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="vaccination" id="inlineRadio1">
      <label class="form-check-label" for="inlineRadio1">
        Yes
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="vaccination" id="inlineRadio1">
      <label class="form-check-label" for="inlineRadio1">
        No
      </label>
    </div>
    
  </div>
  <div>
    <label for="remarks">Remarks</label>
    <input type="text" required class="form-control" name="remarks" id="remarks" placeholder="Enter your Remarks"value>
  </div>

<div class="resumefile">
  <label for="resume">Resume</label>
  <input type="file" name="resume" required value>
</div>
</div>
    
    <div class="recdiv9">
      <button type="submit" name="submit" value="submit" class="btn btn-outline-info">Submit Data</button>
    </div>
  </form>
</div>
<footer class="padding_4x">
  <div class="flex">
    <section class="flex-content padding_1x">
      <h3>About the company</h3>
      <div class="about-company">
        <p>A Section 8 Company (Non Profit Organization) under Companies Act 2013, Ministry of Corporate Affairs, Govt. of INDIA.</p>
      <p>GSTIN 04AAJCR5020K1ZH</p>
      </div>
    </section>
    <section class="flex-content padding_1x">
      <h3>Quick Links</h3>
      <a href="#">Privacy Policy</a>
      <a href="#">Copyright Policy</a>
      <a href="#">Cookie Policy</a>
    </section>
    <section class="flex-content padding_1x">
      <h3>Let's Connect</h3>
      <a href="#">Our Mission</a>
      <a href="#">About Us</a>
      <a href="#">Blogs and newsletters</a>
      
    </section>
    <section class="flex-content padding_1x">
      <h3>Follow Us</h3>
      <div class="links">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        
        
      </div>
      
    </section>
    
  </div>
  <div class="flex">
    <section class="flex-content padding_1x">
      <p>Copyright ©2023 All rights reserved</p>
    </section>
  </div>
</footer>











<script>
  function FindAge(){
    var day=document.getElementById("dob").value;
    var DOB=new Date(day);
    var today=new Date();
    var Age=today.getTime()-DOB.getTime();
    Age=Math.floor(Age/(1000*60*60*24*365.25));
    document.getElementById("age").value=Age;
    
}
</script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
      <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/deb4d1b812.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

  </body>
  </html>