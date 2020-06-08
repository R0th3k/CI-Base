<template>

    <div class="is-inline">

      <a v-if="link" :href="this.link" :class="'button ' + this.c_class" :target="this.target">
          <icono :name="this.icon" class="ml" v-if="icon"></icono>
          {{this.text}}
      </a>

      <button v-if="type=='submit'" :type="this.type" :class="'button ' + this.c_class" :target="this.target">
          <icono :name="this.icon" class="ml" v-if="icon"></icono>
          {{this.text}}
      </button>

    </div>

</template>

<script>
    import icono from './Icon.vue';
    export default {
        name: 'btn',
        components: {
            icono
        },
        props: {
            c_class: String,
            text: String,
            link: String,
            target: String,
            icon: String,
            type:String
        },
        data() {
            return {}
        }
    }
</script>

<style lang="scss" scoped="scoped">
    .ml {
        margin-right: 0.25rem;
    }
    .button {
        transition:all ease .5s;
        margin-right: 0.25rem;
        margin-left: 0.25rem;
        &:hover{
          transition:all ease .5s;
        }
        &:not(.is-text) {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0,0,0,.12);
            transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
            transition-property: box-shadow;
            transition-duration: 280ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-delay: 0s;
            font-weight: 600;
        }
        &.is-primary {
            color: white;
        }
        &.is-danger {
            color: white;
        }
        &.is-success {
            color: white;
        }
        &.is-text{
          text-decoration: none;
        }
    }
</style>
