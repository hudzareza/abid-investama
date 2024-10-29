<!DOCTYPE html>
<html lang="en">

@include('front.shared.header')
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap');

    body {
        padding: 100px 0;
        background: #ecf0f4;
        width: 100%;
        height: 100%;
        font-size: 18px;
        line-height: 1.5;
        font-family: 'Roboto', sans-serif;
        color: #222;
    }

    .container {
        max-width: 1230px;
        width: 100%;
    }

    h1 {
        font-weight: 700;
        font-size: 45px;
        font-family: 'Roboto', sans-serif;
    }

    .header {
        margin-bottom: 80px;
    }

    #description {
        font-size: 24px;
    }

    .form-wrap {
        background: rgba(255, 255, 255, 1);
        width: 100%;
        max-width: 850px;
        padding: 50px;
        margin: 0 auto;
        position: relative;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    }

    .form-wrap:before {
        content: "";
        width: 90%;
        height: calc(100% + 60px);
        left: 0;
        right: 0;
        margin: 0 auto;
        position: absolute;
        top: -30px;
        background: #00bcd9;
        z-index: -1;
        opacity: 0.8;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group>label {
        display: block;
        font-size: 18px;
        color: #000;
    }

    .custom-control-label {
        color: #000;
        font-size: 16px;
    }

    .form-control {
        height: 50px;
        background: #ecf0f4;
        border-color: transparent;
        padding: 0 15px;
        font-size: 16px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #00bcd9;
        -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    textarea.form-control {
        height: 160px;
        padding-top: 15px;
        resize: none;
    }

    .btn {
        padding: .657rem .75rem;
        font-size: 18px;
        letter-spacing: 0.050em;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #00bcd9;
        border-color: #00bcd9;
    }

    .btn-primary:hover {
        color: #00bcd9;
        background-color: #ffffff;
        border-color: #00bcd9;
        -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #00bcd9;
        background-color: #ffffff;
        border-color: #00bcd9;
        -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
        color: #00bcd9;
        background-color: #ffffff;
        border-color: #00bcd9;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    .nav-link.active {
        background-color: #007bff;
        /* Warna biru Bootstrap */
        color: white;
        /* Mengubah warna teks menjadi putih */
    }

    .datepicker {
        z-index: 1050 !important;
        /* Menjamin bahwa datepicker muncul di atas elemen lain */
    }

    .datepicker table tr td {
        padding: 10px;
        /* Menambah padding pada sel */
    }

    .datepicker .datepicker-days th {
        background-color: #007bff;
        /* Mengubah warna header hari */
        color: white;
        /* Mengubah warna teks header */
    }

    .datepicker .datepicker-days td.active {
        background-color: #28a745;
        /* Mengubah warna sel aktif */
        color: white;
        /* Mengubah warna teks sel aktif */
    }

    .datepicker .datepicker-days td:hover {
        background-color: #f0ad4e;
        /* Mengubah warna saat hover */
    }
</style>

<body class="index-page">

    @include('front.shared.navbar')

    <main class="main">

        <!-- Hero Section -->


        <div class="container">
            <header class="header">
                <h1 id="title" class="text-center">Absensi</h1>
                <!-- <p id="description" class="text-center">
                    Thank you for taking the time to help us improve the platform
                </p> -->
            </header>
            <div class="form-wrap">
                <form id="survey-form" action="{{route('absensi.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="input-group mb-3">
                            <select name="id_lokasi" class="form-control" id="inputGroupSelect01">
                                <option selected>Pilih Lokasi</option>
                                @foreach($location as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label id="name-label" for="name">NIK</label>
                                <input type="text" name="nik" id="name" placeholder="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label id="name-label" for="name">Nama</label>
                                <input type="text" name="nama" id="name" placeholder="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label id="name-label" for="name">Bagian</label>
                                <input type="text" name="bagian" id="name" placeholder="" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <select id="dropdown" name="tanggal" class="form-control" required>
                                    <option disabled selected value>Pilih</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bulan</label>
                                <select id="dropdown" name="bulan" class="form-control" required>
                                    <option disabled selected value>Pilih</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">{{ date("F", mktime(0, 0, 0, $i, 1)) }}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tahun</label>
                                <select id="dropdown" name="tahun" class="form-control" required>
                                    <option disabled selected value>Pilih</option>
                                    @for ($i = 2024; $i <= 2050; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Klik salah satu jika tidak hadir</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1" value="1" name="sakit" class="custom-control-input">
                                    <label class="custom-control-label" for="radio1">Sakit</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio2" value="1" name="tidak_info" class="custom-control-input">
                                    <label class="custom-control-label" for="radio2">Tidak ada kabar</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio3" value="1" name="cuti" class="custom-control-input">
                                    <label class="custom-control-label" for="radio3">Cuti</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio4" value="1" name="izin_lain2" class="custom-control-input">
                                    <label class="custom-control-label" for="radio4">Lain-lain</label>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Ambil semua radio button berdasarkan id
                            const radios = [document.getElementById('radio1'),
                                document.getElementById('radio2'),
                                document.getElementById('radio3'),
                                document.getElementById('radio4')
                            ];

                            // Tambahkan event listener untuk setiap radio button
                            radios.forEach(radio => {
                                radio.addEventListener('change', () => {
                                    // Jika satu dipilih, uncheck yang lain
                                    radios.forEach(r => {
                                        if (r !== radio) {
                                            r.checked = false; // Uncheck radio button lainnya
                                        }
                                    });
                                });
                            });
                        </script>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" id="comments" class="form-control" name="comment" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">QuickStart</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">QuickStart</strong><span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div></div>

    <!-- Vendor JS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ url('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('front/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ url('front/assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datepickermasuk').datepicker({
                format: 'yyyy-mm-dd', // format tanggal
                autoclose: true // menutup datepicker setelah memilih tanggal
            });

            $('#datepickerkeluar').datepicker({
                format: 'yyyy-mm-dd', // format tanggal
                autoclose: true // menutup datepicker setelah memilih tanggal
            });
        });
    </script>
</body>

</html>