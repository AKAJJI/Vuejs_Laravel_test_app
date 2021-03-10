<template>
<b-card
    :title="product.title"
    :img-src="product.image1"
    img-alt="Image"
    img-top
    tag="article"
    style="max-width: 20rem;"
    class="mb-2"
  >
    <b-card-text>
      {{product.description}}
    </b-card-text>
    <p><b class="text-success ">{{product.price}} €</b></p>
    <b-button :to="`/product/${product.id}`" variant="primary">En savoir +</b-button>
  </b-card>
</template>

<script>

export default{
    props : {
        product : Object
    }
}
</script>