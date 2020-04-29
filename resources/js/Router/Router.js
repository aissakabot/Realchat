import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import Login from '../components/login/Login'
import SignUp from '../components/login/SignUp'
import Logout from '../components/login/Logout'
import Forum from '../components/forum/Forum'
const routes = [
    { path: '/login', component: Login },
    { path: '/logout', component: Logout },
    { path: '/signup', component: SignUp },
    { path: '/forum', component: Forum,name:'forum' },
    //{ path: '/bar', component: Bar }
  ]
  const router = new VueRouter({
    routes ,// short for `routes: routes`
    mode:'history'
  })
export default router  