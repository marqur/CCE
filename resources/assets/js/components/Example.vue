<template>
<div class="item col-xs-4 col-lg-4" v-for="product in products">
    <div class="thumbnail">
        <img class="group list-group-image" :src="product.image" alt="@{{ product.title }}" />
        <div class="caption">
            <h4 class="group inner list-group-item-heading">@{{ product.title }}</h4>
            <p class="group inner list-group-item-text">@{{ product.description }}</p>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p class="lead">$@{{ product.price }}</p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a class="btn btn-success" href="#">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
