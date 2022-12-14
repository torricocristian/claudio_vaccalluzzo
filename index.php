<?php 
    //incluir header
    include_once 'includes/header.php';

    $page = 'home';
?>


<body>
    <?php
        //incluir menu
        include_once 'includes/menu.php';
    ?>

    <section class="hero">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/hero1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="image/imagenegresadosprincipal.jpg" class="d-block w-100" alt="...">
                </div>
                

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <!-- Parte izquierda -->
            <div class="media">
                <!-- Imagen de instituto terciario analista de sistemas -->
                <img src="image/buenviaje.jpg" alt="Analista de sistemas">
            </div>

            <!-- Parte derecha -->
            <div class="data">
                <h1 class="title__primary">Nuestro instituto</h1>
                <!-- Descripci??n de un instituto terciario analista de sistemas-->
                <p>El Instituto Superior Nuestra Se??ora del Buen Viaje nace a partir una misi??n evangelizadora de la Comunidad Parroquial de Luj??n del Buen Viaje con el objetivo de promover la dignidad del hombre en la comunidad de Loma Hermosa y sus alrededores.</p>
                <p>Desde el Instituto Superior Nuestra Se??ora del Buen Viaje se promueve la formaci??n de profesionales desde una perspectiva evangelizadora y con la misi??n de formar t??cnicos con formaci??n espec??fica en lo que respecta al ??mbito de la inform??tica con competencias profesionales s??lidas en ??reas ocupacionales espec??ficas de an??lisis de sistemas y redes inform??ticas, y que garanticen a los alumnos y alumnas el acceso a una base de capacidades profesionales y saberes que les permita su inserci??n en el mundo del trabajo, as?? como continuar aprendiendo durante toda su vida.</p>
                <p>Como visi??n la instituci??n se propone ser referente a trav??s de la producci??n y transmisi??n de conocimientos y valores que procuren la mejora en la calidad de vida de la comunidad en su conjunto.</p>
            </div>
        </div>
    </section>

    <section id="carrers">
        <div class="container">
            <h2 class="title__primary">Carreras</h2>

            <a href="image/analista_sistemas.pdf" class="card" target="_blank">
                <img src="image/redes.jpeg" src="Analista de Sistemas" />
                <div class="centrado">
                    Analista de Sistemas
                    <span class="button button__secundary">Ver m??s</span>
                </div>
            </a>
            <a href="image/redes_informaticas.pdf" class="card" target="_blank">
                <img src="image/analista.jpeg" src="Redes Inform??ticas" />
                <div class="centrado">
                    Redes Inform??tica
                    <span class="button button__secundary">Ver m??s</span>
                </div>
            </a>
        </div>
    </section>




    <section id="testimonios">
        <div class="container">
            <h2 class="title__primary">Testimonios</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="desc">
                            Gracias a la formaci??n recibida en el Instituto Nuestra Se??ora de Luj??n del Buen Viaje, pude acceder a un trabajo en una empresa de tecnolog??a.
                        </p>
                        <div class="person">
                            <span class="author">
                                Guillermo Suarez
                            </span>
                            <span class="position">
                                Alumno
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <p class="desc">
                            Pude tener mi primer acercamiento a la programaci??n gracias a la formaci??n recibida en el Instituto Nuestra Se??ora de Luj??n del Buen Viaje. Brindandome los conocimientos necesarios para poder desarrollarme en el ??rea.
                        </p>
                        <div class="person">
                            <span class="author">
                                Cristian Torrico
                            </span>
                            <span class="position">
                                Alumno
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <p class="desc">
                        Brinda una excelente oportunidad de desarrollo profesional para los j??venes.
                        </p>
                        <div class="person">
                            <span class="author">
                                Walter Alejandro Diosquez
                            </span>
                            <span class="position">
                                Alumno
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <p class="desc">
                        Se dictan carreras terciarias en inform??tica, desde hace 25 a??os, en la actualidad se dictan: Analista de Sistemas y Tec. Sup.
                         en Redes Inform??ticas. Ambas carreras poseen t??tulo oficial de validez nacional.
                        </p>
                        <div class="person">
                            <span class="author">
                              Marcos Cruce??o
                            </span>
                            <span class="position">
                                Profesor
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <p class="desc">
                             Excelente instituci??n. Hermosos recuerdos!
                        </p>
                        <div class="person">
                            <span class="author">
                            Yesica Messina
                            </span>
                            <span class="position">
                                Alumno
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <p class="desc">
                           El ins cuenta con laboratorios de ??ltima generaci??n, y sus programas se actualizan cada a??o,
                           ofreciendo al alumno una capacitaci??n competitiva que le permite desarrollarse profesionalmente. 
                           Tenemos convenios con universidades, para aquellos alumnos que desean, una vez terminado, continuar estudios universitarios.
                        </p>
                        <div class="person">
                            <span class="author">
                            Sofia Rol??n
                            </span>
                            <span class="position">
                                Alumno
                            </span>
                        </div>
                    </div>                
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>
    </section>
   
      
<?php 
    //inclur el footer
    include 'includes/footer.php';

?>