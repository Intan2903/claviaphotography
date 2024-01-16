<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <title>Edit Data fotografer</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">CLAVIA PHOTOGRAPHY</a>
        </div>
    </nav>
    <div class="container">
        <a href="{{ route('admin.fotografer') }}">
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
                        <h5 class="card-title text-center">Update Data Fotografer</h5>
                        <form action="/postEditFotografer/{{ $data->id }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Nama</label>
                                <input type="text" class="form-control border border-secondary form-control" name="nama"
                                    required value="{{ $data->nama }}">
                                <span class="text-danger">
                                    @error('nama')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Pengalaman</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="pengalaman" required value="{{ $data->pengalaman }}">
                                <span class="text-danger">
                                    @error('pengalaman')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Alamat email</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="alamat_email" required value="{{ $data->alamat_email }}">
                                <span class="text-danger">
                                    @error('alamat_email')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Kontak</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="kontak" required value="{{ $data->kontak }}">
                                <span class="text-danger">
                                    @error('kontak')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Foto Fotografer</label>
                                <input class="form-control mb-2" placeholder="Nama file lama: {{ $data->foto }}"
                                    disabled>
                                <input class="form-control" type="file" name="foto">
                                <div class="form-text">Maksimal ukuran gambar 5MB</div>
                                <img class="mt-3" style="width: 100px" src="{{ asset('/images/' . $data->foto) }}"
                                    alt="Foto fotografer">
                            </div><br>
                            <button type="submit" class="btn btn-success mt-5">Update Data fotografer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>