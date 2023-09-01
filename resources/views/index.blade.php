<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Syarif Syarifuddin - Tes Tonjoo</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light pr-5 pl-5 fixed-top">
        <a class="navbar-brand" href="#">PartnerIklan.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active mx-0 mx-lg-1">
                    <a class="nav-link" href="#">Homepage <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Google Ads</a>
                        <a class="dropdown-item" href="#">Facebook Ads</a>
                        <a class="dropdown-item" href="#">SEO</a>
                        <a class="dropdown-item" href="#">Training</a>
                    </div>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link" href="#">Pemesanan</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Foto Header -->
    <div class="position-relative overflow-hidden text-center bg-light" id="portfolio">
        <img src="{{asset('assets/poto/header.jpg')}}" width="100%">
    </div>

    <!-- Grid-->
    <div class="features-icons bg-light text-center ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 mt-3">
                    <div class="card border border-dark">
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                        <h3>Google AdWords</h3>
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <div class="card border border-dark">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                        <h3>facebook Ads</h3>
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <div class="card border border-dark">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>SEO</h3>
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <div class="card border border-dark">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Training</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk-->
    <section class="showcase" id="news">
        <div class="container-fluid p-5">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{asset('assets/poto/adword.png')}}">
                </div>
                <div class="col-lg-6">
                    <h2>Google AdWords</h2>
                    <p class="lead mb-7">Jasa Iklan Google Adwords merupakan salah satu strategi internet marketing yang patut diperhitungkan. Siapa yang tidak tahu mesin pencarian terbesar di dunia ini? Pastinya adalah google dengan jumlah usernya yang begitu besar.
                        Terdapat banyak keuntungan yang akan didapatkan jika menggunakan google sebagai tools marketing anda karena umumnya seluruh orang di dunia jika ingin mencari sesuatu akan segera mencari di google.</p>
                    <div style="text-align: end">
                        <a href="" class="text-dark">Read More</a>
                    </div>
                </div>
                <div class="row g-0 ">
                    <div class="col-lg-6 order-lg-2 mt-5">
                        <img class="img-fluid" src="{{asset('assets/poto/adword.png')}}">
                    </div>
                    <div class="col-lg-6 ">
                        <h2 class="mt-5">Google AdWords</h2>
                        <p class="lead mb-7">Jasa Iklan Google Adwords merupakan salah satu strategi internet marketing yang patut diperhitungkan. Siapa yang tidak tahu mesin pencarian terbesar di dunia ini? Pastinya adalah google dengan jumlah usernya yang begitu besar.
                            Terdapat banyak keuntungan yang akan didapatkan jika menggunakan google sebagai tools marketing anda karena umumnya seluruh orang di dunia jika ingin mencari sesuatu akan segera mencari di google.</p>
                        <a href="" class="text-dark">Read More</a>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 mt-5">
                        <img class="img-fluid" src="{{asset('assets/poto/adword.png')}}">
                    </div>
                    <div class="col-lg-6 mb-5">
                        <h2 class="mt-5">Google Adwords</h2>
                        <p class="lead mb-7">Jasa Iklan Google Adwords merupakan salah satu strategi internet marketing yang patut diperhitungkan. Siapa yang tidak tahu mesin pencarian terbesar di dunia ini? Pastinya adalah google dengan jumlah usernya yang begitu besar.
                            Terdapat banyak keuntungan yang akan didapatkan jika menggunakan google sebagai tools marketing anda karena umumnya seluruh orang di dunia jika ingin mencari sesuatu akan segera mencari di google.</p>
                        <div style="text-align: end">
                            <a href="" class="text-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            Tes Tonjoo Agustus 2023
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Syarif Syarifuddin</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>