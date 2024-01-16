<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('asset/csss/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/csss/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/csss/vegas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/csss/tooplate-barista.css') }}" rel="stylesheet">
</head>
<style>
    body {
        background: Black;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        color: white;
    }

    .container-main {
        margin-top: 70px;
        padding: 20px;
    }

    .card {
        background-color: black;
        padding: 30px;
        border-radius: 10px;
        color: white;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
    }

    .card img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-top: 40px;
    }

    .card-info {
        padding-left: 20px;
    }

    h1,
    h4,
    p {
        color: white !important;
    }

    .btn-kembali {
        margin-right: 10px;
    }

    .footer {
        background: black;
        color: white;
        padding-bottom: 0;
        /* Added padding for better spacing */
    }
</style>
<title>Studio Package Detail</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
        <div class="container">
            <a href="{{ route('user.home') }}" class="btn btn-secondary btn-kembali">Kembali</a>
            <a class="navbar-brand" href="/">CLAVIA PHOTOGRAPHY</a>
        </div>
    </nav>

    <br><br><br><br>

    <div class="container-main">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        @if ($paket->foto)
                        <img style="width: 100%" src="{{ asset('images/' . $paket->foto) }}" alt="cover paket">
                        @else
                        No Image
                        @endif
                    </div>
                    <div class="col-md-9 card-info">
                        <h4 class="fw-bold">Nama paket</h4>
                        <p>{{ $paket->nama_paket }}</p>
                        <h4 class="fw-bold">Harga Paket</h4>
                        <p>{{ $paket->harga_paket }}</p>
                        <h4 class="fw-bold">Keterangan Paket</h4>
                        <p>{{ $paket->ket_paket }}</p>

                        <a href="{{ route('user.tambahpesanan') }}" class="btn btn-dark">Pesan sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section section-padding" id="section_2">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-12">
                    <div class="ratio ratio-1x1">
                        <video autoplay="" loop="" muted="" class="custom-video" poster="">
                            <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                            Your browser does not support the video tag.
                        </video>

                        <div class="about-video-info d-flex flex-column">
                            <h4 class="mt-auto">We Started Since 2009.</h4>

                            <h4>Best Cafe in Klang.</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                    <em class="text-white">Barista.co</em>

                    <h2 class="text-white mb-3">Cafe KL</h2>

                    <p class="text-white">The café had been in the town for as long as anyone could remember, and it
                        had become a beloved institution among the locals.</p>

                    <p class="text-white">The café was run by a friendly and hospitable couple, Mr. and Mrs.
                        Johnson. Barista Cafe is free Bootstrap 5 HTML layout provided by <a rel="nofollow"
                            href="https://www.tooplate.com" target="_blank">Tooplate</a>.</p>

                    <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet
                        Baristas</a>
                </div>

            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 me-auto">
                    <em class="text-white d-block mb-4">Where to find us?</em>

                    <strong class="text-white">
                        <i class="bi-geo-alt me-2"></i>
                        Bandra West, Mumbai, Maharashtra 400050, India
                    </strong>

                    <ul class="social-icon mt-4">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                    <em class="text-white d-block mb-4">Contact</em>

                    <p class="d-flex mb-1">
                        <strong class="me-2">Phone:</strong>
                        <a href="tel: 305-240-9671" class="site-footer-link">
                            (65)
                            305 2409 671
                        </a>
                    </p>

                    <p class="d-flex">
                        <strong class="me-2">Email:</strong>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            hello@barista.co
                        </a>
                    </p>
                </div>


                <div class="col-lg-5 col-12">
                    <em class="text-white d-block mb-4">Opening Hours.</em>

                    <ul class="opening-hours-list">
                        <li class="d-flex">
                            Monday - Friday
                            <span class="underline"></span>

                            <strong>9:00 - 18:00</strong>
                        </li>

                        <li class="d-flex">
                            Saturday
                            <span class="underline"></span>

                            <strong>11:00 - 16:30</strong>
                        </li>

                        <li class="d-flex">
                            Sunday
                            <span class="underline"></span>

                            <strong>Closed</strong>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8 col-12 mt-4">
                    <p class="copyright-text mb-0">Copyright © Barista Cafe 2048
                        - Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a>
                    </p>
                </div>
            </div>
    </footer>
    </main>

    <!-- Include Bootstrap JavaScript (JQuery and Popper.js) -->
    <script src="{{ asset('asset/jss/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/jss/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/jss/jquery.sticky.js') }}"></script>
    <script src="{{ asset('asset/jss/click-scroll.js') }}"></script>
    <script src="{{ asset('asset/jss/vegas.min.js') }}"></script>
    <script src="{{ asset('asset/jss/custom.js') }}"></script>
</body>