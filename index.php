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
    <title>University</title>
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
       header i{
        font-size: 30px;
       }
        main {
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        main #homePage {
            margin-top: -20px;
        }

        main #homePage img {
            width: 100%;
        }

        main section {
            margin: 50px 0px;
        }

        main .paragraph p {
            width: 60%;
        }

        main section .academic-txt {
            background-color: #ffffff;
            color: #000;

        }

        main section .academic-txt h2,
        main section .academic-txt a {
            color: #70002e;
        }

        main section .academic-txt a {
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }

        main #explore-academics img {
            width: 100%;
            height:304px;

        }

        main section .apply-div {
            width: 100%;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./images/apply_today.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 350px;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        main section .apply-div-txt {
            position: absolute;
            top: 35%;
            left: 25%;
        }
        main section .apply-div-txt a{
            text-decoration: none;
            color: white;
            cursor: pointer;
        }
        main #apply-section a:hover,
        main section .academic-txt a:hover {
            text-decoration: underline;
        }

        main #news p {
            font-size: 15px;
            padding: 10px 0px;
        }

        main #news a {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        main #news a:hover {
            text-decoration: underline;
        }

        main #news img {
            width: 100%;
            cursor: pointer;
        }

        main #events .col-6 {
            padding: 10px;
        }

        main #events .col-6 p {
            font-size: 18px;
            font-weight: 400;
        }

        main #events .col-6 p:hover {
            text-decoration: underline;
        }

        main #events .col-6 .dateTime {
            font-size: 14px;
            font-weight: 100;
            text-decoration: none;
        }

        main #events .col-6 .dateTime:hover {
            text-decoration: none;
        }

        footer .row {
            padding: 10px 50px;
        }
        footer .col-4:nth-child(2){
            border-left: 1px solid gray;
            border-right: 1px solid gray;
        }
        footer ul li {
            list-style: none;
            font-size: 14px;
            cursor: pointer;
        }
        footer ul li:hover{
            text-decoration: underline;
        }

        footer .logo {
            font-size: 130px;
        }
        footer{
            margin-top: 70px;
        }

        footer i {
            font-size: 40px;
            padding: 5px 8px;
            cursor: pointer;
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
                            <input id="myInput" onkeyup="search()" type="search" class="form-control rounded" placeholder="Search"
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
        <section id="homePage">
            <img src="./images/reading_homeage_4.4.231.jpg" alt="" />
        </section>
        <section class="paragraph">
            <div class="container">
                <div class="row text-center justify-content-center align-items-center">
                    <h2>BIG THINGS ARE HAPPENING HERE</h2>
                    <p class="my-2">At UNIVERSITY, we approach everything with creativity because that’s what this
                        evolving world
                        needs. We are stewards of this place, its history and our future. We are driving forward
                        together, affecting change that is right for our place and people. We know of no better place
                        than Montana and its university to make a lasting impact on the common good.</p>
                </div>
            </div>
        </section>
        <section id="explore-academics">
            <div class="container justify-content-center align-items-center">
                <div class="row text-center justify-content-center align-items-center">
                    <div class="col-11 d-flex text-center justify-content-center align-items-center">
                      
                            <img src="./images/example-academics.jpg" alt="" />
                        
                        <div class="academic-txt col-6 py-5">
                            <h2>EXPLORE ACADEMICS AT UNIVERSITY</h2>
                            <p class="py-3 text-left">OUR UNIVERSITY offers a vast array of courses, degrees, minors and
                                majors to help you fulfill your academic and professional goals.</p>
                            <h6><a href="academics.php">LEARN MORE ABOUT UNI'S ACADEMIC OPTIONS.</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <h2 class="d-block"> CREATIVE. <br>
                        COLLECTIVE.<br>
                        COURAGEOUS.
                    </h2>
                </div>
            </div>
        </section>


        <section id="apply-section">
            <div class="container">
                <div class="row d-flex text-center justify-content-center align-items-center">
                    <div class="col-10 apply-div">
                        <div class="apply-div-txt">
                            <h2>APPLYING IS EASIER THAN YOU THINK</h2>
                            <h6 class="my-3"><a href="./apply.php">START HERE</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="news">
            <div class="container">
                <div class="row">
                    <h2 class="text-left">NEWS</h2>
                    <hr>
                </div>
                <div class="row text-left">
                    <div class="col-4">
                        <img src="./images/jack_person.jpg" alt="" />
                        <p><a href="#">Student Revamps Campus Record Label, Creates Career</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/rowena_he_web.jpg" alt="" />
                        <p><a href="#">Historian of Chinese Society and Politics to Talk Tiananmen at UNI</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/ruffatto_web.jpg" alt="" />
                        <p><a href="#">Student Business Startup Challenge Returns for 34th Year</a></p>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col-4">
                        <img src="./images/grimes_web.jpg" alt="" />
                        <p><a href="#">Researcher Uses AI to Understand Lung Cancer Cell Vulnerabilities</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/dancer_web.jpg" alt="" />
                        <p><a href="#">Law Students Secure Legacy, Form Fly Fishing Society</a></p>
                    </div>
                    <div class="col-4">
                        <img src="./images/alternative_break.jpg" alt="" />
                        <p><a href="#">Students Spending Spring Break Helping Less Fortunate</a></p>
                    </div>
                </div>
            </div>
        </section>


        <section id="events">
            <div class="container text-left">
                <div class="row">
                    <h2>UPCOMING EVENTS</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>UNI School of Music presents Opera Happy Hour</p>
                        <p class="dateTime">DEC 25, 2023 7:00 pm - 8:00 pm</p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <p>Earth Week Sustainability Fair</p>
                        <p class="dateTime">DEC 26, 2023 7:00 pm - 8:00 pm</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Sophomore Housing Options</p>
                        <p class="dateTime">DEC 27, 2023 7:00 pm - 8:00 pm</p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <p>Elections Launch Party</p>
                        <p class="dateTime">DEC 28, 2023 7:00 pm - 8:00 pm</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Denim Day</p>
                        <p class="dateTime">DEC 29, 2023 7:00 pm - 8:00 pm</p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <p>Music presents Opera Happy Hour</p>
                        <p class="dateTime">DEC 30, 2023 7:00 pm - 8:00 pm</p>
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
    <script>
        function search() {
            var input, filter, section, p, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            section = document.getElementsByTagName('section');
            for (var i = 0; i < li.length; i++) {
                p = section[i].getElementsByTagName("div")[0];
                txtValue = p.textContent || p.innerText;
                if (txtValue.toUpperCase().indexOf(filter) >= 0) {
                    section[i].style.display = '';
                    
                }
                else {
                    section[i].style.display = none;
                }
            }
        }
    </script>
</body>
</html>