<?php $version = "0.0.55" ?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <title>Grupo Trébol Avasaal |
            <?=$title?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="<?php echo base_url('site.webmanifest'); ?>">
        <link type="text/plain" rel="author" href="humans.txt" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
            integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
            crossorigin="anonymous"/>
        <link
            rel="apple-touch-icon"
            href="<?php echo base_url('assets/images/icon.png'); ?>">
        <link
            rel="icon"
            type="image/png"
            href="<?php echo base_url('assets/images/icon.png'); ?>">
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') . '?v=' . $version ; ?>">
        <?php echo $this->renderSection('styles'); ?>

        <meta name="theme-color" content="#FFFFFF">
    </head>

    <body class="front">

        <div id="app">
            <div class="top-bar bg-black">
                <div class="container">
                    <div class="columns">
                        <div class="column is-9">
                            <a href="mailto:grupo_trebol00@hotmail.com">
                                <icon name="email"></icon>
                                <span>grupo_trebol00@hotmail.com</span></a>
                            <a href="<?=base_url('contacto')?>">
                                <icon name="map"></icon>
                                <span>Ecatepec Estado de México.
                                </span>
                            </a>
                        </div>
                        <div class="column is-3 phones">
                          <a href="whatsapp://send?text=Hola, estoy interesado, en sus productos. &phone=+525531522310" class="button is-primary is-rounded is-small"><i class="fab fa-whatsapp"></i> 5531 522 310 </a>
                          <a href="tel:015555696448" class="button is-primary is-rounded is-small"><i class="fas fa-phone"></i> 0155 5569 6448 </a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="<?=base_url()?>">
                            <img src="<?=base_url('assets/images/logotipo.png')?>">
                        </a>

                        <a
                            role="button"
                            class="navbar-burger burger"
                            aria-label="menu"
                            aria-expanded="false"
                            data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-end">
                            <a href="<?=base_url()?>" class="navbar-item">
                                Inicio
                            </a>

                            <div class="navbar-item has-dropdown is-hoverable">
                                <a href="<?=base_url('productos')?>" class="navbar-link">
                                    Productos
                                </a>

                                <div class="navbar-dropdown">
                                    <a  href="<?=base_url('productos/vaporeras')?>" class="navbar-item">
                                        Vaporeras
                                    </a>
                                    <a href="<?=base_url('productos/arroceras-y-paelleras')?>" class="navbar-item">
                                        Arroceras y paelleras
                                    </a>
                                    <a href="<?=base_url('productos/cazos-y-sartenes')?>"  class="navbar-item">
                                        Cazos y Sartenes
                                    </a>
                                    <a href="<?=base_url('productos/ollas-y-convexas')?>" class="navbar-item">
                                        Ollas y Convexas
                                    </a>
                                    <a href="<?=base_url('productos/jarras-moldes-y-utencilios')?>"  class="navbar-item">
                                        Jarras, Moldes y Utencilios
                                    </a>

                                    <a href="<?=base_url('productos/juegos')?>"  class="navbar-item">
                                        Juegos
                                    </a>

                                </div>
                            </div>

                            <a href="<?=base_url('#nosotros')?>" class="navbar-item">
                                Nosotros
                            </a>

                            <a href="<?=base_url('#clientes')?>" class="navbar-item">
                                Clientes
                            </a>

                            <div class="navbar-item">
                                <div class="buttons">
                                    <btn
                                        link="<?php echo base_url('contacto'); ?>"
                                        c_class="is-primary is-rounded"
                                        text="Contacto"
                                        icon="message"
                                        target=""></btn>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </nav>

            <!--content-->
            <?php echo $this->renderSection('content'); ?>
            <!--/content-->

            <footer class="footer">
                <div class="container">
                    <div class="divider is-size-2"></div>
                    <img
                        src="<?=base_url('assets/images/logo_footer.png')?>"
                        alt="Grupo Trebol Avassal"
                        class="footer-logo">
                    <div class="columns">
                        <div class="column is-4">

                            <p>
                                <strong>
                                    ©
                                    <?=date('Y')?>
                                    Grupo Trebol Avasaal</strong>
                            </p>
                            <div class="divider is-size-1"></div>
                            <p>Adolfo López mateos (R1) mz. 57 lt. 4
                                <br>Col. Granjas Valle de Guadalupe,
                                <br>Ecatepec Estado de México.
                            </p>
                            <div class="divider is-size-1"></div>
                            <p>
                                <a href="whatsapp://send?text=Hola, estoy interesado, en sus productos. &phone=+525531522310">
                                    <icon name="phone"></icon>
                                    5531 522 310</a>
                                |
                                <a href="tel:015555696448">
                                    <icon name="phone"></icon>
                                    01 55 5569 6448</a>
                            </p>
                            <div class="divider is-size-1"></div>
                            <p>
                                <a href="mailto:grupo_trebol00@hotmail.com">
                                    <icon name="email"></icon>
                                    grupo_trebol00@hotmail.com</a>
                                <p>
                                    <div class="divider is-size-1"></div>
                                    <p>
                                        <a href="<?=base_url('aviso-de-privacidad')?>">Aviso de privacidad</a>
                                    </p>
                                </div>
                                <div class="column is-2">
                                    <h3 class="title is-size-5 c-white">Sitio</h3>
                                    <ul>
                                        <li>
                                            <a href="<?=base_url()?>">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('productos')?>">Productos</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('#nosotros')?>">Nosotros</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('#clientes')?>">Clientes</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('contacto')?>">Cotizar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h3 class="title is-size-5 c-white">Categorías</h3>
                                    <ul>
                                        <li>
                                            <a href="<?=base_url('productos/vaporeras')?>">Vaporeras</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('productos/arroceras-y-paelleras')?>">Arroceras y paelleras</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('productos/cazos-y-sartenes')?>">Cazos y Sartenes</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('productos/ollas-y-convexas')?>">Ollas y Convexas</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('productos/jarras-moldes-y-utencilios')?>">Jarras, Moldes y Utencilios</a>
                                        </li>

                                        <li>
                                            <a href="<?=base_url('productos/juegos')?>">Juegos</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="column is-3">
                                    <h3 class="title is-size-5 c-white">Síguenos</h3>
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/aluminiogpotrebol/" target="_blank">
                                                <div class="icon">
                                                    <i class="fab fa-facebook"></i>
                                                </div>
                                                Facebook</a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/grupotrebola/" target="_blank">
                                                <div class="icon">
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                                Instagram</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="copy has-text-centered">
                            Sitio Desarrollado por
                            <a href="https://publicidadengoogle.com.mx" target="_blank">Publicidad en Google</a>
                        </div>
                    </footer>

                </div>
                <!--/app-->

                <script src="<?=base_url('assets/js/app.js') . '?v=' . $version ?>"></script>
                <?php echo $this->renderSection('scripts'); ?>
            </body>

        </html>
