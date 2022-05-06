<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Farmacia</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #42C2FF;">

        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> <img src="./img/Logo.png" width="200px" alt="Logo.png" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Infantil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Ortopedia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Higene Bucal y Corporal</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Cosmetica y Dietetica</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Natural</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ventas</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <div class="input-group mb-0 me-5">
                        <input type="search" class="form-control" placeholder="¿Que esta buscando?" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-light" type="button" id="button-addon2">Buscar</button>
                    </div>
                </form>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end me-4">
                    <button type="button" class="btn btn-outline-light btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#Loginmodal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-circle " viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                        </svg>
                    </button>
                </div>

                <div class="modal fade" id="Loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title modal-logo" id="exampleModalLabel"> <img src="./img/Logo.png" width="200px" alt=""> </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body login-modal">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="Login-tab" data-bs-toggle="tab" data-bs-target="#Login" type="button" role="tab" aria-controls="home" aria-selected="true">Login</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="Register-tab" data-bs-toggle="tab" data-bs-target="#Register" type="button" role="tab" aria-controls="profile" aria-selected="false">Registrarse</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Login" role="tabpanel" aria-labelledby="home-tab">
                                        <form class="tab-content_login" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="email">
                                                <label for="floatingInput">Correo Electronico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" name="password">
                                                <label for="floatingPassword">Contraseña</label>
                                            </div>
                                            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-info" type="submit">Conectarse</button>
                                            <p class="contra_link"><a href="#">Te olvidaste tu Contraseña?</a></p>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="Register" role="tabpanel" aria-labelledby="profile-tab">
                                        <form class="tab-content_login" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="ingrese su nombre" name="name">
                                                <label for="floatingInput">Nombre</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="email">
                                                <label for="floatingInput">Correo Electronico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" name="password">
                                                <label for="floatingPassword">Contraseña</label>
                                            </div>
                                            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-info" type="submit">Registrarse</button>
                                            <p class="contra_link"><a href="#">Te olvidaste tu Contraseña?</a></p>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>


<body>
    <div class="">
        <div class="">
            <div class="">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExamp    leCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" position="" id="carouselExampleCaptions">
                        <div class="carousel-item active">
                            <img src="./img/Medicamentos/Aspirina.png" width="500px" height="500px" class="d-block w-35" alt="Aspirina.png" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Aspirina 500MG</h5>
                                <p>Para los dolores de cabeza y el estres.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/Medicamentos/Ibuprofeno.png" width="500px" height="500px" class="d-block w-35" alt="Ibuprofeno.png">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ibuprofeno 600</h5>
                                <p>Para las inflamaciones y dolores musculares</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/Medicamentos/Paracetamol.png" width="500px" height="500px" class="d-block w-35" alt="Paracetamol.png">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Paracetamol 500MG</h5>
                                <p>Para las fiebres y malestares provocados por la Fiebre</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="background-color: #EFFFFD;">
        <footer class="row row-cols-6 pt-5  mx-3">



            <div class="col">
                <h5>Siguenos</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Youtube</a></li>
                </ul>
            </div>

            <div class="col">
                <h5>¿Necesitas ayuda?</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Atencion al Cliente</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Preguntas Frecuentes</a></li>
                </ul>
            </div>

            <div class="col">
                <h5>Servicios</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Farmamovil</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sucursales</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Farmaclub</a></li>
                </ul>
            </div>

            <div class="col">
                <h5>Somos Farmacia Angeles</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">¿Quienes Somos?</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Nuestra Vision</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Trabaja con Nosotros</a></li>
                </ul>
            </div>

            <div class="col">

            </div>
            <div class="col">
                <a href="#" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="./img/logofarm.png" width="200px" alt="logofarm.png" />
                </a>
                <p class="text-muted">&copy;Copyright 2022</p>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>