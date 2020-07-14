<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content')?>



<?php if ($product):?>

<section class="hero is-primary hero-<?php echo $product['category_slug']; ?>">
  <div class="hero-body">
    <div class="container">
      <h1 class="title c-white has-text-centered">

        <?php

          if (current_url() == base_url('productos')){
            echo 'Productos';
          }else{
            echo $product['category_name'];
          }

        ?>
      </h1>
    </div>
  </div>
</section>

<section class="section">
    <div class="container">
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
                    c_slug="<?php echo $product['category_slug']?>"
                    >
                    </product_card>

            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<section class="section">
  <div class="container has-text-centered"><?php echo $paginate->links();?></div>
</section>

<?php else:?>
<section class="section">

<div class="container">
<h1 class="title is-size-1">No hay productos</h1>
</div>

</section>
<?php endif;?>

<?= $this->endSection()?>
