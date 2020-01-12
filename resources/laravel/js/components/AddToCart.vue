<template>
    <button @click="addToCart" type="button" class="btn btn-primary mt-3">
        add to cart
    </button>
</template>

<script>
export default {
    methods: {
        addToCart() {
            console.log("adding to cart");
        }
    },
    mounted() {
        console.log("Component mounted. yaaay");
    }
};
</script>
