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
            link="<?php echo base_url('admin/products'); ?>"
            c_class=""
            text="Volver a Productos"
            icon="navigate_before"
            target=""></btn>
    </div>

</div>

<div class="content-body">

    <new_product
      c_action="<?php echo base_url('admin/products/save') ?>"
      c_method="post"
      c_message='<?php echo (session("message")) ? $message : "NULL" ?>'
      c_type='<?php echo (session("message")) ? $type : "" ?>'></new_product>



</div>



<?= $this->endSection()?>

<?= $this->section('scripts')?>
<script src="//cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#product_description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<?= $this->endSection()?>
