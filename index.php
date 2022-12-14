<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Oswald:wght@200;400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Mi Portafolio</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="">Natalia Silva</a>
            <button class="navbar-toggler text-uppercase font-weight-bold  text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#Sobre-Mi">Sobre Mi</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#Experiencia">Experiencia</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#Trabajos">Portafolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#Contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead bg-indigo text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/img/avatar-naty.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Natalia Silva</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Fullstack Developer Junior - Informatic Support</p>
        </div>
    </header>

    <section id="Sobre-Mi" class="pt-5 container ">
        <div>
            <h4 class="text-center fw-bold">Hola! mi nombre es Natalia, vivo en Santiago de Chile,
                y soy
                desarrolladora Freelancer, manejo HTML5 + CSS + JavaScript, tambien tengo conocimientos
                en desarrollo de aplicaciones tanto como en Android, como en Python.</h4>
        </div>
        <hr class="opacity-100 w-25 mx-auto">

        <div>
            <p class="text-center">Trabajando en el ??rea de la inform??tica con m??s de 8 a??os de experiencia en el ??mbito
                de Soporte TI.
                Mi perspectiva profesional es crecer en el ??mbito de programaci??n en base a los lenguajes que domino.
                Android y Python me motivan para seguir desarroll??ndome en nuevos desaf??os en ??rea de la inform??tica.
            </p>
        </div>



    </section>

    <section id="Experiencia" class="py-5 container text-center">
        <div>
            <h1 class="fw-bold text-uppercase">MI ExperIencia</h1>
            <hr class="opacity-100 mx-auto w-25">
        </div>
        <div class="row pt-3">

            <article class="col-12 col-sm-6">
                <i class="fab fa-android fa-10x"></i>
                <h4 class="fw-bold mt-3">Desarrolladora Android</h4>
                <h4>2020 - 2021</h4>
            </article>
            <article class="col-12 col-sm-6">
                <i class="fab fa-python fa-10x"></i>
                <h4 class="fw-bold mt-3">Desarrolladora Python</h4>
                <h4>2021 - 2022</h4>

            </article>

        </div>
    </section>

    <section id="Trabajos" class="py-5">
        <div class="container">
            <h1 class="fw-bold text-center text-white text-uppercase mt-2">MIS ??LTIMOS TRABAJOS</h1>
            <hr class="bg-white opacity-100 mx-auto w-25 ">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 my-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="assets/img/inmobiliaria.png " class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Inmobiliaria Tu Casa</h4>
                            <p class="card-text fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Expedita quas sit molestias.
                                .</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 my-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="assets/img/suricata.png" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"> Suricata</h4>
                            <p class="card-text fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Expedita quas sit molestias.
                                Itaque sit aliquam voluptates amet quia nisi qui temporibus, minus quam molestiae, atque
                                quisquam provident quos illum tenetur.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 my-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="assets/img/cuppon.png" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"> Cuppon</h4>
                            <p class="card-text fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Expedita quas sit molestias.
                                Itaque sit aliquam voluptates amet quia nisi qui temporibus, minus quam molestiae, atque
                                quisquam provident quos illum tenetur.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 my-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="assets/img/ricomida.png" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"> Ricomida</h4>
                            <p class="card-text fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Expedita quas sit molestias.
                                Itaque sit aliquam voluptates amet quia nisi qui temporibus, minus quam molestiae, atque
                                quisquam provident quos illum tenetur.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 my-3">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="assets/img/onlyflans.png" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"> OnlyFlans</h4>
                            <p class="card-text fw-light">P??gina web informaci??n de una pasteleria.
                                Trabajada en Javascript.
                                Itaque sit aliquam voluptates amet quia nisi qui temporibus, minus quam molestiae, atque
                                quisquam provident quos illum tenetur.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <section id="Contacto" class="container text-center py-5">
        <div class="mb-5">
            <h1 class="fw-bold text-uppercase">Contacto</h1>
            <hr class="opacity-100 mx-auto w-25">
        </div>




        <form action="enviar.php" method="post">
            <input type="text" name="name" id="name" class="name" placeholder="NOMBRE">
            <input type="text" name="mail" id="mail" class="email" placeholder="CORREO">
            <input type="text" name="phone" id="subject" class="subject" placeholder="TEL??FONO">
            <textarea name="message" class="message" placeholder="MENSAJE ... " id="message"></textarea>
            <div class="clear"></div>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </div>
            <script>alert("formulario")</script>
        </form>


    </section>



    <footer id="Footer" class="text-center text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="fw-bold text-uppercase">NATALIA</h1>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="https://github.com/nataliasilvab"><i class="fab fa-github-square fa-3x mx-2"></i></a>
                    <a href="https://www.linkedin.com/in/nataliasilvab/"><i class="fab fa-linkedin fa-3x mx-2"></i></a>
                </div>
            </div>
        </div>

    </footer>


    
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>


</html>