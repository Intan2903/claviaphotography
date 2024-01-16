@extends('layout.admin')

@push('css')
<style>
body {
    background-color: #f8f9fa;
}

.navbar {
    background-color: #C1CCD0;
}

.navbar-brand img {
    height: 40px;
    width: auto;
    margin-right: 200px;
}

.navbar-brand span {
    color: #ffffff;
    font-size: 20px;
    padding-right: 10px;
}

.sidebar {
    height: 100%;
    width: 200px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #C1CCD0;
    padding-top: 40px;
    color: #ffffff;
}

.sidebar a {
    padding: 10px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    background-color: #5a6268;
    color: #ffffff;

}

.content {
    margin-left: 200px;
    padding: 20px;
    width: calc(100% - 250px);
}

h2 {
    color: #343a40;
}

.table-container {
    margin-top: 30px;
    overflow-x: auto;
}

.table-container table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin-left: 130px;
}

.table-container th,
.table-container td {
    border: 1px solid #dee2e6;
    padding: 12px;
    text-align: left;
}

.table-container th {
    background-color: #343a40;
    margin-left: 100px;
    color: #ffffff;
}

.table-container tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

.table-container tbody tr:hover {
    background-color: #e0e8f0;
}

.upload-btn-container {
    margin-top: -30px;
    margin-left: 0px;
    margin-right: 30px;
    margin-bottom: 20px;
    /* Sesuaikan jarak bottom sesuai kebutuhan Anda */
}

.input-group {
    margin-top: 0px;
    margin-right: 250px;
}
</style>
@endpush

@section('nav')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <div class="row mt-5">
                <div class="upload-btn-container">
                    <a class="btn btn-success" href="/admin/pesanan/create">Tambah Pesanan</a>
                </div>
            </div>
            <div class="col-5 ml-auto">
                <form action="{{ route('admin.paket') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari nama paket"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')
<div class="container" style="margin-top: 10px">
    <div class="row mt-3">
        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="table-container" style="margin-top: -20px; margin-left: 20px">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Nama Fotografer</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Status</th>
                        <th scope="col">Bukti Bayar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanans as $index => $pesanan)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $pesanan->user->name }}</td>
                        <td>{{ optional($pesanan->paket)->nama_paket }}</td>
                        <td>{{ $pesanan->fotografer->nama }}</td>
                        <td>{{ $pesanan->tanggal_pemesanan }}</td>
                        <td>{{ $pesanan->no_hp }}</td>
                        <td>{{ $pesanan->lokasi }}</td>
                        <td>{{ $pesanan->jam }}</td>
                        <td>
                            @if ($pesanan->status == "Belum Bayar")
                            <span class="bg-warning px-2 py-1 text-white rounded">{{ $pesanan->status }}</span>
                            @elseif($pesanan->status == "Menunggu Konfirmasi")
                            <span class="bg-info px-2 py-1 text-white rounded">{{ $pesanan->status }}</span>
                            @elseif($pesanan->status == "Sudah Bayar")
                            <span class="bg-success px-2 py-1 text-white rounded">{{ $pesanan->status }}</span>
                            @endif
                        </td>
                        <td>
                            @if ($pesanan->bukti_bayar)
                            <a href="{{ url('../images') . '/' . $pesanan->bukti_bayar }}" class="text-decoration-none"
                                target="_blank">Lihat Bukti</a>
                            @endif
                        </td>
                        <td class="d-flex">
                            <a class="btn btn-outline-warning me-2"
                                href="/admin/pesanan/{{ $pesanan->id }}/edit">Edit</a>
                            <form action="/admin/pesanan/{{ $pesanan->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- {{ $data->links() }} --}}
    </div>
</div>
@endsection