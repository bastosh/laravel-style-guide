<template>
  <div class="section">
    asdfasdf
  </div>
</template>

<script>
export default {
  name: 'section',
  data () {
    return {
      sectionKey: null
    }
  },
  beforeRouteEnter: function () {
    // var self = this
    console.log('here')

    this.sectionKey = this.$route.params.sectionname
    // this.$http.get('style-guide/' + this.sectionKey, function (data, status, request) {
    //   var parser = new DOMParser()
    //   var doc = parser.parseFromString(data, 'text/html')
    //   console.log(doc)
    //   self.resolve({
    //     template: doc
    //   })
    // })
  }
}
</script>
