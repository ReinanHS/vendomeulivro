<template>
    <div class="card-container">
        <div class="card-top placeholdershimmer">
            <div class="card-image">
                <a :href="book.link">
                    <img :src="book.image" alt="Capa do livro">
                    <div class="card-image-effect"></div>
                </a>
            </div>
            <book-card-action-btn :book="{like: false, id: 1, code: 'reinan'}"/>
        </div>
        <div class="card-body">
            <a :class="{'title-load placeholdershimmer': !load}" class="card-title" :href="book.link">
                <div v-if="load" class="title" :title="book.title">
                    <p>{{ book.title }}</p>
                </div>
            </a>
            <a :class="{'author-load placeholdershimmer': !load}" class="card-author" :href="book.author.slug">
                <div v-if="load" class="author" :title="'Author '+book.author.name">
                    <span>{{ book.author.name }}</span>
                </div>
            </a>
        </div>
        <div class="card-button">
            <div class="rating-section">
                <div class="stars-rating">
                    <div v-if="load" class="stars"></div>
                    <div v-else class="stars-load placeholdershimmer"></div>
                </div>
                <div class="card-price">
                    <a v-if="load" :href="book.link">R$ {{ book.price }}</a>
                    <div v-else :class="{'price-load placeholdershimmer': !load}"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'BookCard',
    data() {
        return {
            load: false,
            book: {
                title: 'Laços Inseparáveis',
                price: 20.99,
                author: {
                    name: 'Giffin',
                    slug: 'giffin',
                },
                image: 'img/livros/carousel/a-garota-do-lago.png2',
                link: '#book',
                like: false,
            },
        }
    },
}
</script>
<style lang="css" scope>
  .title-load, .author-load{
        height: 25px;
        width: 70%;
        display: block;
        margin-left: 15%;
  }

  .author-load{
      width: 90%;
      margin-left: 5%;
  }

  .stars-load{
      height: 16px;
      width: 80%;
  }

  .price-load{
      width: 50%;
  }
</style>
