<template>
<div class="section">
  <div v-html="template"></div>
</div>
</template>

<script>
export default {
  name: 'home',
  data () {
    return {
      template: null
    }
  },
  mounted: function () {
    this.fetchData()
  },
  methods: {
    fetchData: function () {
      this.$http.get('style-guide/home').then(response => {
        this.template = response.body
        this.$nextTick(function () {
          var code = document.getElementsByClassName('highlight')
          for (var i = 0; i < code.length; i++) {
            window.hljs.highlightBlock(code[i])
          }

          // Event Dispatch
          var evt = new CustomEvent('section-loaded', { detail: 'home' })
          window.dispatchEvent(evt)
        })
      }, response => {
        // error callback
      })
    }
  },
  watch: {
    // call again the method if the route changes
    '$route': 'fetchData'
  }
}
</script>
