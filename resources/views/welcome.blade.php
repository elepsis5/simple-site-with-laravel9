<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand absolute" href="index.html">breed</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Breed</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="#">German Shepherd</a>
                                <a class="dropdown-item" href="#">Labrador</a>
                                <a class="dropdown-item" href="#">Rottweiler</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('img/slider-1.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>We Love Pets</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                        <p><a href="#" class="btn btn-white btn-outline-white">Get Started</a> <a href="#" class="btn btn-link btn-white">Download</a></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>Care for dogs</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                        <p><a href="#" class="btn btn-white btn-outline-white">Get Started</a> <a href="#" class="btn btn-link btn-white">Download</a></p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->

    <section class="section element-animate">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-4"></div>
                <div class="col-md-8 section-heading">
                    <h2>It's a Dog Life</h2>
                    <p class="small-sub-heading">Curious story of Dogs</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="img/dog_1.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
                <div class="col-md-4">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p><a href="#">Learn More <span class="ion-ios-arrow-right"></span></a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">Every Dog Needs A Good Owner</h2>
                    <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="major-caousel js-carousel-1 owl-carousel">
                    <div>
                        <div class="media d-block media-custom text-center">
                            <a href="adoption-single.html"><img src="img/person_1.jpg" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Mellisa Howard</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-center">
                            <a href="adoption-single.html"><img src="img/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Mike Richardson</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-center">
                            <a href="adoption-single.html"><img src="img/person_3.jpg" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Charles White</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-center">
                            <a href="adoption-single.html"><img src="img/person_4.jpg" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black">Laura Smith</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END slider -->
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="section border-t">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">Dog Breed Collections</h2>
                    <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-4 element-animate">
                    <a href="single.html" class="link-thumbnail">
                        <h3>German Shepherd</h3>
                        <span class="ion-plus icon"></span>
                        <img src="img/dog_1.jpg" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="single.html" class="link-thumbnail">
                        <h3>Labrador</h3>
                        <span class="ion-plus icon"></span>
                        <img src="img/dog_2.jpg" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="single.html" class="link-thumbnail">
                        <h3>Bulldog</h3>
                        <span class="ion-plus icon"></span>
                        <img src="img/dog_3.jpg" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="single.html" class="link-thumbnail">
                        <h3>Rottweiler</h3>
                        <span class="ion-plus icon"></span>
                        <img src="img/dog_4.jpg" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="single.html" class="link-thumbnail">
                        <h3>Beagle</h3>
                        <span class="ion-plus icon"></span>
                        <img src="img/dog_5.jpg" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="single.html" class="link-thumbnail">
                        <h3>Golden Retriever</h3>
                        <span class="ion-plus icon"></span>
                        <img src="img/dog_6.jpg" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- END section -->

    <section class="section blog">
        <div class="container">

            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">Recent Blog Post</h2>
                    <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <div class="media mb-4 d-md-flex d-block element-animate">
                        <a href="#" class="mr-5"><img src="img/blog_1.jpg" alt="Placeholder image" class="img-fluid"></a>
                        <div class="media-body">
                            <span class="post-meta">Feb 26th, 2018</span>
                            <h3 class="mt-2 text-black"><a href="#">How to Train Your Dog</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam minus ipsa earum nemo consectetur cupiditate necessitatibus suscipit assumenda perspiciatis provident.</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                        </div>
                    </div>



                </div>
                <div class="col-md-6">
                    <div class="media mb-4 d-md-flex d-block element-animate">
                        <a href="#" class="mr-5"><img src="img/blog_2.jpg" alt="Placeholder image" class="img-fluid"></a>
                        <div class="media-body">
                            <span class="post-meta">Feb 26th, 2018</span>
                            <h3 class="mt-2 text-black"><a href="#">Find The Right Food For Your Dogs</a></h3>
                            <p><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                        </div>
                    </div>

                    <div class="media mb-4 d-md-flex d-block element-animate">
                        <a href="#" class="mr-5"><img src="img/blog_3.jpg" alt="Placeholder image" class="img-fluid"></a>
                        <div class="media-body">
                            <span class="post-meta">Feb 26th, 2018</span>
                            <h3 class="mt-2 text-black"><a href="#">Dog's Affections To Owner</a></h3>
                            <p><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mb-5">
                    <h3>About The Breed</h3>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                    </ul>

                </div>
                <div class="col-md-5 mb-5">
                    <h3>Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block">
                            <span class="d-block">Address:</span>
                            <span class="text-white">34 Street Name, City Name Here, United States</span>
                        </li>
                        <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+1 242 4942 290</span></li>
                        <li class="d-block"><span class="d-block">Email:</span><span class="text-white">info@yourdomain.com</span></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled footer-link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Disclaimers</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-12 text-md-center text-left">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
        </svg></div>

</body>

</html>
