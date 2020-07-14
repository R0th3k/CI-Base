<template>
    <carousel :data="data"></carousel>
</template>

<script>
    export default {
        name: 'home_slider',
        data() {
            return {
                data: [
                  '<div class="slide slide-1"><h1 class="title c-white is-size-1 is-hidden">Vaporeras</h1></div>',
                  '<div class="slide slide-2"><h1 class="title c-white is-size-1 is-hidden">Sartenes</h1></div>',
                  '<div class="slide slide-3"><h1 class="title c-white is-size-1 is-hidden">Paelleras</h1></div>',
                  '<div class="slide slide-4"><h1 class="title c-white is-size-1 is-hidden">Utencilios</h1></div>'
                ],

            };
        }
    };
</script>

<style lang="scss">
    .carousel{
      width: 100%;
      height: 450px;
    }
  .slide {
    align-items: center;
    color: white;
    display: flex;
    font-size: 1.5rem;
    justify-content: center;
    height:450px;
    .title{
      text-shadow:rgba(0,0,0,.75) 0 0 10px;
    }
  }
  .slide-1{
    background: url('https://aluminiotrebol.com/assets/images/slider/s1.png');
  }
  .slide-2{
    background: url('https://aluminiotrebol.com/assets/images/slider/s2.png');
  }
  .slide-3{
    background: url('https://aluminiotrebol.com/assets/images/slider/s3.png');
  }
  .slide-4{
    background: url('https://aluminiotrebol.com/assets/images/slider/s4.png');
  }
</style>
