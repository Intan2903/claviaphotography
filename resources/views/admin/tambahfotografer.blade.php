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
                    <h5 class="card-title text-center">Tambah Data Fotografer</h5>
                    <form action="{{ route('postTambahFotografer') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Paket</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            <div class="form-text">Maksimal ukuran gambar 5MB</div>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama </label>
                            <input type="text" class="form-control" id="namat" name="nama" required
                                value="{{ old('nama') }}">
                            <span class="text-danger">
                                @error('nama')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="pengalaman" class="form-label">Pengalaman</label>
                            <input type="text" class="form-control" id="pengalaman" name="pengalaman" required
                                value="{{ old('pengalaman') }}">
                            <span class="text-danger">
                                @error('pengalaman')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="alamat_email" class="form-label">Alamat email</label>
                            <input type="text" class="form-control" id="alamat_email" name="alamat_email" required
                                value="{{ old('alamat_email') }}">
                            <span class="text-danger">
                                @error('alamat_email')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak" required
                                value="{{ old('kontak') }}">
                            <span class="text-danger">
                                @error('kontak')
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