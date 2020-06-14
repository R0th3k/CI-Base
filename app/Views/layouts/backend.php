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
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">

        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
        <?php echo $this->renderSection('styles'); ?>

        <meta name="theme-color" content="#FFFFFF">
    </head>

    <body>

        <div id="app" class="backend">

            <!-- START NAV -->
            <nav
                class="navbar columns is-fixed-top"
                role="navigation"
                aria-label="main navigation"
                id="app-header">
                <div class="navbar-brand column is-2 is-paddingless">
                    <a class="navbar-item" href="<?=base_url('admin')?>">
                        CI Base
                    </a>
                    <a
                        role="button"
                        class="navbar-burger"
                        aria-label="menu"
                        aria-expanded="false"
                        data-target="touchMenu">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="touchMenu"></div>

                <div id="navMenu" class="navbar-menu column is-hidden-touch">

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a class="button is-white">
                                <span class="icon">
                                    <i class="fa fa-lg fa-bell"></i>
                                </span>
                            </a>
                        </div>

                        <div class="navbar-item has-dropdown">
                            <a class="navbar-link">
                            <avatar
                            name="<?php echo $session->user_name . ' ' . $session->user_lastname?>"
                            photo="<?=$session->user_avatar?>"
                            desc="<?php echo $session->user_name . ' ' . $session->user_lastname?>"
                            size="small"></avatar>
                            </a>
                            <div class="navbar-dropdown is-right">
                                <a class="navbar-item">
                                    Overview
                                </a>
                                <a class="navbar-item">
                                    Elements
                                </a>
                                <a class="navbar-item">
                                    Components
                                </a>
                                <hr class="navbar-divider">
                                <div class="navbar-item">
                                    Version 0.7.1
                                </div>
                            </div>
                        </div>

                        <div class="navbar-item">
                            <a href="<?=base_url('logout')?>" class="button is-white">
                                <span class="icon">
                                    <i class="fa fa-lg fa-power-off"></i>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </nav>
            <!-- END NAV -->

            <div class="columns" id="app-content">

                <div class="column is-2 is-fullheight is-hidden-touch" id="navigation">

                    <aside class="menu">
                        <p class="menu-label is-hidden-touch">
                            General
                        </p>

                        <ul class="menu-list">
                            <li class="<?php echo (current_url() == base_url('admin')) ? 'is-active' : ''?>" >
                                <a href="<?=base_url('admin')?>">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    Inicio
                                </a>
                            </li>


                            <li class="<?php echo (current_url() == base_url('admin/products')) ? 'is-active' : ''?>" >
                                <a href="<?=base_url('admin/products')?>">
                                    <span class="icon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    Productos
                                </a>
                            </li>

                            <li class="<?php echo (current_url() == base_url('admin/users')) ? 'is-active' : ''?>" >
                                <a href="<?=base_url('admin/users')?>">
                                    <span class="icon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    Usuarios
                                </a>
                            </li>


                        </ul>

                        <p class="menu-label is-hidden-touch">
                            Sample Pages
                        </p>

                        <ul class="menu-list">
                            <li class="<?php echo (current_url() == base_url('admin/samples/dashboard')) ? 'is-active' : ''?>">
                                <a  href="<?=base_url('admin/samples/dashboard')?>">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="<?php echo (current_url() == base_url('admin/samples/forms')) ? 'is-active' : ''?>">
                                <a  href="<?=base_url('admin/samples/forms')?>">
                                    <span class="icon">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                    Forms
                                </a>
                            </li>
                            <li class="<?php echo (current_url() == base_url('admin/samples/ui')) ? 'is-active' : ''?>" >
                                <a href="<?=base_url('admin/samples/ui')?>">
                                    <span class="icon">
                                        <i class="fa fa-desktop"></i>
                                    </span>
                                    UI Elements
                                </a>
                            </li>

                            <li class="<?php echo (current_url() == base_url('admin/samples/datatables')) ? 'is-active' : ''?>">
                                <a  href="<?=base_url('admin/samples/datatables')?>">
                                    <span class="icon">
                                        <i class="fa fa-table"></i>
                                    </span>
                                    Datatables
                                </a>
                            </li>

                        </ul>

                    </aside>
                </div>

                <div class="column is-10" id="page-content">

                    <!--content-->
                    <?php echo $this->renderSection('content'); ?>
                    <!--/content-->

                </div>
                <!--/page content-->

            </div>
        </div>
        <!--/app-->

        <script src="<?=base_url('assets/js/app.js')?>"></script>

        <?php echo $this->renderSection('scripts'); ?>
    </body>

</html>
