@extends('layout.client')

@push('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
.about-section {
    background-color: #C1CCD0;
}

.profile-img {
    width: 100%;
    height: 270px;
    object-fit: cover;
    border-radius: 10px;
}

.name {
    margin: 0;
    /* margin-bottom: 10px; */
    font-size: 17px;
}

.price {
    font-size: 24px;
    margin: 0;
    font-weight: bold;
    color: #206D61;
}

.btn-info {
    transition: .2s ease;
}

.btn-info:hover {
    color: #339989;
}

.custom-popover {
    --bs-popover-max-width: 200px;
    --bs-popover-border-color: #206D61;
    --bs-popover-bg: #C1CCD0;
    --bs-popover-body-padding-x: 1rem;
    --bs-popover-body-padding-y: .5rem;
}

.btn-order {
    /* border: none;
      border-radius: 15px;
      background-color: #339989; */
}

.modal-content {
    background-color: #C1CCD0;
    border-radius: 20px;
}

.modal-header {
    background-color: #206D61;
    border-radius: 20px 20px 0 0;
    color: white;
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
                <h2 class="text-dark">Our Service</h2>
                <p class="text-dark opacity-75">Temukan paket sesuai keinginan mu.</p>
            </div>
        </div>

        @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>Waduh!</strong> {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mt-5">
            @foreach ($pakets as $paket)
            <div class="col-lg-4 mb-5">
                <div class="box-profile">
                    <img class="profile-img" src="{{ asset('images/' . $paket->foto) }}" alt="">
                    <div class="d-flex align-items-center">
                        <p class="name mt-4">{{ $paket->nama_paket }}</p>
                        <p type="button" class="name mt-4 btn-info ms-2" data-bs-trigger="hover focus"
                            data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="custom-popover"
                            data-bs-content="{{ $paket->ket_paket }}">
                            <i class="bi bi-info-circle-fill"></i>
                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="price">{{ $paket->formatRupiah('harga_paket') }}</p>

                        <!-- Button trigger modal -->
                        <button type="button" class="smoothscroll btn custom-btn custom-border-btn"
                            data-bs-toggle="modal" data-bs-target="#orderModel{{ $paket->id }}">
                            Order Now <i class="bi bi-hand-index-thumb ms-1"></i>
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="orderModel{{ $paket->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <form action="/ordered" method="post" class="modal-content">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Order</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="paket_id" value="{{ $paket->id }}">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Photographer</label>
                                        <select class="form-select" name="fotografer_id"
                                            aria-label="Default select example" required>
                                            <option selected>Choose a Photographer</option>
                                            @foreach ($fotografers as $fotografer)
                                            <option value="{{ $fotografer->id }}">{{ $fotografer->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                        <input type="number" name="no_hp" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Enter Phone Number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Location</label>
                                        <input type="text" name="lokasi" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Enter Location" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date</label>
                                        <input type="date" name="tanggal_pemesanan" class="form-control"
                                            id="exampleFormControlInput1" placeholder="name@example.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Time</label>
                                        <input type="time" name="jam" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn-inout border-0">order</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
<script>
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
})
</script>
@endpush