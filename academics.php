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

        footer ul li,
        main #academic ul li {
            list-style: none;
            font-size: 14px;
            cursor: pointer;
        }

        footer ul li:hover,
        main #academic ul li:hover {
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
            margin: 70px 0;
        }

        main #academic ul li a {
            color: #ffffff;
            font-size: 16px;
            text-decoration: none;
            cursor: pointer;
            line-height: 30px;
        }

        main #academic ul h5 {
            color: #d685a7;
        }

        main .academic-img {
            height: 70vh;
            background-image: url(./images/academics-classroom.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        main .academic-img h1 {
            position: absolute;
            top: 80%;
            left: 5%;
            font-weight: bold;
            font-size: 50px;
        }

        #academicPage {
            margin-top: -20px;
        }

        #academic {
            background-color: #91023d;
            padding: 50px 0;
        }

        .logo-img {
            font-size: 40px;
            color: #ffffff;
        }

        .btn-home {
            background-color: #ffffff;
            color: #70002e;
            width: 100px;
            text-align: center;
        }

        .btn-home a {
            text-decoration: none;
            color: #70002e;
        }

        .btn-home a:hover {
            color: #ffffff;
        }

        .btn-home:hover {
            background-color: #91023d;
            color: #ffffff;
        }

        .app-btn {
            padding: 10px;
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #8B273B;
            color: #ffffff;
        }

        .app-btn:hover {
            background-color: #af324b;
            color: #ffffff;
        }

        .app-btn a {
            color: #ffffff;
            text-decoration: none;
        }

        .app-btn i {
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
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
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
        <section id="academicPage">

            <div class="row">
                <div class="d-flex text-center justify-content-center align-items-center">

                    <div class="col-12 academic-img">
                        <h1 class="text-monospace">ACADEMICS</h1>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="paragraph">
            <div class="container">
                <div class="row text-center justify-content-center align-items-center">
                    <h2>WHAT'S MADE IN UNIVERSITY IS REMAKING THE WORLD.</h2>
                    <p class="my-2">At the University, our mission is simple. It is to provide a flagship education
                        that’s as all-encompassing and awe-inspiring as the Treasure State itself. To be a university
                        that’s both accessible and accountable — respected around the world, resourceful in our
                        stewardship of the land that sustains us, and responsive here at home to all of UNI’s
                        communities and Indigenous cultures.</p>
                </div>
            </div>
        </section>


        <section id="academic">
            <div class="container">
                <div class="row d-flex text-center justify-content-around align-items-center">
                    <div class=" col-12 justify-content-center align-items-center">
                        <div class="row d-flex text-center justify-content-around align-items-center">
                            <div class="col-8 text-center">
                                <h2>What do you want to study?</h2>
                                <p>The University offers a wide array of courses, degrees, minors and majors to help you
                                    fulfill
                                    your academic goals.</p>
                            </div>
                            <div class="col-8">
                                <div class="input-group d-flex">
                                    <input id="myInput" onkeyup="search()" type="search"
                                        class="form-control rounded"
                                        placeholder="Search Degrees and Programs" aria-label="Search"
                                        aria-describedby="search-addon" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 d-flex text-center justify-content-around align-items-center">
                            <div class="col-10 d-flex">
                                <div class="col-4">
                                    <ul>
                                        <h5>COMPUTER SECIENCE</h5>
                                        <li><a href="./program.php">Information Technology</a></li>
                                        <li><a href="./program.php">Information System</a></li>
                                        <li><a href="./program.php">Multi-Media</a></li>
                                        <li><a href="./program.php">Artifitial Intelligence</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul>
                                        <h5>BUSINESS</h5>
                                        <li><a href="./program.php">Accounting</a></li>
                                        <li><a href="./program.php">Accounting Information Systems</a></li>
                                        <li><a href="./program.php">Big Data Analytics</a></li>
                                        <li><a href="./program.php">Business Administration</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul>
                                        <h5>Health</h5>
                                        <li><a href="./program.php">Global Health</a></li>
                                        <li><a href="./program.php">Health Behavior Coaching</a></li>
                                        <li><a href="./program.php">Integrative Physiology</a></li>
                                        <li><a href="./program.php">Medicinal Chemistry</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row my-4 d-flex text-center justify-content-around align-items-center">
                            <div class="col-10 d-flex">
                                <div class="col-4">
                                    <ul>
                                        <h5>Graduate School</h5>
                                        <li><a href="./program.php">English</a></li>
                                        <li><a href="./program.php">History</a></li>
                                        <li><a href="./program.php">Sociology</a></li>
                                        <li><a href="./program.php">Creative Writing</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul>
                                        <h5>Missoula College</h5>
                                        <li><a href="./program.php">Computer Support</a></li>
                                        <li><a href="./program.php">Applied Science</a></li>
                                        <li><a href="./program.php">Cybersecurity</a></li>
                                        <li><a href="./program.php">Management</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul>
                                        <h5>Pre-Professional</h5>
                                        <li><a href="./program.php">Pre-Law</a></li>
                                        <li><a href="./program.php">Pre-Medical Sciences</a></li>
                                        <li><a href="./program.php">Pre-Engineering</a></li>
                                        <li><a href="./program.php">Pre-Pharmacy</a></li>
                                    </ul>
                                </div>
                            </div>
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
    <script>
        function search() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementsByTagName("ul");
            li = document.getElementsByTagName('li');
            for (var i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) >= 0) {
                    li[i].style.display = '';
                    
                }
                else {
                    li[i].style.display = 'none';
                }
            }
        }
    </script>

</body>

</html>