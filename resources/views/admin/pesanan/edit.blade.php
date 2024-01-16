<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
    body {

        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        color: white;
    }

    .navbar {
        background-color: black;
        font-color: white;
    }

    .container-main {
        margin-top: 50px;
        padding: 20px;
    }

    .card,
    .form-card {
        background-color: white;
        padding: 30px;
        border: 2px solid black;
        border-radius: 10px;
        color: black;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .form-card label {
        color: black;
    }

    .form-card input,
    .form-card select {
        color: black !important;
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


    footer {
        background-color: black;
        margin-top: 20px;
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        padding-bottom: 5px;
        color: white;
        box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.5);
    }

    footer a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }
    </style>
    <title>Data Pesanan</title>
</head>

<body>
    <nav class="navbar ">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">
                CLAVIA PHOTOGRAPHY
            </a>
        </div>
    </nav>
    <div class="container">
        <a href="#">
            <i class="bi-arrow-left h1"></i>
        </a>
        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success')
                }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="form-card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Form Pemesanan</h5>
                        <form action="/admin/pesanan/{{ $pesanan->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">User</label>
                                <select class="form-select" name="user_id" aria-label="Default select example">
                                    <option value="{{ $pesanan->user_id }}">{{ $pesanan->user->name }}</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('id_pesanan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Paket</label>
                                <select class="form-select" name="paket_id" aria-label="Default select example">
                                    <option value="{{ $pesanan->paket_id }}">{{ $pesanan->paket->nama_paket }}</option>
                                    @foreach ($pakets as $paket)
                                    <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('id_pesanan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Fotografer</label>
                                <select class="form-select" name="fotografer_id" aria-label="Default select example">
                                    <option value="{{ $pesanan->fotografer_id }}">{{ $pesanan->fotografer->nama }}
                                    </option>
                                    @foreach ($fotografers as $fotografer)
                                    <option value="{{ $fotografer->id }}">{{ $fotografer->nama }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('fotografer_id')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Tanggal Acara</label>
                                <input type="date" class="form-control border border-secondary form-control"
                                    name="tanggal_pemesanan" required value="{{ $pesanan->tanggal_pemesanan }}">
                                <span class="text-danger">
                                    @error('tanggal_pemesanan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">No Hp</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="no_hp" required value="{{ $pesanan->no_hp }}">
                                <span class="text-danger">
                                    @error('no_hp')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Lokasi</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="lokasi" required value="{{ $pesanan->lokasi }}">
                                <span class="text-danger">
                                    @error('lokasi')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Jam Acara</label>
                                <input type="time" class="form-control border border-secondary form-control" name="jam"
                                    required value="{{ $pesanan->jam }}">
                                <span class="text-danger">
                                    @error('jam')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="Belum Bayar">Belum Bayar</option>
                                    <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                    <option value="Sudah Bayar">Sudah Bayar</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success mt-5">Update Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>