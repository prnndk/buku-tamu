<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary rounded fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11" style="">
            <a class="navbar-brand col-lg-3 me-0" href="#">BukuTamu</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">List Tamu</a>
                </li>
            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end align-items-center">
                <span class="navbar-text px-2">Hello, Gading!</span>
                <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name=Gading Prinandika" alt="avatar" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="position: absolute; inset: 0 auto auto 0; margin: 0; transform: translate(-110px, 34px);" data-popper-placement="bottom-end">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
{{--                <button class="btn btn-primary">Login</button>--}}
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid" style="margin-top: 80px">
    <div class="container py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card rounded-4">
                    <div class="col-md-8 col-lg-12 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Form Buku Tamu</h5>
                            <form action="/tamu" class="col-sm-12 col-lg-8" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                               placeholder="Masukkan Nama Lengkap..." aria-label="nama" required/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">Nomor Telephone</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" id="no_telp" name="no_telp"
                                               aria-label="no_telp" required minlength="10" maxlength="15"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat Rumah</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                               placeholder="Masukkan Alamat Rumah..." aria-label="alamat" required/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="keperluan_kunjungan_id" class="form-label">Keperluan Kunjungan</label>
                                    <div class="input-group">
                                        <select class="form-select" id="keperluan_kunjungan_id"
                                                name="keperluan_kunjungan_id" aria-label="keperluan_kunjungan_id"
                                                required>
                                            <option value="" selected disabled>Pilih Keperluan Kunjungan</option>
                                            @foreach($keperluan_kunjungans as $keperluan_kunjungan)
                                                <option
                                                    value="{{$keperluan_kunjungan['id']}}">{{$keperluan_kunjungan['keperluan']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="pesan" name="pesan"
                                                  placeholder="Masukkan Pesan..." aria-label="pesan"
                                                  required></textarea>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
