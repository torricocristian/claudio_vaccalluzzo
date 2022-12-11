
    <header>
        <div class="container">
            <input type="checkbox" id="menu_checkbox">
			<label for="menu_checkbox" class="icon-menu" tabindex="1">
				<div></div><div></div><div></div>
				<span>Menú</span>
			</label>

            <div class="logo">
                <a href="index.php">
                    <img src="image/logoPrincial.png" alt="Logo del instituto">
                </a>
                <!--<h1>Instituto Nuestra Señora De Lujan</h1>-->
            </div>
            <div class="content-nav">
                <nav>
                    <a href="index.php" class="<?= $page == 'home' ? 'active' : '' ?>">Home</a>
                    <a href="claudio.php" class="<?= $page == 'claudio' ? 'active' : '' ?>">Claudio vaccalluzzo</a>
                    <a href="contacto.php" class="<?= $page == 'contacto' ? 'active' : '' ?>">Contacto</a>
                </nav>
                <a href="http://lujanbuenviaje.edu.ar/moodle2/my/" class="button button__primary">Aula Virtual</a>
            </div>

        </div>
    </header>