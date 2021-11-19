@extends('division.layout.master')
@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/lightbox2-2.11.3/dist/css/lightbox.min.css') }}">
@endsection
@section('content-division')
    <!-- ======= Hero Section ======= -->
    <section id="home" class="d-flex align-items-center hero">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Welcome</h1>
                    <h2>Google Developer Student Clubs</h2>
                    <h2>UIN Maulana Malik Ibrahim Malang</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- End Hero -->

    <section id="recruitment" class="d-flex align-items-center hero">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row icon-boxes">
                <h3 class="text-primary fw-bold text-center mb-5">UPCOMING EVENT</h3>
                <div class="row justify-content-md-center team">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">

                                <a class="example-image-link" href="{{ asset('event/91121eth0.png') }}"
                                    data-lightbox="example-1"><img class="example-image"
                                        src="{{ asset('event/91121eth0.png') }}" style="width:100%;max-width:300px"
                                        alt="image-1" /></a>

                            </div>
                            <div class="member-info">
                                <h4 class="mb-3">How to Become Red Team in Cyber Security</h4>
                                <span>Private Event <span class="text-warning">(Untuk anggota
                                        Komunitas GDSC & ETH_0)</span></span>
                            </div>
                            <a class="btn btn-info text-white" href="https://gdsc.community.dev/e/mg9nxu/">Register</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">

                                <a class="example-image-link" href="{{ asset('event/171121qep.png') }}"
                                    data-lightbox="example-1"><img class="example-image"
                                        src="{{ asset('event/171121qep.png') }}" style="width:100%;max-width:300px"
                                        alt="image-1" /></a>

                            </div>
                            <div class="member-info">
                                <h4 class="mb-3">Build Your Passion and Confidence for The Future</h4>
                                <span>Public Event <span class="text-warning">(Terbuka untuk
                                        Umum)</span></span>
                            </div>
                            <a class="btn btn-info text-white" href="{{ route('event.qep') }}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <main id="main"> --}}

    <section id="recruitment" class="d-flex align-items-center hero">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row icon-boxes">
                <h3 class="text-primary fw-bold text-center mb-3">JOIN US</h3>
                <div class="col-md-12 align-items-stretch mb-12 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                    <a href="#">
                        <div class="row">
                            <div class="col-2 ">
                            </div>
                            <div class="col-8 icon-box">
                                <h4 class="title text-center">Member Registration -<span
                                        class="text-danger">Closed</span>-</h4>
                                <p class="description text-center">Open to all college students in Indonesia</p>
                            </div>
                            <div class="col-2 ">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- <main id="main"> --}}

    <section id="recruitment" class="d-flex align-items-center hero">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row icon-boxes">
                <h3 class="text-primary fw-bold text-center mb-3">OUR DIVISION</h3>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">

                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <h4 class="title"><a href="{{ route('faculty') }}">Faculty Advisor</a></h4>
                        <p class="description">The Faculty Advisor provides academic advising and support to
                            advisees from her or his discipline or school.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-palette-line"></i></div>
                        <h4 class="title"><a href="{{ route('media') }}">Media and Creatives</a></h4>
                        <p class="description">Artistic and cultural works and content created for digital
                            platforms, or distributed digitally to reach the public.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-command-line"></i></div>
                        <h4 class="title"><a href="{{ route('technical') }}">Developer and Speakers</a>
                        </h4>
                        <p class="description">A developer is an individual that builds and create software and
                            applications. And also can support, advise and guide someone.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-fingerprint-line"></i></div>
                        <h4 class="title"><a href="{{ route('partnership') }}">Partnership and
                                Programs</a></h4>
                        <p class="description">Strategy to encourage channel partners to recommend the event. And
                            also responsible for planning and managing events in the most efficient</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <main id="main">



        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>

                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Google Developer Student Clubs (GDSC) are community groups for college and university
                            students interested in Google developer technologies.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Connect</li>
                            <li><i class="ri-check-double-line"></i> Learn</li>
                            <li><i class="ri-check-double-line"></i> Grow</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Students from all undergraduate or graduate programs with an interest in growing as a
                            developer are welcome. By joining a GDSC, students grow their knowledge in a
                            peer-to-peer learning environment and build solutions for local businesses and their
                            community.
                        </p>
                        <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>In Google Developer Student Clubs, there is a core team that has the task of assisting leads
                        in running every event held. Here's the DSC Maliki core team</p>
                </div>

                <div class="row">
                    <div class="col"></div>


                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('landing/assets/img/team/bintang.jpeg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="https://developers.google.com/profile/u/100733383843930406725"
                                        target="_blank"><i class="bi bi-google"></i></a>
                                    <a href="https://www.facebook.com/bintangmf/" target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/bintangmf_hd/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/bintangmfhd/" target="_blank"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Bintang Miftaqul Huda</h4>
                                <span>Lead DSC Maliki</span>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('landing/assets/img/team/team-2.jpeg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="https://developers.google.com/profile/u/106421879820392256679"
                                        target="_blank"><i class="bi bi-google"></i></a>
                                    <a href="https://www.facebook.com/laksamana.s.31" target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/laksamanasulthan/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/mwlite/in/laksamana-sulthan-a-0b76b7135"
                                        target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Laksamana Sultan A. S.</h4>
                                <span>Core Team</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('landing/assets/img/team/team-3.jpeg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="https://gdsc.community.dev/u/m6rzhr/#/about" target="_blank"><i
                                            class="bi bi-google"></i></a>
                                    <a href="https://www.facebook.com/thoriqharizul/" target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/thoriq_ha/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/thoriq-harizul-ahsan-79472912b/" target="_blank"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Thoriq Harizul Ahsan</h4>
                                <span>Core Team</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('landing/assets/img/team/team-4.jpeg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="https://gdsc.community.dev/u/mjaea7/#/about" target="_blank"><i
                                            class="bi bi-google"></i></a>
                                    <a href="https://www.facebook.com/febrinadws/" target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/febrinadws/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/febrina-dwita-2973b721a/" target="_blank"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Febrina Dwita Sari</h4>
                                <span>Core Team</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('landing/assets/img/team/team-5.jpeg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="https://gdsc.community.dev/u/mzp2vq/#/about" target="_blank"><i
                                            class="bi bi-google"></i></a>
                                    <a href="https://www.facebook.com/lylalailaila.lylalailaila" target="_blank"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/ilazhr_/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/laila-zahrona-758133120/" target="_blank"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Laila Zahrona</h4>
                                <span>Core Team</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>To convey information, questions and complaints, you can use the following communication
                        media:</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="info">
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>gdsc.maliki@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="info">
                            <div class="email">
                                <i class="bi bi-geo-alt-fill"></i>
                                <h4>Location:</h4>
                                <p>Jl. Gajayana No.50, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="info">
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 857-8161-0389</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->


@endsection

@push('script')
    {{-- <script src="{{ asset('vendor/lightbox2-2.11.3/src/js/lightbox.js') }}"></script> --}}
    <script src="{{ asset('vendor/lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js') }}"></script>
@endpush
