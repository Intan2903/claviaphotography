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

.status {
    font-size: 12px;
    padding: 3px 7px;
    margin: 0;
    margin-left: 10px;
    border-radius: 5px;
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

.modal-body td {
    vertical-align: top;
}

#noRek {
    border: none;
    padding: 0;
    background-color: #C1CCD0;
}

.btn-copy {
    border: none;
    padding: 0;
    background-color: #C1CCD0;
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
                <h2 class="text-dark">My Order</h2>

            </div>
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>Hore!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row mt-5">
            @foreach ($orders as $order)
            <div class="col-lg-4 mb-5">
                <div class="box-profile">
                    <img class="profile-img" src="{{ asset('images/' . $order->paket->foto) }}" alt="">
                    <div class="d-flex align-items-center mt-4">
                        <p class="name">{{ $order->paket->nama_paket }}</p>
                        <p type="button" class="name btn-info ms-2" data-bs-trigger="hover focus"
                            data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="custom-popover"
                            data-bs-content="{{ $order->paket->ket_paket }}">
                            <i class="bi bi-info-circle-fill"></i>
                        </p>
                        @if ($order->status == 'Belum Bayar')
                        <p class="status" style="background-color: #ffe548; color: #1a201c">{{ $order->status }}</p>
                        @elseif ($order->status == 'Menunggu Konfirmasi')
                        <p class="status" style="background-color: #486d6d; color: white">{{ $order->status }}</p>
                        @elseif ($order->status == 'Sudah Bayar')
                        <p class="status" style="background-color: #5ef38c; color: #1a201c">{{ $order->status }}</p>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="price">{{ $order->paket->formatRupiah('harga_paket') }}</p>

                        @if (!$order->bukti_bayar)
                        <!-- Button trigger modal -->
                        <button type="button" class="smoothscroll btn custom-btn custom-border-btn"
                            data-bs-toggle="modal" data-bs-target="#myOrderModal{{ $order->id }}">
                            Pay Now <i class="bi bi-credit-card ms-1"></i>
                        </button>
                        @endif
                    </div>
                    <a type="button" href="" class="name" data-bs-toggle="modal"
                        data-bs-target="#detailModal{{ $order->id }}">Order Details</a>
                    <!-- Modal -->
                    <div class="modal fade" id="myOrderModal{{ $order->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <form action="/payment/{{ $order->id }}" method="post" class="modal-content"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Payment</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <b class="mb-4">Silahkan lakukan pembayaran ke Rekening dibawah</b><br>
                                    <table class="mb-3" border="0">
                                        <tr>
                                            <td scope="col" width="120px">Bank</td>
                                            <td width="20px">:</td>
                                            <td>BRI</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">No Rekening</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="noRek" value="0189 0103 4442 503" readonly>
                                                <button type="button" class="btn-copy" onclick="copyRek()"><i
                                                        class="bi bi-copy"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Atas Nama</td>
                                            <td>:</td>
                                            <td>Hafizah</td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kirim Bukti
                                            Transfer/Bayar</label>
                                        <input type="file" name="bukti_bayar" class="form-control"
                                            id="exampleFormControlInput1" placeholder="name@example.com" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn-inout border-0">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="detailModal{{ $order->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Order Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <b class="mb-2">Detail Paket</b>
                                    <table class="mb-3" border="0">
                                        <tr>
                                            <td scope="col" width="120px">Nama Paket</td>
                                            <td width="20px">:</td>
                                            <td>{{ $order->paket->nama_paket }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Keterangan</td>
                                            <td>:</td>
                                            <td>{{ $order->paket->ket_paket }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Harga</td>
                                            <td>:</td>
                                            <td>{{ $order->paket->formatRupiah('harga_paket') }}</td>
                                        </tr>
                                    </table>
                                    <b class="mb-2">Detail Pesanan</b>
                                    <table class="mb-3" border="0">
                                        <tr>
                                            <td scope="col" width="120px">No Hp</td>
                                            <td width="20px">:</td>
                                            <td>{{ $order->no_hp }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Lokasi</td>
                                            <td>:</td>
                                            <td>{{ $order->lokasi }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Tanggal</td>
                                            <td>:</td>
                                            <td>{{ $order->tanggal_pemesanan }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Jam</td>
                                            <td>:</td>
                                            <td>{{ $order->jam }}</td>
                                        </tr>
                                    </table>
                                    <b class="mb-2">Detail Fotografer</b>
                                    <table class="" border="0">
                                        <tr>
                                            <td scope="col" width="120px">Nama</td>
                                            <td width="20px">:</td>
                                            <td>{{ $order->fotografer->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Pengalaman</td>
                                            <td>:</td>
                                            <td>{{ $order->fotografer->pengalaman }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn-inout border-0"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table></table>
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
<script>
function copyRek() {
    // Get the text field
    var copyText = document.getElementById("noRek");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
}
</script>
@endpush