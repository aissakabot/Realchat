<template>

    <v-toolbar>
      <v-toolbar-title>ChatMe</v-toolbar-title>
      <v-spacer></v-spacer>
      <div class="hidden-sm-and-down">
         <router-link  v-for="item in items" :key="item.title"
         :to='item.to'
         v-if="item.show"><v-btn flat>{{item.title}}</v-btn> </router-link>
        
      </div>
    </v-toolbar>
  
</template>

<script>
import User from '../helper/User'
import { EventBus } from '../helper/EventBus';
export default {
  data(){
    return {
      items:[
        {title:'forum',to:'forum',show:true},
        {title:'login',to:'login',show:!User.logedIn()},
        {title:'signup',to:'signup',show:!User.logedIn()},
        {title:'logout',to:'logout',show:User.logedIn()},
        {title:'Ask question',to:'create',show:true},
        {title:'category',to:'category',show:User.logedIn()},
        
      ]
    }
  },
  created(){
    EventBus.$on('logout', ()=>{
      User.logOut()
    })
  }

}
</script>

<style>

</style>