<template>
  <ul>
    <li><router-link :to="{ name: 'Home'}">Home</router-link></li>
    <li v-for="navigationItem in navigationItems">
      <router-link :to="{ name: 'Section', params: { sectionname: navigationItem.path  }}">{{ navigationItem.name }}</router-link>
    </li>
  </ul>
</template>

<script>
export default {
  name: 'navigation',
  data () {
    return {
      navigationItems: []
    }
  },
  mounted: function () {
    this.navigationItems = window.sections
  }
}
</script>

<style lang="scss" scoped>
  @import "./../sass/meyers-reset";
</style>
