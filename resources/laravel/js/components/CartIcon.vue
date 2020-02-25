<template>
    <a class=" mx-4" href="/cart">
  
        <div
            class="badge-top-container"
            role="button"
            id="dropdownNotification"
           
        >
            <span class="badge badge-primary">{{ cart.totalItems }}</span>
            <i class="i-Add-Cart text-muted header-icon"></i>
        </div>
   
    </a>
</template>

<script>
import { store } from "../store";
export default {
    computed: {
        cart() {
            return store.$data.cart;
        }
    },
    methods: {
        addToCart() {
            console.log("adding to cart");
        }
    }
};
</script>
