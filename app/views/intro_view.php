<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eShop - Your Online Marketplace</title>
    <meta name="description" content="Shop the best deals on electronics, fashion, and more.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #222;
            padding: 10px 0;
        }
        .navbar-brand {
            font-weight: bold;
            color: white;
            font-size: 1.5rem;
        }
        .navbar .nav-link {
            color: white;
        }
        .search-bar {
            flex-grow: 1;
            margin: 0 15px;
        }
        .search-bar input {
            width: 100%;
            padding: 8px;
            border-radius: 20px;
            border: 1px solid #ccc;
            text-indent: 10px;
        }
        .hero {
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
        }
        .btn-custom {
            background-color: #ff6600;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e65c00;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .products img {
            width: 100%;
            border-radius: 10px;
        }
        .testimonial {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CyberShop</a>
            <form class="search-bar d-none d-lg-block">
                <input type="text" placeholder="Search products...">
            </form>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-info-circle"></i> About</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="login"><i class="fas fa-user"></i> Sign In</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-overlay"></div>
        <img id="heroImage" src="images/12.jpg" alt="Hero Image">
        <div class="hero-content">
            <h1>Welcome to CyberShop</h1>
            <p>Get the Best Deals Today!</p>
            <a href="#" class="btn btn-custom">Shop Now</a>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row products">
            <div class="col-md-4">
                <img src="images/12.jpg" alt="Smartphone" />
                <h4 class="text-center mt-2">Smartphone</h4>
            </div>
            <div class="col-md-4">
                <img src="images/13.jpg" alt="Fashion Wear" />
                <h4 class="text-center mt-2">Fashion Wear</h4>
            </div>
            <div class="col-md-4">
                <img src="images/12.jpg" alt="Trendy Shoes" />
                <h4 class="text-center mt-2">Trendy Shoes</h4>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center mb-4">What Our Customers Say</h2>
        <div class="testimonial">
            <p>"Amazing products and fast shipping! Will definitely shop again!"</p>
            <p><strong>- Alex P.</strong></p>
        </div>
        <div class="testimonial">
            <p>"Great customer service and fantastic deals!"</p>
            <p><strong>- Sarah K.</strong></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>We provide a secure platform to buy and sell second-hand products with complete peace of mind.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Home</a></li>
                        <li><a href="#" class="text-light">Products</a></li>
                        <li><a href="#" class="text-light">Contracts</a></li>
                        <li><a href="#" class="text-light">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 social-icons">
                    <h5>Follow Us</h5>
                    <a href="#" class="me-3 text-light"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="me-3 text-light"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
            <hr class="bg-light">
            <p class="mb-0">&copy; 2025 eShop. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const images = ["images/18.jpg", "images/19.jpg", "images/13.jpg"];
        let index = 0;
        function changeHeroImage() {
            index = (index + 1) % images.length;
            document.getElementById("heroImage").src = images[index];
        }
        setInterval(changeHeroImage, 3000); // Change image every 3 seconds
    </script>
    <script src="images/13.jpg"></script>
</body>
</html> 

