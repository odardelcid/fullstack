<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hotel Los Sueños</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/indexStyles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Header -->
    <header class="masthead position-relative">
        <div class="container">
            <!-- Contenido del header -->
            <div class="masthead-subheading">Hotel</div>
            <div class="masthead-heading text-uppercase">Los Sueños</div>
            <!-- Barra de navegación -->
            <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav mx-auto text-uppercase py-4 py-lg-0">
                            <li class="nav-item"><a class="nav-link fs-3" href="#servicios">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link fs-3" href="#portfolio">Habitaciones</a></li>
                            <li class="nav-item"><a class="nav-link fs-3" href="#amenidades">Amenidades</a></li>
                            <li class="nav-item"><a class="nav-link fs-3" href="#nosotros">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link fs-3" href="#contact">Contactanos</a></li>
                            <li class="nav-item"><a class="nav-link fs-3" href="login.php">Ingresar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fecha-inicio">Fecha de Ingeso</label>
                        <input type="date" class="form-control custom-date-input" id="fecha-inicio" name="fecha-inicio">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fecha-fin">Fecha de Salida</label>
                        <input type="date" class="form-control custom-date-input" id="fecha-fin" name="fecha-fin">
                    </div>
                </div>
            </div>
            <br>
            <a class="btn btn-primary btn-xl text-uppercase" href="#servicios">Reservar</a>
        </div>
        <!-- Video de fondo -->
        <video autoplay loop muted playsinline class="masthead-video">
            <source src="assets/img/hotel.mp4" type="video/mp4">
        </video>
    </header>
    <!-- Servicios-->
    <section class="page-section" id="servicios">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <video width="100%" height="315" autoplay loop muted playsinline>
                        <source src="assets/img/habitaciones.mp4" type="video/mp4">
                    </video>
                    <h4 class="my-3">Hospedaje</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>

                <div class="col-md-4">
                    <video width="100%" height="315" autoplay loop muted playsinline>
                        <source src="assets/img/bar.mp4" type="video/mp4">
                    </video>
                    <h4 class="my-3">Bar y Restaurante</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <video width="100%" height="315" autoplay loop muted playsinline>
                        <source src="assets/img/salones.mp4" type="video/mp4">
                    </video>
                    <h4 class="my-3">Salones Para Eventos</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Habitaciones-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Habitaciones</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/habitacion.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Triple</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/habitacion.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Doble</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/habitacion.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Simple</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/habitacion.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Simple</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/habitacion.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Jr. Suit</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/habitacion.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Suit</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Amenidades-->
    <section class="page-section" id="amenidades">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Amenidades</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/reuniones.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Salas de Reuniones</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/jardines.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Jardines</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/lounge.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Lounge-Bar</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/piscina.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Piscina</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Nosotros -->
    <section class="page-section bg-light d-flex justify-content-center align-items-center" id="nosotros">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nosotros</h2>
                <img class="img-fluid custom-size" src="assets/img/hotelSueño.jpg" alt="..." style="width: 400px; height: 300px;" />

            </div>
            <div class="row text-center">
                <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</div>
            </div>
        </div>
        </div>
    </section>
    <!-- Contacto-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contactanos</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Nombre-->
                            <input class="form-control" id="name" type="text" placeholder="Nombre y Apellido *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese el nombre.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email-->
                            <input class="form-control" id="email" type="email" placeholder="Correo Electronico *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un correo electronico.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email no valido.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Telefono-->
                            <input class="form-control" id="phone" type="tel" placeholder="Numero Telefonico *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Ingrese el numero de telefono.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Mesage-->
                            <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Ingrese un mensaje.</div>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Mensaje Enviado Correctamente!</div>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error al enviar el mensaje!</div>
                </div>
                <!--Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Hotel Los Sueños 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modales-->
    <!-- Item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Detalles-->
                                <h2 class="text-uppercase">Habitación Tiple</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/habitacion.jpg" alt="..." />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Detalles-->
                                <h2 class="text-uppercase">Habitación Doble</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/habitacion.jpg" alt="..." />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Detalles-->
                                <h2 class="text-uppercase">Habitación Simple</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/habitacion.jpg" alt="..." />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Detalles-->
                                <h2 class="text-uppercase">Habitación Simple</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/habitacion.jpg" alt="..." />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Detalles-->
                                <h2 class="text-uppercase">Habitación Jr. Suit</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/habitacion.jpg" alt="..." />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Detalles-->
                                <h2 class="text-uppercase">Habitación Suit</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/habitacion.jpg" alt="..." />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>