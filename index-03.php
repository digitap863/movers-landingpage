<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Landing Page - Mover World Wide</title>


    <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.activetoggle, .accordion:hover {
  background-color: #a4c6c1;
  color:white;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.activetoggle:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.counter-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  margin: 30px 20px;
}

.counter {
  font-size: 40px;
  margin-top: 10px;
}

  .contact-form-wrapper {
    padding: 100px 0;
  }
  
  .contact-form {
    padding: 30px 40px;
    background-color: #ffffff;
    border-radius: 12px;
    max-width: 400px;
  }
  
  .contact-form textarea {
    resize: none;
  }
  
  .contact-form .form-input,
  .form-text-area,select {
    background-color: #f0f4f5;
    height: 40px;
    padding-left: 16px;
  }
  
  .contact-form .form-text-area {
    background-color: #f0f4f5;
    height: auto;
    padding-left: 16px;
  }
  
  .contact-form .form-control::placeholder {
    color: #aeb4b9;
    font-weight: 500;
    opacity: 1;
  }
  
  .contact-form .form-control:-ms-input-placeholder {
    color: #aeb4b9;
    font-weight: 500;
  }
  
  .contact-form .form-control::-ms-input-placeholder {
    color: #aeb4b9;
    font-weight: 500;
  }
  
  .contact-form .form-control:focus {
    border-color: #f33fb0;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.07), 0 0 8px #f33fb0;
  }
  
  .contact-form .title {
    text-align: center;
    font-size: 24px;
    font-weight: 500;
  }
  
  .contact-form .description {
    color: #aeb4b9;
    font-size: 14px;
    text-align: center;
  }
  
  .contact-form .submit-button-wrapper {
    text-align: center;
  }
  
  .contact-form .submit-button-wrapper input {
    border: none;
    border-radius: 4px;
    background-color:#3a7689;
    color: white;
    text-transform: uppercase;
    padding: 10px 60px;
    font-weight: 500;
    letter-spacing: 2px;
  }
  
  .contact-form .submit-button-wrapper input:hover {
    background-color:#848ade ;
  }
  
select {
    outline:0;
   box-shadow:none;
   border:0!important;
   background: #5c6664;
   
   flex: 1;
   padding: 0 .5em;
   color:#fff;
   cursor:pointer;
   font-size: 1em;
}


.select::after {
   
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #23b499;
}

.select-box {
  height:55px;
  overflow-y:auto;
    
}
option{
  overflow-y:scroll;
}
    </style>    
