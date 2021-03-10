<template>
<b-navbar type="dark" variant="dark">
    <b-navbar-nav>
    <b-nav-item to="/"><i class="fas fa-home"></i> Accueil</b-nav-item>
      
     
       
      <b-nav-item to="/panier" >
            <i class="fas fa-shopping-cart"></i> Panier <span class="badge badge-danger text-light">{{notifications}}</span>
        </b-nav-item>
    
      
    </b-navbar-nav>
    
    
  </b-navbar>
</template>

<script>

export default{
   data(){
       return{
           notifications : JSON.parse(localStorage.getItem('panier')).length
       }
   }
    
}

</script>