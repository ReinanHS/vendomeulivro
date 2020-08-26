<template>
    <div class="card-container">
        <div
            class="card-top"
            :class="{'placeholdershimmer': !imageLoad, 'load-image-effect': !imageLoad}"
        >
            <div class="card-image">
                <a :href="book.link" v-if="book.image">
                    <img
                        ref="image"
                        :src="book.image"
                        :alt="'Capa do livro '+ book.title"
                        @load="loaded"
                    />
                    <div class="card-image-effect"></div>
                </a>
            </div>
            <ActionsButtons v-if="load" :book="{like: false, id: book.id, code: 'reinan'}" />
        </div>
        <div class="card-body">
            <a
                :class="{'title-load placeholdershimmer': !load}"
                class="card-title"
                :href="book.link"
            >
                <div v-if="load" class="title" :title="book.title">
                    <p>{{ book.title }}</p>
                    <div class="text-effect"></div>
                </div>
            </a>
            <a
                :class="{'author-load placeholdershimmer': !load}"
                class="card-author"
                :href="((!load) ? '#load' : book.link)"
            >
                <div v-if="load" class="author" :title="book.subtitle">
                    <span>{{ book.subtitle }}</span>
                    <div class="text-effect"></div>
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
    name: "BookCard",
    props: {
        load: {
            type: Boolean,
            default: true,
        },
        book: {
            type: Object,
            default: function () {
                return {
                    image: null,
                    title: "",
                    subtitle: "",
                    price: 0,
                    link: "",
                };
            },
        },
    },
    data() {
        return {
            imageLoad: false,
        };
    },
    methods: {
        loaded: function () {
            this.imageLoad = true;
        },
    },
};
</script>
<style lang="scss" scope>
.title-load,
.author-load {
    height: 25px;
    width: 70%;
    display: block;
    margin-left: 15%;
}

.author-load {
    width: 90%;
    margin-left: 5%;
}

.stars-load {
    height: 16px;
    width: 80%;
}

.price-load {
    width: 50%;
}
.load-image-effect {
    height: 325px;
}
</style>
