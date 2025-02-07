<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .hero-section { background: url('hospital-bg.jpg') no-repeat center center/cover; height: 100vh; color: white; position: relative; }
        .hero-overlay { background: rgba(0, 0, 0, 0.6); height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 20px; }
        .features-section { padding: 60px 0; background: #f8f9fa; }
        .feature-box { padding: 20px; transition: 0.3s ease-in-out; }
        .feature-box:hover { transform: translateY(-10px); }
        .contact-section { padding: 60px 0; background: #e9ecef; }
        footer { background: #343a40; color: white; padding: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">HospitalMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="hero-section">
        <div class="hero-overlay">
            <h1 class="display-4 fw-bold">Welcome to Hospital Management System</h1>
            <p class="lead">Efficient and seamless hospital operations at your fingertips.</p>
            <a href="/login" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </div>
    
    <section id="features" class="features-section text-center">
        <div class="container">
            <h2 class="fw-bold mb-5">Key Features</h2>
            <div class="row">
                <div class="col-md-4 feature-box">
                    <i class="fas fa-user-injured fa-3x text-primary"></i>
                    <h4 class="mt-3">Patient Management</h4>
                    <p>Efficiently manage patient records, appointments, and medical histories.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <i class="fas fa-user-md fa-3x text-primary"></i>
                    <h4 class="mt-3">Doctor Management</h4>
                    <p>Assign doctors, schedule appointments, and manage staff data.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <i class="fas fa-file-invoice-dollar fa-3x text-primary"></i>
                    <h4 class="mt-3">Billing & Reports</h4>
                    <p>Generate invoices, manage payments, and track hospital finances.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="contact-section text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Contact Us</h2>
            <p class="mb-4">Get in touch with us for any queries or support.</p>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>
    
    <footer class="text-center">
        <p>&copy; 2025 HospitalMS. All Rights Reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
