<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content')?>
<section class="hero is-primary is-medium hero-home is-clipped">
    <div class="hero-body">
        <div class="container"></div>
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
        <div class="auth">
            <h1 class="subtitle is-size-4 c-secondary has-text-centered">
                <?=$title?>
            </h1>
            <change_password
                c_action="<?php echo base_url('recover-password/set-new-password/'.$id_user);?>"
                c_method="post"
                c_message='<?php echo (session("message")) ? $message : "NULL" ?>'
                c_type='<?php echo (session("message")) ? $type : "" ?>'></change_password>
        </div>
    </div>
</section>
<?= $this->endSection('content')?>
