<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Apply Now</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #70002e;
            color: #ffffff;
        }

        header ul {
            text-align: center;
            justify-content: space-between;
            align-items: center;
        }

        header ul li {
            display: inline-block;
            margin: 0 50px;
            padding: 5px 8px;
            list-style: none;
            position: relative;
        }

        header ul li a {
            font-size: 16px;
            color: white;
            text-decoration: none;
        }

        header ul li a:hover {
            color: white;
            text-decoration: none;
        }

         header ul li a::after {
            content: '';
            position: absolute;
            bottom: 0px;
            left: 0px;
            height: 2px;
            width: 0%;
            background-color: #ffffff;
            transition: width 0.5s;
        }

        header ul li a:hover::after {
            width: 100%;
        } 

        header i {
            font-size: 30px;
        }

        footer {
            margin-top: 70px;
        }

        footer .row {
            padding: 10px 50px;
        }

        footer .col-4:nth-child(2) {
            border-left: 1px solid gray;
            border-right: 1px solid gray;
        }

        footer ul li {
            list-style: none;
            font-size: 14px;
            cursor: pointer;
        }

        footer ul li:hover {
            text-decoration: underline;
        }

        footer .logo {
            font-size: 100px;
        }

        footer i {
            font-size: 40px;
            padding: 5px 8px;
            cursor: pointer;
        }

        main section {
            margin: 60px 0;
        }

        main #applyPage {
            margin-top: -20px;
        }

        main .apply-img {
            height: 70vh;
            background-image: url(./images/students-oval.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        main .apply-img h1 {
            position: absolute;
            top: 80%;
            left: 5%;
            font-weight: bold;
            font-size: 50px;
        }

        .apply-btn {
            color: #70002e;;
            background-color: #ffffff;
            width: 100px;
        }

        .apply-btn:hover {
            background-color: #91023d;
            color: white;
        }

        #apply-section {
            margin: 60px 0;
        }
        .logo-img{
           font-size: 40px;
           color: #ffffff;
        }
        .btn-home{
            background-color: #ffffff;
            color: #70002e;
            width: 100px;
            text-align: center;
        }
        .btn-home a{
            text-decoration: none;
            color: #70002e;
        }
        .btn-home a:hover{
            color: #ffffff;
        }
        .btn-home:hover{
            background-color: #91023d;
            color: #ffffff;
        }
        .app-btn{
            padding: 10px;
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #8B273B;
            color: #ffffff;
        }
        .app-btn:hover{
            background-color: #af324b;
            color: #ffffff;
        }
        .app-btn a{
            color: #ffffff;
            text-decoration: none;
        }
        .app-btn i{
            color: #ffffff;
            font-size: 18px;
        }
    </style>
</head>
<?php
require("configuration.php");
require("student.php");


if ($_POST && isset($_POST['apply'])) {
    $apply = new student($pdo);
 
   $apply = $apply->apply($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['city'], $_POST['state'], $_POST['zip'], $_POST['degree'], $_POST['year'], $_POST['month'], $_POST['day']);
    if ($apply === true) {
        echo 'Your Application is sent successfully';
        $_POST['firstName'] = null;
        $_POST['lastName'] = null;
        $_POST['email'] = null;
        $_POST['city'] = null; 
        $_POST['state'] = null;
        $_POST['zip'] = null;
        $_POST['degree'] = null;
        $_POST['year'] = null; 
        $_POST['month'] = null;
        $_POST['day'] = null;
        exit;

    } 
     else {
         echo 'An error occurred while Applying.';
     }
}

?>


<body>
    <header>
        <div class="container">
            <div class="row pt-3">
                <div class="col-12 d-flex">
                    <div class="col-7 d-flex">
                        <i class="col-2 fa-brands fa-uniregistry logo-img"><a href="./index.html"></a></i>
                        <button class="col-2 btn btn-home"><a href="./index.php">UNI</a></button>
                        <button class="col-2 btn btn-home ml-3"><a href="./apply.php">APPLY</a></button>
                        </div>
                    <div class="col-5 text-right d-flex">
                        <div class="input-group d-flex">
                            <input type="search" class="form-control rounded" placeholder="Search"
                                aria-label="Search" aria-describedby="search-addon" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <ul class="d-flex p-3 unorederd-list">
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./academics.php">Academics</a></li>
                    <li><a href="./studentLife.php">Student Life</a></li>
                    <li><a href="./research.php">Research</a></li>
                    <li><a href="./contact.php">contact us</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <section id="applyPage">

            <div class="row">
                <div class="d-flex text-center justify-content-center align-items-center">

                    <div class="col-12 apply-img">
                        <h1 class="text-monospace">APPLY NOW</h1>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="paragraph">
            <div class="container">
                <div class="row text-center justify-content-center align-items-center">
                    <h2>START OR RESUME YOUR APPLICATION</h2>
                    <p class="my-2">We are delighted you’re considering applying to the University.<br> Please complete
                        the form that aligns with your enrollment goals. </p>
                </div>
            </div>
        </section>

        <section id="apply-section">
            <div class="container">
                <div class="row">
                    <h2 class="text-left">APPLY NOW</h2>
                    <hr>
                    <div class="col-8 text-center justify-content-center align-items-center">
                    <form method="post" class="needs-validation text-left" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="vfirstName">First name</label>
                                
                                <?php if(isset($apply) && $apply === false): ?>
                                    <h6 class="mt-1 text-danger text-left">Please Enter your First Name</h6>
                                    <input type="text" class="form-control" id="firstName" name="firstName" value="" required>
                            <?php else: ?>
                                <input type="text" class="form-control" id="firstName" name="firstName" value="" required>
                            <?php endif; ?>
                              
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <?php if(isset($apply) && $apply === false): ?>
                                    <h6 class="mt-1 text-danger text-left">Please Enter your Last Name</h6>
                                    <input type="text" class="form-control" id="lastName" name="lastName" value="" required>
                            <?php else: ?>
                                <input type="text" class="form-control" id="lastName" name="lastName" value="" required>
                            <?php endif; ?>                              
                              
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="" required>     
                            </div>
                        </div>
                        <div class="form-row">
                             <div class="col-md-4 mb-3">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State</label>
                                <select class="custom-select" id="state" name="state" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="EGY"> Egypt </option>
                                    <option value="SAUDIA"> Suadia Arabia </option>
                                    <option value="SUDAN"> Sudan </option>
                                    <option value="Qatar"> Qatar </option>
                                    <option value="US"> US </option>
                                    <option value="SWITHLAND"> Swithland </option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" name="zip" required>
                            </div> 
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="degree">Select Your Degree</label>
                                <select class="custom-select" id="degree" name="degree" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Computer Science"> Computer Science </option>
                                    <option value="Business"> Buisness </option>
                                    <option value="Health"> Health </option>
                                    <option value="Graduate School"> Graduate School </option>
                                    <option value="Missoula College"> Missoula College </option>
                                    <option value="Pre-Professional"> Pre-Professional </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            
                            <div class="col-md-4 mb-3">
                                <label for="year">Year</label>
                                <select class="custom-select" id="year" name="year" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="2000"> 2000 </option>
                                    <option value="2001"> 2001 </option>
                                    <option value="2002"> 2002 </option>
                                    <option value="2003"> 2003 </option>
                                    <option value="2004"> 2004 </option>
                                    <option value="2005"> 2005 </option>
                                    <option value="2006"> 2006 </option>
                                    <option value="2007"> 2007 </option>
                                    <option value="2008"> 2008 </option>
                                    <option value="2009"> 2009 </option>
                                    <option value="2010"> 2010 </option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="month">Month</label>
                                <select class="custom-select" id="month" name="month" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="01"> JANUEARY </option>
                                    <option value="02"> FEBRUARY </option>
                                    <option value="03"> MARCH </option>
                                    <option value="04"> APRIL </option>
                                    <option value="05"> MAY </option>
                                    <option value="06"> JUNE </option>
                                    <option value="07"> JULY </option>
                                    <option value="08"> AUGUEST </option>
                                    <option value="09"> SEPTEMBER </option>
                                    <option value="10"> OCTOBER </option>
                                    <option value="11"> NOVEMBER </option>
                                    <option value="12"> DECEMBER </option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="day">Day</label>
                                <select class="custom-select" id="day" name="day" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="01"> 01 </option>
                                    <option value="02"> 02 </option>
                                    <option value="03"> 03 </option>
                                    <option value="04"> 04 </option>
                                    <option value="05"> 05 </option>
                                    <option value="06"> 06 </option>
                                    <option value="07"> 07 </option>
                                    <option value="08"> 08 </option>
                                    <option value="09"> 09 </option>
                                    <option value="10"> 10 </option>
                                    <option value="11"> 11 </option>
                                    <option value="12"> 12 </option>
                                    <option value="13"> 13 </option>
                                    <option value="14"> 14 </option>
                                    <option value="15"> 15 </option>
                                    <option value="16"> 16 </option>
                                    <option value="17"> 17 </option>
                                    <option value="18"> 18 </option>
                                    <option value="19"> 19 </option>
                                    <option value="20"> 20 </option>
                                    <option value="21"> 21 </option>
                                    <option value="22"> 22 </option>
                                    <option value="23"> 23 </option>
                                    <option value="24"> 24 </option>
                                    <option value="25"> 25 </option>
                                    <option value="26"> 26 </option>
                                    <option value="27"> 27 </option>
                                    <option value="28"> 28 </option>
                                    <option value="29"> 29 </option>
                                    <option value="30"> 30 </option>
                                    <option value="31"> 31 </option>
                                </select>
                            </div>
                        </div>
                        <button name="apply" class="btn apply-btn" type="submit">APPLY</button>
                    </form>
                    </div>

                </div>
            </div>
        </section>
        <footer>
             <button class="btn app-btn"><a href="apply.php"><i class="fa-regular fa-message"></i> APPLY NOW</a></button>
            <div class="container text-left"> 
                <div class="row">
                    <div class="col-4">
                        <i class="fa-brands fa-uniregistry logo"></i>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li>University Operator</li>
                            <li>406-243-0211</li>
                            <br>
                            <li>Contact Us</li>
                            <br>
                            <li>32 Campus Drive</li>
                            <li>CAIRO, MT 121212</li>
                        </ul>
                    </div>
                    <div class="col-4 mt-5 px-4">
                        <i class="fa-brands fa-square-facebook"></i>
                        <i class="fa-brands fa-square-twitter"></i>
                        <i class="fa-brands fa-square-whatsapp"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                    </div>
                </div>
                <div class="row text-center py-4">
                    <p>© 2023 University.</p>
                </div>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/6700b6d260.js" crossorigin="anonymous"></script>



</body>

</html>
