<template>
  <div>
    <div class="card card-product" :class="'product-' + this.c_id">

        <div class="card-image">
            <figure class="image">
            <img :src="'https://aluminiotrebol.com/assets/images/uploads/' + this.c_image" :alt="this.c_name"></figure>
        </div>

        <div class="card-content">
          <p class="title is-4">{{this.c_name}} {{this.c_model}}</p>
            <div class="media">
                <div class="media-left">
                    <div class="media-content">

                        <a :href="'https://aluminiotrebol.com/productos/' + this.c_slug">#{{this.c_category}}</a>
                    </div>
                </div>
            </div>
            <div class="content" v-html="this.c_description"></div>

        </div>

    </div>
  </div>
</template>

<script>
    export default {
        name: 'product_card',
        props: {
            c_id: String,
            c_image: String,
            c_name: String,
            c_model: String,
            c_description: String,
            c_slug: String,
            c_category: String,
        },
        data() {
            return {}
        }
    }
</script>

<style lang="scss" scoped="scoped">
  .title{
    margin-bottom: .5rem!important;
  }
</style>
