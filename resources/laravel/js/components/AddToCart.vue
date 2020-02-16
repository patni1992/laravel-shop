<template>
    <button @click="addToCart" type="button" class="btn btn-primary mt-3">
        add to cart
    </button>
</template>

<script>
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
        }
    },
    mounted() {
        console.log("Component mounted. yaaay");
    }
};
</script>
