<template>
  <div class="mx-auto" style="width: max-content"><Bootstrap5Pagination :data="links" @pagination-change-page="getResults"/></div>
</template>

<script>

import { Bootstrap5Pagination } from 'laravel-vue-pagination';
import { ref } from 'vue';

export default {
  name: "paginateComponent",
  components: {
    Bootstrap5Pagination,
  },
  data() {
    return {
      links: ref({})
    }
  },
  mounted() {
    this.getResults();
  },
  methods: {
    getResults(page = 1) {
      axios.get('/api/admin/', {
        params: {
          page
        }
      }).then((res) => {
        console.log(res.data, 123);
        this.$store.commit('SET_ARTICLES',res.data);
        this.links = res.data;
      });
    }
  }

}
</script>

<style scoped>

</style>