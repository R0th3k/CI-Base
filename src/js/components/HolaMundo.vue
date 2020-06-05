<template>
  <div>
    {{title}}
  </div>
</template>

<script>
  export default{
    name:'HolaMundo',
    data(){
      return{
        title:'Vue Component'
      }
    }
  }
</script>

<style lang="scss" scoped>
  h3{
      color:var(--primary);
  }
</style>