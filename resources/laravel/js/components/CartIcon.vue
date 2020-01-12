
<template>
        <div class="dropdown mx-4">
            <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-primary">{{count}}</span>
                <i class="i-Add-Cart text-muted header-icon"></i>
            </div>
        </div> 

</template>

<script>
export default {
    props: {
        count: Number
    },
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

