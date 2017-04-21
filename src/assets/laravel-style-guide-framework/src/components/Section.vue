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
      // this.$http.get('style-guide/' + this.sectionKey, function (data, status, request) {
      //   console.log(status)
      //   // var parser = new DOMParser()
      //   // var doc = parser.parseFromString(data, 'text/html')
      //   // console.log(doc)
      //   // self.resolve({
      //   //   template: doc
      //   // })
      // })

      this.$http.get('style-guide/' + this.sectionKey).then(response => {
        this.template = response.body
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
