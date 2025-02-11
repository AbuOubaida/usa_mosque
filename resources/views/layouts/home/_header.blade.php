<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">{{config('app.name')}}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="about.html">About</a></li>
{{--                <li><a href="services.html">Services</a></li>--}}
                <li><a href="portfolio.html">Portfolio</a></li>
{{--                <li><a href="team.html">Team</a></li>--}}
                <li><a href="blog.html">Blog</a></li>
{{--                <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Dropdown 1</a></li>--}}
{{--                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Dropdown 1</a></li>--}}
{{--                                <li><a href="#">Deep Dropdown 2</a></li>--}}
{{--                                <li><a href="#">Deep Dropdown 3</a></li>--}}
{{--                                <li><a href="#">Deep Dropdown 4</a></li>--}}
{{--                                <li><a href="#">Deep Dropdown 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">Dropdown 2</a></li>--}}
{{--                        <li><a href="#">Dropdown 3</a></li>--}}
{{--                        <li><a href="#">Dropdown 4</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <button href="#about" class="btn donate-outline-btn" data-bs-toggle="modal" data-bs-target="#donationModal">Donation</button>
    </div>
</header>
<!-- Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="donationModalLabel">Choose a donation medium</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 text-center paypal">
                        <div class="paypal-img">
                            <img src="{{url("assets/home/image/paypal-784404_1280.webp")}}" alt="" width="75%" height="100%">
                        </div>
                        <button href="#about" class="btn donate-outline-btn mt-3" >Donate Now</button>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img src="{{url("assets/home/image/card payment.jpg")}}" alt="" width="100%">
                        <button href="#about" class="btn donate-outline-btn mt-3" >Donate Now</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
            </div>
        </div>
    </div>
</div>
