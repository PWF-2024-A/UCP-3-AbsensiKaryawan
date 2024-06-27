<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <style>
        :root {
            --navy: #031A42;
            --deepblue: #1f3c88;
            --white: #fff;
            --blue: #0111FF;
            --softblue: #a9bae6;
            --softgray2: #CCD8E1;
            --gray: #727379;
            --orangelight: #e8d8b7;
            --fwbold: 700;
            --fwextrabold: 800;
            --fwsemibold: 600;
            --fwmedium: 500;
            --fwregular: 400;
            --fwlight: 300;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .mb-16 {
            margin-bottom: 16px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mb-50 {
            margin-bottom: 50px;
        }

        .mb-70 {
            margin-bottom: 70px;
        }

        .mb-100 {
            margin-bottom: 100px;
        }

        .mt-150 {
            margin-top: 150px;
        }


        .jumbo-header {
            font-weight: var(--fwextrabold);
            color: var(--navy);
            font-size: 48px;
        }

        .big-header {
            font-weight: var(--fwbold);
            color: var(--navy);
            font-size: 28px;
        }

        .small-header {
            font-weight: var(--fwbold);
            color: var(--navy);
            font-size: 18px;
        }

        .paragraph {
            line-height: 36px;
            color: var(--gray);
            font-size: 18px;
        }

        .paragraph-about {
            line-height: 36px;
            color: var(--navy);
            font-size: 18px;
        }

        .paragraph2 {
            color: var(--navy);
            font-weight: var(--fwregular);
            font-size: 16px;
        }

        input.form-control {
            padding: 14px 24px 14px 24px;
            border-radius: 50px;
            border: 1px solid var(--softgray2);

        }

        .medium-header {
            color: var(--navy);
            font-size: 16px;
            font-weight: var(--fwbold);
        }

        .small-paragraph {
            color: var(--gray);
            font-size: 14px;
            font-weight: var(--fwmedium);
        }

        .extra-small-paragraph {
            color: var(--gray);
            font-size: 10px;
            font-weight: var(--fwregular);
        }


        .btn-secondary {
            padding: 14px 24px 14px 24px;
            border-radius: 50px;
            border: 0;
            background: var(--softblue);
            color: var(--navy);
            font-weight: var(--fwbold);
        }

        .btn-primary {
            padding: 14px 24px 14px 24px;
            border-radius: 50px;
            border: 0;
            background: var(--blue);
            color: var(--white);
            font-weight: var(--fwbold);
        }

        /* .navbar {
            padding: 50px 0 50px 0;
            z-index: 1000;
            background-color: #d3e0ff;
            height: 4rem;
            display: flex;
            align-items: center;
        } */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            /* Make sure the navbar is on top of other elements */
            background-color: #d3e0ff;
            /* Adjust background color */
            height: 4rem;
            /* Set height for horizontal navigation */
            display: flex;
            /* Allow stacking navigation and content */
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }


        .navbar-nav .nav-item {
            padding: 0 20px 0 20px;
        }

        .navbar-nav .nav-link {
            color: var(--navy);
        }

        .navbar-nav .nav-item .active {
            color: var(--blue);
            font-weight: var(--fwbold);
        }

        /* .header .stats .item:nth-child(2) {
            border-right: 1px solid var(--softblue);
            border-left: 1px solid var(--softblue);
        } */

        .best-items {
            padding: 70px 0 70px 0;
            background: var(--softblue);
        }

        .card-about {
            padding: 70px 0 70px 0;
            background: var(--orangelight);
        }

        .best-items .item .info {
            background: var(--white);
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
            padding: 16px;
        }

        .clear {
            clear: both;
        }

        .best-items .item {
            margin-bottom: 30px;
        }

        .best-items .item .info {
            transition: all 0.3s ease;
        }

        .best-items .item:hover .info {
            -webkit-box-shadow: 10px 10px 63px 0px rgba(199, 205, 227, 0.65);
            -moz-box-shadow: 10px 10px 63px 0px rgba(199, 205, 227, 0.65);
            box-shadow: 10px 10px 63px 0px rgba(199, 205, 227, 0.65);
            transition: all 0.3s ease;
        }

        .best-items .item .info .footer .location {
            float: left;
        }

        .best-items .item .info .footer .price {
            float: right;
        }

        .best-items .item .info .footer .price p {
            color: var(--blue);
            font-weight: var(--fwbold);
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;

        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .team-member h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .team-member p {
            font-size: 16px;
            color: #666;
            margin-bottom: 0;
        }

        .team-member a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .team-member a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="mb-70 navbar navbar-expand-lg">
        <div class="container">
            <a>
                {{-- <img src="{{ URL ('images/logo.png') }}" alt="" height="48"> --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mx-auto mb-2 navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                </ul>
                <ul class="mb-2 navbar-nav mb-lg-0">
                    <li class="nav-item">
                        @auth
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="header mb-70 mt-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="jumbo-header mb-30">
                        Project Laravel<br>
                        Presensi Karyawan
                    </h1>
                    <p class="paragraph mb-30">
                        Memudahkan dan memberikan efisiensi yang<br>
                        lebih baik dengan sekali klik.
                    </p>
                    <p class="mb-50"><a href="#features" class="btn btn-primary">Jelajahi Fitur</a></p>
                    <div class="text-center row stats">
                        <div class="col-lg-4 item">
                            <h3 class="small-header">
                                {{-- PWF --}}
                            </h3>
                            {{-- <p class="small-paragraph">
                                Aisah Atik
                            </p> --}}
                        </div>
                        {{-- <div class="col-lg-4 item">
                            <h3 class="small-header">
                                20210140092
                            </h3>
                            <p class="small-paragraph">
                                Bagas Saras
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="small-header">
                                20210140137
                            </h3>
                            <p class="small-paragraph">
                                Reza Riswanda
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="small-header">
                                20210140128
                            </h3>
                            <p class="small-paragraph">
                                Khaidar Royani
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="small-header">
                                20210140007
                            </h3>
                            <p class="small-paragraph">
                                Panji Al-Biruni
                            </p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ URL ('images/Checklist.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="best-items">
        <div class="container" id="features">
            <div class="text-center mb-100 row">
                <div class="col-lg-12">
                    {{-- <img src="{{ URL ('images/Checklist.jpg') }}" height="42" alt="" class="mb-16"> --}}
                    <h3 class="big-header">
                        Fitur Presensi Karyawan
                    </h3>
                    {{-- <p class="paragraph">
                        Dolor space comfortable moments
                    </p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="details.blade.php">
                            <img src="{{ URL ('images/Karyawan.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info" style="height: 200px">
                            <a href="details.html">
                                <h3 class="mb-2 small-header">
                                    Karyawan
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="flex-row location d-flex ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="mb-0 small-paragraph">
                                        Admin dapat melihat data karyawan yang telah melakukan register pada website,
                                        serta admin dapat mengupdate dan menghapus data karyawan
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ URL ('images/Divisi.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info" style="height: 200px">
                            <a href="">
                                <h3 class="mb-2 small-header">
                                    Divisi
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="flex-row location d-flex ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="mb-0 small-paragraph">
                                        Admin dapat menambah kategori divisi, mengubah maupun mengedit kategori tersebut
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ URL ('images/Absensi.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info" style="height: 200px">
                            <a href="">
                                <h3 class="mb-2 small-header">
                                    Presensi
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="flex-row location d-flex ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="mb-0 small-paragraph">
                                        Admin dapat melihat data Presensi dari karyawan yang telah melakukan Presensi,
                                        sedangkan karyawan dapat melakukan Presensi
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ URL ('images/Report.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info" style="height: 200px">
                            <a href="">
                                <h3 class="mb-2 small-header">
                                    Report
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="flex-row location d-flex ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="mb-0 small-paragraph">
                                        Admin dapat melihat hasil report Presensi yang telah dilakukan
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="card-about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div>
                        <div class="text-center">
                            {{-- <img src="images/ic_best.svg" height="42" alt="" class="mb-16"> --}}
                            <h3 class="mb-4 big-header" id="about">
                                Tentang Kami
                            </h3>
                        </div>
                        <p class="mb-4 text-center card-text paragraph-about">
                            Presensi Karyawan adalah solusi ideal untuk perusahaan dari semua skala
                            yang ingin meningkatkan pengelolaan kehadiran karyawan mereka. Dengan fitur
                            yang lengkap, manfaat yang nyata, dan harga yang terjangkau, Presensi
                            Karyawan adalah pilihan tepat untuk membantu Anda mencapai tujuan bisnis Anda.
                        </p>
                        <div class="text-center">
                            <h3 class="mb-4 big-header">Profil Kelompok</h3>
                            <div class="row">
                              <div class="col-md-2 team-member img">
                                <img src="https://cdn1.iconfinder.com/data/icons/avatars-1-5/136/87-512.png" alt="Aisah">
                                <h3 class="mb-2 small-header">Aisah Atik Fitriani</h3>
                                <p>20210140061</p>
                              </div>
                              <div class="col-md-2 team-member img">
                                <img src="https://cdn2.iconfinder.com/data/icons/avatars-2-7/128/45-512.png" alt="Bagas">
                                <h3 class="mb-2 small-header">Bagas Saras Budi Prastika</h3>
                                <p>20210140092</p>
                              </div>
                              <div class="col-md-2 team-member img">
                                <img src="https://cdn3.iconfinder.com/data/icons/flat-classy-users-1/256/Male_SkinTone2_HairStyle2-512.png" alt="Reza">
                                <h3 class="mb-2 small-header">Muhammad Reza Riswanda</h3>
                                <p>20210140137</p>
                              </div>
                              <div class="col-md-2 team-member img">
                                <img src="https://civils.sico.mw/wp-content/uploads/2020/09/face-1.png" alt="Khaidar">
                                <h3 class="mb-2 small-header">Muhammad Khaidar Royani</h3>
                                <p>20210140128</p>
                              </div>
                              <div class="col-md-2 team-member img">
                                <img src="https://cdn2.iconfinder.com/data/icons/avatars-2-7/128/45-512.png" alt="Panji">
                                <h3 class="mb-2 small-header">Muhammad Panji Al-Biruni</h3>
                                <p>20210140007</p>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
