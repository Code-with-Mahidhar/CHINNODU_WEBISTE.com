<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CHINNODU RICE - Business Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-success px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                 <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fas fa-phone-alt"></i></a>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>CHINNODU RICE</h1>
                    <!-- <img src="<?php echo base_url();?>assets/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?php echo base_url();?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo base_url();?>about-us" class="nav-item nav-link">About</a>
                        <a href="<?php echo base_url();?>services" class="nav-item nav-link">Services</a>
                        <a href="<?php echo base_url();?>procruement-details" class="nav-item nav-link">Procruement Details</a>
                        <a href="<?php echo base_url();?>testimonial" class="nav-item nav-link">Testimonial</a>
                        <a href="<?php echo base_url();?>contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="<?php echo base_url();?>order" class="btn btn-danger rounded-pill py-2 px-4 ms-lg-4">Order Now</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="<?php echo base_url();?>assets/img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">chinnodu Rice</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Fresh, Local, Direct – Your Food, Their Passion!</h1>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-success rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url();?>assets/img/carousel-1.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">From Farm to Fork</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Bridging the Gap Between Growers and Gourmets"</h1>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-success rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url();?>assets/img/carousel-3.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The Agri</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">You Like To Go?</h1>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-success rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-success" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-success" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #198754 transparent #198754;">
                            <img src="<?php echo base_url();?>assets/img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="section-about-title pe-3">About Us</h5>
                        <h1 class="mb-4">Welcome to <span class="text-success">Chinnodu Rice</span></h1>
                        <p class="mb-4">At Chinnodu Rice, Mission is to revolutionize the way you experience food by connecting farmers directly to consumers. We believe in fostering a sustainable and transparent food system where fresh, locally-sourced produce and products are accessible to everyone. By eliminating the middlemen, we empower farmers to earn fair prices for their hard work while providing consumers with the freshest, highest-quality foods. Our commitment is to create a community where the bond between grower and gourmet is strong, celebrating the journey of food from farm to fork, and ensuring a healthier, more vibrant future for all.</p>
                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Direct Farm-to-Consumer Marketplace</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Transparent Sourcing</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Fair Pricing for Farmers</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Eco-Friendly Practices</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Educational Resources</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Convenient Delivery Options</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Seasonal and Local Produce</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Farm-to-Table Events</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Subscription Boxes</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Community Support</p>
                            </div>
                        </div>
                        <a class="btn btn-success rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Our</h5>
                    <h1 class="mb-0">Services</h1>
                </div>
                <div class="col-lg-12">
                <div class="row gy-3 gx-5">
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s" style="background:#90EE90 !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3" style="width: 60px; height: 60px;">
                        	<i class="fa fa-cubes fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Direct Sourcing</h4>
                        <p style="text-align:justify !important;">We connect farmers directly with consumers, cutting out the middlemen. This direct link ensures that you receive the freshest produce while farmers get fair compensation for their hard work.</p>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.6s" style="background:#fff !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3" style="width: 60px; height: 60px;">
                        	<i class="fa fa-cloud-sun fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Seasonal Selection</h4>
                        <p style="text-align:justify !important;">We offer a variety of fruits, vegetables, and other products that are in season. This not only guarantees the freshest produce but also supports natural growing cycles and biodiversity.</p>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s" style="background:#90EE90 !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3" style="width: 60px; height: 60px;">
                        	<i class="fa fa-hotel fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Farm Fresh Quality</h4>
                        <p style="text-align:justify !important;">By reducing the time between harvest and your table, we preserve the maximum nutrients and flavor in every product, ensuring you enjoy the highest quality food.</p>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.6s" style="background:#fff !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3" style="width: 60px; height: 60px;">
                        	<i class="fa fa-people-carry fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Customizable Orders</h4>
                        <p style="text-align:justify !important;">Our service allows you to tailor your orders to fit our preferences and needs.Whether you want a specific type of produce or particular quantity,you customize your box to get exactly what you want.</p>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s" style="background:#fff !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3" style="width: 60px; height: 60px;">
                        	<i class="fa fa-users fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Community Support</h4>
                        <p style="text-align:justify !important;">By buying directly from local farmers,help strengthen local economies.This support fosters community resilience, creates jobs, and helps small-scale farmers thrive</p>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.6s" style="background:#90EE90 !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3"  style="width: 60px; height: 60px;">
                        	<i class="fa fa-seedling fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Sustainable Practices</h4>
                        <p style="text-align:justify !important;">We support farmers who use environmentally friendly methods like organic farming,crop rotation, and reduced pesticide use. This helps promote soil health, biodiversity, and a lower carbon footprint.</p>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s" style="background:#fff !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3" style="width: 60px; height: 60px;">
                        	<i class="fa fa-users-cog fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Transparent Supply Chain</h4>
                        <p style="text-align:justify !important;">Our platform provides detailed about where your food comes from. You can learn about the farms, the farming practices used, and the story of each farmer, ensuring full transparency in our food choices.</p>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.6s" style="background:#90EE90 !important;">
                        <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3 mt-3"  style="width: 60px; height: 60px;">
                        	<i class="fa fa-users fa-2x text-white"></i>
                        </div>
                        <h4 class="text-success">Membership Benefits</h4>
                        <p style="text-align:justify !important;">Join our membership program to enjoy exclusive perks like discounts on orders, access new products, and special offers. Our members are our biggest supporters, and we reward their loyalty with extra benefits.</p>
                    </div>
                </div>
             </div>
           </div>
        </div>
        <!-- Services End -->
        
        


        
        <!-- Tour Booking Start -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3">Booking</h5>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="text-white mb-4">Discover the convenience of online booking with Chinnodu Rice, your trusted source for premium-quality rice. Our seamless online platform allows you to easily browse and select from our range of delicious, sustainably sourced rice products.</p>
                        <p class="text-white mb-4">With just a few clicks, you can place your order and have it delivered straight to your doorstep, ensuring you always have the freshest rice on hand for your culinary creations. Experience the exceptional taste and quality of Chinnodu Rice, and enjoy the simplicity of our online booking system designed to make your life easier and your meals extraordinary.
                        </p>
                        <a href="#" class="btn btn-light text-success rounded-pill py-3 px-5 mt-2">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-white mb-3">Book A Order</h1>
                        <p class="text-white mb-4"> Get More Deal Orders Here.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="name" placeholder="Your Name">
                                        <label for="name" >Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-white border-0" id="email" placeholder="Your Email">
                                        <label for="email" >Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="phonenumber" data-target-input="nearest">
                                        <input type="number" class="form-control bg-white border-0" id="pphone number" placeholder="phone number"  />
                                        <label for="phone number" >Primary Ph.No</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="phonenumber" data-target-input="nearest">
                                        <input type="number" class="form-control bg-white border-0" id="sphone number" placeholder="Phone number"  />
                                        <label for="phone number">Secondary Ph.No</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-danger text-white w-100 py-3" type="submit">Order Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tour Booking End -->

        

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Since switching to Chinnodu Rice, my meals have never been better. The grains are so fresh and flavorful, you can really taste the difference. Plus, knowing I'm supporting local farmers makes every bite even more satisfying</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="<?php echo base_url();?>assets/img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Ramesh</h5>
                            <p class="mb-0">India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">As a chef,quality ingredients are paramount.Chinnodu Rice provides rice that consistently meets my high standards.My customers frequently comment on incredible taste and texture,which I owe to fantastic product.</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="<?php echo base_url();?>assets/img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Suresh</h5>
                            <p class="mb-0">India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Choosing Chinnodu Rice made me feel more connected to my food and its origins.Their dedication to sustainable farming practices aligns with my values,reassuring to know every purchase supports environmentally responsible agriculture.</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="<?php echo base_url();?>assets/img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Vikas</h5>
                            <p class="mb-0">India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Partnering with Chinnodu Rice has allowed me to reach a broader audience who appreciates high-quality,organic rice.Direct connection to consumers is incredibly rewarding,their support helps me maintain and improve my farming methods</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="<?php echo base_url();?>assets/img/testimonial-4.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Ramu</h5>
                            <p class="mb-0">India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-success rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-success rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-success rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-success rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabic</option>
                                                <option value="2">German</option>
                                                <option value="3">Greek</option>
                                                <option value="3">New York</option>
                                            </select>
                                            <label for="select1">English</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">INR</option>
                                                <option value="3">GBP</option>
                                            </select>
                                            <label for="select1">$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Payments</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Your Site Name</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-success btn-success-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
    </body>

</html>