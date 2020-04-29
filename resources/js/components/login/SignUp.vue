<template>
  <v-container>
  <form @submit.prevent="signUp">
      <v-text-field
      :counter="10"
      v-model="form.name"
      label="name"
      type="text"
       
    ></v-text-field>
    <span  class="red--text" v-if="errors.name">{{errors.name[0]}}</span>
    <v-text-field
      :counter="10"
      v-model="form.email"
      label="email"
      type="text"
        
    ></v-text-field>
     <span  class="red--text" v-if="errors.email">{{errors.email[0]}}</span>
    <v-text-field
      v-model="form.password"
      label="password"
      type="password"
    
    ></v-text-field>
     <span  class="red--text" v-if="errors.password">{{errors.password[0]}}</span>
    <v-text-field
      v-model="form.password_confirmation"
      label="confirm password"
      type="password"
      
    ></v-text-field>
     <span  class="red--text" v-if="errors.password_confirmation">{{errors.password_confirmation[0]}}</span>
    <v-btn type="submit" color="success" class="mr-4">Signup</v-btn>
    <router-link to="/login"><v-btn color="warning" >Login</v-btn></router-link>
  
  </form>
</v-container>
</template>

<script>
export default {
data(){
    return {
        form:{
            name:'',
            email:'',
            password:'',password_confirmation:''
        },
        errors:{},
    }
},
created(){
  if(User.logedIn()){
      this.$router.push({name:"forum"})
  }  
},
methods:{
    signUp(){
         axios.post('api/auth/signup',this.form).then(
                res=>{
                    User.responseAfterLogin(res)
                this.$router.push({name:"forum"})
                 }).catch(err=>{
               // console.log(err.response)
               // this.errors=err.response.data.errors
                })
                 
                
    }
}
}
</script>

<style>

</style>