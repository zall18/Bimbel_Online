<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Bimbo</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root{
            --color-main: rgb(51, 122, 184);
        }

        .header{
            background-color: var(--color-main);
        }

        .img-banner-home{
            width: 1300px;
            height: 300px;
        }

        .bg-color-main{
            background-color: var(--color-main);
        }

        .card-custom {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-header-custom {
            background-color: var(--color-main); /* Ganti dengan warna sesuai kebutuhan */
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .discount-badge {
            background-color: #28a745;
            color: white;
            padding: 0.3rem 0.6rem;
            font-weight: bold;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        .btn-custom {
            background-color: #e0e300;
            color: rgb(0, 0, 0);
            border-radius: 20px;
        }
        .btn-custom:hover {
            background-color: var(--color-main);
            color: white;
        }
        .original-price {
            text-decoration: line-through;
            color: #888;
        }
        .discounted-price {
            color: #d00000;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .footer {
            background-color: var(--color-main); /* Warna background */
            color: #ffffff; /* Warna teks */
            padding: 2rem 0;
            margin-top: auto;
        }
        .footer a {
            color: #ffffff; /* Warna tautan */
            text-decoration: none;
        }
        .footer a:hover {
            color: #d3d3d3; /* Warna tautan saat hover */
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark header">
        <div class="container">
          <a class="navbar-brand" href="#">BIMBO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.html">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="my_package.html">Paket Belajar Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Logout</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container min-vh-100">
        <div class="row pt-5">
            <div class="col-md-12 d-flex gap-3 flex-wrap">
                <div class="card card-custom" style="width: 100%;">
                    <div class="card-header-custom bg-color-main">
                        <h5 class="mt-2">PEMBELIAN PAKET KURSUS</h5>
                    </div>
                    <form action="/buy_package_item" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="price" value="{{ $package_detail->price - $package_detail->price * $package_detail->discount / 100 }}">
                        <input type="hidden" name="paid" value="1">
                        <input type="hidden" name="packages_id" value="{{ $package_detail->id }}">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2"><i class="bi bi-book"></i> {{ $package_detail->subjects_count }} Materi</span>
                            <h6 class="card-title">{{ $package_detail->name }}</h6>
                            <p class="card-text">{{ $package_detail->description }}</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="discount-badge">{{ $package_detail->discount }}%</span>
                                <div>
                                    <span class="original-price">Rp {{ $package_detail->price }}</span>
                                    <span class="discounted-price">Rp {{ $package_detail->price - $package_detail->price * $package_detail->discount / 100 }}</span>
                                </div>
                            </div>
                            {{-- <form action="my_package.html"> --}}
                                <div class="mb-3">
                                    <label for="file" class="form-label">Upload Bukti Pembayaran</label>
                                    <input type="file" class="form-control" id="file" name="proof_of_payment">
                                </div>
                                <button type="submit" class="btn btn-custom w-100">Bayar Paket</button>
                            {{-- </form> --}}
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Logo dan Deskripsi -->
                <div class="col-md-4 mb-4">
                    <h5>BIMBO</h5>
                    <p class="small">Kami adalah perusahaan yang menyediakan layanan terbaik untuk Anda.</p>
                </div>

                <!-- Tautan Navigasi -->
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Paket Belajar Saya</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="col-md-4 mb-4">
                    <h5>Hubungi Kami</h5>
                    <p>Email: info@bimbo.com</p>
                    <p>Phone: +62 8239 3355 676</p>
                    <p>Address: Singaparna</p>
                </div>
            </div>
            <div class="text-center pt-3 border-top">
                <p class="small mb-0">© 2024 Bimbo. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
