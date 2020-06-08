<template>
  <i class="material-icons" :class="this.color" >{{this.name}}</i>
</template>

<script>
  export default{
    name:'Icon',
    props: {
      name:String,
      color:String,
    },
    data(){
      return{
        title:'Plataforma cursos'
      }
    }
  }
</script>

<style lang="scss" scoped>
  .white{
    color:white;
  }
  .black{
    color:black;
  }
</style>
