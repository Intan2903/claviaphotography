<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <title>Edit Data paket</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">CLAVIA PHOTOGRAPHY</a>
        </div>
    </nav>
    <div class="container">
        <a href="{{ route('admin.paket') }}">
            <i class="bi-arrow-left h1"></i>
        </a>
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
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Data Paket</h5>
                        <form action="/postEditPaket/{{ $data->id }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Nama Paket</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="nama_paket" required value="{{ $data->nama_paket}}">
                                <span class="text-danger">
                                    @error('nama_paket')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Harga Paket</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="harga_paket" required value="{{ $data->harga_paket }}">
                                <span class="text-danger">
                                    @error('harga_paket')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Keterangan Paket</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="ket_paket" required value="{{ $data->ket_paket }}">
                                <span class="text-danger">
                                    @error('ket_paket')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Foto Paket</label>
                                <input class="form-control mb-2" placeholder="Nama file lama: {{ $data->foto }}"
                                    disabled>
                                <input class="form-control" type="file" name="foto">
                                <div class="form-text">Maksimal ukuran gambar lulusan 5MB</div>
                                <img class="mt-3" style="width: 100px" src="{{ asset('/images/' . $data->foto) }}"
                                    alt="Foto Paket">
                            </div><br>
                            <button type="submit" class="btn btn-success mt-5">Update Data Paket</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>