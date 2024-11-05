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
            margin: auto;
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
                    <a class="nav-link" href="/home">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/my_package">Paket Belajar Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>

                </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container min-vh-100">
        <div class="row">
            <div class="col-md-12 pt-5">
                <h3>Paket Belajar Saya:</h3>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-12 d-flex gap-3 flex-wrap">
                @foreach ($transactions as $item)
                {{-- @dd($item->packages->subjects) --}}
                    @foreach ($item->packages->subjects as $subject)
                    <div class="card card-custom" style="width: 24%;">
                        <div class="card-header-custom bg-color-main">
                            <h5 class="mt-2">{{ $subject->title }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ $subject->title }}</h6>
                            <p class="card-text">{{ $item->packages->name }} </p>
                            <p class="card-text">{{ $item->packages->description }}</p>
                            <a href="materi/{{ $subject->id }}" class="btn btn-custom w-100">Baca Selengkapnya</a>
                        </div>
                    </div>

                    @endforeach
                @endforeach

            </div>
        </div>
    </div>

    <footer class="footer mt-5 py-3">
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
