<template>

    <v-toolbar>
      <v-toolbar-title>ChatMe</v-toolbar-title>
      <v-spacer></v-spacer>
      <div class="hidden-sm-and-down">
         <router-link  v-for="(item,index) in items" :key="index"
         :to='item.to'
         v-if="item.show"><v-btn flat>{{item.title}}</v-btn> </router-link>
        
      </div>
    </v-toolbar>
  
</template>

<script>
export default {
  data(){
    return {
      items:[
        {title:'forum',to:'forum',show:true},
        {title:'login',to:'forum',show:!User.logedIn()},
        {title:'signup',to:'signup',show:!User.logedIn()},
        {title:'logout',to:'logout',show:!User.logedIn()},
        {title:'question',to:'question',show:User.logedIn()},
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