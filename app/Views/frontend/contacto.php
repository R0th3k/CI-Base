<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content')?>


<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title c-white has-text-centered">
        Contacto
      </h1>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-6">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.1732284599682!2d-99.06719135229052!3d19.511843359954153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f07722a6e43d%3A0xf953271aa9b262d2!2sGrupo%20Trebol%20Avasaal!5e0!3m2!1ses!2smx!4v1593288211568!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="column is-6">
          <contact></contact>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection()?>

<?=$this->section('styles')?>
<style>
    #map {
        height: 500px;
        width: 100%;
    }
</style>
<?=$this->endSection()?>
