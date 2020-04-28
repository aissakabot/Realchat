<template>
  <div>
      <tool-bar></tool-bar>
      <router-view></router-view>
      <Footer></Footer>
  </div>
</template>

<script>
import ToolBar from './ToolBar'
import Footer from './Footer'
export default {
components:{
    ToolBar,Footer
},
}
</script>

<style>

</style>