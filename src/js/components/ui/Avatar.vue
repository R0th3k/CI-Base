<template>
  <div class="component">
    <div class="avatar" :class="this.size">
        <img :src="url + 'assets/images/uploads/' + this.photo" :alt="this.desc">
    </div>
    <span v-if="this.name">{{this.name}}</span>
  </div>
</template>

<script>
    export default {
        name: 'avatar',
        components: {},
        props: {
          size: String,
          photo: String,
          desc: String,
          name: String,
        },
        data() {
            return {
              url:'https://aluminiotrebol.com/',
            }
        }
    }
</script>

<style lang="scss" scoped="scoped">
.component{
      display: flex;
      align-items: center;
}
    .avatar {
        --mini: 24px;
        --small: 40px;
        --medium: 90px;
        --large: 160px;
        border-radius: 50%;
        border: solid 2px white;
        overflow: hidden;
        background: azure;
        margin: 0 .35rem;
        &.mini {
            width: var(--mini);
            height: var(--mini);
        }
        &.small {
            width: var(--small);
            height: var(--small);
        }
        &.medium {
            width: var(--medium);
            height: var(--medium);
        }
        &.large {
            width: var(--large);
            height: var(--large);
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            max-height: initial;
        }
    }
</style>
