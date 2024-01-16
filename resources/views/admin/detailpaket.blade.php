<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min
.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <title>Tambah Data</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis
                | D-IV Rakayasa Perangkat Lunak</a>
        </div>
    </nav>
    <div class="container">
        <a href="{{ route('admin.paket') }}">
            <i class="bi-arrow-left h1"></i>
        </a>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Detail paket</h5>
                        <div class="text-center">
                            <img class="rounded mt-5 mb-5" style="width: 200px"
                                src="{{ asset('images/' .$detailpaket->foto) }}" alt="cover paket">
                        </div>
                        <div class="row text-center">
                            <div class="col"></div>
                            <div class="col-12">
                                <input class="form-control mb-3 textcenter" type="text"
                                    value="ID Paket : {{$detailpaket->id }}" disabled readonly>
                                <input class="form-control mb-3 textcenter" type="text"
                                    value="Foto : {{$detailpaket->foto}}" disabled readonly>
                                <input class="form-control mb-3 textcenter" type="text"
                                    value="Nama Paket : {{$detailpaket->nama_paket }}" disabled readonly>
                                <input class="form-control mb-3 textcenter" type="text"
                                    value="Harga : {{detailpaket->harga_paket }}" disabled readonly>
                                <input class="form-control mb-3 textcenter" type="text"
                                    value="Keterangan : {{$detailpaket->ket_paket }}" disabled readonly>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundl
e.min.js"></script>
</body>

</html>