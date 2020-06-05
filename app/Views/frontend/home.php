<?= $this->extend('layouts/frontend') ?>


<?= $this->section('content')?>


<section class="hero is-medium bg-primary is-bold c-white">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white">{{hello}}</h1>
        <h2 class="subtitle has-text-white"><holamundo></holamundo></h2>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h1 class="title">Section Example</h1>
      <h2 class="subtitle">A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading</h2>
    </div>
  </section>



<?= $this->endSection()?>
