<?php include '../../includes/header.php'; ?>

<body>

    <p class="scroll body-text"><a href="#">Scroll <i class="fa fa-arrow-right"></i></a></p>
    <!-- Page Wrapper -->
    <div id="page-wrapper">
        <!-- Wrapper -->
        <div id="wrapper">
            <div class="wrapper d-flex align-items-stretch text-center">
                <?php include '../../includes/sidebar.php';?>
            </div>


            <!--            services section-->
            <section class="panel color2" id="courses">
                <div class="inner columns aligned">
                    <div class="span-2 course-intro">
                        <img src="<?php echo BASE_URL;?>/images/courses/white/icon-laravel.svg" />
                        <h3>Web Development With Laravel Framework</h3>
                        <p class="mb-3">If you are a web developer or web designer or you want to become a web developer, this course is ideal for you. You can learn Laravel PHP Framework with this course. This course is beginner level and it starts from scratch. Hence, a beginner or a student can easily take this course and learn from it. Laravel is a PHP framework for modern web apps.</p>

                        <ul class="icons">
                            <li class="pr-1">
                                <span>Share on:</span>
                            </li>
                            <li>
                                <a href="#" class="icon fa-whatsapp" target="_blank"><span class="label">WhatsApp</span></a>
                            </li>
                            <li>
                                <a href="#" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a>
                            </li>
                            <li>
                                <a href="#" class="icon fa-envelope" target="_blank"><span class="label">Mail</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a>
                            </li>
                            <li>
                                <a href="#" class="icon fa-linkedin" target="_blank"><span class="label">Linkedin</span></a>
                            </li>
                        </ul>

                        <p class="body-text link-effect"><a href="#">Enroll Now <i class="fa fa-arrow-right"></i></a></p>


                    </div>
                    <div class="span-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="tab">
                                        <button class="btn btn-danger btn-sm tablinks" onclick="openTab(event, 'overview')" id="defaultOpen"> Overview </button>
                                        <button class="btn btn-danger btn-sm tablinks" onclick="openTab(event, 'curriculum')"> Course Outline </button>
                                        <button class="btn btn-danger btn-sm tablinks" onclick="openTab(event, 'review')"> Review </button>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-justify" id="kay">
                                    <div id="overview" class="tabcontent">
                                        <h5>Why Laravel Framework?</h5>
                                        <p class="mb-2">Laravel is a free, open source PHP web application framework, designed for the development of MVC web applications. This course will be a project base, learn the basics to start coding in the hottest most popular PHP framework in the industry.</p>

                                        <h6 class="mb-2">After a successful completion of this course, one should be able to:</h6>
                                        <ol class="mb-2">
                                            <li>Learn how to install and configure Laravel.</li>
                                            <li>Learn foundational topics such as routing and requests, controlling using databases.</li>
                                            <li>Understand the syntax.</li>
                                            <li>Learn authentication system, and much more.</li>
                                            <li>Understand the file structure.</li>
                                            <li>Understand basic workflow.</li>
                                            <li>Learn to submit forms, process data, and save it into your database.</li>
                                            <li>Start simple laravel projects</li>
                                        </ol>

                                        <h6 class="mb-2">Requirements:</h6>
                                        <ol>
                                            <li>Basic PHP syntax.</li>
                                            <li>Basic Object Oriented Programming concepts knowledge.</li>
                                            <li>HTML and CSS (would be required when modifying website source html files).</li>
                                        </ol>
                                    </div>

                                    <div id="curriculum" class="tabcontent">
                                        <h5>Week 1:</h5>
                                        <ol class="mb-2">
                                            <li>Introduction to laravel framework and its applications.</li>
                                            <li> What is MVC.</li>
                                            <li>Set up the proper environment for laravel to run.
                                                <ul>
                                                    <li>Installation of MySQL. </li>
                                                    <li>Installation of composer.</li>
                                                    <li>Installation for laravel.</li>
                                                </ul>
                                            </li>
                                            <li>File structure</li>
                                            <li>Introductions to routes</li>
                                            <li>What is middleware.</li>
                                            <li>What is Namespace.</li>
                                            <li>Using artisan command line interface.</li>
                                        </ol>

                                        <h5>Week 2:</h5>
                                        <ol class="mb-2">
                                            <li>Passing data to our view through controller.
                                                <ul>
                                                    <li>Understand view</li>
                                                    <li>Understand controller (CRUD OPERATION)</li>
                                                </ul>
                                            </li>
                                            <li>Laravel blade syntax.</li>
                                            <li> Laravel database Eloquent(MODEL)
                                                <!--
                                                <ul>
                                                    <li>Configure database settings.</li>
                                                    <li>Create table files in laravel.</li>
                                                    <li>Create models.</li>
                                                    <li>Database migrations.</li>
                                                </ul>
-->
                                            </li>
                                            <!--
                                            <li>Authentication system in laravel</li>
                                            <li>Errors handling and loggings</li>
                                            <li>CSRF Protection</li>
                                            <li>How to use Laravel Tinker</li>
-->
                                        </ol>
                                    </div>

                                    <div id="review" class="tabcontent">
                                        <h3>Reviews</h3>
                                        <p>Reviews (0)</p>
                                    </div>

                                </div>
                            </div>




                            <script>
                                function openTab(evt, tabName) {
                                    var i, tabcontent, tablinks;
                                    tabcontent = document.getElementsByClassName("tabcontent");
                                    for (i = 0; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                    }
                                    tablinks = document.getElementsByClassName("tablinks");
                                    for (i = 0; i < tablinks.length; i++) {
                                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                                    }
                                    document.getElementById(tabName).style.display = "block";
                                    evt.currentTarget.className += " active";
                                }

                                // Get the element with id="defaultOpen" and click on it
                                document.getElementById("defaultOpen").click();
                            </script>
                        </div>
                    </div>

                    <div id="appendedColumn" class="">
                        <div id="column2" class="col-md-12 text-justify news-content"> </div>
                    </div>
                </div>

            </section>

            <!-- Panel -->

            <?php include '../../includes/footer.php';?>
