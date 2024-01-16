@extends('layout.client')

@push('css')

<style>
    .about-section {
        background-color: #C1CCD0;
    }

    .about-video-info {
        background-image: url('../image/fot.png');
        background-size: cover;
        background-position: center;
    }
</style>

@endpush

@section('content')

<section class="about-section section-padding" id="about-section">
    {{-- <div class="section-overlay"></div> --}}
    <div class="container mt-5">
        <br><br>
        <div class="row align-items-center">

            <div class="col-lg-6 col-12">
                <div class="ratio ratio-1x1">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>

                    <div class="about-video-info d-flex flex-column">
                        <h4 class="mt-auto">We Started Since 2020</h4>

                        <h4>Best Studio in Bengkalis.</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                <em class="">Claviaphotography.my.id</em>

                <h2 class="text-dark mb-3">Clavia Photography</h2>

                <p class="text-dark opacity-75">Anda dapat mengharapkan hasil foto yang berkualitas tinggi dan
                    kreatifitas yang memukau</p>

                <p class="text-dark opacity-75">Fotografi adalah cara dimana kita merasa, menyentuh, dan mencintai. apa
                    yang telah tertangkap oleh kamera akan mengingatkan anda tentang hal-hal kecil, setelah anda lupa
                    segalanya.</p>

                <p class="text-dark opacity-75">Lokasi Studio: Jl. Hangtuah, sebelah bank syariah indonesia (BSI)
                    Kecamatan bengkalis</p>

                <a href="/photographer" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet
                    Photographer</a>
            </div>

        </div>
    </div>
</section>

@endsection