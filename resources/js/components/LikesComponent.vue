<template>

    <span @click="addLike" class="badge state likesButton">{{likes}}
        <span v-if="isLike">
            <i class="bi bi-heart"></i>
        </span>
        <span v-else>
            <i class="bi bi-heart-fill"></i>
        </span>
    </span>

</template>

<script>
export default {
    computed: {
        likes() {
            return this.$store.getters.articleLikes;
        },
        isLike() {
            return this.$store.state.like;
        }
    },
    methods: {
        addLike() {
            this.$store.dispatch('addLike', {
                slug: this.$store.state.slug,
                increment: this.isLike
            })
        }
    }
}
</script>

<style scoped>

    .likesButton {
        cursor:pointer;
    }

</style>
