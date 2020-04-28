import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import Login from '../components/login/Login'
const routes = [
    { path: '/login', component: Login },
    //{ path: '/bar', component: Bar }
  ]
  const router = new VueRouter({
    routes ,// short for `routes: routes`
    mode:'history'
  })
export default router  