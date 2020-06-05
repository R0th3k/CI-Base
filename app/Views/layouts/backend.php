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
                        BULMA ADMIN
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
                        <div class="navbar-item">
                            <a class="button is-white">
                                <span class="icon">
                                    <i class="fa fa-lg fa-power-off"></i>
                                </span>
                            </a>
                        </div>
                        <div class="navbar-item has-dropdown">
                            <a class="navbar-link">
                                <figure class="image avatar is-32x32">
                                    <img class="is-rounded" src="<?=base_url('assets/images/admin/user1.png')?>">
                                </figure>
                                &nbsp; Hi, Username
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
                            <li>
                                <a class="is-active" href="<?=base_url('admin')?>">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="" href="<?=base_url('admin/samples/forms')?>">
                                    <span class="icon">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                    Forms
                                </a>
                            </li>
                            <li>
                                <a class="" href="<?=base_url('admin/samples/ui')?>">
                                    <span class="icon">
                                        <i class="fa fa-desktop"></i>
                                    </span>
                                    UI Elements
                                </a>
                            </li>
                            
                            <li>
                                <a class="" href="<?=base_url('admin/samples/datatables')?>">
                                    <span class="icon">
                                        <i class="fa fa-table"></i>
                                    </span>
                                    Datatables
                                </a>
                            </li>
                            
                        </ul>

                        <p class="menu-label is-hidden-touch">
                            Sample Pages
                        </p>
                        <ul class="menu-list">
                            <li>
                                <a class="" href="<?=base_url('admin/samples/login')?>">
                                    <span class="icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    Login
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