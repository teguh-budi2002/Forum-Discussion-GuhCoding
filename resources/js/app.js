require('./bootstrap');

// Library or Depedencies
import {
    createApp,
    defineAsyncComponent,
    defineComponent
} from 'vue';
import InfiniteLoading from 'v3-infinite-loading'
import VueLazyLoad from 'vue3-lazyload'

import RegComponent from './components/RegisterComponent.vue'
import QuestionComponent from './components/QuestionComponent.vue'
import EditQuestion from './components/EditQuestionComponent.vue'
import LiveSearch from './components/LiveSearchComponent.vue'

import UserPost from './UserPost.vue'
import PostComponent from './components/post/PostComponent.vue'

import Forum from './Forum.vue'
import LoadingComponent from './components/post/LoadingComponent.vue'
import ForumLoadingComponent from './components/forum/LoadingComponent.vue'
import ModalForumComponent from './components/forum/ModalForum.vue'

import HomeMain from './HomeMain.vue'

const root = defineComponent({
    /* ... */
})

const app = createApp(root)
createApp(LiveSearch).mount("#live-search")
app.component('edit-question', EditQuestion).mount("#edit-question")
app.component('reg-component', RegComponent).mount("#form-reg")
app.component('question-component', QuestionComponent).mount("#question")

app .use(VueLazyLoad)
    .component('user-post', UserPost)
    .component('post-component', defineAsyncComponent(() => {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                resolve(PostComponent)
            }, 2000);
        })
    }))
    .component('modal-forum', ModalForumComponent)
    .component('loading-component', LoadingComponent)
    .mount("#user-post")

app .use(VueLazyLoad)
    .component('forum', Forum)
    .component('live-search', LiveSearch)
    .component('loading-forum-component', ForumLoadingComponent)
    .component('modal-forum', ModalForumComponent)
    .component('infinite-loading', InfiniteLoading)
    .mount("#user-post-in-forum")

app
    .component('home-main-nav', HomeMain)
    .component('body-main', defineAsyncComponent(() => {
        return new Promise ((resolve, reject) => {
            setTimeout(() => {
                resolve(import('./components/home/BodyMain.vue'))
            }, 2000);
        })
    }))
    .mount("#home-main-nav")
