<template>
    <button @click="addToCart" type="button" class="btn btn-primary mt-3">
        add to cart
    </button>
</template>

<script>
import {store} from '../store'
export default {
    props: {
        id: String
    },
    methods: {
        async addToCart() {
            const response = await fetch(`/addProduct/${this.id}`, {
                method: "post"
            });
            const data = await response.json();
            store.addCart(data);
        }
    },
    mounted() {
        console.log("Component mounted. yaaay");
    }
};
</script>
