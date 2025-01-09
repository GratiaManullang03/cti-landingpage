<!-- resources/views/thank-you.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You - Sangfor Cyber Command</title>
        <meta name="description" content="Thank you for your interest in Sangfor Cyber Command">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/thank-you.css') }}" rel="stylesheet">
        <link href="{{ asset('css/explore.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Top Navbar -->
        <nav class="navbar-top">
            <div class="container">
                <div class="language-switcher">
                    <a href="#" class="active">ID</a>
                    <span>|</span>
                    <a href="#">EN</a>
                </div>
            </div>
        </nav>

        <!-- Main Navbar -->
        <nav class="navbar-main">
            <div class="container">
                <div class="navbar-brand-wrapper">
                    <a class="navbar-brand" href="#">
                        <img src="https://www.helios.id/wp-content/uploads/2023/01/Helios-a-member-of.png" alt="Helios" class="helios-logo">
                    </a>
                    <div class="navbar-divider"></div>
                    <a class="navbar-brand" href="#">
                        <img src="https://www.sangfor.com/themes/custom/sangfor/front-end/public/assets/images/Logo%20Black.png" alt="Sangfor" class="sangfor-logo">
                    </a>
                </div>
            </div>
        </nav>

        <!-- Thank You Content -->
        <main class="thank-you-section">
            <div class="container">
                <div class="thank-you-content text-center">
                    <div class="illustration">
                        <img src="https://cdni.iconscout.com/illustration/premium/thumb/mailing-service-illustration-download-in-svg-png-gif-file-formats--mail-sending-send-email-man-reading-pack-network-communication-illustrations-6067221.png?f=webp" alt="Thank You Illustration">
                    </div>
                    <h1>Thank You for Your Interest</h1>
                    <p>Our team will contact you within 5 working days</p>
                    <a href="/" class="btn btn-back">BACK TO HOMEPAGE</a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="world-map-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="company-info">
                            <h3>PT. Helios Informatika Nusantara</h3>
                            <div class="address">
                                <p>Centennial Tower, 12th Floor,</p>
                                <p>Jl. Jendral Gatot Subroto</p>
                                <p>No. Kav 24-25, Jakarta</p>
                                <p>12930 Indonesia</p>
                            </div>
                            <div class="contact-info">
                                <p><strong>Phone:</strong> +62 21 8062 2220</p>
                                <p><strong>Email:</strong> <a href="mailto:Tencent@helios.id">Tencent@helios.id</a></p>
                            </div>
                            <div class="social-links">
                                <a href="#" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#" class="social-icon"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p class="copyright">© 2023 - PT. Helios Informatika Nusantara - All Right Reserved</p>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>
    </body>
</html>