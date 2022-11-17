<template>
  <div class="admin-content-list">
    <div class="list-group list-group-numbered">
      <a v-for="article in this.articles" class="list-group-item d-flex justify-content-between align-items-start list-group-item-action" href="{{route('admin.edit',[article.id])}}">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{article.title}}</div>
          {{article.body.substr(0,300)}}...
        </div>
        <span class="badge state">{{article.state.likes}} <i class="bi bi-heart"></i></span>
        <span class="badge state">{{article.state.views}} <i class="bi bi-eye"></i></span>
        <span class="badge state"><img :src="article.img"></span>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "ArticleListComponent",
  computed: {
    articles() {
      return this.$store.state.articles.data;
    },
  }
}
</script>

<style scoped>

</style>