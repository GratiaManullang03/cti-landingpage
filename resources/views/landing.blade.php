<!-- resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sangfor Cyber Command - Cybersecurity Made Simple</title>
        <meta name="description" content="Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
        <link href="{{ asset('css/about.css') }}" rel="stylesheet">
        <link href="{{ asset('css/advantages.css') }}" rel="stylesheet">
        <link href="{{ asset('css/features.css') }}" rel="stylesheet">
        <link href="{{ asset('css/value.css') }}" rel="stylesheet">
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

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Cybersecurity Made Simple with Sangfor Cyber Command</h1>
                    <p class="hero-subtitle">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection</p>
                    <div class="btn-trial">
                        <div class="text-trial">FREE TRIAL</div>
                        <div class="icon-trial"><i class="fa-solid fa-caret-right"></i></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="container">
                <div class="row about-row">
                    <!-- About Content -->
                    <div class="col-lg-6 about-content">
                        <h2 class="about-title">About Sangfor<br>Cyber Command</h2>
                        
                        <p class="about-text">
                            Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                        </p>

                        <p class="about-text">
                            It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.
                        </p>

                        <p class="about-text">
                            The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.
                        </p>

                        <p class="about-text">
                            Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.
                        </p>
                    </div>

                    <!-- Trial Form -->
                    <div class="col-lg-6">
                        <div class="trial-form-card">
                            <h3 class="form-title">Dapatkan Free Trial selama 1 bulan,</h3>
                            <p class="form-subtitle">analisa keamanan network anda dan lihat hasilnya!</p>

                            <form id="trialForm" class="trial-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">First Name *</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name" name="first_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Last Name *</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="last_name" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email">Corporate Email *</label>
                                    <input type="email" class="form-control" id="email" placeholder="email@mail.com" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="jobTitle">Job Title *</label>
                                    <input type="text" class="form-control" id="jobTitle" placeholder="Your Job" name="job_title" required>
                                </div>

                                <div class="mb-3">
                                    <label for="company">Company Name *</label>
                                    <input type="text" class="form-control" id="company" placeholder="Your Company" name="company" required>
                                </div>

                                <div class="mb-3">
                                    <label for="industry">Industry *</label>
                                    <select class="form-select" id="industry" placeholder="Select Industry" name="industry" required>
                                        <option value="" selected>Select Industry</option>
                                        <option value="technology">Technology</option>
                                        <option value="finance">Finance</option>
                                        <option value="healthcare">Healthcare</option>
                                        <option value="manufacturing">Manufacturing</option>
                                        <option value="retail">Retail</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Your Number" name="phone" required>
                                </div>

                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                                    <label class="form-check-label" for="consent">
                                        click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages-section">
            <div class="container">
                <h2 class="section-title">Sangfor Cyber Command Advantages</h2>
                
                <div class="row advantages-row">
                    <!-- Advanced Threat Detection -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <img src="https://cdn-icons-png.freepik.com/512/8385/8385961.png" alt="Advanced Threat Detection">
                            </div>
                            <h3>Advanced Threat Detection</h3>
                            <p>Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                        </div>
                    </div>

                    <!-- Network Visibility -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <img src="https://cdn-icons-png.freepik.com/512/8385/8385881.png" alt="Network Visibility and Control">
                            </div>
                            <h3>Network Visibility and Control</h3>
                            <p>Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                        </div>
                    </div>

                    <!-- Cloud Security -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/8385/8385957.png" alt="Cloud Security">
                            </div>
                            <h3>Cloud Security</h3>
                            <p>Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                        </div>
                    </div>

                    <!-- Comprehensive Security -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <img src="https://cdn-icons-png.freepik.com/512/8385/8385900.png" alt="Comprehensive Security Management">
                            </div>
                            <h3>Comprehensive Security Management</h3>
                            <p>Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-section">
            <div class="container">
                <h2 class="section-title">Sangfor Cyber Command Features</h2>
                
                <div class="row justify-content-center features-row">
                    <!-- Threat Intelligence -->
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <div class="icon-circle">
                                    <img src="https://cdn-icons-png.freepik.com/512/13636/13636593.png" alt="Threat Intelligence Icon">
                                </div>
                            </div>
                            <h3>Threat Intelligence</h3>
                            <p>Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                        </div>
                    </div>

                    <!-- Real-Time Detections -->
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <div class="icon-circle">
                                    <img src="https://cdn-icons-png.freepik.com/512/13636/13636723.png" alt="Real-Time Detections Icon">
                                </div>
                            </div>
                            <h3>Real-Time Detections</h3>
                            <p>Real-time alert system provides instant notification of potential security incidents.</p>
                        </div>
                    </div>

                    <!-- Threats Investigation -->
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <div class="icon-circle">
                                    <img src="https://cdn-icons-png.freepik.com/256/8385/8385950.png?semt=ais_hybrid" alt="Threats Investigation Icon">
                                </div>
                            </div>
                            <h3>Threats Investigation</h3>
                            <p>In-depth Threat Investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrence.</p>
                        </div>
                    </div>

                    <!-- Comprehensive Security Solutions -->
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <div class="icon-circle">
                                    <img src="https://cdn-icons-png.flaticon.com/512/8385/8385915.png" alt="Comprehensive Security Solutions Icon">
                                </div>
                            </div>
                            <h3>Comprehensive Security Solutions</h3>
                            <p>In-depth Threat Investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrence.</p>
                        </div>
                    </div>

                    <!-- Rapid Response -->
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <div class="icon-circle">
                                    <img src="https://images.squarespace-cdn.com/content/v1/6591926c7e3efa42f5ac9e47/a859f056-bca0-4cb9-bc71-c83fa1519df2/chat.png?format=500w" alt="Rapid Response Icon">
                                </div>
                            </div>
                            <h3>Rapid Response</h3>
                            <p>Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Value Section -->
        <section class="value-section">
            <div class="container">
                <div class="row justify-content-center value-row">
                    <div class="col-lg-8">
                        <!-- Value Proposition -->
                        <div class="value-content">
                            <h2 class="section-title">Sangfor Cyber Command's<br>Value to Customers</h2>
                            
                            <div class="value-list">
                                <div class="value-item">
                                    <span class="check-icon">✓</span>
                                    <p>Detect known dan unknown threats</p>
                                </div>
                                
                                <div class="value-item">
                                    <span class="check-icon">✓</span>
                                    <p>Much better visibility of security posture of the entire infrastructure</p>
                                </div>
                                
                                <div class="value-item">
                                    <span class="check-icon">✓</span>
                                    <p>Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
                                </div>
                                
                                <div class="value-item">
                                    <span class="check-icon">✓</span>
                                    <p>Faster Response to improve overall security control</p>
                                </div>
                                
                                <div class="value-item">
                                    <span class="check-icon">✓</span>
                                    <p>Much more cost effective than other solutions such as SIEM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Reference Title -->
        <div class="customer-title-wrapper">
            <div class="container">
                <div class="row justify-content-center costumers-row">
                    <div class="col-lg-8">
                        <h3 class="customers-title">Cyber Command Customers Reference</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customers Section -->
        <section class="customers-section">
            <div class="container">
                <div class="row justify-content-center costumers-row">
                    <div class="customers-grid">
                        <div class="customer-logo">
                            <img src="https://comboputra.co.id/assets/img/jnt1.png" alt="J&T Express">
                        </div>
                        <div class="customer-logo">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Logo_JRP_Insurance.png/1200px-Logo_JRP_Insurance.png" alt="Jasa Raharja Putera Insurance">
                        </div>
                        <div class="customer-logo">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/OK_Bank.png" alt="OK Bank Indonesia">
                        </div>
                        <div class="customer-logo">
                            <img src="https://cakrabhakti.co.id/wp-content/uploads/2021/05/client7.png" alt="Samudera Indonesia">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Section -->
        <section class="explore-section">
            <div class="container explore-row">
                <div class="text-center mb-5">
                    <h2 class="section-title">Explore Sangfor Cyber Command with Helios</h2>
                    <p class="section-subtitle">Helios Informatika Nusantara as Sangfor Distributor will provide</p>
                </div>

                <div class="row justify-content-center g-4">
                    <!-- NDR Implementation -->
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="https://sebitu.pl/bunseeft/2022/05/systemy-ndr.png" alt="NDR Implementation">
                            </div>
                            <h3>NDR Implementation</h3>
                        </div>
                    </div>

                    <!-- Incident Response -->
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="https://glassartsolutions.com/wp-content/uploads/2023/11/quality-assurance-1.png" alt="Incident Response">
                            </div>
                            <h3>Incident Response<br>and Threat Hunting</h3>
                        </div>
                    </div>

                    <!-- Device Security -->
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="https://cdn-icons-png.freepik.com/512/12201/12201661.png" alt="Device Security">
                            </div>
                            <h3>Device Security<br>Maintenance</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        <script src="{{ asset('js/about.js') }}"></script>
    </body>
</html>