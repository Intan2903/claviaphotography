@extends('layout.client')

@push('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
.about-section {
    background-color: #C1CCD0;
}

.profile-img {
    width: 100%;
    height: 370px;
    object-fit: cover;
    border-radius: 10px;
}

.name {
    margin: 0;
    margin-bottom: 10px;
}

.box-ex {
    height: 250px;
    overflow: auto;
    margin-bottom: 10px;
    padding-right: 5px;
}

.box-ex::-webkit-scrollbar {
    width: 3px;
}

.box-ex::-webkit-scrollbar-track {
    background: transparent;
}

.box-ex::-webkit-scrollbar-thumb {
    background: #206d613f;
    border-radius: 10px;
}

.email,
.contact {
    font-size: 14px;
    margin: 0;
}
</style>

@endpush

@section('content')

<section class="about-section section-padding" id="about-section">
    {{-- <div class="section-overlay"></div> --}}
    <div class="container mt-5">
        <br><br>

        <div class="row">
            <div class="col-lg-5 col-12 mt-4 mt-lg-0">
                <em class="">Claviaphotography.my.id</em>
                <h2 class="text-dark">Our Photographer</h2>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($photographers as $photographer)
            <div class="col-lg-3 mb-5">
                <div class="box-profile">
                    <img class="profile-img" src="{{ asset('images/' . $photographer->foto) }}" alt="">
                    <p class="name mt-4"><b>{{ $photographer->nama }} <i class="bi bi-camera-fill ms-1"></i></b></p>
                    <div class="box-ex">
                        <p class="ex">{{ $photographer->pengalaman }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection