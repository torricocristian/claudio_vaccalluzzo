<?php 
    //incluir header
    include_once 'includes/header.php';

    $page = 'contacto';
?>


<body>

    <?php
        //incluir menu
        include_once 'includes/menu.php';
    ?>

    <section id="title-block">
        <div class="container">
            <h1 class="title__primary">
                Contacto
            </h1>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <div class="info">
                <div class="item">
                    <i class="fa fa-clock-o"></i>
                    <h3>Horarios</h3>
                    <p>
                        Lun-Vie: 18hs - 22hs
                    </p>
                </div>

                <div class="item">
                    <i class="fa fa-map-marker"></i>
                    <h3>Ubicación</h3>
                    <p>
                        Ruta 8 Nº6725 - San Martín
                    </p>
                </div>

                <div class="item">
                    <i class="fa fa-phone"></i>
                    <h3>Contáctenos</h3>
                    <p>
                        Teléfono: (011) 4769-0123 / 0615
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section id="form-contacto">
        <div class="container">
            <h3 class="title__secondary">Escribenos</h3>

            <span class="notice-error"></span>
            <form action="includes/send_form.php" method="POST">
                <div class="input">
                    <label for="nombre" class="sr-only">Nombre</label>
                    <input type="text" placeholder="Nombre" id="nombre" name="nombre">
                </div>
                <div class="input">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" placeholder="Email" id="email" name="email">
                </div>
                <div class="input">
                    <label for="telefono" class="sr-only">Teléfono</label>
                    <input type="tel" placeholder="Teléfono" id="telefono" name="telefono">
                </div>
                <div class="input mensaje">
                    <label for="mensaje" class="sr-only">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
                </div>
                <div class="input enviar">
                    <input type="submit" value="Enviar" class="button button__primary" id="enviar_contacto">
                </div>
            </form>

            
        </div>
    </section>


<?php 
    //incluir footer
    include_once 'includes/footer.php';
?>

