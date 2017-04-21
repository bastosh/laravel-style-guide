import Vue from 'vue'
import Router from 'vue-router'
import Section from '@/components/Section'
import Home from '@/components/Home'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/:sectionname',
      name: 'Section',
      component: Section
    }
  ]
})
