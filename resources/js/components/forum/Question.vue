<template>
  <v-card>
      <v-card-title>
       <router-link :to="quest.path"><h3 class="headline mb-0">{{quest.title}}</h3></router-link>
       <div class="grey--text">{{quest.created_at}} </div>
      </v-card-title>
      <v-card-text>
      {{quest.body}}
      </v-card-text>
  </v-card>
</template>

<script>
export default {
    props:['quest'],
    data(){
        return {
            
        }
    }

}
</script>

<style>

</style>