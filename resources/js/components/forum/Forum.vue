<template>
  
  <v-container fluid grid-list-md>
    <h2>Forum</h2>
    <v-layout row wrap>
      <v-flex xs8>
        <Question
        
        v-for="question in questions" :key="question.path"
           :quest=question
        ></Question>
      </v-flex>
      sidebar
    </v-layout>
  </v-container>
</template>

<script>
import Question from './Question'
export default {
components:{
  Question
},
data(){
  return {
questions:[],
}
},
created(){
  axios.get('api/questions').then(res=>{
    this.questions=res.data.data

  }).catch(err=>console.log(err.respone.data))
}
}
</script>

<style>

</style>