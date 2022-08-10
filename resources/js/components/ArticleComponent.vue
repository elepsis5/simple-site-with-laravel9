<template>
    <div class="row article-one">
        <div class="col-12 p-3">
            <img :src="article.img" class="article-one-img border rounded mx-auto" alt="...">
            <h5 class="mt-5">{{article.title}}</h5>
            <p>
                <span v-for="(tag, index) in article.tags" :key=index>
                    <span v-if="tagLength == (index+1)" class="tag">{{tag.label}}</span>
                    <span v-else class="tag">{{tag.label}} | </span>
                </span>
            </p>
            <p class="card-text">{{article.body}}</p>
            <p>Published: {{article.created_at}}</p>
            <div class="mt-3">
                <likes-component></likes-component>
                <views-component></views-component>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        article() {
            return this.$store.state.article;
        },
        tagLength() {
            return this.$store.state.article.tags.length;
        },
    }
}
</script>

<style scoped>
</style>
