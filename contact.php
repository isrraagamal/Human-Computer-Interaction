
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
    <title>Contact Us</title>
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

        main #contactPage {
            margin-top: -20px;
        }

        main .contact-img {
            height: 70vh;
            background-image: url(./images/contact.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        main .contact-img h1 {
            position: absolute;
            top: 80%;
            left: 5%;
            font-weight: bold;
            font-size: 50px;
        }

        .contact-btn {
            color: #70002e;;
            background-color: #ffffff;
            width: 100px;
        }

        .contact-btn:hover {
            background-color: #91023d;
            color: white;
        }

        #contact-section {
            margin: 70px 0;
        }
        #contact-section textarea{
            height: 130px;
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


if ($_POST && isset($_POST['submit'])) {
    // Create a new Post object and set its properties
    $contact = new student($pdo);
 

    // Attempt to create the post
    if ($contact->contact($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['msg'])) {
        //display a success message
        echo 'Your Message is sent successfully';
        // header('Location: contact.php');
        exit;
    } else {
        // Display an error message
        echo 'An error occurred while creating the post.';
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
        <section id="contactPage">

            <div class="row">
                <div class="d-flex text-center justify-content-center align-items-center">

                    <div class="col-12 contact-img">
                        <h1 class="text-monospace">CONTACT US</h1>
                    </div>
                </div>
            </div>
            </div>
        </section>

    

        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <h2 class="text-left">CONTACT US</h2>
                    <hr>
                    <div class="col-8 text-center justify-content-center align-items-center">
                    <form method="post" class="needs-validation text-left" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <?php if (isset($errors)): ?>
                                <input type="text" class="form-control" name="fisrtName" id="firstName" value="" required>      
                                    <?php else: ?>
                                    <input type="text" class="form-control" name="firstName" id="firstName" value="" required>
                                    <?php endif; ?>      
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <?php if (isset($errors)): ?>
                                <input type="text" class="form-control" name="lastName" id="lastName" value="" required>      
                                    <?php else: ?>
                                    <input type="text" class="form-control" name="lastName" id="lastName" value="" required>
                                    <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <?php if (isset($errors)): ?>
                                <input type="text" class="form-control" name="email" id="email" value="" required>      
                                    <?php else: ?>
                                    <input type="text" class="form-control" name="email" id="email" value="" required>
                                    <?php endif; ?>
                               
                                <div class="invalid-tooltip">
                                    Please enter a valid Email.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="msg">Enter Your Message</label>
                                <?php if (isset($errors)): ?>
                                <textarea type="" class="form-control" name="msg" id="msg" placeholder="Type Message ..." value="" required></textarea>      
                                    <?php else: ?>
                                    <textarea type="" class="form-control" name="msg" id="msg" placeholder="Type Message ..." value="" required></textarea>
                                    <?php endif; ?>
                                <div class="invalid-tooltip">
                                    Please enter a valid Message.
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn contact-btn" name="submit" type="submit">SEND</button>
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