</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
    <div class="ts-page-wrapper" id="page-top">

        <!--************ HERO ***************************************************************************************-->
        
        <header id="ts-hero" class="ts-full-screen ts-separate-bg-element" data-mask-bottom-wn-color="#fff" data-bg-image="assets/img/bg-girl-02.jpg" data-bg-color="#737373" data-bg-image-opacity=".8" data-bg-parallax="scroll" data-bg-parallax-speed="3">
            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#1d1d1d">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">
                        <img src="assets/img/movers-logo2.png" alt="">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="#page-top">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link ts-scroll" href="#advanced-features">About</a>
                            <a class="nav-item nav-link ts-scroll" href="#pricing">Pricing</a>
                            <a class="nav-item nav-link ts-scroll" href="#our-clients">Testimonials</a>
                            <a class="nav-item nav-link ts-scroll" href="#enquiry">Enquiry</a>
                            <a class="nav-item nav-link ts-scroll" href="#form-contact">Contact</a>
                            <a class="ts-scroll btn btn-outline-light btn-sm m-1 px-3 ts-width__auto" href="#">
                                <i class="fas fa-sign-in-alt ts-opacity__80 pr-2"></i>
                                Log In
                            </a>
                           <!-- <a class="ts-scroll btn btn-primary btn-sm m-1 px-3 ts-width__auto" href="#">Register</a> -->
                        </div>
                        <!--end navbar-nav-->
                    </div>
                    <!--end collapse-->
                </div>
                <!--end container-->
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->
            <div class="container align-self-center align-items-center">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="ts-opacity__50">We Are Introducing</h3>
                        <h1>Startup Landing Page Pack</h1>
                    </div>
                </div>
                <a href="#what-youll-get" class="btn btn-primary ts-scroll">Learn More</a>
               <!-- <a href="https://vimeo.com/63502573" class="btn btn-outline-light video-popup">
                    <i class="fa fa-play mr-2"></i>
                    Video
                </a> -->
            </div>
            <!--end container-->
        </header>
        <!--end #hero-->

        <!--************ CONTENT ************************************************************************************-->
        
        <main id="ts-content">



        <div class="contact-form-wrapper d-flex justify-content-center">
            
        <select style="border:none;border-radius:4px;width:350px;" size="10" class="select-box">
                    <option value="" style="display:none">Choose Country</option>

                    <?php 
                            
                            include "conn.php";
                            $query="select * from country_names order by country_name";
                            $result=mysqli_query($conn,$query);
                                    
                              if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) { 
                                
                                $cont_option = $row['country_name'];
                            ?>
                                    <option value="<?php echo $cont_option; ?>"> <?php echo $cont_option; ?> </option> 
                                    
                            <?php } }?>
                   
        </select>
            
        </div>
        


        <!--About ********************************************************************************************-->       
            <section id="advanced-features" class="ts-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp">
                            <div class="ts-title">
                                <h2>About The Country</h2>
                            </div>
                            <!--end ts-title-->

                        <?php

                            include "conn.php";
                                /*$id=$_GET['details'];*/

                                $sql = "SELECT * FROM country1 where countryname='England'";
                                $result = mysqli_query($conn,$sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) { 

                                $about = $row['about_country'];
                                $c_name = $row['countryname'];
                        ?>
                            <h3 style="font-family: 'Raleway', sans-serif;"><?=$c_name?></h3>
                            <p style="font-family: 'Work Sans', sans-serif;font-size:17px"><?=$about?></p>

                            <?php } }?> 

                            <ul class="ts-list-colored-bullets">
                                <li>Sed a venenatis mi, vel tempus neque. </li>
                                <li>Diam in hendrerit facilisis, enim diam cursus augue.</li>
                                <li>Nullam tellus turpis, molestie ac urna</li>
                            </ul>                                   
                            
                        </div>

                         

                        <!--end col-xl-5-->
                        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                            <div class="px-3">
                                <img src="assets/img/image-device-01.png" class="mw-100" alt="">
                            </div>
                        </div>
                        <!--end col-xl-7-->
                    </div>

                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--About ********************************************************************************************-->

            <!--WHAT YOU'LL GET *************************************************************************************-->
            <section id="what-youll-get" class="ts-block text-center pt-4">
                <div class="container">
                    <div class="ts-title">
                        <h2>What You’ll Get</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                                <figure class="icon p-2">
                                    <img src="assets/icons/delivery.png" alt="">
                                    <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="assets/svg/organic-shape-02.svg"></div>
                                </figure>
                                <h4>Faster Delivery</h4>
                                <p>
                                    Curabitur tellus enim, aliquet et porttitor id, accumsan at nulla. Praesent vestibulum
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 col-md-4 offset-md-0 col-xl-3">
                            <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                                <figure class="icon p-2">
                                    <img src="assets/icons/shield.png" alt="">
                                    <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="assets/svg/organic-shape-03.svg"></div>
                                </figure>
                                <h4>Moving Protection</h4>
                                <p>
                                    In non turpis convallis nunc fermentum porttitor sed quis sapien. Etiam et neque
                                </p>
                            </figure>
                        </div>

                        <div class="col-sm-6 col-md-4 offset-md-0 col-xl-3">
                            <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                                <figure class="icon p-2">
                                    <img src="assets/icons/open-cardboard-box.png" alt="">
                                    <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="assets/svg/organic-shape-03.svg"></div>
                                </figure>
                                <h4>Packing & Unpacking</h4>
                                <p>
                                Etiam et neque.
                                </p>
                            </figure>
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <figure data-animate="ts-fadeInUp">
                                <figure class="icon p-2">
                                    <img src="assets/icons/delivery-truck.png" alt="">
                                    <div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="assets/svg/organic-shape-01.svg"></div>
                                </figure>
                                <h4>On Time Delivery</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                        </div>

                        <!--end col-xl-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END HOW IT WORKS ************************************************************************************-->

            <!--PARTNERS ********************************************************************************************-->
           <!-- <section id="partners" class="ts-block pb-3" data-bg-color="#f6f6f6" data-mask-top-nw-color="#fff">
                
                <div class="container">
                   <h2 align="center">Our Partners</h2>
                    <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners ">
                        <a href="#">
                            <img src="assets/img/18.png" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/311.png" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/314.jpg" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/76.png" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/logo-05.png" alt="">
                        </a>
                    </div>
                    
                </div>
                
            </section> -->
            <!--END PARTNERS ****************************************************************************************-->

            <!--NUMBERS *********************************************************************************************-->
            <section id="numbers" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-color="#2d2d2d" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#f6f6f6" data-mask-bottom-wn-color="#fff">
                <div class="container">
                    <div>
                        <div class="row">

                           <!-- <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                <span id="count1" class="display-4" style="animation-duration: .5s;"></span>
                                <h3 class="mb-0 ts-opacity__50"> Moving Companies </h3>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                <span id="count2" class="display-4"></span>
                                <h3 class="mb-0 ts-opacity__50"> Established </h3>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                <span id="count3" class="display-4"></span>
                                <h3 class="mb-0 ts-opacity__50">  </h3>
                                </div>
                            </div> -->

                            <div class="col-sm-3">
                                <div class="counter-container">
                                  
                                  <div class="counter" data-target="5000"></div>
                                  <h2 class="mb-0 ts-opacity__50"> No.of Clients </h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="counter-container">
                                
                                <div class="counter" data-target="5000"></div>
                                <h2 class="mb-0 ts-opacity__50"> Items Moved </h2>
                              </div>
                            </div>  

                            <div class="col-sm-3">
                            <div class="counter-container">
                               
                                <div class="counter" data-target="7500"></div>
                                <h2 class="mb-0 ts-opacity__50"> Invested </h2>
                              </div>
                            </div>  

                            <div class="col-sm-3">
                                <div class="counter-container">
                                   
                                    <div class="counter" data-target="7500"></div>
                                    <h2 class="mb-0 ts-opacity__50"> Moving Companies </h2>
                                  </div>
                                </div> 

                        </div>
                        <!--end row-->
                    </div>
                    <!--end ts-promo-numbers-->
                </div>
                <!--end container-->
            </section>
            <!--END NUMBERS *****************************************************************************************-->

            <!--ADVANCED FEATURES ***********************************************************************************-->
            

            <!--END ADVANCED FEATURES ***********-->

            <!--PRICING ********-->
           <!-- <section id="pricing" class="ts-block ts-separate-bg-element" data-bg-image="assets/img/bg-hand-mobile.jpg" data-bg-color="#000" data-bg-image-opacity=".5" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#eaeaea">
                <div class="container">
                    <div class="ts-title text-center text-white">
                        <h2>Affordable Prices</h2>
                    </div>
                    
                    <div class="row no-gutters ts-cards-same-height">
                        
                        <div class="col-sm-4 col-lg-4">
                            <div class="card text-center ts-price-box" data-animate="ts-fadeInUp">
                                <div class="card-header p-0">
                                    <h5 class="mb-0 py-3 text-white" data-bg-color="#7a9b97">Basic</h5>
                                    <div class="ts-title py-5 mb-0">
                                        <h3 class="mb-0 font-weight-normal">Free</h3>
                                        <small class="ts-opacity__50">forever</small >
                                    </div>
                                </div>
                                
                                <div class="card-body p-0">
                                    <ul class="list-unstyled ts-list-divided">
                                        <li>3 Sport Activity</li>
                                        <li>60 Days Track Record</li>
                                        <li><s class="ts-opacity__50">Cloud Backup</s></li>
                                        <li><s class="ts-opacity__50">Ads Removed</s></li>
                                    </ul>
                                    
                                </div>
                                
                                <div class="card-footer bg-transparent pt-0 ts-border-none">
                                    <a href="#" class="btn btn-outline-dark ts-btn-border-muted">Select Now</a>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-sm-4 col-lg-4">
                            <div class="card text-center ts-price-box ts-price-box__promoted" data-animate="ts-fadeInUp" data-delay="0.1s">
                                <div class="card-header p-0" data-bg-color="#ff6a6a">
                                    <h5 class="mb-0 py-3 text-white" data-bg-color="#e55f5f">Premium</h5>
                                    <div class="ts-title text-white py-5 mb-0">
                                        <h3 class="mb-0 font-weight-normal">
                                            <sup>$</sup>9,99
                                        </h3>
                                        <small class="ts-opacity__50">per month</small >
                                    </div>
                                </div>
                                
                                
                                
                                <div class="card-footer bg-transparent pt-0 ts-border-none">
                                    <a href="#" class="btn btn-primary">Select Now</a>
                                </div>
                            </div>
                            
                        </div>
                        

                        <div class="col-sm-4 col-lg-4">
                            <div class="card text-center ts-price-box" data-animate="ts-fadeInUp" data-delay="0.2s">
                                <div class="card-header p-0">
                                    <h5 class="mb-0 py-3 text-white" data-bg-color="#7a9b97">Premium</h5>
                                    <div class="ts-title py-5 mb-0">
                                        <h3 class="mb-0 font-weight-normal">
                                            <sup>$</sup>19,99
                                        </h3>
                                        <small class="ts-opacity__50">per month</small >
                                    </div>
                                </div>
                                
                                <div class="card-body p-0">
                                    <ul class="list-unstyled ts-list-divided">
                                        <li>5 Sport Activity</li>
                                        <li>Unlimited Days Track Record</li>
                                        <li>Cloud Backup</li>
                                        <li>Ads Removed</li>
                                    </ul>
                                    
                                </div>
                                
                                <div class="card-footer bg-transparent pt-0 ts-border-none">
                                    <a href="#" class="btn btn-outline-dark ts-btn-border-muted">Select Now</a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </section> -->
            <!--END PRICING *****************************************************************************************-->

            
            <section id="our-clients" class="ts-block text-center py-4">
                <div class="container">
                    <div class="ts-title">
                        <h2>Testimonials</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                                <blockquote class="blockquote">
                                    <!--person image
                                    <div class="ts-circle__lg"></div> -->
                                    <!--end person image-->
                                    <!--cite-->
                                    <p>
                                        Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                                        uthicula sagitti
                                    </p>
                                    <!--end cite-->
                                    <!--person name-->
                                    <footer class="blockquote-footer">
                                        <h4>Jane Doe</h4>
                                        <h6>CEO at MarketsGuru</h6>
                                    </footer>
                                    <!--end person name-->
                                </blockquote>
                                <!--end blockquote-->
                                <blockquote class="blockquote">
                                    <!--person image
                                    <div class="ts-circle__lg"></div>-->
                                    <!--end person image-->
                                    <!--cite-->
                                    <p>
                                        Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                                        uthicula sagitti
                                    </p>
                                    <!--end cite-->
                                    <!--person name-->
                                    <footer class="blockquote-footer">
                                        <h4>Jane Doe</h4>
                                        <h6>CEO at MarketsGuru</h6>
                                    </footer>
                                    <!--end person name-->
                                </blockquote>
                                <!--end blockquote-->

                                <blockquote class="blockquote">
                                    <!--person image
                                    <div class="ts-circle__lg"></div>-->
                                    <!--end person image-->
                                    <!--cite-->
                                    <p>
                                        Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                                        uthicula sagitti
                                    </p>
                                    <!--end cite-->
                                    <!--person name-->
                                    <footer class="blockquote-footer">
                                        <h4>Jane Doe</h4>
                                        <h6>CEO at MarketsGuru</h6>
                                    </footer>
                                    <!--end person name-->
                                </blockquote>
                                <!--end blockquote-->

                            </div>
                            <!--end ts-carousel-blockquote-->
                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end #our-clients.ts-block-->

            <section id="our-clients" class="ts-block text-center py-4">
                <div class="container">
                    <div class="ts-title">
                        <h2>Advanced Features</h2>

                        <button class="accordion">Section 1</button>
                        <div class="panel">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        
                        <button class="accordion">Section 2</button>
                        <div class="panel">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        
                        <button class="accordion">Section 3</button>
                        <div class="panel">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                    </div>   
                </div>
            </section>        
            
            <!--SUBSCRIBE *******************************************************************************************-->
            <section id="enquiry" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-image-opacity=".1" data-bg-color="#5f8d87" data-bg-parallax="scroll" data-bg-parallax-speed="3" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#fff">
                <div class="container">
                    <h3 style="text-align:center;text-decoration: underline;">Enquiry Form</h3>

                    <div>
                      <div class="contact-form-wrapper d-flex justify-content-center">
                        <form action="#" class="contact-form">
                          <h5 class="title">Contact us</h5>
                          <p class="description">Feel free to contact us if you need any assistance, any help or another question.
                          </p>
                          <div>
                            <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                          </div>
                          <div>
                            <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                          </div>
                          <div>
                            <input type="text" class="form-control rounded border-white mb-3 form-input" placeholder="Mobile" required>
                          </div>

                          <div>
                            <select style="border:none;border-radius:4px;width:100%;" required><option value="">Choose Country</option>
                                    <option value="India"> India</option>                                
                                    <option value="China"> China</option>
                                    <option value="UK"> U.K</option> 
                            </select> 
                          </div><br>

                          <div>
                            <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required></textarea>
                          </div>
                          <div class="submit-button-wrapper">
                            <input type="submit" value="Send">
                          </div>
                        </form>
                      </div>
                    </div>    
                   <!-- <form class="ts-form ts-form-email ts-labels-inside-input" data-php-path="assets/php/email.php">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group mb-0">
                                    <label for="email-subscribe">Email address</label>
                                    <input type="email" class="form-control" id="email-subscribe" aria-describedby="subscribe" name="email" placeholder="" required>
                                    <small class="form-text mt-2 ts-opacity__50">*You’ll get only relevant news once a week</small>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-dark w-100">Submit</button>
                            </div>
                            
                        </div>
                        
                    </form> -->
                    <!--end ts-form-->
                </div>
                <!--end container-->
            </section>
            <!--END SUBSCRIBE ***************************************************************************************-->

            <!--FEATURES ********************************************************************************************-->
            <section id="organize" class="ts-block pt-5">
                <div class="container">
                    <div class="ts-title text-center">
                        <h2>Organize Everything!</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp">
                                <figure class="icon">
                                    <img src="assets/img/icon-chart.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Monitor Your Activity</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
                                <figure class="icon">
                                    <img src="assets/img/icon-target.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Analyze Your Results</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
                                <figure class="icon">
                                    <img src="assets/img/icon-first.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Get Better!</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4 my-5 d-flex justify-content-center align-items-center">
                            <div class="image position-relative">
                                <img src="assets/img/img-phone.png" class="mw-100" alt="" data-animate="ts-zoomInShort" data-delay=".1s">
                            </div>
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4">
                            <figure class="ts-xs-text-center" data-animate="ts-fadeInUp">
                                <figure class="icon">
                                    <img src="assets/img/icon-chat.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Support Chat</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
                                <figure class="icon">
                                    <img src="assets/img/icon-map.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Runs on Any Place</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
                                <figure class="icon">
                                    <img src="assets/img/icon-video.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Video Tutorials</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END FEATURES ****************************************************************************************-->

            

            <!--PARTNERS ********************************************************************************************-->
            <section id="partners" class="ts-block pb-3" data-bg-color="#f6f6f6">
                <!--container-->
                <div class="container">
                    <!--block of logos--><h2 align="center">Our Partners</h2>
                    <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners ">
                        <a href="#">
                            <img src="assets/img/18.png" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/311.png" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/314.jpg" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/76.png" width="120px" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/img/logo-05.png" alt="">
                        </a>
                    </div>
                    <!--end logos-->
                </div>
                <!--end container-->
            </section>
            <!--END PARTNERS ****************************************************************************************-->

        </main>
        <!--end #content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        <footer id="ts-footer">

           <!-- <div class="map ts-height__600px" id="map" data-mask-top-nw-color="#fff" data-mask-bottom-wn-color="#1f1f1f"></div> -->
            <!--end map-->
            <section id="contact" class="ts-block ts-background-is-dark ts-separate-bg-element" data-bg-image="assets/img/bg-desk.jpg" data-bg-image-opacity=".1" data-bg-color="#1f1f1f" data-mask-bottom-wn-color="#000">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Contact Us</h3>
                            <address>
                                <figure>
                                    2590 Rocky Road
                                    <br>
                                    Philadelphia, PA 19108
                                </figure>
                                <br>
                                <figure>
                                    <div class="font-weight-bold">Email:</div>
                                    <a href="#">office@example.com</a>
                                </figure>
                                <figure>
                                    <div class="font-weight-bold">Phone:</div>
                                    +1 215-606-0391
                                </figure>
                                <div class="font-weight-bold">Skype:</div>
                                startups.agency
                            </address>
                            <!--end address-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-8">
                            <h3>Contact Form</h3>
                            <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="assets/php/email.php">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-name">Your Name *</label>
                                            <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-email">Your Email *</label>
                                            <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                </div>
                                <!--end row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form-contact-message">Your Message *</label>
                                            <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Your Message" required></textarea>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-12 -->
                                </div>
                                <!--end row -->
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send a Message</button>
                                </div>
                                <!--end form-group -->
                                <div class="form-contact-status"></div>
                            </form>
                            <!--end form-contact -->
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>

            <div class="text-center text-white pb-5" data-bg-color="#000">
                <small>© 2018 ThemeStarz, All Rights Reserved</small>
            </div>
        </footer>
        <!--end #footer-->
    </div>
    <!--end page-->

    <script>
        if( document.getElementsByClassName("ts-full-screen").length ) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
	<script src="assets/js/isInViewport.jquery.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/scrolla.jquery.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <!--Google map-->

    <script>
        var latitude = 34.038405;
        var longitude = -117.946944;
        var markerImage = "assets/img/map-marker.png";
        var mapElement = "map";
        var mapStyle = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dbdbdb"},{"visibility":"on"}]}];
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
    </script>


<script>

const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";
  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const increment = target / 200;
    if (count < target) {
      counter.innerText = `${Math.ceil(count + increment)}`;
      setTimeout(updateCounter, 1);
    } else counter.innerText = target;
  };
  updateCounter();
});


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activetoggle");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
