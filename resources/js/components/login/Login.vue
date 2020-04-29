<template>
<v-container>
  <form @submit.prevent="login">
    <v-text-field
      :counter="10"
      v-model="form.email"
      label="email"
      type="text"
      required     
    ></v-text-field>
    <v-text-field
      v-model="form.password"
      label="password"
      type="password"
      required 
    ></v-text-field>
    <v-btn type="submit" class="mr-4">login</v-btn>
  
  </form>
</v-container>
</template>

<script>
 import User from '../../helper/User'
//  import Token from '../../helper/Token'
//  import AppStorage from '../../helper/Appstorage'
export default {

data(){
    return {
        form:{
            email:'',
            password:'',
        },
    }
},
created(){
  if(User.logedIn()){
      this.$router.push({name:"forum"})
  }  
},
methods:{
    login(){
    User.login(this.form)
    this.$router.push({name:"forum"})
  //console.log(User.id())
    },

   
}
}
</script>

<style>

</style>