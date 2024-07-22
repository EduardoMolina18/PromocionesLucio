<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Productos.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu"><img src="images3/menu.png" class="menu-icono" alt=""></label>
            <nav class="navbar" >
                <ul>
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Servicios.php">Servicios</a></li>
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="Formulario.php">Contacto</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="images3/carrt.png" alt="" id="img-carrito" width="30px">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-content container">
            <div class="swiper mySwiper-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="header-info">
                            <div class="header-txt">
                                <h1>Inmobiliario Premium</h1>
                                <div class="prices">
                                    <p class="price-1">$1500</p>
                                    <p class="price-2">$950</p>
                                </div>
                                <p style="color:#747B8F; font: size 25px;">Encuentra tus productos</p>
                            </div>
                            <div class="header-img">
                                <img src="images3/b1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="header-info">
                            <div class="header-txt">
                                <h1>Inmobiliario Premium</h1>
                                <div class="prices">
                                    <p class="price-1">$1100</p>
                                    <p class="price-2">$890</p>
                                </div>
                                <p style="color:#747B8F; font: size 20px;">Encuentra tus productos</p>

                            </div>
                            <div class="header-img">
                                <img src="images3/b2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="header-info">
                            <div class="header-txt">
                                <h1>Inmobiliario Premium</h1>
                                <div class="prices">
                                    <p class="price-1">$750</p>
                                    <p class="price-2">$700</p>
                                </div>
                                <p style="color:#747B8F; font: size 20px;">Encuentra tus productos</p>
                            </div>
                            <div class="header-img">
                                <img src="images3/b3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>

    <hr>

    <section class="promos container" id="lista-1">
        <h2>Promociones</h2>
        <div class="categories">
            <div class="categorie">
                <div class="categorie-1">
                    <h3>Silla Conmfort Supremo</h3>
                    <div class="prices">
                        <p class="price-1" style="color:#747B8F;">$1600</p>
                        <p class="precio">$1350</p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al carrito</a>
                </div>
                <div class="categorie-img">
                    <img src="images3/pr1.png" alt="">
                </div>
            </div>
            <div class="categorie">
                <div class="categorie-1">
                    <h3>Silla Elite Comfot Wave</h3>
                    <div class="prices">
                        <p class="price-1" style="color:#747B8F;">$990</p>
                        <p class="precio">$790</p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al carrito</a>
                </div>
                <div class="categorie-img">
                    <img src="images3/pr2.png" alt="">
                </div>
            </div>
            <div class="categorie">
                <div class="categorie-1">
                    <h3>Silla Ergo Plus</h3>
                    <div class="prices">
                        <p class="price-1" style="color:#747B8F;">$1200</p>
                        <p class="precio">$999</p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al carrito</a>
                </div>
                <div class="categorie-img">
                    <img src="images3/pr3.png" alt="">
                </div>
            </div>
            <div class="categorie">
                <div class="categorie-1">
                    <h3>Sillón Relax Pro</h3>
                    <div class="prices">
                        <p class="price-1" style="color:#747B8F;">$2000</p>
                        <p class="precio">$1890</p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
                </div>
                <div class="categorie-img">
                    <img src="images3/pr4.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="products container" id="lista-2">
        <h2>Recamaras</h2>
        <div class="swiper mySwiper-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/re1.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Recamara Aurora</h3>
                            <p>Inspirada en la luz del amanecer, lineas suaves y diseño elegante.</p>
                            <p class="precio">$8000</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/re2.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Recamara Serenata</h3>
                            <p>Con un cabecero acolchado y detalles en tonos suaves</p>
                            <p class="precio">$5500</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/re3.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Recamara Luna de Miel</h3>
                            <p>Diseñada para parejas, con un dosel romántico y detalles decorativos.</p>
                            <p class="precio">$9500</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/re4.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Recamara Crepúsculo</h3>
                            <p>Con tonos que van desde el naranja suave hasta el púrpura profundo.</p>
                            <p class="precio">$8000</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <hr style="margin-top: 160px;">

    <section class="products container" id="lista-3">
        <h2>Salas</h2>
        <div class="swiper mySwiper-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/sa1.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Sala Oasis</h3>
                            <p>Con tejidos frescos y detalles de mimbre natural.</p>
                            <p class="precio">$4500</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="9">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/sa2.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Sala Resplandor</h3>
                            <p>Tapizada en terciopelo con tonos brillantes acogedores.</p>
                            <p class="precio">$5900</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="10">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/sa3.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Sala Brisa Marina</h3>
                            <p>Tapizado en tela de algodòn en tonos cremita y blanco.</p>
                            <p class="precio">$5000</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="11">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/sa4.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Sala Radiante</h3>
                            <p>Con acabados modernos, brillantes, se destaca por su diseño.</p>
                            <p class="precio">$9200</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="12">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <hr style="margin-top: 160px;">

    <section class="products container" id="lista-4">
        <h2>Comedores</h2>
        <div class="swiper mySwiper-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/co1.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Comedor Celestial</h3>
                            <p>Con acabados en tonos cafes y patrones geometricos.</p>
                            <p class="precio">$3900</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="13">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/co2.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Comedor Serenidad</h3>
                            <p>Con lineas suaves y acabados en tonos neutros.</p>
                            <p class="precio">$7800</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="14">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/co3.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Comedor Atemporal</h3>
                            <p>Diseñado con materiales naturales como la madera maciza.</p>
                            <p class="precio">$2500</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="15">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="images3/co4.jpg" alt="" style="height: 180px; width:190px">
                        <div class="product-txt">
                            <h3>Comedor Brillante</h3>
                            <p>Con una superficie de vidrio templado y patas de madera.</p>
                            <p class="precio">$4000</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="16">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

<br><br><br> <hr style="margin-top: 160px;">
    <footer class="footer container">
        <div class="link">
            <h3>Políticas</h3>
           <p>© 2024 Promociones Lucio. Todos los derechos reservados.
            <br>
            Política de Privacidad | Términos y Condiciones | Aviso Legal</p>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="JS/script.js"></script>
</body>
</html>