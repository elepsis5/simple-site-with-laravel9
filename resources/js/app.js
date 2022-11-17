require('./bootstrap');
require('./site/scripts');

window.Vue = require('vue').default;
import { createApp } from 'vue';
//import { createStore } from 'vuex'
import  store  from './store';

//Vue.component('article-component', require('./components/ArticleComponent.vue').default);
//Vue.component('test-component', require('./components/TestComponent.vue').default);
import articleComponent from './components/ArticleComponent.vue';
import viewsComponent from './components/ViewsComponent.vue';
import likesComponent from './components/LikesComponent.vue';
import commentComponent from './components/CommentComponent.vue';
import articleListComponent from './components/admin/ArticleListComponent.vue';
import paginateComponent from './components/admin/PaginateComponent';


const app = createApp({

    created() {
        let url = window.location.pathname
        let slug = url.substring(url.lastIndexOf('/')+1)

        this.$store.commit('SET_SLUG', slug)
        this.$store.dispatch('getArticlesData')
        this.$store.dispatch('getArticleData', slug)
        this.$store.dispatch('viewsIncrement', slug)
    }
});

app.component('article-component' , articleComponent);
app.component('article-list-component' , articleListComponent);
app.component('paginate-component' , paginateComponent);
app.component('views-component' , viewsComponent);
app.component('likes-component' , likesComponent);
app.component('comment-component' , commentComponent);

app.use(store).mount("#app");
