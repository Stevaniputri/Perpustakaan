<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/landing/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/landing/style.css">
    <title>Cart Project</title>
    <style>
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <!-- navbar  -->
        <nav class="navbar navbar-expand-lg px-4">
            <a class="navbar-brand" href="#"><img src="img/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
                <span class="toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav text-capitalize">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">home</a>
                    </li>
                </ul>
                <div class="nav-info-items d-none d-lg-flex ">
                    @auth
                    <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                        <p class="mb-0 text-capitalize"><a href="/logout" style="color: black; text-decoration: none;">Logout</a></p>
                    </div>
                    @else
                    <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                        <p class="mb-0 text-capitalize"><a href="/login" style="color: black; text-decoration: none;">Login</a></p>
                    </div>
                    @endauth

                </div>
            </div>
        </nav>
        <!-- end of nav -->
        <!-- banner  -->
        <div class="container-fluid">
            <div class="row max-height justify-content-center align-items-center" style=" min-height: calc(100vh - 76px); background: linear-gradient(var(--yellowTrans), var(--yellowTrans)), url('{{asset('assets/img/bg.jpg')}}') fixed no-repeat; position: relative; background-size: cover; height: 90vh;">
                <div class="col-10 mx-auto banner text-center">
                    <h1 class="text-capitalize">Better Solutions For Your Choice Book</h1>
                    <a href="/registrasi" class="btn banner-link text-uppercase my-2">Registrasi</a>

                </div>
            </div>
        </div>
    </header>
    <!-- about us -->
    <section class="about py-5" id="about">
        <div class="container">

            <div class="row">
                <div class="col-10 mx-auto col-md-6 my-5">
                    <h1 class="text-capitalize">about <strong class="banner-title ">us</strong></h1>
                    <p class="my-4 text-muted w-75">
                        more than 99 books that you can access on this wikbook web for free, we provide
                        books that can be read online so that knowledge is wider
                    </p>

                </div>
                <div class="col-10 mx-auto col-md-6 align-self-center my-5">
                    <div class="about-img__container">
                        <img src="assets/img/16576.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of about us -->


    <!-- store -->
    <section id="store" class="store py-5">
        <div class="container">
            <!-- section title -->
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">Top #3 <strong class="banner-title ">Book of the Weeks </strong></h1>
                </div>
            </div>
            <!-- end of section title -->
            <!--filter buttons -->
            <!-- search box -->
            <div class="row">

                <div class="col-10 mx-auto col-md-6">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend ">
                                <span class="input-group-text search-box" id="search-icon"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder='item....' id="search-item">
                        </div>

                    </form>
                </div>
            </div>
            <!--end of filter buttons -->
            <!-- store  items-->
            <div class="row" class="store-items" id="store-items">
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
                    <div class="card ">
                        @foreach($show as $detail)
                        <div class="img-container">
                            <img class="card-img" src="{{ asset('storage/' .$detail->image) }}" alt="Rome" />
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#data-Hujan">
                                    {{$detail['title']}}
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->

            </div>
    </section>
    <!--end of store items -->


    <!-- modal-container -->
    <div class="container-fluid ">
        <div class="row lightbox-container align-items-center">
            <div class="col-10 col-md-10 mx-auto text-right lightbox-holder">
                <span class="lightbox-close"><i class="fas fa-window-close"></i></span>
                <div class="lightbox-item"></div>
                <span class="lightbox-control btnLeft"><i class="fas fa-caret-left"></i></span>
                <span class="lightbox-control btnRight"><i class="fas fa-caret-right"></i></span>
            </div>

        </div>
    </div>

    <!-- Modal Bulan -->
    <div class="modal fade" id="data-Bulan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Synopsis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Dalam novel Bulan pertualangan antara Raib dan kedua kawannya masih berlanjut. Miss Selena akhirnya muncul di Sekolah saat beberapa bulan setelah kejadian di Klan Bulan. Miss Selena
                        memberikan kabar menyenangkan bagi para murid yang mempunyai jiwa petualang, seperti Raib, Ali, dan Seli. Miss Selena bersama Av berniat untuk mengajak mereka berkunjung ke klan Matahari
                        selama kurang lebih dua minggu. Av memiliki rencana hendak menemui ketua konsil klan Matahari. Diduga konsil klan Matahari ingin menguasai klan Matahari guna mencari federasi dalam melawan Tamus
                        yang diperkirakan akan bebas dan juga membebaskan raja tanpa mereka.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hujan -->
    <div class="modal fade" id="data-Hujan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Synopsis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Novel ini mengisahkan percintaan dan perjuangan hidup seorang perempuan bernama Lail. Ketika Lail baru berusia 13 tahun, dirinya harus menjadi seorang anak yatim piatu. Di hari pertama ia sekolah, ada sebuah bencana gunung meletus dan gempa dahsyat sehingga menghancurkan kota di mana ia menetap, bahkan merenggut nyawa ibu serta ayah Lail.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Bintang -->
    <div class="modal fade" id="data-Bintang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Synopsis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Novel ini mengisahkan percintaan dan perjuangan hidup seorang perempuan bernama Lail. Ketika Lail baru berusia 13 tahun, dirinya harus menjadi seorang anak yatim piatu. Di hari pertama ia sekolah, ada sebuah bencana gunung meletus dan gempa dahsyat sehingga menghancurkan kota di mana ia menetap, bahkan merenggut nyawa ibu serta ayah Lail.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    <!-- jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- script js -->
    <script src="assets/js/app.js"></script>
</body>

</html>