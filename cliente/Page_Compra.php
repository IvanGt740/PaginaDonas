<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Chapin Donas</title>
    <link rel="icon" href="../images/icono.png" type="image/png">
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

        .navbar-brand img:hover{
            transform: scale(1.2);
        }
        
        .page-header {
            background-color: #ffeedd;
            padding: 40px 0;
            margin-bottom: 30px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #e88a20;
            border-color: #e88a20;
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: var(--light-color);
        }
        
        .cart-item {
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            background-color: var(--light-color);
        }
        
        .cart-item img {
            border-radius: 8px;
            object-fit: cover;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            width: fit-content;
        }
        
        .quantity-control button {
            border: none;
            background-color: #f8f9fa;
            width: 30px;
            height: 30px;
            font-weight: bold;
        }
        
        .quantity-control input {
            width: 40px;
            text-align: center;
            border: none;
            height: 30px;
        }
        
        .cart-summary {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: 20px;
            position: sticky;
            top: 90px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .summary-total {
            font-weight: bold;
            font-size: 1.2rem;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
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
        
        .coupon-form {
            display: flex;
            margin-bottom: 20px;
        }
        
        .coupon-form input {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .coupon-form button {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        .recommendations {
            margin-top: 50px;
        }
        
        .recommendation-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            height: 100%;
        }
        
        .recommendation-card img {
            height: 150px;
            object-fit: cover;
        }
        
        .empty-cart {
            text-align: center;
            padding: 50px 0;
        }
        
        .empty-cart i {
            font-size: 5rem;
            color: #ddd;
            margin-bottom: 20px;
        }
        
        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 40px 0;
            margin-top: 50px;
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

    /* Botón de redes sociales flotante */
    .social-float {
        position: fixed;
        bottom: 100px;
        right: 30px;
        z-index: 1000;
        cursor: pointer;
        transition: transform 0.3s ease;
        margin: 10px;
    }

    .social-float:hover {
        transform: scale(1.4);
    }

    .social-dropdown {
        position: absolute;
        bottom: 60px;
        right: 0;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        padding: 10px;
        display: none;
        flex-direction: column;
        gap: 10px;
    }

    .social-dropdown a {
        display: block;
        transition: transform 0.2s;
    }

    .social-dropdown a:hover {
        transform: scale(1.2);
    }

    .social-dropdown.show {
        display: flex;
    }

    @media (max-width: 768px) {
        .social-float img {
            width: 50px;
            height: 50px;
        }
        
        .social-float {
            bottom: 90px;
            right: 20px;
        }
    }
    </style>
</head>




<body>

    <!-- Botón flotante de redes sociales -->
    <div class="social-float" id="socialFloat">
        <img src="../images/social-icon3.png" alt="Redes Sociales" width="60" height="60">
        <div class="social-dropdown" id="socialDropdown">
            <a href="https://www.facebook.com/profile.php?id=61576232459966" target="_blank" aria-label="Facebook">
                <img src="../images/facebook-icon.png" alt="Facebook" width="40" height="40">
            </a>
            <a href="https://www.instagram.com/chapindonas/" target="_blank" aria-label="Instagram">
                <img src="../images/instagram-icon.png" alt="Instagram" width="40" height="40">
            </a>
            <a href="https://vm.tiktok.com/ZMSYswUvv/" target="_blank" aria-label="TikTok">
                <img src="../images/tiktok-icon.png" alt="TikTok" width="40" height="40">
            </a>
        </div>
    </div>

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
                        <a class="nav-link" href="../index.html">Productos</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="../cliente/contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ivangt740.github.io/PaginaDonas/Game/index.html">GAME</a>
                    </li>
                </ul>
                <div class="ms-3 d-flex align-items-center">
                    <!-- Hero Section    <a href="#" class="btn btn-outline-primary me-2">
                        <i class="fas fa-user"></i>
                    </a>-->  
                    <a href="#" class="btn btn-primary cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">3</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold">Carrito de Compras</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.html" class="text-decoration-none">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Cart Items -->
                <div class="col-lg-8">
                    <!-- Cart Item 1 -->
                    <div class="cart-item p-3 mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4 mb-3 mb-md-0">
                                <img src="/api/placeholder/150/150" alt="Dona de Chocolate" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-8 mb-3 mb-md-0">
                                <h5>Dona de Chocolate</h5>
                                <p class="text-muted small mb-0">Glaseada con chocolate premium</p>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="quantity-control">
                                    <button class="quantity-decrease">-</button>
                                    <input type="text" value="1" class="quantity-input" readonly>
                                    <button class="quantity-increase">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 text-md-center">
                                <span class="fw-bold">Q25.00</span>
                            </div>
                            <div class="col-md-2 col-4 text-end">
                                <button class="btn btn-sm btn-link text-danger remove-item">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="cart-item p-3 mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4 mb-3 mb-md-0">
                                <img src="/api/placeholder/150/150" alt="Dona de Fresa" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-8 mb-3 mb-md-0">
                                <h5>Dona de Fresa</h5>
                                <p class="text-muted small mb-0">Cubierta con glaseado de fresa natural</p>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="quantity-control">
                                    <button class="quantity-decrease">-</button>
                                    <input type="text" value="2" class="quantity-input" readonly>
                                    <button class="quantity-increase">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 text-md-center">
                                <span class="fw-bold">Q44.00</span>
                            </div>
                            <div class="col-md-2 col-4 text-end">
                                <button class="btn btn-sm btn-link text-danger remove-item">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 3 -->
                    <div class="cart-item p-3 mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4 mb-3 mb-md-0">
                                <img src="/api/placeholder/150/150" alt="Dona Rellena" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-8 mb-3 mb-md-0">
                                <h5>Dona Rellena de Nutella</h5>
                                <p class="text-muted small mb-0">Rellena con Nutella y azúcar glass</p>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="quantity-control">
                                    <button class="quantity-decrease">-</button>
                                    <input type="text" value="1" class="quantity-input" readonly>
                                    <button class="quantity-increase">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 text-md-center">
                                <span class="fw-bold">Q28.00</span>
                            </div>
                            <div class="col-md-2 col-4 text-end">
                                <button class="btn btn-sm btn-link text-danger remove-item">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 4 -->
                    <div class="cart-item p-3 mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4 mb-3 mb-md-0">
                                <img src="/api/placeholder/150/150" alt="Dona Rellena" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-8 mb-3 mb-md-0">
                                <h5>Dona de Nutella con Fresa y Banano</h5>
                                <p class="text-muted small mb-0">Dona de Nutella con Fresa y Banano</p>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="quantity-control">
                                    <button class="quantity-decrease">-</button>
                                    <input type="text" value="1" class="quantity-input" readonly>
                                    <button class="quantity-increase">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 text-md-center">
                                <span class="fw-bold">Q28.00</span>
                            </div>
                            <div class="col-md-2 col-4 text-end">
                                <button class="btn btn-sm btn-link text-danger remove-item">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Actions Bar -->
                    <div class="d-flex justify-content-between align-items-center flex-wrap mt-4">
                        <a href="index.html" class="btn btn-outline-primary mb-3 mb-md-0">
                            <i class="fas fa-arrow-left me-2"></i>Continuar Comprando
                        </a>
                        <button class="btn btn-outline-danger mb-3 mb-md-0" id="clear-cart">
                            <i class="fas fa-trash me-2"></i>Vaciar Carrito
                        </button>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="cart-summary">
                        <h4 class="mb-4">Resumen del Pedido</h4>
                        
                        <!-- Coupon Code -->
                        <div class="coupon-form">
                            <input type="text" class="form-control" placeholder="Código de descuento">
                            <button class="btn btn-primary">Aplicar</button>
                        </div>
                        
                        <!-- Order Summary -->
                        <div class="summary-item">
                            <span>Subtotal</span>
                            <span id="subtotal">Q0.00</span>
                        </div>
                        <div class="summary-item">
                            <span>Descuento</span>
                            <span id="descuento">-Q0.00</span>
                        </div>
                        <div class="summary-item">
                            <span>Envío</span>
                            <span id="envio">Q15.00</span>
                        </div>
                        <div class="summary-item summary-total">
                            <span>Total</span>
                            <span id="total">Q0.00</span>
                        </div>
                        
                        <!-- Checkout Button -->
                        <button class="btn btn-primary btn-lg w-100 mt-4 mb-3" id="proceed-to-pay">
                                Proceder al Pago
                            </button>

                            <script>
                            document.getElementById('proceed-to-pay').addEventListener('click', function() {
                                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                                
                                if (cart.length === 0) {
                                    alert('Tu carrito está vacío. Añade productos antes de proceder al pago.');
                                    return;
                                }
                                
                                // Calcular total
                                const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
                                const envio = 15.00;
                                const total = subtotal + envio;
                                
                                // Crear mensaje para WhatsApp
                                let message = '¡Hola Chapin Donas! Quiero realizar el siguiente pedido:%0A%0A';
                                
                                // Agregar productos al mensaje
                                cart.forEach(item => {
                                    message += `- ${item.name} x${item.quantity} - Q${(item.price * item.quantity).toFixed(2)}%0A`;
                                });
                                
                                // Agregar totales
                                message += `%0ASubtotal: Q${subtotal.toFixed(2)}%0A`;
                                message += `Envío: Q${envio.toFixed(2)}%0A`;
                                message += `%0ATOTAL: Q${total.toFixed(2)}%0A%0A`;
                                message += 'Por favor confirmen disponibilidad y forma de pago. ¡Gracias!';
                                
                                // Abrir WhatsApp con el mensaje
                                window.open(`https://wa.me/50255325757?text=${message}`, '_blank');
                            });
                            </script>


                        
                        <!-- Payment Methods -->
                        <div class="text-center mt-3">
                            <p class="text-muted mb-2">Métodos de pago aceptados</p>
                            <div class="d-flex justify-content-center">
                                <i class="fab fa-cc-visa mx-1 fa-2x text-muted"></i>
                                <i class="fab fa-cc-mastercard mx-1 fa-2x text-muted"></i>
                                <i class="fab fa-cc-amex mx-1 fa-2x text-muted"></i>
                                <i class="fab fa-paypal mx-1 fa-2x text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>

            
            <!-- Empty Cart State (Hidden by Default) -->
            <div class="empty-cart d-none">
                <i class="fas fa-shopping-cart"></i>
                <h3>Tu carrito está vacío</h3>
                <p class="text-muted">Parece que aún no has añadido ninguna dona a tu carrito.</p>
                <a href="index.html" class="btn btn-primary mt-3">
                    Explorar Donas
                </a>
            </div>
        </div>
    </section>

    <!-- Recommended Products -->
    <section class="recommendations">
        <div class="container">
            <h3 class="mb-4">También te podría gustar</h3>
            <div class="row">
                <!-- Recommendation 1 -->
                <div class="col-6 col-md-3 mb-4">
                    <div class="recommendation-card">
                        <img src="../images/DonaAlmendra.jpeg" alt="Dona Especial" class="w-100">
                        <div class="card-body">
                            <h6>Mini Donas Surtidas</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Q40.00</span>
                                <button class="btn btn-sm btn-primary">Añadir</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recommendation 2 -->
                <div class="col-6 col-md-3 mb-4">
                    <div class="recommendation-card">
                        <img src="../images/DonaOreo.jpeg" alt="Dona Especial" class="w-100">
                        <div class="card-body">
                            <h6>Dona Boston Cream</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Q30.00</span>
                                <button class="btn btn-sm btn-primary">Añadir</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recommendation 3 -->
                <div class="col-6 col-md-3 mb-4">
                    <div class="recommendation-card">
                        <img src="../images/DonaFresaBanano.jpeg" alt="Dona Especial" class="w-100">
                        <div class="card-body">
                            <h6>Dona de Maple Bacon</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Q32.00</span>
                                <button class="btn btn-sm btn-primary">Añadir</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recommendation 4 -->
                <div class="col-6 col-md-3 mb-4">
                    <div class="recommendation-card">
                        <img src="../images/DonaNutella.jpeg" alt="Dona Especial" class="w-100">
                        <div class="card-body">
                            <h6>Pack Fiesta (12 uds)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Q150.00</span>
                                <button class="btn btn-sm btn-primary">Añadir</button>
                            </div>
                        </div>
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
                        <a href="https://www.instagram.com/chapindonas/" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://vm.tiktok.com/ZMSYswUvv/" class="text-white me-3"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://wa.me/+50255325757?text=Necesito%20más%20información." class="text-white me-3"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5 class="mb-3">Enlaces</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Inicio</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Productos</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Nosotros</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contacto</a></li>
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
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>3a. Avenida 2-28, Zona 1 Boca Del Monte, Villa Canales, Guatemala</li>
                        <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> (502) 5532-5757</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> donaschapin@gmail.com</li>
                        <li class="mb-2"><i class="fas fa-clock me-2"></i> Lun - Dom: 7:00 AM - 8:00 PM</li>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Funcionalidad para aumentar/disminuir cantidad
            const decreaseButtons = document.querySelectorAll('.quantity-decrease');
            const increaseButtons = document.querySelectorAll('.quantity-increase');
            const removeButtons = document.querySelectorAll('.remove-item');
            const clearCartButton = document.getElementById('clear-cart');
            
            // Botones para disminuir cantidad
            decreaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                        updateCartTotals();
                    }
                });
            });
            
            // Botones para aumentar cantidad
            increaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                    updateCartTotals();
                });
            });
            
            // Botones para eliminar item
            removeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const cartItem = this.closest('.cart-item');
                    cartItem.classList.add('fade-out');
                    
                    // Animación de eliminación
                    cartItem.style.transition = 'opacity 0.3s ease';
                    cartItem.style.opacity = '0';
                    
                    setTimeout(() => {
                        cartItem.remove();
                        updateCartCount();
                        checkEmptyCart();
                        updateCartTotals();
                    }, 300);
                });
            });
            
            // Botón para vaciar carrito
            clearCartButton.addEventListener('click', function() {
                const cartItems = document.querySelectorAll('.cart-item');
                
                // Confirmar antes de vaciar
                if (confirm('¿Estás seguro que deseas vaciar tu carrito?')) {
                    cartItems.forEach(item => {
                        item.style.transition = 'opacity 0.3s ease';
                        item.style.opacity = '0';
                    });
                    
                    setTimeout(() => {
                        cartItems.forEach(item => item.remove());
                        document.querySelector('.cart-count').textContent = '0';
                        checkEmptyCart();
                        updateCartTotals();
                    }, 300);
                }
            });
            
            // Función para actualizar contador del carrito
            function updateCartCount() {
                const cartItems = document.querySelectorAll('.cart-item').length;
                document.querySelector('.cart-count').textContent = cartItems;
            }
            
            // Verificar si el carrito está vacío
            function checkEmptyCart() {
                const cartItems = document.querySelectorAll('.cart-item').length;
                const emptyCartEl = document.querySelector('.empty-cart');
                const cartContent = document.querySelector('.row:not(.empty-cart)');
                const recommendationsSection = document.querySelector('.recommendations');
                
                if (cartItems === 0) {
                    emptyCartEl.classList.remove('d-none');
                    cartContent.classList.add('d-none');
                    recommendationsSection.classList.add('d-none');
                } else {
                    emptyCartEl.classList.add('d-none');
                    cartContent.classList.remove('d-none');
                    recommendationsSection.classList.remove('d-none');
                }
            }
            
            // Simular actualización de totales (en un e-commerce real, esto calcularía los valores reales)
            function updateCartTotals() {
                // Aquí iría la lógica para recalcular subtotales, descuentos, etc.
                // Por ahora es solo simulación
                console.log('Totales actualizados');
            }
        });
    </script>

    <!-- jAVASCRIPT-->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cargar carrito desde localStorage
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartContainer = document.querySelector('.col-lg-8');
            const emptyCartElement = document.querySelector('.empty-cart');
            const cartContent = document.querySelector('.row:not(.empty-cart)');
            const recommendationsSection = document.querySelector('.recommendations');
            
            // Mostrar carrito vacío o con productos
            if (cart.length === 0) {
                emptyCartElement.classList.remove('d-none');
                if (cartContent) cartContent.classList.add('d-none');
                if (recommendationsSection) recommendationsSection.classList.add('d-none');
            } else {
                if (emptyCartElement) emptyCartElement.classList.add('d-none');
                if (cartContent) cartContent.classList.remove('d-none');
                if (recommendationsSection) recommendationsSection.classList.remove('d-none');
                
                // Generar HTML para cada producto
                renderCartItems(cart);
            }
            
            // Actualizar contador del carrito en el navbar
            updateCartCount();
            
            // Configurar eventos
            setupEventListeners();
        });

        function renderCartItems(cart) {
            const cartContainer = document.querySelector('.col-lg-8');
            let html = '';
            let subtotal = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
                
                html += `
                <div class="cart-item p-3 mb-3" data-id="${item.id}">
                    <div class="row align-items-center">
                        <div class="col-md-2 col-4 mb-3 mb-md-0">
                            <img src="${item.image || '/api/placeholder/150/150'}" alt="${item.name}" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-8 mb-3 mb-md-0">
                            <h5>${item.name}</h5>
                            <p class="text-muted small mb-0">${item.description || ''}</p>
                        </div>
                        <div class="col-md-2 col-4">
                            <div class="quantity-control">
                                <button class="quantity-decrease">-</button>
                                <input type="text" value="${item.quantity}" class="quantity-input" readonly>
                                <button class="quantity-increase">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 text-md-center">
                            <span class="fw-bold">Q${itemTotal.toFixed(2)}</span>
                        </div>
                        <div class="col-md-2 col-4 text-end">
                            <button class="btn btn-sm btn-link text-danger remove-item">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>`;
            });
            
            // Añadir botones de acciones
            html += `
            <div class="d-flex justify-content-between align-items-center flex-wrap mt-4">
                <a href="../index.html" class="btn btn-outline-primary mb-3 mb-md-0">
                    <i class="fas fa-arrow-left me-2"></i>Continuar Comprando
                </a>
                <button class="btn btn-outline-danger mb-3 mb-md-0" id="clear-cart">
                    <i class="fas fa-trash me-2"></i>Vaciar Carrito
                </button>
            </div>`;
            
            cartContainer.innerHTML = html;
            updateSummary(subtotal);
        }

        function updateSummary(subtotal) {
            const envio = 15.00;
            const descuento = 0.00;
            const total = subtotal + envio - descuento;
            
            document.getElementById('subtotal').textContent = `Q${subtotal.toFixed(2)}`;
            document.getElementById('descuento').textContent = `-Q${descuento.toFixed(2)}`;
            document.getElementById('envio').textContent = `Q${envio.toFixed(2)}`;
            document.getElementById('total').textContent = `Q${total.toFixed(2)}`;
        }

        function setupEventListeners() {
            // Delegación de eventos para los botones dinámicos
            document.addEventListener('click', function(e) {
                const cartItem = e.target.closest('.cart-item');
                if (!cartItem) return;
                
                const itemId = cartItem.dataset.id;
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                const itemIndex = cart.findIndex(item => item.id === itemId);
                
                // Aumentar cantidad
                if (e.target.classList.contains('quantity-increase')) {
                    cart[itemIndex].quantity += 1;
                }
                // Disminuir cantidad
                else if (e.target.classList.contains('quantity-decrease')) {
                    if (cart[itemIndex].quantity > 1) {
                        cart[itemIndex].quantity -= 1;
                    }
                }
                // Eliminar producto
                else if (e.target.closest('.remove-item')) {
                    cart.splice(itemIndex, 1);
                }
                
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCartItems(cart);
                updateCartCount();
            });
            
            // Vaciar carrito
            document.getElementById('clear-cart')?.addEventListener('click', function() {
                if (confirm('¿Estás seguro de que deseas vaciar tu carrito?')) {
                    localStorage.removeItem('cart');
                    location.reload();
                }
            });
        }

        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            document.querySelector('.cart-count').textContent = totalItems;
        }
        </script>

        <script>
        // Funcionalidad para el botón de redes sociales
        document.getElementById('socialFloat').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('socialDropdown').classList.toggle('show');
        });

        // Cerrar el menú al hacer clic en cualquier parte de la página
        document.addEventListener('click', function() {
            document.getElementById('socialDropdown').classList.remove('show');
        });
        </script>

</body>
</html>