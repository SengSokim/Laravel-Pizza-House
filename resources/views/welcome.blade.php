
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pizza House</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/flaticon.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="img/pizzahouse.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        @if( Session::has("success") )
        
            <div class="alert alert-success alert-block" role="alert" data-closable>
                
                {{ Session::get("success") }}
                <img src="close.soon" style="display:none;" onerror="(function(el){ setTimeout(function(){ el.parentNode.parentNode.removeChild(el.parentNode); },3000 ); })(this);" />
            </div>
        @endif
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Pizza House!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <section class="portinfo">
            <div class="half-img"><img src="img/pizza1.jpg"></div>
            <div class="info" style="color: #ffff">
                <center><h3>Welcome to PIZZA HOUSE</h3></center>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum itaque aspernatur maxime porro reprehenderit assumenda culpa illo dicta soluta. Iusto dolore non consequatur voluptas necessitatibus neque maiores, laboriosam aspernatur exercitationem.</p>
            </div>
        </section>
        <section class="portinfonum">
            <div class="info1" style="color: #ffff">
                <div class="text1">
                    <h3>000 (123) 456 7890</h3>
                    <p>A small river named Duden flows</p>
                </div>
                <div class="text2">
                    <h3>198 West 21th Street</h3>
                    <p>Suite 721 New York NY 10016</p>
                </div>
                <div class="text3">
                    <h3>Open Monday-Friday</h3>
                    <p>8:00am - 9:00pm</p>
                </div>
                <div>
                    <span class="fa-stack fa-2x" id="icon1">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div>
                    <span class="fa-stack fa-2x" id="icon1">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div>
                    <span class="fa-stack fa-2x" id="icon1">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                </div>                    
            </div>
            
        </section>
        <section class="portinfo1">
            <div class="info" style="color: #ffff">
                <center><h3>INTRODUCTION</h3></center>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum itaque aspernatur maxime porro reprehenderit assumenda culpa illo dicta soluta. Iusto dolore non consequatur voluptas necessitatibus neque maiores, laboriosam aspernatur exercitationem.</p>
            </div>
            <div class="half-img"><img src="img/pizza4.jpg"></div>  
        </section>
                <!-- Services-->
                <section class="page-section" id="services">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase" style="color: #ffff">Services</h2>
                            <h3 class="section-subheading text-muted">Delivery or Pick-up</h3>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3" style="color: #ffff">DELIVERY</h4>
                                <p class="text-muted">We deliver your pizza to your door step</p>
                            </div>
                            <div class="col-md-6">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3" style="color: #ffff">PICK-UP</h4>
                                <p class="text-muted">You come to the store to take your pizza</p>
                            </div>
                            
                        </div>
                    </div>
                </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Images of Pizza</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/pizza1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pizza and Beer</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/pizza2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pepperoni</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/pizza3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Flour</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/pizza4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ingredient</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/pizza8.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cheese</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/pizza9.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pineapple on pizza</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start" style="color: white">Copyright &copy; Pizza House 2022</div>
                    
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!"  style="color: white">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!"  style="color: white">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
