<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <style>
        /* Custom CSS styles */
        
        body {
            font-family: Arial, sans-serif;
        }
        
        .navbar.bg-facebook {
    font-family: ' 12px Poppins,sans-serif';
    background-color: #4267B2; /* Replace with your desired Facebook theme color */
  }
  
  .navbar.bg-facebook .navbar-nav .nav-link {
    font-family: 'Poppins', sans-serif;
    color: #fff; /* Set the text color for the navigation links */
  }
  
  .navbar.bg-facebook .navbar-brand img {
    filter: brightness(0) invert(1); /* Optionally invert the logo color for better visibility */
  }
        
        .hero-section {
            background-image: url('path/to/hero-image.jpg');
            background-size: cover;
            background-position: center;
            padding: 150px 0;
            text-align: center;
            color: #fff;
        }
        
        .hero-heading {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .hero-subheading {
            font-size: 20px;
            margin-bottom: 40px;
        }
        
        .cta-button {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 10px 30px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
        }
        
        .features-section {
            padding: 80px 0;
            text-align: center;
        }
        
        .feature-item {
            margin-bottom: 40px;
        }
        
        .feature-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .feature-description {
            font-size: 16px;
        }
        
        .how-it-works-section {
            background-color: #f8f8f8;
            padding: 80px 0;
            text-align: center;
        }
        
        .step-item {
            margin-bottom: 40px;
        }
        
        .step-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }
        
        .step-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .step-description {
            font-size: 16px;
        }
        
        .candidate-section {
            padding: 80px 0;
            text-align: center;
        }
        
        .candidate-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        
        .testimonial-section {
            background-color: #f8f8f8;
            padding: 80px 0;
            text-align: center;
        }
        
        .testimonial-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        
        .faq-section {
            padding: 80px 0;
            text-align: center;
        }
        
        .faq-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        
        .contact-section {
            background-color: #3498db;
            padding: 80px 0;
            text-align: center;
            color: #fff;
        }
        
        .contact-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        
        .footer-section {
            background-color: #222;
            padding: 40px 0;
            text-align: center;
            color: #fff;
            font-size: 14px;
        }
        
        .footer-text {
            margin-bottom: 20px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            display: inline-block;
            margin-right: 10px;
        }
        
        .footer-links li a {
            color: #fff;
            text-decoration: none;
        }
        
        @media (max-width: 767px) {
            .header-section {
                padding: 10px;
            }
            
            .logo {
                font-size: 20px;
            }
            
            .tagline {
                font-size: 16px;
            }
            
            .navigation ul li a {
                font-size: 14px;
            }
            
            .hero-section {
                background-size: cover;
                background-position: center;
                color: white;
                padding: 100px 0;
            }

            .hero-content {
                text-align: center;
            }
            .hero-title {
                    font-size: 36px;
                    font-weight: bold;
                    margin-bottom: 20px;
            }

            .hero-description {
            font-size: 20px;
            margin-bottom: 30px;
            }
                

            .hero-cta {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .hero-cta .btn {
                margin-right: 10px;
            }
                    
            .features-section {
                padding: 60px 0;
            }
                
            .feature-item {
                margin-bottom: 30px;
            }
                
            .feature-icon {
                font-size: 30px;
            }
                
            .feature-title {
                font-size: 20px;
            }
                
            .feature-description {
                font-size: 14px;
            }
                
            .how-it-works-section {
                padding: 60px 0;
            }
                
            .step-item {
                margin-bottom: 30px;
            }
                
            .step-icon {
                font-size: 30px;
            }
                
            .step-title {
                font-size: 20px;
            }
                
            .step-description {
                font-size: 14px;
            }
                
            .candidate-section {
                padding: 60px 0;
            }
                
            .candidate-title {
                font-size: 20px;
            }
                
            .testimonial-section {
                padding: 60px 0;
            }
            
            .testimonial-title {
                font-size: 20px;
            }
            
            .faq-section {
                padding: 60px 0;
            }
            
            .faq-title {
                font-size: 20px;
            }
            
            .contact-section {
                padding: 60px 0;
            }
            
            .contact-title {
                font-size: 20px;
            }
            
            .footer-section {
                padding: 20px 0;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
 <!-- navbar -->
 <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-facebook sticky-top">
        <!--sticky-top is used to fix the navbar -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="branding" style="width:30%; height:30% overflow: hidden;">
            </a>

            <span class="navbar-text mr-auto">
                <i class="fas fa-phone-alt"></i> Tel. : +977-056-493762
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- About Us -->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <!-- Contact Us -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <!-- login -->
                    <li class="signup">
                        <a class="nav-link" href="./routes/register.php">
                            <img src="images\signup.png" alt="signup" style="height:5vh; width:5vh">
                            Register
                        </a>
                    </li>
                    <li class="login">
                        <a class="nav-link" href="./">
                            Login
                            <img src="images\login.png" alt="login" style="height:5vh; width:5vh">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="hero-section" style="background-image:url('images/hero_image.jpg');
                    background-size: cover;
                background-position: center;
                color: ;">

    <div class="container">
        <div class="hero-content">
            <!-- <h1 class="hero-title">Empowering Democracy Through Online Voting</h1>
            <p class="hero-description">Cast your vote conveniently, securely, and efficiently with our online voting system.</p> -->
            <div class="hero-cta">
                <a href="./routes/register.php" class="btn btn-primary">Register Now</a>
                <a href="./index.php" class="btn btn-secondary">Login</a>
            </div>
        </div>
    </div>
</section>

    
    <section id="features" class="features-section">
        <!-- Highlight key features of your online voting system -->
        <div class="container">
            <div class="row" id="about" >
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="fa fa-lock feature-icon"></i>
                        <h3 class="feature-title">Secure Voting</h3>
                        <p class="feature-description">Your vote is protected with the highest level of security measures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="fa fa-globe feature-icon"></i>
                        <h3 class="feature-title">Accessible Anywhere</h3>
                        <p class="feature-description">Cast your vote from any location using your computer or mobile device.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="fa fa-clock feature-icon"></i>
                        <h3 class="feature-title">Efficient Process</h3>
                        <p class="feature-description">Save time with a streamlined and efficient voting process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="voting-process" class="how-it-works-section">
        <!-- Explain the voting process in a user-friendly manner -->
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="step-item">
                        <i class="fa fa-user-plus step-icon"></i>
                        <h3 class="step-title">Register</h3>
                        <p class="step-description">Create your account to become an eligible voter.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-item">
                        <i class="fa fa-list-alt step-icon"></i>
                        <h3 class="step-title">Select Candidates</h3>
                        <p class="step-description">Browse and choose your preferred candidates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-item">
                        <i class="fa fa-check-circle step-icon"></i>
                        <h3 class="step-title">Cast Your Vote</h3>
                        <p class="step-description">Submit your vote securely with a single click.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="candidates" class="candidate-section">
        <!-- Showcase the participating candidates -->
        <div class="container">
            <h2 class="section-title">Meet the Candidates</h2>
            <!-- Add candidate profiles or images here -->
        </div>
    </section>
    
    <section id="testimonials" class="testimonial-section">
        <!-- Display testimonials or quotes from satisfied users -->
        <div class="container">
            <h2 class="section-title">What Our Users Say</h2>
            <!-- Add testimonials or quotes here -->
        </div>
    </section>
    
    <section id="faq" class="faq-section">
        <!-- Address common questions and concerns -->
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <!-- Add FAQs here -->
        </div>
    </section>
    
    <section id="contact" class="contact-section">
        <!-- Provide contact information and a contact form -->
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <!-- Add contact form or contact information here -->
        </div>
    </section>
    
    <footer class="footer-section">
        <!-- Footer content with important links and social media icons -->
        <div class="container">
            <div class="footer-text">&copy; 2023 Online Voting System. All rights reserved.</div>
            <ul class="footer-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Copyright</a></li>
            </ul>
        </div>
    </footer>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>