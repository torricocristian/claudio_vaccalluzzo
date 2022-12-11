

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="container">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="image/logoBV.png" alt="Logo del instituto">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Ruta 8 Nº6725 - San Martín </p>
                    <p> Buenos Aires (1650)</p>
                    <p>Teléfono : (011) 4769-0123 / 0615 </p>
                    <p>Correo electrónico: </p>
                    <p><b>terciario@lujanbuenviaje.edu.ar</b></p>
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="https://www.facebook.com/TerciarioBuenViaje" class="fa fa-facebook"
                            target="_blank"></a>
                        <a href="https://www.instagram.com/terciariolujanbuenviaje/" class="fa fa-instagram"
                            target="_blank"></a>
                        <a href="mailto:claudia.e1902@gmail.com" class="fa fa-envelope" target="_blank"></a>


                    </div>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <div class="container">
                <small>&copy; 2022 <b>Instituto Superior Nuestra Señora de Luján del Buen Viaje</b> - Todos los Derechos
                    Reservados.</small>
            </div>
        </div>
        </div>
    </footer>


    <?php if($page == 'claudio'):?>
        <script src="js/lightbox-plus-jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            var num =[];
            var cantidad=41;
            for (var i=1; i<=cantidad;i++){
                num.push(i)
            }
            var galeria=document.querySelector(".gallery");
            for(i of num){
            galeria.innerHTML+= `  <a href="image/img_claudio/${i}.jpg" rel="lightbox" data-lightbox="roadtrip"> <figure><img src="image/img_claudio/${i}.jpg"  alt="foto_claudio_vacalluzzo"> <span class='fa fa-camera'></span> </figure> </a> `
            }
        </script>

    
    <?php endif ?>

    <!-- get jquery from cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>