@extends('layouts.home.main')
@section('mainContent')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->
        <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="container position-relative">
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2>Welcome to {{config('app.name')}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fuga libero necessitatibus praesentium quo, repellendus sunt. Amet assumenda deleniti ex, in nam nemo, optio placeat quam quo repellat repellendus rerum similique tempora unde voluptas! Ab dolore ipsam officia quidem saepe.</p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2>Our Mission</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid amet architecto corporis cum deserunt dignissimos eius illo in nemo nisi non perferendis quae, reiciendis sed similique unde voluptatum. Incidunt minus, possimus!</p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2>Our Vision</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid atque, consequuntur facilis id illo natus possimus provident quasi sit tempora vel voluptates voluptatum. Aliquam delectus iusto maiores nisi quia quibusdam rerum?</p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
                <ol class="carousel-indicators"></ol>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <img src="{{url("assets/home/image/salat/Fajr-Prayer-English.webp")}}" alt="" width="95%">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Fajr</h3>
                        </a>
                        <p>4:58 AM</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <div class="icon">
                            <img src="{{url("assets/home/image/salat/Dhuhr-Prayer-English.webp")}}" alt="" width="95%">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Dhuhr</h3>
                        </a>
                        <p>12:14 PM</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <div class="icon">
                            <img src="{{url("assets/home/image/salat/Asr-Prayer-English.webp")}}" alt="" width="95%">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Asr</h3>
                        </a>
                        <p>3:49 PM</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <div class="icon">
                            <img src="{{url("assets/home/image/salat/Maghrib-Prayer-English.webp")}}" alt="" width="95%">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Maghrib</h3>
                        </a>
                        <p>5:52 PM</p>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-teal position-relative">
                        <div class="icon">
                            <img src="{{url("assets/home/image/salat/Isha-Prayer-English.webp")}}" alt="" width="95%">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Isha</h3>
                        </a>
                        <p>7:11 PM</p>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->
            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

        <div class="container-fluid">

            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{url("assets/home/image/5 pillars of islam.webp")}}" class="img-fluid" alt="">
{{--                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>--}}
                </div>
                <div class="col-lg-6 content" data-aos="fade-left" data-aos-delay="200">
                    <h3>The Pillar of Islam</h3>
                    <p class="">
                        The <strong>Five Pillars of Islam</strong> are the foundation of a Muslim's faith and practice. They are fundamental acts of worship and the framework for a Muslim's life. Here’s a breakdown of each pillar:
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span><strong>Shahada (Faith):</strong> The declaration of faith: "There is no god but Allah, and Muhammad is the Messenger of Allah."</span></li>
                        <li><i class="bi bi-check2-all"></i> <span><strong>Salah (Prayer):</strong></span>Muslims are required to pray five times a day</li>
                        <li><i class="bi bi-check2-all"></i> <span><strong>Zakat (Charity):</strong>A fixed portion of a Muslim's wealth (usually 2.5% of savings) is given annually to help those in need</span></li>

                        <li><i class="bi bi-check2-all"></i> <span><strong>Sawm (Fasting):</strong>Muslims fast during the holy month of Ramadan from dawn to sunset</span></li>

                        <li><i class="bi bi-check2-all"></i> <span><strong>Hajj (Pilgrimage):</strong>The pilgrimage to the holy city of Mecca is mandatory at least once in a lifetime for those who are physically and financially able</span></li>
                    </ul>
                </div>
                <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
                    <a href="#about" class="btn-get-started read-more-btn">Read More</a>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="text-capitalize">Follow the path of islam</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, incidunt</p>
        </div><!-- End Section Title -->
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="img">
                            <img src="{{url("assets/home/image/Teaching Al-Quran.webp")}}" class="img-fluid card-img" alt="">
                        </div>
                        <div class="details">
                            <a href="service-details.html" class="stretched-link">
                                <h3>Teaching of Al-Quran</h3>
                            </a>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="img">
                            <img src="{{url("assets/home/image/Funeral Service of islam.png")}}" class="img-fluid" alt="">
                        </div>
                        <div class="details">
                            <a href="service-details.html" class="stretched-link">
                                <h3>Funeral Service</h3>
                            </a>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="img">
                            <img src="{{url("assets/home/image/community service islam.jpg")}}" alt="">
                        </div>
                        <div class="details">
                            <a href="service-details.html" class="stretched-link">
                                <h3>Community Service</h3>
                            </a>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="img">
                            <img src="{{url("assets/home/image/Umrah and Hajj.jpg")}}" class="img-fluid" alt="">
                        </div>
                        <div class="details">
                            <a href="service-details.html" class="stretched-link">
                                <h3>Umrah & Hajj</h3>
                            </a>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                            <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Features</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Ullam est qui quos consequatur eos accusamus.</span></li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div><!-- Features Item -->

        </div>

    </section><!-- /Features Section -->
@stop
