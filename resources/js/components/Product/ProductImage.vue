<template>
    <div class="col-lg-5 col-sm-12 mb-xl-0 mb-4 d-flex justify-content-center">
        <div class="product-pic">
            <img
                class="product-img" @load="onLoadImage()" v-show="load" :src="srcImage" :alt="`Capa do livro ${product.title}`"
            />
            <div v-if="!load" class="product-img-load placeholdershimmer"></div>
        </div>
        <div class="product-share">
            <div class="btn-like" v-on:click="onLike()">
                <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-heart"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    v-if="!like"
                >
                    <path
                        fill-rule="evenodd"
                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                    />
                </svg>
                <svg v-else width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg>
            </div>
            <div class="btn-share" v-on:click="share()">
                <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-share-fill"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"
                    />
                    <path
                        fill-rule="evenodd"
                        d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"
                    />
                </svg>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex';
export default {
    name: 'ProductImage',
    props: {
        srcImage: {
            type: String,
            default: '',
        },
        product: {
            type: Object,
            default: function(){
                return {
                    id: 0,
                    title: 'White peplum top'
                }
            }
        }
    },
    data(){
        return {
            load: false,
            like: true,
        }
    },
    methods: {
        onLoadImage: function(){
            this.load = true
        },
        share: function () {
            try {
                navigator.share({
                    title: this.$$props.product.title,
                    text: 'Veja as melhores ofertas para esse livro!',
                    url: window.location,
                })
            } catch(err) {
                $('#modalShare').modal('show')
                this.getShareData(this.$props.product.id)
            }
        },
        onLike: function(){
            this.like = !this.like
        },
        ...mapActions('shareDate', ['getShareData']),
    }
};
</script>

<style scoped>
.product-img-load {
    width: 300px;
    height: 100%;
}
</style>
