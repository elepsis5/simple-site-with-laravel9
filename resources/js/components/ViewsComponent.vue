<template>

    <span class="badge state">{{views}} <i class="bi bi-eye"></i></span>

</template>

<script>
export default {
    computed: {
        views() {
            return this.$store.getters.articleViews;
        }
    }
}
</script>

<style scoped>
</style>
