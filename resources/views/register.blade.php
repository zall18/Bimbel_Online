<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root{
            --color-main: rgb(51, 122, 184);
        }

        body{
            background-color: var(--color-main);
        }

        .img-login{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid text-white p-4">
        <h1 class="">BIMBO</h1>
        <div class="row">
            <div class="col-md-7 pt-5 d-flex align-items-center">
                <img src="{{ asset('assets/BIMBEL.png') }}" class="img-login">
            </div>
            <div class="col-md-5 p-5 d-flex justify-content-start align-items-center">
                <form action="/register" class="w-100" method="post">
                    @csrf
                    <div class="mb-4">
                        <h3>Ayo Daftar di BIMBO!</h3>
                        Belajar Bimbingan Online, Bersama kita anda Cerdas.
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
