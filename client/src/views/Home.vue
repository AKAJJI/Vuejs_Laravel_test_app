<template>
  <b-container>
  
  <b-row id="itemList" :items="listProduct"
      :per-page="perPage"
      :current-page="currentPage"
      small>
    <b-col cols="4" v-for="product in productsList" :key="product.id" >
      <Card :product="product"/>
    </b-col>
    </b-row>
    <b-pagination
  v-model="currentPage"
  :total-rows="rows"
  :per-page="perPage"
  aria-controls="itemList"
  align="center"
></b-pagination>
  </b-container>
</template>



<script>
// @ is an alias to /src
import Card from '../components/Card';

export default {
  name: "Home",
  components: {
    Card
  },
  data(){
    return{
      perPage: 3,
      currentPage: 1,
    }
  },
  computed:{
    rows(){
      return this.listProduct.length
    },
    productsList() {
    return this.listProduct.slice(
    (this.currentPage - 1) * this.perPage,
    this.currentPage * this.perPage,
  );
  },
  listProduct(){
    return this.$store.getters.productList
  }
  },
  // created (){
  //   this.products = listProduct()   
  // }
  
};
</script>
