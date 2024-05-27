<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/man.png" rel="icon" />
    <title>Daffa Akhdaan</title>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <div id="main-wrapper">
        <header id="header" class="sticky-top-slide">
            <nav class="primary-menu navbar navbar-expand-lg text-uppercase navbar-line-under-text fw-600">
                <div class="container position-relative">
                    <div class="col col-lg-8 navbar-accordion px-0">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
                        <div id="header-nav" class="collapse navbar-collapse justify-content-center">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 d-flex justify-content-end ps-0">
                        <ul class="social-icons">
                            <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/daffaakhdaan" target="_blank" title="" data-bs-original-title="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://x.com/PpawazZ" target="_blank" title="" data-bs-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-instagram"><a data-bs-toggle="tooltip" href="http://www.instagram.com/daffaakhdaann" target="_blank" title="" data-bs-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="content" role="main">
            <section id="home">
                <div class="hero-wrap">
                    <div class="hero-mask opacity-8 bg-dark"></div>
                    <div class="hero-bg parallax" style="background-image:url('images/bg-me.jpg');"></div>
                    <div class="hero-content d-flex fullscreen-with-header py-5">
                        <div class="container my-auto py-4">
                            <div class="row">
                                <div class="col-lg-12 text-center order-1 order-lg-0">
                                    <h1 class="text-8 text-white fw-400 mb-0 text-uppercase">Hi, I'm a Daffa Akhdaan</h1>
                                    <div class="typed-strings">
                                        <p>Android Developer</p>
                                        <p>Backend Developer</p>
                                        <p>UI/UX Designer</p>
                                    </div>
                                    <h2 class="text-18 text-white fw-600 text-uppercase mb-0 ms-n1"><span class="typed"></span></h2>
                                    <p class="text-5 text-light">based in Sukabumi, Indonesia</p>
                                    <a href="#portfolio" class="btn btn-primary fw-600 rounded-0 smooth-scroll mt-3">View My Works</a>
                                </div>
                            </div>
                        </div>
                        <a href="#about" class="scroll-down-arrow text-light smooth-scroll"><span class="animated"><i class="fas fa-arrow-down"></i></span></a>
                    </div>
                </div>
            </section>

            <section id="about" class="section">
                <div class="container">
                    <p class="text-center mb-2 wow fadeInUp"><span class="bg-primary text-dark px-2">About Me</span></p>
                    <h2 class="text-10 fw-600 text-center mb-5 wow fadeInUp">Know Me More</h2>

                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start wow fadeInUp">
                            <h2 class="text-8 fw-400 mb-3">Hi, I'm <span class="fw-700 border-bottom border-3 border-primary">Daffa Akhdaan</span></h2>
                            <p class="text-5">Enthusiastic and motivated undergraduate Information Technology student at Universitas Muhammadiyah Sukabumi, looking to utilize my
                                skills in programming, especially to develop innovative software and use the latest technology. A fast learner and easily adaptable to new
                                environments, I am also eager to contribute my skills to a forward-thinking team where I can continue to learn and grow.
                            </p>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="featured-box style-4">
                                <div class="featured-box-icon text-25 fw-500 bg-primary rounded-circle"><span class="wow heartBeat" data-wow-delay="1.3s">1</span></div>
                                <h3 class="text-7 wow rubberBand" data-wow-delay="2s">Years of <span class="fw-700">Experiance</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-3 mt-4">
                        <?php foreach ($portfolio_daffa as $identitas) { ?>
                            <div class="col-6 col-lg-3 wow fadeInUp">
                                <p class="text-muted fw-500 mb-0">Name:</p>
                                <p class="text-4 text-dark fw-600 mb-0"><?php echo $identitas['nama']; ?></p>
                            </div>
                            <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                                <p class="text-muted fw-500 mb-0">Email:</p>
                                <p class="text-4 fw-600 mb-0"><a class="link-dark" href="#"><?php echo $identitas['email']; ?></a></p>
                            </div>
                            <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                                <p class="text-muted fw-500 mb-0">Date of birth:</p>
                                <p class="text-4 text-dark fw-600 mb-0"><?php echo $identitas['tgl_lahir']; ?></p>
                            </div>
                            <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                                <p class="text-muted fw-500 mb-0">From:</p>
                                <p class="text-4 text-dark fw-600 mb-0"><?php echo $identitas['alamat']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <section id="services" class="section bg-light">
                <div class="container">
                    <p class=" text-center mb-2 wow fadeInUp"><span class="bg-primary text-dark px-2">What I Do?</span></p>
                    <h2 class="text-10 fw-600 text-center mb-5 wow fadeInUp">How I can help your next project</h2>

                    <div class="row gy-5 mt-5">
                        <div class="col-sm-6 col-lg-4 wow fadeInUp">
                            <div class="featured-box text-center px-md-4">
                                <div class="featured-box-icon text-primary text-13"> <i class="fas fa-mobile-alt"></i> </div>
                                <h3 class="text-6 fw-600 mb-3">Android Development</h3>
                                <p class="text-muted mb-0">As an Android developer, I specialize in using Kotlin and the latest Android technologies to create cutting-edge mobile applications.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInUp">
                            <div class="featured-box text-center px-md-4">
                                <div class="featured-box-icon text-primary text-13"> <i class="fas fa-server"></i></div>
                                <h3 class="text-6 fw-600 mb-3">Backend Development</h3>
                                <p class="text-muted mb-0">I am a backend developer proficient in JavaScript, leveraging the Express.js framework to build robust server-side applications.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInUp">
                            <div class="featured-box text-center px-md-4">
                                <div class="featured-box-icon text-primary text-13"> <i class="fas fa-pencil-ruler"></i> </div>
                                <h3 class="text-6 fw-600 mb-3">UI/UX Design</h3>
                                <p class="text-muted mb-0">As a UI/UX designer, I use Figma to create both high-fidelity and low-fidelity designs, ensuring intuitive and visually appealing user experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="resume" class="section">
                <div class="container">
                    <p class=" text-center mb-2 wow fadeInUp"><span class="bg-primary text-dark px-2">Resume</span></p>
                    <h2 class="text-10 fw-600 text-center mb-5 wow fadeInUp">A summary of My Resume</h2>

                    <div class="row g-5 mt-5">
                        <div class="col-lg-6 wow fadeInUp">
                            <h2 class="text-7 fw-600 mb-4 pb-2">My Education</h2>
                            <div class="border-start border-2 border-primary ps-3">
                                <h3 class="text-5">Bachelor Degree in Information Technology</h3>
                                <p class="mb-2">Universitas Muhammadiyah Sukabumi / Sep 2021 - Jul 2025 (Expected)</p>
                                <p class="text-muted">Universitas Muhammadiyah Sukabumi - Jl. R. Syamsudin, S.H. No. 50, Kota Sukabumi, Jawa Barat 43113<br>
                                    GPA: 3.65/4.00<br>
                                    Learned various fields of computer science such as basic to advanced programming, artificial intelligence, algorithms and data structures, calculus and statistics, computer networks, etc.</p>
                                <hr class="my-4">
                                <h3 class="text-5">High School in Natural Science</h3>
                                <p class="mb-2">SMAN 2 Sukabumi / Aug 2018 - Jul 2021</p>
                                <p class="text-muted">SMAN 2 Sukabumi - Jl. Karamat No.93, Kota Sukabumi, Jawa Barat 43122<br>
                                    GPA: 85.00/100.00<br>
                                    Top 20 Parallel Ranking.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="text-7 fw-600 mb-4 pb-2">My Experience</h2>
                            <div class="border-start border-2 border-primary ps-3">
                                <h3 class="text-5">Full Stack Developer Internship</h3>
                                <p class="mb-2">Dinas Perpustakaan dan Arsip Kota Sukabumi / Mar 2024 - Jul 2024</p>
                                <p class="text-muted">Government office to carry out government and development affairs in the field of libraries and archives.<br>
                                    Created frontend and backend for OPAC (Online Public Access Catalog) for mobile application version using Kotlin language and Express.js framework.<br>
                                    Designed low-fidelity to high-fidelity application designs to meet user needs.</p>
                                <hr class="my-4">
                                <h3 class="text-5">Mobile Development Cohort</h3>
                                <p class="mb-2">Bangkit Academy 2023 By Google, GoTo, Traveloka / Aug 2023 - Jan 2024</p>
                                <p class="text-muted">Bangkit is a career readiness program that aims to produce high-caliber technical talent for world-class Indonesian technology companies and startups, fully supported by Google, GoTo, Tokopedia, and Traveloka.<br>
                                    Graduated with Distinction specializing in Mobile Development.<br>
                                    Learned from basic to expert Android, using the latest Android technology with experienced instructors.<br>
                                    Acquired soft skills such as time management, professional communication, and English taught directly by native speakers.</p>
                                <hr class="my-4">
                                <h3 class="text-5">Public Relation Member</h3>
                                <p class="mb-2">Google Developer Student Club / Dec 2021 - May 2022</p>
                                <p class="text-muted">Google Developer Student Club is a university-based community group for students interested in technology, especially technology from Google.<br>
                                    Created relationships with external parties (Partnership).<br>
                                    Managed and created creative ideas for social media.</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-7 fw-600 mb-4 pb-2 mt-5 wow fadeInUp">My Skills</h2>
                    <div class="row gx-5">
                        <div class="col-md-6 wow fadeInUp">
                            <p class="fw-500 text-start mb-2">Kotlin <span class="float-end">80%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="fw-500 text-start mb-2">HTML/CSS <span class="float-end">95%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="fw-500 text-start mb-2">JavaScript <span class="float-end">50%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <p class="fw-500 text-start mb-2">React Native <span class="float-end">40%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="fw-500 text-start mb-2">Mongodb <span class="float-end">60%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="fw-500 text-start mb-2">Express JS <span class="float-end">70%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="hero-wrap">
                    <div class="hero-mask opacity-8 bg-dark"></div>
                    <div class="hero-bg parallax" style="background-image:url('images/intro-bg-2.jpg');"></div>
                    <div class="hero-content section">
                        <div class="container text-center py-5 wow fadeInUp">
                            <h2 class="text-10 fw-600 text-white mb-5">Interested in working with me?</h2>
                            <a href="#contact" class="btn btn-primary rounded-0 smooth-scroll wow rubberBand" data-wow-delay="1s">Hire Me!</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="section bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 text-center text-lg-start wow fadeInUp">
                            <h2 class="text-10 fw-600 mb-5">Let's get in touch</h2>
                            <p class="text-5 mb-5">I enjoy discussing new projects and design challenges. Please share as much info, as possible so we can get the most out of our first catch-up.</p>
                            <h3 class="text-5 fw-600">Living In:</h3>
                            <address class="text-4">
                                Selabintana street,
                                Sukabumi, Indonesia.
                            </address>
                            <h3 class="text-5 fw-600">Call:</h3>
                            <p class="text-4">(+62) 851-5640-6383</p>
                            <ul class="social-icons social-icons-lg justify-content-center justify-content-lg-start mt-5">
                                <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://x.com/PpawazZ" target="_blank" title="" data-bs-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/daffaakhdaan" target="_blank" title="" data-bs-original-title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li class="social-icons-instagram"><a data-bs-toggle="tooltip" href="http://www.instagram.com/daffaakhdaann" target="_blank" title="" data-bs-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-github"><a data-bs-toggle="tooltip" href="https://github.com/ppawazz" target="_blank" title="" data-bs-original-title="GitHub"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer id="footer" class="section bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start wow fadeInUp">
                        <p class="mb-2 mb-lg-0">Copyright © 2021 <a class="fw-600" href="#">Callum</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <p class="mb-0 text-center text-lg-end">Portfolio <a class="fw-600" href="hhttp://www.instagram.com/daffaakhdaann">Daffa Akhdaan</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/typed/typed.min.js"></script>
    <script src="vendor/parallaxie/parallaxie.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/switcher.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>