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
                        <h5 class="mt-2">Selamat Belajar!</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">NAMA MATERI</h6>
                        <div class="video d-flex justify-content-center pt-4">
                            <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/{{ $subject->video }}"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <p class="card-text pt-4 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, expedita. Impedit magni dignissimos rem ducimus itaque laborum placeat corporis ad at sequi sit doloremque unde omnis molestias praesentium illum deserunt repellat eum animi non voluptatibus, incidunt soluta modi saepe. Excepturi possimus neque recusandae. Tempore quae consectetur cum, vel illum magni molestiae rerum facere possimus iusto reprehenderit, quasi quia dolores temporibus rem? Doloremque ad aspernatur sapiente aliquid, doloribus culpa accusamus excepturi ut eligendi labore nobis nihil. Dolor dignissimos veritatis debitis ipsum ea asperiores facilis alias. Numquam mollitia saepe nemo, repudiandae porro nostrum repellendus laudantium quaerat rerum, soluta commodi molestias reprehenderit nisi, nihil ipsam adipisci? Obcaecati dignissimos earum eius, velit dolor minus quam quibusdam inventore officiis illum dolorem amet aliquam optio quasi quia sunt, laudantium perferendis enim et. Sequi, excepturi unde harum, aliquid impedit, veniam nostrum repellat officiis dicta voluptates rerum quidem. Recusandae, mollitia. Perferendis minima quae eos debitis nam eveniet vel expedita facere excepturi sit sunt doloremque suscipit ab veniam fuga, vero quo voluptatem animi quisquam numquam, corporis assumenda eum neque deleniti. Aut soluta temporibus nihil aliquid saepe consequuntur vel quibusdam id ducimus cumque quia, aliquam iusto voluptatibus recusandae exercitationem voluptatem odio a pariatur illum quis hic distinctio in mollitia quae? Rerum sed quibusdam voluptatum repellendus animi beatae modi recusandae unde? Iusto iure atque iste minus a architecto suscipit sed beatae cum fuga? Ea, quasi a minima esse possimus rem maxime earum autem aspernatur eos sed modi laboriosam porro nostrum culpa magnam mollitia, cupiditate fugiat soluta, nam vero illum omnis illo recusandae. Doloribus, est. Perspiciatis quisquam maxime sint veritatis, voluptatem id atque at cupiditate delectus, dolorum ducimus minima repellat quibusdam ab error a laboriosam in? Doloremque eum cupiditate ipsa, laudantium veniam alias laboriosam nobis porro consequuntur quam, iusto tenetur soluta possimus! Magni earum debitis delectus, quos ut commodi deleniti iste libero vero eveniet, voluptate corporis itaque quaerat amet adipisci blanditiis fugit molestiae. Magnam cumque in beatae deserunt ullam ad? Saepe explicabo qui quasi voluptates illo quae consequatur delectus optio quod aspernatur enim laudantium ex, temporibus in impedit nemo eius suscipit molestias dicta ab animi ipsam tempore. Ea alias dolores id optio adipisci ab consectetur laudantium? Quis nobis expedita minus aspernatur, cumque voluptatibus molestias, velit temporibus laborum commodi amet architecto consequuntur distinctio earum explicabo porro. Distinctio ut harum aliquid beatae nesciunt necessitatibus tempora totam omnis ad quae voluptatum reiciendis, ipsam illum est enim sequi facere delectus corrupti voluptate ex minima iusto nisi? Saepe quo perspiciatis dolores! Vitae minima fugit dolorum culpa molestiae excepturi reiciendis veniam, voluptas neque! Possimus, minima harum! Totam dolore sunt at facilis aspernatur dolor explicabo assumenda in, mollitia quasi illum, nesciunt distinctio error animi ipsam, dicta veniam? Laboriosam voluptas optio commodi minus asperiores earum sit amet aspernatur dolorem nisi quasi natus fugiat hic, dignissimos quae magnam illo tempora ea. Corrupti perferendis sit deserunt voluptas veniam? Nesciunt consequatur harum optio id dolores esse eos ad libero quam minus. Sit quisquam, officiis consequatur perferendis animi quidem cumque laudantium eum qui illum totam quod deleniti sint et quae dolor repellendus odit ut?
                        </p>

                    </div>
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
<script src="bootstrap/js/bootstrap.min.js"></script>
