<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTISERVICIOS LYR SAC</title>
    {{-- <link rel="stylesheet" href="{{ asset("css/app.css") }}"> --}}
    <link rel="shortcut icon" href="{{ asset("img/favicon.ico") }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header class="header-home">
    <nav class="flex justify-end items-center">
        <a href="#inicio">Inicio</a>
        <a href="#quienes-somos">¿Quienes somos?</a>
        <a href="#fotos">Fotos</a>
        <a href="#clientes">Clientes</a>
        <a href="#servicios">Servicios</a>
        <a href="#contacto">Contacto</a>
        @auth
            <a href="{{ route('dashboard') }}">Panel de Control</a>
        @endauth
        <img src="{{ asset("/img/LOGIÑO.png") }}" width="60" id="imagen">
    </nav>
    <section class="textos-header">
        <h1>Envios rapidos y seguros a todo destino</h1>
        <h2>Con tu servidor logistico favorito</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: rgb(255, 255, 255);"></path>
        </svg></div>
</header>
<main>
    <section id="quienes-somos" class="contenedor sobre-nosotros">
        <h2 class="titulo">¿Quienes somos?</h2>
        <div class="contenedor-sobre-nosotros">
            <img src="{{ asset("img/imagen2.jpg") }}" alt="" class="imagen-about-us">
            <div class="contenido-textos">
                <h3><span>1</span>MISION</h3>
                <p>Brindar a nuestros clientes los mejores servicios múltiples en mensajería y transporte de todo tipo de carga a nivel local y nacional ofreciendo
                   seguridad, calidad y puntualidad en la entrega de sus sobres, paquetes en cualquier destino que nuestros clientes requieran.</p>
                <h3><span>2</span>VISION</h3>
                <p>Ser la primera empresa en brindar servicios de mensajería y transporte con atención personalizada entregando de manera eficiente a cualquier destino 
                  a nivel local y nacional, a entidades privadas y estatales siendo reconocidos por nuestras altas normas de trabajo manteniendo a todos nuestros clientes satisfechos.</p>
            </div>
        </div>
    </section>
    <section id="fotos" class="portafolio">
        <div class="contenedor">
            <h2 class="titulo">Fotos</h2>
            <div class="galeria-port">
                <div class="imagen-port">
                    <img src="{{ asset("img/foto1.jpg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="{{ asset("img/foto2.jpg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="{{ asset("img/foto3.jpg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="{{ asset("img/foto4.jpeg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="{{ asset("img/foto5.jpeg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="{{ asset("img/foto6.jpeg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="{{ asset("img/foto7.jpeg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="{{ asset("img/CAMION.jpg") }}" alt="">
                    <div class="hover-galeria">
                        <img src="{{ asset("img/icono1.png") }}" alt="">
                        <p>Nuestro trabajo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clientes" class="clientes contenedor">
        <h2 class="titulo">Nuestros clientes</h2>
        <div class="cards">
            <div class="card">
                <img src="{{ asset("img/noguchi.png") }}" alt="">
                <div class="contenido-texto-card">
                    <h4>Hospital Honorio Delgado</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset("img/INR.png") }}" alt="">
                <div class="contenido-texto-card">
                    <h4>Instituto Nacional de Rehabilitacion</h4>
                </div>
            </div>
            <div  class="card">
                <img src="{{ asset("img/PJ.jpg") }}" alt="">
                <div class="contenido-texto-card">
                    <h4>Poder Judicial - Ventanilla</h4>
                </div>
            </div>
            <div class="card">
              <img src="{{ asset("img/magistratura.png") }}" alt="">
              <div class="contenido-texto-card">
                  <h4>Academia de la magistratura</h4>
              </div>
            </div>
            <div class="card">
              <img src="{{ asset("img//SERVIR") }}.jpg" alt="">
              <div class="contenido-texto-card">
                  <h4>Servir</h4>
              </div>
          </div>
        </div>
    </section>
    <section id="servicios" class="about-services">
        <div class="contenedor">
            <h2 class="titulo">Nuestros servicios</h2>
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <img src="{{ asset("img/servicio001.png") }}" alt="">
                    <h3>MENSAJERIA</h3>
                    <p>Entregamos servicios de mensajería y logísticos ágiles, seguros y modernos, desarrollados para cumplir con indicadores cada vez más exigentes y satisfacer las necesidades de cada cliente. </p>
                </div>
                <div class="servicio-ind">
                    <img src="{{ asset("img/servicio002.png") }}" alt="">
                    <h3>CARGA</h3>
                    <p>A través de nuestro servicio logístico o manejo de carga diversa nos encargamos del recojo, embalaje, clasificado, custodia y transporte de sus mercancías. Gracias a nuestra amplia cobertura geográfica llegamos a cualquier punto de destino y en los plazos que su organización requiera.</p>
                </div>
                <div class="servicio-ind">
                    <img src="{{ asset("img/servicio003.png") }}" alt="">
                    <h3>MUDANZA</h3>
                    <p>Servicio de Mudanza en casas, oﬁcinas y departamentos. Contamos con camiones tipo furgón de distinta capacidad y en distintos tamaños. Hacemos mudanzas en todo lima y provincia.
                        </p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>TELEFONO FIJO</h4>
            <p></p>
            <h4>CELULAR</h4>
            <p>998470137</p>
        </div>
        <div class="content-foo">
            <h4>Correo Electronico</h4>
            <p>multiservicioslyr2051@gmail.com</p>
        </div>
        <div class="content-foo">
            <h4>DIRECCION</h4>
            <p>Jr Garcilazo de la Vega 401- San Agustin- Comas</p>
        </div>
    </div>
    <h2 class="titulo-final">&copy; MULTISERVICIOS LYR </h2>
</footer>
</body>

</html>
