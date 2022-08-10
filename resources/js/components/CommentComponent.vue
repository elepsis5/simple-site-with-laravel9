<template>
    <div class="row comments-container" >
        <form @submit.prevent="sendForm()" class="mx-auto" action="#" method="" v-if="!commentCreate">
            <div class="mb-3">
                <label for="commentSubject" class="form-label">Comment's subject</label>
                <input type="text" class="form-control" id="commentSubject" v-model="subject">
            </div>
            <div class="mb-3">
                <label for="commentBody" class="form-label">Comment</label>
                <textarea class="form-control" id="commentBody" rows="3" v-model="body"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
        <div v-else>
            <p>Комментарий отправлен!</p>
        </div>
        <div class="toast-container mt-5 pb-5 mx-auto">
                <div class="toast showing" style="width: 100%" v-for="comment, index in comments" :key="index">
                    <div class="toast-header">
                        <img :src="`${comment.img}`" class="rounded me-2" alt="...">
                        <strong class="me-auto">{{comment.subject}}</strong>
                        <small class="text-muted">{{comment.created_at}}</small>
                    </div>
                    <div class="toast-body">
                        {{comment.body}}
                    </div>
                </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            subject: '',
            body: '',

        }
    },
    computed: {
        comments() {
            return this.$store.state.article.comments;
        },
        commentCreate() {
            return this.$store.state.commentCreate;
        }
    },
    methods: {
        sendForm() {
            this.$store.dispatch('addComment', {
                subject: this.subject,
                body: this.body,
                article_id: this.$store.state.article.id,

            });
        },
    }
}
</script>

<style scoped>



</style>
