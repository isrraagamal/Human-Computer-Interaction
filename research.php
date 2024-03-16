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

        main #researchPage {
            margin-top: -20px;
        }

        main .research-img {
            height: 70vh;
            background-image: url(./images/research-hortizontal.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }
        main .research-img h1{
            position: absolute;
            top: 80%;
            left: 5%;
            font-weight: bold;
            font-size: 50px;
        }

        main #research-news p {
            font-size: 15px;
            padding: 10px 0px;
        }

        main #research-news a {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        main #research-news a:hover {
            text-decoration: underline;
        }

        main #research-news img {
            width: 100%;
            cursor: pointer;
        }
        main #resources .col-6 {
            padding: 10px;
        }

        main #resources .col-6 p {
            font-size: 18px;
            font-weight: 400;
        }

        main #resources .col-6 p:hover {
            text-decoration: underline;
        }

        main #resources .col-6 .dateTime {
            font-size: 14px;
            font-weight: 100;
            text-decoration: none;
        }

        main #resources .col-6 .dateTime:hover {
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
        <section id="researchPage">

            <div class="row">
                <div class="d-flex text-center justify-content-center align-items-center">

                    <div class="col-12 research-img">
                        <h1 class="text-monospace">RESEARCH</h1>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="paragraph">
            <div class="container">
                <div class="row text-center justify-content-center align-items-center">
                    <h2>INNOVATION AND IMAGINATION</h2>
                    <p class="my-2">UNI's Office of Research and Creative Scholarship supports research-driven student
                        success through fostering an environment where research, scholarly activities, entrepreneurship
                        and economic development thrive.</p>
                </div>
            </div>
        </section>


        <section id="research-news">
            <div class="container">
                <div class="row">
                    <h2 class="text-left">NEWS</h2>
                    <hr>
                </div>
                <div class="row text-left">
                    <div class="col-4">
                        <img src="./images/science_web.jpg" alt="" />
                        <p><a href="#">UNI Students Awarded Prestigious STEM Fellowships</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/rural_mt_web.jpg" alt="" />
                        <p><a href="#">New Research Office to Boost Montana Rural Health</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/research_web.jpg" alt="" />
                        <p><a href="#"> UNI Earns $2.5M Grant as National Leader for Promoting STEM Diversity</a></p>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col-4">
                        <img src="./images/student_in_lab_web.jpg" alt="" />
                        <p><a href="#">Continued Growth Shatters UM Record for Research Activity</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/lake_web.jpg" alt="" />
                        <p><a href="#">Bio Station Study Finds Microplastic Pollution in Flathead Lake</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/code_school_web.jpg" alt="" />
                        <p><a href="#">UNI Offers Coding Boot Camp to Learners Statewide</a></p>
                    </div>
                </div>
            </div>
        </section>


        <section id="resources">
            <div class="container text-left">
                <div class="row">
                    <h2>RESEARCH RESOURCES</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Business and Industry</p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <p>Research Support</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>
                            Faculty Research Incentive Program</p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <p>
                            Office of Sponsored Programs</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Undergraduate Research</p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <p>UNI Centers and Institutes</p>
                        <hr>
                    </div>
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