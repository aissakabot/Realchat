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
export default {

data(){
    return {
        form:{
            email:'',
            password:'',
        },
    }
},
methods:{
    login(){
        axios.post('api/auth/login',this.form).then(
            res=>console.log(res.data)
        ).then(err=>console.log(err.response.data))
    }
}
}
</script>

<style>

</style>