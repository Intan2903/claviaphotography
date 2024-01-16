<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
    body {
        background: linear-gradient(45deg, #f8f9fa, #2c3e50, #f8f9fa);
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        color: white;
    }

    .navbar {
        background-color: #2c3e50;
    }

    .container-main {
        margin-top: 50px;
        padding: 20px;
    }

    .card {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 30px;
        border-radius: 10px;
        color: white;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
    }

    .card img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-top: 20px;
    }

    h1,
    h4,
    p {
        color: white !important;
    }

    /* Form style */
    .form-container {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 30px;
        border-radius: 10px;
        color: white;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        margin-top: 50px;
    }

    .form-container label {
        color: white;
    }

    .form-container input {
        color: white;
        background-color: transparent;
        border: 1px solid white;
    }

    .form-container input::placeholder {
        color: white;
    }

    .form-container button {
        color: white;
        background-color: #28a745;
        border: none;
    }

    .form-container button:hover {
        background-color: #2c3e50;
    }
    </style>
    <title>Tambah Data Paket</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">CLAVIA PHOTOGRAPHY</a>
            <div class="collapse navbar-collapse" id="navbarNav">

            </div>
        </div>
    </nav>

    <div class="container container-main">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="form-container">
                    <h5 class="card-title text-center">Tambah Data Paket</h5>
                    <form action="{{ route('postTambahPaket') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Paket</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            <div class="form-text">Maksimal ukuran gambar 5MB</div>
                        </div>

                        <div class="mb-3">
                            <label for="nama_paket" class="form-label">Nama Paket</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket" required
                                value="{{ old('nama_paket') }}">
                            <span class="text-danger">
                                @error('nama_paket')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="harga_paket" class="form-label">Harga Paket</label>
                            <input type="text" class="form-control" id="harga_paket" name="harga_paket" required
                                value="{{ old('harga_paket') }}">
                            <span class="text-danger">
                                @error('harga_paket')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="ket_paket" class="form-label">Keterangan Paket</label>
                            <input type="text" class="form-control" id="ket_paket" name="ket_paket" required
                                value="{{ old('ket_paket') }}">
                            <span class="text-danger">
                                @error('ket_paket')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Tambah Data Paket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white text-center pb-5 shadow -sm fixed bottom"
        style="background-color:black; margin-top: 20px;">
        <p>Create with <i class="bi bi-suit-heart-fill text-danger"></i> by <a class="text-black text-white fw-bold"
                href="https://www.instagram.com/yourstudio"></a>your studio</p>
    </footer>

    <!-- Include Bootstrap JavaScript (JQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>