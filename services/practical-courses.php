<?php include '../includes/header.php'; ?>

<body>
    <p class="scroll body-text"><a href="#">Scroll <i class="fa fa-arrow-right"></i></a></p>
    <!-- Page Wrapper -->
    <div id="page-wrapper">
        <!-- Wrapper -->
        <div id="wrapper">
            <div class="wrapper d-flex align-items-stretch text-center">
                <nav id="sidebar" class="sidebar">
                    <div class="custom-menu">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                            <i class="fa fa-bars"></i>
                            <span class="sr-only">Toggle Menu</span>
                        </button>
                    </div>
                    <div class="p-4 pt-5" id="menu">
                        <a href="<?php echo BASE_URL;?>/home" class="logo"><img src="<?php echo BASE_URL;?>/images/SVG/logo.svg"></a>
                        <p class="text-dark">TYD Innovation Incubator</p>
                        <ul class="list-unstyled components mt-5" id="menu-list">
                            <li class="active">
                                <a href="<?php echo BASE_URL;?>/#home">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL;?>/#services">Services</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL;?>/#work">Work</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL;?>/#news">News</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL;?>/#about">About</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                        <div class="span-1-25" id="icons">
                            <ul class="icons">
                                <li>
                                    <a href="https://www.facebook.com/tydinnovation/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tydinnovation/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a>
                                </li>
                                <li>
                                    <a href="https://wa.me/255738717251" class="icon fa-whatsapp" target="_blank"><span class="label">WhatsApp</span></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/IncubatorTyd" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/tydinnovation/" class="icon fa-linkedin" target="_blank"><span class="label">Linkedin</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!--            services section-->
            <section class="panel color2" id="courses">
                <div class="inner columns">
                    <div class="span-1-75">
                        <h2 class="major">Practical Courses.</h2>
                        <p class="body-text">Whether you're a beginner looking to make a career switch to tech or an experienced professional wanting to improve your skill set, we can help.</p>
                        <p><i class="fa fa-tags"></i> Other services: <a href="<?php echo BASE_URL;?>/services/web-applications"> Web Application</a>, <a href="<?php echo BASE_URL;?>/services/website-development"> Website Development</a>, <a href="<?php echo BASE_URL;?>/services/web-hosting"> Web Hosting</a></p>

                    </div>
                    <div class="span-4-25">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Our Practical Courses:</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-laravel-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">Web Development With Laravel</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h5 class="text-dark mb-1">Tzs 399,000/=</h5>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-android-os-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">Android Mobile App Development</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h5 class="text-dark mb-1">Tzs 399,000/=</h5>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-web-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">Website Design &amp; Development</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h5 class="text-dark mb-1">Tzs 399,000/=</h5>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-secured-network-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">Computer Networks Security</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h5 class="text-dark mb-1">Tzs 399,000/=</h5>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-java-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">Java</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h6 class="text-dark mb-1">Tzs 399,000/=</h6>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-jquery-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">JQuery</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h5 class="text-dark mb-1">Tzs 399,000/=</h5>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-python-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">Python</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h5 class="text-dark mb-1">Tzs 399,000/=</h5>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card rounded text-dark mb-2">
                                                <div class="card-body p-3">
                                                    <img src="<?php echo BASE_URL;?>/images/courses/icon-bootstrap-100.svg" />
                                                    <h6 class="card-title mb-1 text-dark">Bootstrap Framework</h6>
                                                    <p class="small mb-1">for beginners</p>
                                                    <h5 class="text-dark mb-1">Tzs 399,000/=</h5>
                                                    <p class="small mb-1"><i class=" fa fa-calendar"></i> 4 Weeks</p>
                                                    <a class="text-center btn btn-danger btn-sm btn-block mt-2" href="#" role="button">Enroll</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Panel -->

            <?php include '../includes/footer.php';?>
