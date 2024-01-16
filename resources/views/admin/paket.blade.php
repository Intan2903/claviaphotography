<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Admin Dashboard - Clavia Photography</title>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <div class="col-2 upload-btn-container">
                        <a class="btn btn-success" href="{{ route('admin.tambahpaket') }}">UploadPaket+</a>
                    </div>
                </div>
                <div class="col-5 ml-auto">
                    <form action="{{ route('admin.paket') }}" method="GET">
                        @csrf
                        <div class="input-group">
                            <input type="search" name="search" class="form-control rounded"
                                placeholder="Cari nama paket" aria-label="Search" aria-describedby="search-addon" />
                            <button type="submit" class="btn btn-outline-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>

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
</head>
<div class="container-fluid">
    <div class="row">

        @include('partials.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 content">
            <!-- Your admin dashboard content goes here -->
        </main>
    </div>
</div>

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
                        <th scope="col">Foto</th>
                        <th scope="col">Nama paket</th>
                        <th scope="col">Harga paket</th>
                        <th scope="col">Keterangan Paket</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $pakets)
                    <tr>
                        <td scope="row">{{ $index + $data->firstItem() }}</td>
                        <td>
                            <img style="width: 50px" src="{{ asset('/images/' . $pakets->foto) }}" alt="pakets">
                        </td>
                        <td>{{ $pakets->nama_paket }}</td>
                        <td>{{ $pakets->harga_paket }}</td>
                        <td>{{ $pakets->ket_paket }}</td>
                        <td>
                            <a class="btn btn-outline-warning"
                                href="{{ route('admin.editpaket', $pakets->id) }}">Edit</a>
                            <a class="btn btn-outline-danger"
                                href="{{ route('admin.deletepaket', $pakets->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $data->links() }}
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>