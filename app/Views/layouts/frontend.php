<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <title>CIBase |
            <?=$title?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="manifest" href="<?php echo base_url('site.webmanifest'); ?>">
        <link
            href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@300;400;600;900&display=swap"
            rel="stylesheet">
        <link
            rel="apple-touch-icon"
            href="<?php echo base_url('assets/images/icon.png'); ?>">
        <link
            rel="icon"
            type="image/png"
            href="<?php echo base_url('assets/images/icon.png'); ?>">

        <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
        <?php echo $this->renderSection('styles'); ?>

        <meta name="theme-color" content="#FFFFFF">
    </head>

    <body>

        <div id="app">

            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
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
                    <div class="navbar-start">
                        <a class="navbar-item">
                            Home
                        </a>

                        <a class="navbar-item">
                            Documentation
                        </a>

                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                More
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    About
                                </a>
                                <a class="navbar-item">
                                    Jobs
                                </a>
                                <a class="navbar-item">
                                    Contact
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    Report an issue
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a class="button is-primary">
                                    <strong>Sign up</strong>
                                </a>
                                <a class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!--content-->
            <?php echo $this->renderSection('content'); ?>
            <!--/content-->

            <footer class="footer">
                <div class="content has-text-centered">
                    <p>
                        <strong>CI Base
                            <?=date('Y')?></strong>
                    </p>
                </div>
            </footer>

        </div>
        <!--/app-->

        <script src="<?=base_url('assets/js/app.js')?>"></script>
        <?php echo $this->renderSection('scripts'); ?>
    </body>

</html>