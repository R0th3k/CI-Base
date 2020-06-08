<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content')?>
<section class="hero is-primary is-medium hero-home is-clipped">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-centered">
                Bienvenido
            </h1>

        </div>
    </div>
</section>

<section class="section auth-section">
    <div class="container">
        <?php if (session('message')): ?>
        <?php
          $message = session('message');
          $type = session('type');
          ?>
        <?php endif;?>

        <login
            c_action="<?php echo base_url('login/auth');?>"
            c_method="post"
            c_message='<?php echo (session("message")) ? $message : "NULL" ?>'
            c_type='<?php echo (session("message")) ? $type : "" ?>'></login>
        <div class="auth-link">
            <a href="<?php echo base_url('recover-password');?>">Recuperar Contraseña</a>
            <a href="<?php echo base_url('register');?>">Crear Cuenta</a>
        </div>
    </div>
</section>
<?= $this->endSection('content')?>
