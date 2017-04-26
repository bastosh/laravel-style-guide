// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import VueResource from 'vue-resource'
import App from './App'
import router from './router'

window.StyleGuide = require('vue');
window.StyleGuide.use(VueResource)
window.StyleGuide.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#laravel-style-guide',
  router,
  template: '<App/>',
  components: { App }
})
