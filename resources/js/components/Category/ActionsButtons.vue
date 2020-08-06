<template>
    <div class="card-top-icons">
        <div class="card-icon-love" :title="((item.like == false) ? 'Adicionar aos favoritos' : 'Remover dos favoristos')" v-on:click="favoritos()">
            <svg v-if="!item.like" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
            <svg v-else style="fill: #ed4956;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
        </div>
        <div v-on:click="addCart()" class="card-icon-cart" :title="((carrinho == false) ? 'Adicionar ao carrinho de compras' : 'Remover do carrinho de compras')">
            <svg v-if="!carrinho" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="bi bi-cart">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
            </svg>
            <svg v-else width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12l-5-3-5 3V3z"/>
            </svg>
        </div>
        <div class="card-icon-share" title="Compartilhar nas redes sociais" v-on:click="share">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-share-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"/>
                <path fill-rule="evenodd" d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg>
        </div>
    </div>
</template>
<script>
import { mapActions, mapGetters } from 'vuex';
export default {
    name: 'ActionsButtons',
    props: {
        book: {
            type: Object,
            default: {
                like: false,
                id: 0,
                code: '0',
            }
        },
    },
    mounted() {
        this.getItem(this.item.id).then((result) => {
            this.carrinho = result
        })
    },
    data() {
        return {
            item: this.book,
            carrinho: false,
        }
    },
    methods: {
        share: function () {
            try {
                navigator.share({
                    title: this.book.title,
                    text: 'Veja as melhores ofertas para esse livro!',
                    url: this.book.link,
                })
            } catch(err) {
                console.log(err)
            }
        },
        favoritos: function(){
            this.item.like = !this.item.like
        },
        addCart: function() {
            this.updateData(this.item)
            this.carrinho = !this.carrinho
        },
        ...mapActions('shoppingCart', ['updateData', 'getItem']),
    },
}
</script>
