<template>
  
</template>

<script>
//import EventBus from '../helper/EventBus'
export default {
created(){
    EventBus.$emit('logout')
}
}
</script>

<style>

</style>