<?php

session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduswap - Buy & Sell Used Books</title>
    <link rel="icon" href="https://res.cloudinary.com/darnsorvx/image/upload/v1730137791/1729357589000_exp7he.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac42c3b1f7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="indexfstyle.css">
</head>
<body>
    <!-- Nav bar section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://res.cloudinary.com/darnsorvx/image/upload/v1730137791/1729357589000_exp7he.png" class="vr-logo-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  ml-auto">
                    <a class="nav-link active nav-list" href="#banner-Section">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                    <a class="nav-link nav-list" href="#Features-Section">Features</a>
                    <a class="nav-link nav-list" href="#Products-Section">Products</a>
                    <a class="nav-link nav-list" href="#Contact-Us-Section">Contact Us</a>
                    <a class="nav-link nav-list" href="logout.php">LogOut</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Header Section -->
    <header class="hero">
        <div class="container1">
            <h1>Welcome <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM users WHERE users.email= '$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
            }
                ?>
                :) </h1>
            <h2>Start Buy & Sell Used Books with Eduswap</h2>
            <p>Your go-to platform for affordable second-hand books.</p>
            <form class="search-form">
                <input type="text" placeholder="Search for books, subjects, authors..." aria-label="Search">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container1">
            <h2>Explore Book Categories</h2>
            <div class="category-cards">
                <div class="card1">
                    <i class="fas fa-book"></i>
                    <h3>Academic Books</h3>
                    <p>Find second-hand textbooks for various subjects at affordable prices.</p>
                    <button>View Books</button>
                </div>
                <div class="card1">
                    <i class="fas fa-book-open"></i>
                    <h3>Novels & Fiction</h3>
                    <p>Browse through popular novels and fiction books.</p>
                    <button>View Books</button>
                </div>
                <div class="card1">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Competitive Exam Guides</h3>
                    <p>Get guides and preparatory material for various exams.</p>
                    <button>View Books</button>
                </div>

            </div>
        </div>
    </section>

    <!-- User Login Section 
    <section class="user-login">
        <div class="container1">
            <h2>Register or Login</h2>
            <form class="login-form">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="#">Register here</a></p>
            </form>
        </div>
    </section>  -->

   
  <section class="sliding-categories">
    <div class="container1">
        <h2>Browse Categories</h2>
        <div class="carousel">
            <button class="prev"><i class="fas fa-chevron-left"></i></button>
            <div class="carousel-track">
                <div class="category-card">
                    <i class="fas fa-laptop"></i>
                    <h3>Engineering Exams</h3>
                    <p>1084 Ads</p>
                    <button>View All</button>
                </div>
                <div class="category-card">
                    <i class="fas fa-stethoscope"></i>
                    <h3>Medical</h3>
                    <p>458 Ads</p>
                    <button>View All</button>
                </div>
                <div class="category-card">
                    <i class="fas fa-book"></i>
                    <h3>Magazines</h3>
                    <p>48 Ads</p>
                    <button>View All</button>
                </div>
                <div class="category-card">
                    <i class="fas fa-flask"></i>
                    <h3>School Books</h3>
                    <p>4030 Ads</p>
                    <button>View All</button>
                </div>
                <!-- Add more cards as needed -->
            </div>
            <button class="next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>
  <section class="how-we-help">
    <div class="container1">
        <h2>How We Support Students</h2>
        <div class="steps">
            <div class="step">
                <div class="icon-wrapper">
                    <i class="fas fa-book-reader"></i>
                    <span class="step-number">01</span>
                </div>
                <h3>Affordable Education</h3>
                <p>We provide access to second-hand books at lower prices, helping students who struggle with financial constraints to continue their education without burden.</p>
            </div>
            <div class="step">
                <div class="icon-wrapper">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span class="step-number">02</span>
                </div>
                <h3>Supporting Middle-Class Families</h3>
                <p>Our platform makes it easier for middle-class families to find educational resources at a fraction of the original price, promoting a culture of learning and sharing.</p>
            </div>
            <div class="step">
                <div class="icon-wrapper">
                    <i class="fas fa-recycle"></i>
                    <span class="step-number">03</span>
                </div>
                <h3>Recycle Knowledge</h3>
                <p>By buying and selling used books, you contribute to a circular economy, ensuring that knowledge flows freely and books find new homes instead of collecting dust.</p>
            </div>
        </div>
        <blockquote class="quote">
            "Education should never be a luxury. Together, we make learning accessible, one book at a time."
        </blockquote>
    </div>
</section>
 <!-- Footer Section -->

 <div id="Contact-Us-Section" class="footer-section-bg pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="text-center text-md-left">
                        <img src="https://res.cloudinary.com/darnsorvx/image/upload/v1730137791/1729357589000_exp7he.png" class="footer-img" />

                        <div class="d-flex flex-row justify-content-center justify-content-md-start mb-3 mt-3">
                            <div class="footer-section-icons">
                                <a class="anchor-vr" href="#"><i class="fa-brands fa-google"></i></a>
                            </div>
                            <div class="footer-section-icons">
                                <a class="anchor-vr" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                            <div class="footer-section-icons">
                                <a class="anchor-vr" href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            
                        </div>
                        <p class="footer-address ">SRM RAMAPURAM, Chennai, India.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <h1 class="contact-us pb-2">Contact Us</h1>
                    <div class="footer-section-details ">
                        <p><i class="fa-solid fa-envelope mr-2 "></i>...@gmail.com</p>
                    </div>
                    <div class="footer-section-details ">
                        <p><i class="fa-solid fa-phone mr-2"></i>1234506789</p>
                    </div>
                    <div class="footer-section-details ">
                        <p><i class="fa-solid fa-signature mr-2"></i>Satya Prakash</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <h1 class="contact-us pb-2">Let Us Help You</h1>
                    <p class="footer-section-details ">100% Purchase Protection</p>
                    <p class="footer-section-details">Your Account</p>
                    <p class="footer-section-details">Return Centre</p>
                    <p class="footer-section-details">Help</p>
                </div>
                <div class="col-12">
                    <hr class="footer-line " />
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <i class="fa-regular fa-copyright footer-last-details"></i>
                        <span class="footer-last-details "> 2024 by . Created .</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
