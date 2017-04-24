<template>
  <div class="section">
    <div v-html="template"></div>
  </div>
</template>

<script>
export default {
  name: 'section',
  data () {
    return {
      sectionKey: null,
      template: null
    }
  },
  mounted: function () {
    this.fetchData()
  },
  methods: {
    fetchData: function () {
      this.sectionKey = this.$route.params.sectionname

      this.$http.get('style-guide/' + this.sectionKey).then(response => {
        this.template = response.body
        this.$nextTick(function () {
          var code = document.getElementsByClassName('highlight')
          for (var i = 0; i < code.length; i++) {
            window.hljs.highlightBlock(code[i])
          }
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
