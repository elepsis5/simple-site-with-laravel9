import axios from 'axios';
import Vue from 'vue'
import Vuex from 'vuex'

//Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        article: {
            comments:[],
            tags: [],
            state: {
                likes: 0,
                views: 0
            }
        },
        slug: '',
        like: true,
        commentCreate: false,
    },

    actions: {
        getArticleData(context, payload) {
            axios.get('/api/article-json', {params: {slug:payload}}).then((response)=>{
                console.log(response.data.data);
                context.commit('SET_ARTICLE', response.data.data);
            }).catch(()=>{
                console.log('Error');
            });
        },
        viewsIncrement(context, payload) {
            setTimeout(() => {
                axios.put('/api/article-views-increment', {slug:payload}).then((response)=>{
                    //console.log(response.data)
                    context.commit('SET_ARTICLE', response.data.data);
                }).catch(()=>{
                    console.log('Error');
                })
            }, 5000);
        },
        addLike(context, payload) {
            axios.put('/api/article-likes-increment', {slug:payload.slug, increment:payload.increment}).then((response)=>{
                context.commit('SET_ARTICLE', response.data.data)
                context.commit('SET_LIKE', !context.state.like)
            }).catch(()=>{
                console.log('Error addLike');
            });
            console.log('addLike сработал', context.state.like);
        },
        addComment(context, payload) {
            axios.post('/api/article-add-comment', {subject: payload.subject, body: payload.body, article_id: payload.article_id}).then((response)=>{
                context.commit('SET_COMMENT', !context.state.commentCreate);
                context.dispatch('getArticleData', context.state.slug);
            }).catch(()=>{
                console.log('error addComment', context.state.commentCreate);
            });
        }
    },

    getters: {

        articleLikes(state) {
            return state.article.state.likes;
        },

        articleViews(state) {
            return state.article.state.views;
        }
    },

    mutations: {
        SET_ARTICLE(state, payload){
            return state.article = payload;
        },
        SET_SLUG(state, payload){
            return state.slug = payload;
        },
        SET_LIKE(state, payload) {
            return state.like = payload;
        },
        SET_COMMENT(state, payload) {
            return state.commentCreate = payload;
        }
    }
});
