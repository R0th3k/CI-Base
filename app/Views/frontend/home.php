<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content')?>

<div class="container">
    <div class="divider is-size-2"></div>
    <home_slider></home_slider>
</div>

<div class="container">
    <div class="the-categories">

        <a
            href="<?=base_url('productos/vaporeras')?>"
            class="the-categories_item bg-red">
            <h3 class="title c-white">Vaporeras</h3>
            <img
                src="<?=base_url('assets/images/vaporera.png')?>"
                alt="Vaporeras"
                class="the-categories_item-image">
        </a>

        <a
            href="<?=base_url('productos/arroceras-y-paelleras')?>"
            class="the-categories_item bg-green">
            <h3 class="title c-white">Arroceras y paelleras</h3>
            <img
                src="<?=base_url('assets/images/arrpa.png')?>"
                alt="Arroceras y Paelleras"
                class="the-categories_item-image">

        </a>

        <a
            href="<?=base_url('productos/cazos-y-sartenes')?>"
            class="the-categories_item bg-yellow">
            <h3 class="title c-white">Cazos y Sartenes</h3>
            <img
                src="<?=base_url('assets/images/cazsarten.png')?>"
                alt="Cazos y Sartenes"
                class="the-categories_item-image">
        </a>

        <a
            href="<?=base_url('productos/ollas-y-convexas')?>"
            class="the-categories_item bg-blue">
            <h3 class="title c-white">Ollas y Convexas</h3>
            <img
                src="<?=base_url('assets/images/ollas.png')?>"
                alt="Ollas y Convexas"
                class="the-categories_item-image">
        </a>

        <a
            href="<?=base_url('productos/jarras-moldes-y-utencilios')?>"
            class="the-categories_item bg-black">
            <h3 class="title c-white">Jarras, Moldes y Utencilios</h3>
            <img
                src="<?=base_url('assets/images/utencilios.png')?>"
                alt="Jarras, Moldes y Utencilios"
                class="the-categories_item-image">
        </a>

        <a
            href="<?=base_url('productos/juegos')?>"
            class="the-categories_item bg-silver">
            <h3 class="title c-white">Juegos</h3>
            <img
                src="<?=base_url('assets/images/juegos.png')?>"
                alt="Juegos"
                class="the-categories_item-image">
        </a>
    </div>
</div>

<section class="section featured">
    <div class="container">
        <div class="columns">
            <div class="column is-1"></div>
            <div class="column is-4">
                <h3 class="title is-size-3">¡No es la suerte, es Grupo Trebol!</h3>
                <p>
                    Empresa 100% mexicana. Contamos con una gran variedad de productos para
                    facilitar la preparación de sus alimentos. Seguimos innovando nuestra línea lo
                    cual mantiene liderando el mercado.
                </p>
                <div class="divider is-size-2"></div>
                <a href="<?php echo base_url('assets/catalogo.pdf')?>" class="button is-primary is-rounded" download>
                    Descargar Catálogo
                </a>
            </div>
            <div class="column is-6">

                <div class="skillet">
                    <div class="skillet_smoke_top"></div>
                    <div class="skillet_img_top"></div>
                    <div class="skillet_oil"></div>
                    <div class="skillet_img"></div>
                    <div class="skillet_smoke_bottom"></div>
                </div>

            </div>
            <div class="column is-1"></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h3 class="title is-size-3">Lo más nuevo</h3>
        <div class="columns is-multiline">
            <?php foreach($products as $product):?>
            <div class="column is-3">
                <product_card
                    c_id="<?php echo $product['id_product']?>"
                    c_image="<?php echo $product['product_image']?>"
                    c_name="<?php echo $product['product_name']?>"
                    c_category="<?php echo $product['category_name']?>"
                    c_model="<?php echo $product['product_model']?>"
                    c_description="<?php echo $product['product_description']?>"
                    c_slug="<?php echo $product['category_slug']?>"></product_card>

            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<section class="section about-us" id="nosotros">
    <div class="container">
        <div class="columns">

            <div class="column is-6">
                <h3 class="title is-size-3">Nosotros</h3>
                <p>Somos una empresa 100% mexicana fabricante de artículos de aluminio para el
                    hogar, fundada en el año 2000, dedicada desde nuestros inicios a ofrecer la
                    mejor calidad en nuestros productos.</p>
                <div class="divider is-size-1"></div>
                <p>Tenemos 20 años de experiencia que respaldan y garantizan la fabricación de
                    nuestros productos, hechos con materiales de primera calidad, brindándole así la
                    confianza de adquirir un producto líder en el mercado que satisfacerá sus
                    necesidades y superará sus expectativas.</p>
            </div>
            <div class="column is-6">
                <div class="video-wrapper">
                    <iframe
                        width="560"
                        height="315"
                        src="https://www.youtube.com/embed/J-yujq9SS0Y"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section brands" id="clientes">
    <div class="container">
        <h3 class="title is-size-3">Nuestros Clientes</h3>
        <carousel
            :margin="16"
            :responsive="{0:{items:1,nav:false},600:{items:2,nav:false},1024:{items:6,nav:false}}">
            <img
                v-for="i in 5"
                :src="'https://aluminiotrebol.com/assets/images/clientes/' + i + '.jpg'">
        </carousel>
    </div>
</section>

<section class="feed">

    <div class="elfsight-app-7a4abb3a-4898-4788-b071-c2b1170b1a6b"></div>

</section>

<?= $this->endSection()?>

<?= $this->section('scripts')?>
<script>

    const bg = document.querySelector('.skillet');

    const smoke_bottom = document.querySelector('.skillet_smoke_bottom');
    const img = document.querySelector('.skillet_img');
    const oil = document.querySelector('.skillet_oil');
    const img_top = document.querySelector('.skillet_img_top');
    const smoke_top = document.querySelector('.skillet_smoke_top');

    function scrollParallax() {
        let scrollTop = document.documentElement.scrollTop;

        //bg.style.backgroundPositionX = scrollTop * - 0.05 + 'px';

        smoke_bottom.style.transform = 'translateX(' + scrollTop * 0.1500 + 'px)';
        smoke_top.style.transform = 'translateX(' + scrollTop * -0.0900 + 'px)';

        oil.style.transform = 'translateX(' + scrollTop * 0.010 + 'px)';

        console.log(scrollTop)
    }

    window.addEventListener('scroll', scrollParallax)

    const credit = document.querySelector(
        [href = "https://elfsight.com/instagram-feed-instashow/?utm_source=websites&utm_medium=" +
                "clients&utm_content=instagram-feed&utm_term=aluminiotrebol.com&utm_campaign=fr" +
                "ee-widget"]
    );

    console.log(credit);

    window.onload(function () {
        alert('Hola');
    });
</script>

<script src="https://apps.elfsight.com/p/platform.js" defer="defer"></script>

<?= $this->endSection()?>

<?= $this->section('styles')?>
<style>
    .footer {
        margin-top: -3rem!important;
        z-index: 9999999;
        /* Técnicas de hacker 😎 no intente hacerlo en casa */
        position: relative;
    }
</style>
<?= $this->endSection()?>
