<?= $this->extend('layouts/backend') ?>

<?= $this->section('content')?>

<?=$this->section('content')?>
<?php if (session('message')): ?>
<?php
$message = session('message');
$type = session('type');?>

<?php endif;?>

<div class="content-header columns">

        <div class="column is-9">
            <h4 class="title is-4"><?=$title?></h4>
        </div>
        <div class="column is-3">
        <btn
            link="<?php echo base_url('admin/users'); ?>"
            c_class="is-primary"
            text="Volver a Usuarios"
            icon="navigate_before"
            target=""></btn>
        </div>


</div>

<div class="content-body">

<div class="columns">
    <div class="column is-6">
        <div class="card">
            <div class="card-content">
                <new_user
                    c_action="<?php echo base_url('admin/users/save') ?>"
                    c_method="post"
                    c_message='<?php echo (session("message")) ? $message : "NULL" ?>'
                    c_type='<?php echo (session("message")) ? $type : "" ?>'></new_user>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection()?>