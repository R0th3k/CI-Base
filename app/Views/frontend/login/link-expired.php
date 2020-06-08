<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content')?>
<section class="hero is-primary is-medium hero-home is-clipped">
    <div class="hero-body">
        <div class="container">


        </div>
    </div>
</section>

<section class="section auth-section">
    <div class="container">
        <div class="auth">
        <h1 class="subtitle is-size-4 c-secondary has-text-centered">
                <?=$title?>
            </h1>
        <btn link="<?php echo base_url('recover-password')?>" c_class="is-primary is-fullwidth" text="Obtener un nuevo enlace"></btn>
        </div>
    </div>
</section>
<?= $this->endSection('content')?>
