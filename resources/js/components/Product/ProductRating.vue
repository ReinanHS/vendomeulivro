<template>
    <div class="container resenhas-box">
        <h2 class="title mb-4">Opiniões sobre o produto</h2>
        <div class="average-rating">
            <div class="section-rating d-flex">
                <div v-if="load">
                    <h3 class="p-price text-center">{{ rating.media }}</h3>
                    <h4>
                        <span aria-hidden="true" :style="getRating()">★★★★★</span>
                    </h4>
                </div>
                <div v-else>
                    <div class="p-price text-center d-flex justify-content-center align-items-end">
                        <div class="load-rating-n1 placeholdershimmer"></div>
                        <div class="load-rating-n2 placeholdershimmer"></div>
                        <div class="load-rating-n1 placeholdershimmer"></div>
                    </div>
                    <div class="rating-load placeholdershimmer"></div>
                </div>
                <div class="ml-4">
                    <p v-if="load">Média entre {{ rating.total }} opiniões</p>
                    <div v-else class="load-rating-total placeholdershimmer"></div>
                    <button
                        v-if="load && avaliacao"
                        type="button"
                        class="btn btn-outline-primary"
                        v-on:click="modalAvaliacao()"
                    >
                        <svg
                            width="1em"
                            height="1em"
                            viewBox="0 0 16 16"
                            class="bi bi-pencil-square"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                            />
                        </svg>
                        Escrever uma avaliação
                    </button>
                </div>
            </div>
        </div>
        <div class="review-listing mt-4">
            <product-review v-for="i in 5" :key="`preload-${i}`" :loadCard="false"></product-review>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductRating",
    data() {
        return {
            rating: {
                media: 1.8,
                total: 80,
            },
            load: false,
            avaliacao: false,
        };
    },
    methods: {
        getRating: function () {
            return `background: rgba(0, 0, 0, 0) linear-gradient(to right,#fc3 ${
                (this.rating.media / 5) * 100
            }%,#ccc ${
                ((this.rating.media / 5) * 100) / 2
            }%) repeat scroll 0% 0% padding-box text;`;
        },
        modalAvaliacao: function () {
            $("#modalAvaliacao").modal("show");
        },
    },
};
</script>

<style lang="scss" scoped>
.load-rating-n1 {
    width: 20px;
    height: 22px;
}
.load-rating-n2 {
    width: 18px;
    height: 10px;
    margin-left: 5px;
    margin-right: 5px;
}
.rating-load {
    height: 20px;
    margin-top: 5px;
    width: 10vw;
}
.load-rating-total {
    height: 20px;
    width: 14vw;
}
@media (max-width: 571px) {
    .rating-load {
        width: 25vw;
    }
    .load-rating-total {
        width: 35vw;
    }
}
</style>
