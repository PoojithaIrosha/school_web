<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="wattegama central college, central college wattegama, wattegama, school, poojitha irosha">
    <title>Wattegama Central College</title>
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./aos/aos.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">

                <h6 class="text-uppercase my-auto fw-bold">Wattegama Central College</h6>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-warning" href="#home">Home</a>
                    <a class="nav-link" href="#mission_vision">Mission & Vision</a>
                    <a class="nav-link" href="#principal">Principal</a>
                    <a class="nav-link" href="#history">History</a>
                    <a class="btn btn-primary ms-3 rounded-3" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row " data-aos="fade-up" data-aos-duration="1500">
                <div class="col-lg-8 mx-auto text-center">
                    <img data-aos="flip-left" data-aos-duration="1000" class="school_logo mb-3" src="./img/logo.jpg" alt="">
                    <h1 class="display-3 fw-bold school_name" id="school_name">Central College Wattegama</h1>
                    <h4 class="display-6 text-warning fw-bold">(National School)</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, ipsam!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision -->
    <section id="mission_vision" class="bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <h5 class="text-primary text-center fw-bold">MISSION & VISION</h5>
                    <h1 class="text-center mb-4">BE PROMPT</h1>

                </div>

                <div data-aos="flip-right" data-aos-duration="1500" class="col-10 offset-1 col-md-6 offset-md-0">
                    <div class="mv_car card p-4 ">
                        <div class="iconbox">
                            <i class='bx bx-comment-detail'></i>
                        </div>
                        <h5 class="mt-4 mb-3 mv_title">Mission</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolorum quam neque quia laboriosam voluptatum maxime </p>
                    </div>
                </div>
                <div data-aos="flip-left" data-aos-duration="1500" class="col-10 offset-1 col-md-6 offset-md-0">
                    <div class="mv_car card p-4">
                        <div class="iconbox">
                            <i class='bx bxs-rocket'></i>
                        </div>
                        <h5 class="mt-4 mb-3 mv_title">Vision</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolorum quam neque quia laboriosam voluptatum maxime </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Principal -->
    <section id="principal">
        <div class="container">
            <div class="col-10 offset-1">
                <div class="col-12 ">
                    <h5 class="text-primary text-center fw-bold">PRINCIPAL</h5>
                    <h1 class="text-center mb-4">Great Leadership</h1>

                    <div class="col-12 mb-5">
                        <div class="col-12 btn-group" role="group">
                            <button onclick="changePrincipalDetailsToPrimary();" type="button" class="btn btn-outline-secondary w-50" id="btn_primary_section">Primary</button>
                            <button onclick="changePrincipalDetailsToSecondary();" type="button" class="btn btn-outline-secondary w-50" id="btn_secondary_section">Secondary</button>
                        </div>
                    </div>
                </div>

                <div class="card shadow-lg card-radius principal_card" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="card-body">
                        <div class="row d-flex justify-content-evenly">
                            <div class="
										col-12 col-lg-6
										d-flex
										justify-content-center
										mt-3 mt-lg-0
									">
                                <img id="principal_image" class="principal_image w-75 img" src="./img/principal1.jpg" alt="" srcset="" />
                            </div>
                            <div class="
										col-12 col-lg-6
										mt-2
										d-flex
										justify-content-center
										align-items-center
										flex-column
									">
                                <h1 class="principal_title text-primary fs-2 fw-bold" id="principal_title">The Principal
                                </h1>

                                <h3 class="lead fw-bold principal_name text-secondary mt-1" id="principal_name">
                                    Mr. M.H.Wijerathna</h3>
                                <p class="text-center mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, facilis!
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIETIES -->
    <section id="projects mb-5">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h4 class="text-primary fw-bold">SOCIETIES</h3>
                        <h1 class="fw-bold">Extracurricular Activities</h2>
                </div>
                <div class="row g-3">
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="project">
                            <img src="./img/media.jpg" alt="">
                            <div class="overlay">
                                <div>
                                    <h4 class="text-white">Media Unit</h4>
                                    <h6 class="text-white">Lorem, ipsum.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="project">
                            <img src="./img/english.jpg" alt="">
                            <div class="overlay">
                                <div>
                                    <h4 class="text-white"> English Unit</h4>
                                    <h6 class="text-white">Lorem, ipsum.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="project">
                            <img src="./img/ICT.jpg" alt="">
                            <div class="overlay">
                                <div>
                                    <h4 class="text-white">ICT Unit</h4>
                                    <h6 class="text-white">Lorem, ipsum.</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- HISTORY -->
    <section data-aos="fade-up" data-aos-duration="1000" id="history" class="row w-100 py-5 bg-light" id="features">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h4 class="text-primary fw-bold">HISTORY</h4>
                        <h2>60 Years of Excellence</h2>
                        <p class="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, facilis! Culpa nostrum est expedita, distinctio, consequuntur dolores eos corrupti deserunt tenetur sint eum iste modi repellat? Exercitationem saepe, odio, excepturi
                            ratione aliquid corrupti architecto aut iste, inventore perspiciatis quod aperiam deleniti blanditiis tempora necessitatibus officiis dignissimos temporibus! Numquam cum assumenda tempore quidem nemo quam debitis quasi a expedita
                            illum? Pariatur reprehenderit nihil doloribus, cumque vitae quo atque, blanditiis quod optio aspernatur magnam! Quis deleniti expedita laborum repudiandae, nam ab accusantium quia perspiciatis a architecto porro magnam veniam
                            sunt alias quo doloribus suscipit assumenda quod. Molestias, facilis voluptatum! Perferendis, libero cumque. Dolorum sed libero, sequi quo magni debitis eaque aliquid cupiditate quibusdam recusandae voluptatem eos, exercitationem
                            eum omnis eligendi magni. Voluptatibus modi et eaque debitis inventore asperiores ab temporibus nemo, officiis cupiditate dolores odit ex nesciunt consectetur
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-primary fw-bold">CONTACT</h3>
                    <h1 class="fw-bold mb-5">Get in touch</h1>
                </div>
            </div>

            <div class="row">
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0415876467273!2d80.6816971151348!3d7.349227015051018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35d8460ab3feb%3A0xa9fd316c4d216b25!2sCP%2FW%2F%20Wattegama%20Central%20College!5e0!3m2!1sen!2slk!4v1631259912377!5m2!1sen!2slk" class="col-10 offset-1" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-12 col-md-6 d-flex align-items-center">
                    <div class="row ms-4">
                        <h3 class="fw-bold pt-5">Contact Details</h3>

                        <div class="p-3 d-flex align-items-center">
                            <i class="fa fa-map-marker-alt fs-3 pe-3"></i>
                            <span>wattegama central college, wattegama, kandy</span>
                        </div>
                        <div class="p-3 d-flex align-items-center">
                            <i class="fa fa-phone-alt fs-3 pe-3"></i>
                            <span>+94 81 123 7890</span>
                        </div>
                        <div class="p-3 d-flex align-items-center">
                            <i class="fas fa-envelope-open-text fs-3 pe-3"></i>
                            <span>wattegamacc@gmail.com</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <a class="text-decoration-none social_media_icons p-3" href="https://www.facebook.com/wattegamacc.lk" target="_blank"><i class="fab fa-facebook fs-2 "></i></a>
                            <a class="text-decoration-none social_media_icons p-3" href="https://www.youtube.com/channel/UC0ZC82dSL3VWdk42GAPj31Q" target="_blank"><i class="fab fa-youtube mt-4 fs-2 "></i></a>
                            <a class="text-decoration-none social_media_icons p-3" href="https://twitter.com/wattegamac?lang=en" target="_blank"><i class="fab fa-twitter mt-4 fs-2 "></i></a>
                        </div>

                    </div>
                </div>


                <div data-aos="zoom-in" data-aos-duration="1500" class="col-12 col-md-6 mt-5">
                    <div class="row">
                        <label for="name" class="form-label ">Name</label>
                        <input type="text" class="form-control mb-3" id="name" placeholder="@name" name="name">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control mb-3" id="email" placeholder="name@example.com" name="email">

                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control mb-3" id="message" rows="3" name="message"></textarea>
                        <button onclick="feedbackData();" class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- * Footer * -->
    <footer class="bg-dark p-4">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-md-6 text-center text-md-start">
                    <img src="./img/logo.jpg" class="logo_footer mb-2" alt="" />
                    <h4 class="text-light">Central College Wattegama</h4>
                    <p class="lead fs-6 text-light">
                        &copy;2021 Central College Wattegama
                    </p>
                    <span class="text-center fw-bold text-md-start text-warning">
                        Contact +94 81 198 7867
                    </span>
                    <br />
                    <span class="text-center fw-bold text-md-start text-warning">
                        Email wattagemacc@gmail.com
                    </span>
                </div>
                <div class="
                        col-12 col-md-6
                        text-light text-center
                        d-md-flex
                        justify-content-end
                        align-items-center
                        pe-md-5
                        mt-3 mt-md-0
                    ">
                    <a class="text-decoration-none social_media_icons_f p-3" href="https://www.facebook.com/wattegamacc.lk" target="_blank"><i class="fab fa-facebook mt-4 fs-2 "></i></a>
                    <a class="text-decoration-none social_media_icons_f p-3" href="https://www.youtube.com/channel/UC0ZC82dSL3VWdk42GAPj31Q" target="_blank"><i class="fab fa-youtube mt-4 fs-2 "></i></a>
                    <a class="text-decoration-none social_media_icons_f p-3" href="https://twitter.com/wattegamac?lang=en" target="_blank"><i class="fab fa-twitter mt-4 fs-2 "></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./aos/aos.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>