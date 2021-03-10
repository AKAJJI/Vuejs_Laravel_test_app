<template>
  <div id="app">
    <navbar></navbar>
    <br>
   

    
    <router-view />
  </div>
</template>

<script>
import navbar from "./components/navbar";


export default{
  components:{
    navbar,
 
  },
  
}
</script>
