<template>
    <b-container>
            <b-row class="p-4 bg-dark">
                <b-col>
                <b-img thumbnail fluid :src="product.image1" alt="Image 1"></b-img>
                </b-col>
                <b-col>
                <b-img thumbnail fluid :src="product.image2" alt="Image 2"></b-img>
                </b-col>
                <b-col>
                <b-img thumbnail fluid :src="product.image3" alt="Image 3"></b-img>
                </b-col>
            </b-row>
            
            <div class="mt-4 row"><h3 class="col-10">{{product.title}}</h3><h5 class="text-success col-2">{{product.price}} €</h5></div>
            <div class="mt-4">
            <p>{{product.long_description}}</p>
            </div>
            <b-button variant="primary" @click="addProduct"><i class="fas fa-cart-plus"></i> Ajouter au panier</b-button>
            <div class="mt-4">
            <span class="float-left"><b-button variant="dark" :to="`/product/${--id}`" > &#60; </b-button></span>
            <span class="float-right"><b-button variant="dark" :to="`/product/${++id}`"> > </b-button></span>
            </div>
    </b-container>
</template>

<script>


export default{
    computed:{
        product(){
            
            return this.$store.getters.product(this.id);
            
        },
        id(){
            return parseInt(this.$route.params.id)
        },
        
    },
    methods:{
        addProduct(){
            var panier =  JSON.parse(localStorage.getItem('panier'))
            if(panier == null) panier = []
            panier.push(this.product)
            localStorage.setItem('panier',JSON.stringify(panier))
            window.location.href="/product/"+this.id
        }
    }

}
</script>