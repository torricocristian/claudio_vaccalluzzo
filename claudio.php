<?php 
    //incluir header
    include_once 'includes/header.php';

    $page = 'claudio';
?>


<body>

    <?php
        //incluir menu
        include_once 'includes/menu.php';
    ?>

    <section id="title-block">
        <div class="container">
            <h1 class="title__primary">
                Claudio Vaccalluzzo
            </h1>
        </div>
    </section>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v15.0" nonce="7398IHqf"></script>
    <!-- .gallery>img[src=image/img_claudio/$.jpg alt=foto_claudio_vacalluzzo]*41 -->


    <div class="texto container">
        <p>Rendimos este humilde homenaje a nuestro querido Profesor Claudio Vaccalluzzo, no solo a su trayectoria docente en nuestra institución sino también al compromiso, dedicación y disponibilidad con la comunidad educativa y parroquial Luján del Buen Viaje de Loma Hermosa</p>
    </div>


    <div class="gallery" id="galeria"> </div>

    

    <section id="testimonios">
        <div class="container">
            <h2 class="title__primary">Alumnos x Claudio</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
     
                    <div class="swiper-slide">
                        <p class="desc">
                            Gracias a Claudio Vaccalluzzo me surgió la pasión por arduino y la programación.
                        </p>
                        <div class="person">
                            <span class="author">
                                Dante Kempfen
                            </span>
                            <span class="position">
                                Alumno
                            </span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <p class="desc">
                            Gracias a Claudio Vaccalluzzo me surgió la pasión por arduino y la programación.
                        </p>
                        <div class="person">
                            <span class="author">
                                Dante Kempfen
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


    


<div class="container comentarios">
   
    <section class="">
        
        <h3>Comentarios</h3>

        <div class="fb-comments" data-href="https://buenviaje2.dispenserjg.com/claudio.php" data-width="100%" data-numposts="6"></div>

    
    </section>
</div>


   


<?php 
    //incluir footer
    include_once 'includes/footer.php';
?>
