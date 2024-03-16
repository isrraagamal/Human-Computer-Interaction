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
    <title>About Us</title>
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
        main #aboutPage {
            margin-top: -20px;
        }
        main #aboutPage img {
            max-width: 100%;
            height:min-content;
            vertical-align: top;
        }

        main #aboutPage p {
            /* line-height: 45px; */
            padding: 15px 0;
            font-size: 18px;
            text-align: left;
        }

        .sidebar {
            height: auto;
            background-color: #EFEAD6;
            padding: 30px;
        }
        .sidebar h3{
            color: #70002e;
        }
        footer{
            margin-top: 70px;
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
        main .about-img {
            height: 70vh;
            background-image: url(./images/about_um_branded.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        main .about-img h1 {
            position: absolute;
            top: 80%;
            left: 5%;
            font-weight: bold;
            font-size: 50px;
        }
        .app-btn{
            padding: 10px;
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #ff569d;
            color: #ffffff;
        }
        .app-btn:hover{
            background-color: #fc74ac;
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
        <section id="aboutPage">
            <div class="container">
                <div class="row d-flex">
                    <div class="sidebar col-3">
                      <h3>ABOUT</h3>
                    </div>
                    <div class="col-9">
                        <div class="col-12 about-img">
                            <h1 class="text-monospace">ABOUT UNIVERSITY</h1>
                        </div>
                        <div class="container">
                            <p class="d-block">
                                At UNI, we approach everything with creativity because that’s what this evolving world
                                needs.
                                We are stewards of this place, its history and our future. We are driving forward
                                together,
                                affecting change that is right for our place and people. We know of no better place than
                                Montana and its university to make a lasting impact on the common good.
                            </p>
                            <p>
                                As Montana’s flagship university, we set a high bar for academic studies, creative
                                accomplishments and scientific exploration which benefit our students, our community and
                                the
                                world at large.
                            </p>
                            <p>
                                The University draws a diverse, global population to Missoula – our home and the state’s
                                second-largest city with about 80,000 residents – and helps cultivate an educated,
                                engaged
                                and vibrant community. Our students receive a world-class education in a broad range of
                                subjects that include the arts, sciences, trades, graduate and postdoctoral study and
                                professional training.
                            </p>
                            <p>
                                Our main campus, nestled in the heart of western Montana’s stunning natural landscape,
                                spans
                                56 acres at the base of Mount Sentinel and along the Clark Fork River, and includes the
                                park-like Oval at the center of campus, more than 60 architecturally unique buildings
                                and a
                                25,200-seat football stadium. UM's 180-acre South Campus offers student housing, a golf
                                course, soccer fields and an outdoor track facility. Missoula College occupies two
                                sites,
                                one just across the river from the main campus, and one on the southwest side of
                                Missoula.
                            </p>
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
</body>
</html>