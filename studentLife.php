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
    <title>Research</title>
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
            font-size: 130px;
        }

        footer i {
            font-size: 40px;
            padding: 5px 8px;
            cursor: pointer;
        }

        main section {
            margin: 60px 0;
        }

        main #studentPage {
            margin-top: -20px;
        }

        main .student-img {
            height: 70vh;
            background-image: url(./images/student.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }
        main .student-img h1{
            position: absolute;
            top: 80%;
            left: 5%;
            font-weight: bold;
            font-size: 50px;
        }

        main #student-news p {
            font-size: 15px;
            padding: 10px 0px;
        }

        main #student-news a {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        main #student-news a:hover {
            text-decoration: underline;
        }

        main #student-news img {
            width: 100%;
            height: 250px;
            cursor: pointer;
        }
        main #student .col-6 {
            padding: 10px;
        }

        main #student .col-6 p {
            font-size: 18px;
            font-weight: 400;
        }

        main  #student.col-6 p:hover {
            text-decoration: underline;
        }

        main #student .col-6 .dateTime {
            font-size: 14px;
            font-weight: 100;
            text-decoration: none;
        }

        main #student .col-6 .dateTime:hover {
            text-decoration: none;
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

<body>
    <header>
        <div class="container">
            <div class="row pt-3">
                <div class="col-12 d-flex">
                    <div class="col-7 d-flex">
                        <i class="col-2 fa-brands fa-uniregistry logo-img"></i>
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
        <section id="studentPage">

            <div class="row">
                <div class="d-flex text-center justify-content-center align-items-center">

                    <div class="col-12 student-img">
                        <h1 class="text-monospace">STUDENT LIFE</h1>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="paragraph">
            <div class="container">
                <div class="row text-center justify-content-center align-items-center">
                    <h2>NEVER A DULL MOMENT.</h2>
                    <p class="my-2">There are only so many hours in the day, and with countless groups to join, sports to play and performances to take in, you’ll have no problem filling them. And that’s just on campus. Missoula makes a lot of “best town” lists and for good reason. Take it all in as a Grizzly. </p>
                </div>
            </div>
        </section>


        <section id="student-news">
            <div class="container">
                <div class="row">
                    <h2 class="text-left">UNIVERSITY CENTER</h2>
                    <hr>
                </div>
                <div class="row text-left">
                    <div class="col-4">
                        <img src="./images/1.png" alt="" />
                        <p><a href="#">Residence Halls</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/2.png" alt="" />
                        <p><a href="#">Hospitals and Clinics</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/3.png" alt="" />
                        <p><a href="#"> University Villages</a></p>
                    </div>
                </div>
            </div>
        </section>


        <section id="student">
            <div class="container text-left">
                <div class="row">
                    <h2>UNIVERSITY HOUSING</h2>
                    <hr>
                    <p>Our housing options create a living environment that fosters a sense of community and nurtures your educational experiences and personal development. We offer eight on-campus residence halls, apartment-style living in Lewis and Clark Village, and family housing in the University Villages. Welcome home.</p>
                </div>

                <div class="row mt-5">
                    <h2>HEALTH AND WELL-BEING</h2>
                    <hr>
                    <p>Your overall well-being is at the heart of everything we do at the Curry Health Center. We provide high-quality and affordable medical, dental, counseling and wellness services. Additional services include an on-campus pharmacy and X-ray services. Seeing a health professional as a UM student is easy and convenient. 
                    </p>
                </div>

                <div class="row mt-5">
                    <h2>CAMPUS DINING</h2>
                    <hr>
                    <p>Every student wants to know if a college has good grub. At UM, the answer is a resounding “yes”! UM's Campus Dining is recognized for our award-winning team of chefs, sustainability programs and special dining events.  </p>
                </div>
               </div>
               </section>
    </main>





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