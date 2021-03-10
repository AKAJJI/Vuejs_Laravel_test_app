<template>
    <b-container>
    <h2>Vos Articles</h2>
    <b-table striped hover :items="items" :fields="fields" class="mt-4"></b-table>
   <div class="mt-4 bg-danger">
   <span class="float-left"><b>Prix Total:</b></span>
   <span class="float-right text-danger ">{{totalPrice}} €</span>
   </div>
   <br>
  <b-button variant="primary" class="mt-4 col-12" @click="payer">Payer</b-button>
    
  </b-container>


</template>

<script>
export default{
    
     data() {
      return {
        fields: [
          {
            key: 'title',
            sortable: true
          },
          {
            key: 'price',
            sortable: true
          }
        ],
        items: JSON.parse(localStorage.getItem('panier'))
}
     },
     computed:{
         totalPrice(){
             var price=0
             for(var i=0;i<this.items.length;i++){
               price+= this.items[i].price 
             }
             return price
         }
     },
     methods:{
       async payer(){
         var ids=''
          for(var i=0;i<this.items.length;i++){
               ids+= this.items[i].id + ';' 
             }
            
         const res =  await fetch('http://localhost:8000/api/transaction',{
           method: 'POST',
           headers: {
             'Content-type':'application/json',
             'Accept': 'application/json',
           },
           body: JSON.stringify({"products_ids":ids,"price":this.totalPrice})
         })

         const data = await res.json()
         this.makeToast(data)
         localStorage.removeItem('panier')
          window.setTimeout(function(){

       
        window.location.href = "http://localhost:8081/";

        }, 5000);
       },
       makeToast(data) {
        this.$bvToast.toast(data, {
          title: "Success Message",
          variant: "primary",
          solid: true
        })
      }
     }
}
</script>