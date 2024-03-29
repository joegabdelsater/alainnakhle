<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="Alain Nakhle" />
    <meta name="og:description" content="Alain Nakhle - Film and TV Director" />
    <meta property="og:url" content="https://www.alainnakhle.com/" />
    <meta property="og:image:secure_url" content="{{ $about->logo ? URL::to($about->logo) : 'assets/img/icon/logo.png' }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alain Nakhle - Film and TV Director</title>
    <link rel="shortcut icon" type="image/png" href="{{ $about->logo ? URL::to($about->logo) : 'assets/img/icon/logo.png' }}">
    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body id="top">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="preloader-blur"></div>
        <img class="preloader-logo" src="{{ $about->logo ? URL::to($about->logo) : 'assets/img/icon/logo.png' }}" alt="logo" />
        
        {{-- <div class="loader_line"></div> --}}
    </div>
    <!-- prealoader area end -->
    <!-- header area start -->
    <header>
        <div class="header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-12">
                        <div class="logo">
                            <a href="/"><img
                                    src="{{ $about->logo ? URL::to($about->logo) : 'assets/img/icon/logo.png' }}"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-9 d-none d-md-block">
                        <div class="main-menu">
                            <nav class="nav-menu">
                                <ul id="nav_menu">
                                    <li class="active"><a data-hover="home" href="#home"><span>Home</span></a></li>
                                    <li><a data-hover="about" href="#about"><span>About</span></a></li>
                                    <li><a data-hover="work" href="#portfolio"><span>Work</span></a></li>
                                    <li><a data-hover="contact" href="#contact"><span>Contact</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-12 d-block d-md-none">
                        <div class="responsive-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- slider area start -->
    <section id="home" class="slider-area parallax" data-speed="3" data-bg-image="{{ URL::to($banner->image) }}">
        <div class="container">
            <div class="slider-content">
                <h2 class="txtanim1"><span>{{ $banner->large_text }}</span></h2>
                <h4 class="txtanim1 delay1">
                    {!! $banner->small_text !!}
                </h4>
            </div>
        </div>
        <div class="white_svg svg_white">
            <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg>
        </div>
        <div class="txtanim1 next-section">
            <span><a href="#about">about <strong><i class="fa fa-question-circle"></i></strong></a></span>
        </div>
    </section>
    <!-- slider area end -->
    <!-- about area strat -->
    <section class="about-area" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="abt-left-thumb">
                        <img src="{{ URL::to($about->image) }}" alt="image">
                    </div>
                </div>
                <div class="col-md-7 offset-md-1">
                    <div class="abt-content">
                        <div class="section-title">
                            <h2 class="txt2_is_show">About</h2>
                        </div>
                        <p class="txt1-wrap"><span class="txt1">{!! $about->text !!}</span></p>
                        <div class="social-link">
                            <h5>Share :</h5>
                            <a href="{{ $socials['instagram']['url'] }}" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                            {{-- <a href="{{ $socials['facebook']['url'] }}" target="_blank"><i
                                    class="fa fa-facebook"></i></a> --}}
                            <a href="{{ $socials['linkedin']['url'] }}" target="_blank"><i
                                    class="fa fa-linkedin"></i></a>
                            <a href="{{ $socials['vimeo']['url'] }}" target="_blank"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->
    <!-- service area start -->
    {{-- <div class="service-area pb--200">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-service txt2_is_show">
                        <div class="icon"><span class="flaticon-web-design"></span></div>
                        <div class="srvc-content">
                            <h4>Web Design</h4>
                            <p>I ought to just try that with my boss; I'd get kicked out on the spot. But who knows,
                                maybe that would be the best</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service txt2_is_show">
                        <div class="icon"><span class="flaticon-settings"></span></div>
                        <div class="srvc-content">
                            <h4>Illustrator</h4>
                            <p>I ought to just try that with my boss; I'd get kicked out on the spot. But who knows,
                                maybe that would be the best</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service txt2_is_show">
                        <div class="icon"><span class="flaticon-adobe"></span></div>
                        <div class="srvc-content">
                            <h4>Branding Identity</h4>
                            <p>I ought to just try that with my boss; I'd get kicked out on the spot. But who knows,
                                maybe that would be the best</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white_svg svg_gray">
            <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg>
        </div>
    </div> --}}
    <!-- service area end -->
    <!-- portfolio area start -->
    <section class="fortfolio-area bg-gray pt--100 pb--200" id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2 class="txt2_is_show">Work</h2>
            </div>
            <div class="fortfolio-filter">
                <button class="active" data-filter="*">All</button>
                @foreach ($categories as $category)
                    <button data-filter=".{{ $category->slug }}">{{ $category->name }}</button>
                @endforeach
                {{-- <button data-filter=".web">Web Design</button>
                <button data-filter=".design">Graphics Design</button>
                <button data-filter=".marketing">Marketing</button> --}}
            </div>
            <div class="portfolio-masonary row" id="container">
                @foreach ($projects as $project)
                    <div class="prt-grid {{ $project->category->slug }} design col-md-4 col-sm-6">
                        <div class="prt-item">
                            <a class="expand-video" href="{{ $project->vimeo_url }}"
                                style="
                                    background-image: url({{ URL::to($project->cover_image) }});
                                    background-size: cover;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    width:360px;
                                    height: 238px;">
                                <span class="flaticon-play-button"></span>
                                {{-- <img src="{{ URL::to($project->cover_image) }}" alt="image"> --}}
                            </a>
                            <div class="project-name">
                                <p class="">{{ $project->name }}</p>
                                <p>{{ $project->description }}</p>
                            </div>
                        </div>


                    </div>
                @endforeach

                {{-- <div class="prt-grid marketing web col-md-4 col-sm-6">
                    <div class="prt-item">
                        <a class="expand-img" href="assets/img/portfolio/img2.jpg"><img
                                src="assets/img/portfolio/img2.jpg" alt="image"></a>
                    </div>
                </div>
                <div class="prt-grid col-md-4 col-sm-6">
                    <div class="prt-item">
                        <a class="expand-img" href="assets/img/portfolio/img3.jpg"><img
                                src="assets/img/portfolio/img3.jpg" alt="image"></a>
                    </div>
                </div>
                <div class="prt-grid design marketing col-md-4 col-sm-6">
                    <div class="prt-item">
                        <a class="expand-img" href="assets/img/portfolio/img4.jpg"><img
                                src="assets/img/portfolio/img4.jpg" alt="image"></a>
                    </div>
                </div>
                <div class="prt-grid web design col-md-4 col-sm-6">
                    <div class="prt-item">
                        <a class="expand-img" href="assets/img/portfolio/img5.jpg"><img
                                src="assets/img/portfolio/img5.jpg" alt="image"></a>
                    </div>
                </div>
                <div class="prt-grid design marketing col-md-4 col-sm-6">
                    <div class="prt-item">
                        <a class="expand-img" href="assets/img/portfolio/img6.jpg"><img
                                src="assets/img/portfolio/img6.jpg" alt="image"></a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="white_svg svg_white">
            <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg>
        </div>
    </section>
    <!-- portfolio area end -->
    <!-- contact area start -->
    <section class="contact-area ptb--100" id="contact">
        <div class="container">
            <div class="section-title">
                <h2 class="txt2_is_show">Get In Touch</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        {{-- <ul>
                            <li>100 Main St, Blacktown NSW 2148, <span class="ct-break">Australia</span></li>
                            <li>support@bold.com, info@youremail.com</li>
                            <li>+256-4516-556, +(257) 56812749</li>
                        </ul> --}}
                        {!! $about->contact_details !!}
                        <div class="social-link">
                            <h5>Share :</h5>
                            <a href="{{ $socials['instagram']['url'] }}" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                            {{-- <a href="{{ $socials['facebook']['url'] }}" target="_blank"><i
                                class="fa fa-facebook"></i></a> --}}
                            <a href="{{ $socials['linkedin']['url'] }}" target="_blank"><i
                                    class="fa fa-linkedin"></i></a>
                            <a href="{{ $socials['vimeo']['url'] }}" target="_blank"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-7">
                    <div class="contact-form">
                        <div class="screen-reader-response"></div>
                        <form action="mail.php" id="cf">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" placeholder="Name Here*">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="email" name="email" placeholder="Email Here*">
                                </div>
                            </div>
                            <textarea name="msg" id="msg" placeholder="Message Here*"></textarea>
                            <div class="form-submit">
                                <button type="submit" name="submit" id="cnt_submit">Send Message <i
                                        class="fa fa-long-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- contact area end -->
    <!-- footer area start -->
    <footer>
        <div class="footer-area bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-4">
                        <div class="flogo">
                            <a href="/"><img
                                    src="{{ $about->logo ? URL::to($about->logo) : 'assets/img/icon/logo.png' }}"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="copyright">
                            <p>@Copyright By <span>Alain Nakhle</span> Developed by <a href="https://www.yllwdigital.com">Yellow Digital</a></p>
                        </div>
                    </div>
                </div>
                <div class="go-to-top">
                    <a href="#top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/vendor/jquery-3.2.0.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- others plugins -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
