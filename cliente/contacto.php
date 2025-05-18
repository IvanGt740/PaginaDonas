<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Chapin Donas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #ff9933;
            --secondary-color: #ff6699;
            --dark-color: #333333;
            --light-color: #ffffff;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff8f0;
        }
        
        .navbar {
            background-color: var(--light-color);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand img {
            height: 50px;
        }
        
        .hero-section {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        
        .hero-section::before {
            content: "";
            background-image: url('/api/placeholder/1200/300');
            background-size: cover;
            opacity: 0.15;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        
        .contact-section {
            padding: 60px 0;
        }
        
        .contact-info-card {
            background-color: var(--light-color);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            height: 100%;
        }
        
        .contact-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .contact-form {
            background-color: var(--light-color);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #e88a20;
            border-color: #e88a20;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            width: 60%;
            height: 3px;
            background-color: var(--secondary-color);
            bottom: 0;
            left: 0;
        }
        
        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 40px 0;
        }
        
        .cart-icon {
            position: relative;
        }
        
        .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.4);
        }

        @media (max-width: 768px) {
            .whatsapp-float img {
                width: 50px;
                height: 50px;
            }
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border: none;
        }
    </style>
</head>
<body>
    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/50255325757?text=Necesito%20más%20información" class="whatsapp-float" target="_blank" aria-label="Chatear por WhatsApp">
        <img src="../images/Whatsapp.png" alt="WhatsApp" width="60" height="60">
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../index.html">
                <img src="../images/logo3.png" alt="Chapin Donas Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Inicio</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="../cliente/contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ivangt740.github.io/PaginaDonas/Game/index.html">Game</a>
                    </li>
                </ul>
                <div class="ms-3 d-flex align-items-center">
        <!-- Hero Section    <a href="#" class="btn btn-outline-primary me-2">
                        <i class="fas fa-user"></i>
                    </a>-->  
                    <a href="cliente/Page_Compra.php" class="btn btn-outline-primary cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Contáctanos</h1>
            <p class="lead mb-4">Estamos aquí para responder tus preguntas y recibir tus comentarios</p>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title">Visítanos</h2>
                    
                    <!-- Mapa Street View -->
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1747588689381!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQ0R2YzdPZkE.!2m2!1d14.55098653575739!2d-90.52306747371676!3f292.19866344665377!4f0!5f0.7820865974627469" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="contact-info-card">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h4>Dirección</h4>
                                <p>Zona 10, Ciudad de Guatemala</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="contact-info-card">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h4>Horario</h4>
                                <p>Lunes a Sábado<br>8:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="contact-info-card">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <h4>Teléfono</h4>
                                <p>(502) 2222-3333</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="contact-info-card">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h4>Email</h4>
                                <p>info@chapindonas.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <h2 class="section-title">Envíanos un Mensaje</h2>
                    <div class="contact-form">
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono">
                            </div>
                            <div class="mb-3">
                                <label for="asunto" class="form-label">Asunto</label>
                                <select class="form-select" id="asunto">
                                    <option selected>Selecciona un asunto</option>
                                    <option value="consulta">Consulta</option>
                                    <option value="pedido">Pedido especial</option>
                                    <option value="evento">Evento corporativo</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="../images/logo3.png" style="width: 110px; height: 90px;" alt="Chapin Donas Logo" class="mb-4">
                    <p>Donas artesanales hechas con amor y los mejores ingredientes. Sabor chapín en cada mordida.</p>
                    <div class="d-flex mt-3">
                        <a href="https://www.facebook.com/profile.php?id=61576232459966" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/donaschapin/" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/+50255325757?text=Necesito%20más%20información." class="text-white me-3"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5 class="mb-3">Enlaces</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="../index.php" class="text-white text-decoration-none">Inicio</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Productos</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Nosotros</a></li>
                        <li class="mb-2"><a href="contacto.php" class="text-white text-decoration-none">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5 class="mb-3">Categorías</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Clásicas</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Rellenas</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Especiales</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Mini Donas</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-3">Contáctanos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Zona 10, Ciudad de Guatemala</li>
                        <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> (502) 2222-3333</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@chapindonas.com</li>
                        <li class="mb-2"><i class="fas fa-clock me-2"></i> Lun - Sáb: 8:00 AM - 8:00 PM</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 Chapin Donas. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-white text-decoration-none me-3">Términos y Condiciones</a>
                    <a href="#" class="text-white text-decoration-none">Política de Privacidad</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Script personalizado -->
    <script>
        // Funcionalidad básica para el carrito
        document.addEventListener('DOMContentLoaded', function() {
            // Actualizar contador del carrito
            function updateCartCount() {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                const totalItems = cart.reduce((total, item) => total + (item.quantity || 1), 0);
                document.querySelector('.cart-count').textContent = totalItems;
            }

            // Cargar contador al iniciar la página
            updateCartCount();
            
            // Manejar clic en el icono del carrito
            document.querySelector('.cart-icon').addEventListener('click', function(e) {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                if (cart.length === 0) {
                    e.preventDefault();
                    alert('Tu carrito está vacío. Añade productos antes de continuar.');
                }
            });
        });
    </script>
</body>
</html>