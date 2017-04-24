<template>
  <div id="laravel-style-guide">
    <navigation></navigation>
    <div>
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Navigation from '@/components/Navigation'

export default {
  name: 'laravel-style-guide',
  components: {
    'navigation': Navigation
  }
}
</script>

<style lang="scss">
  @import "./sass/global";
</style>
