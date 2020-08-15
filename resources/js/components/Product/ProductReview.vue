<template>
    <article class="card-review d-flex mb-4">
        <div class="card-user-photo">
            <div v-if="!loadImage" class="image-load placeholdershimmer"></div>
            <img v-show="loadImage" :src="review.user.image" aria-hidden="true" @load="onImgLoad()" />
        </div>
        <div class="card-box">
            <div class="card-top">
                <div class="user-name">
                    <span v-if="loadCard">{{ review.user.name }}</span>
                    <div v-else class="username-load placeholdershimmer"></div>
                    <div v-if="loadCard" class="user-rating">
                        <span aria-hidden="true" :style="getRating()">★★★★★</span>
                        <time
                            :title="`Essa avaliação foi escrita em ${dateFormat()}`"
                        >{{ dateFormat() }}</time>
                    </div>
                    <div v-else class="d-flex">
                        <div class="rating-load placeholdershimmer"></div>
                        <div class="timer-load placeholdershimmer"></div>
                    </div>
                    <div class="sub-title">
                        <h3 v-if="loadCard">{{ review.title }}</h3>
                        <div v-else class="card-title-load placeholdershimmer"></div>
                    </div>
                </div>
                <div class="votes" v-if="loadCard">
                    <div class="vote-up" :class="getScoreStatus('up')" v-on:click="onScoreUp()">
                        <svg
                            width="1em"
                            height="1em"
                            viewBox="0 0 16 16"
                            class="bi bi-caret-up-fill"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"
                            />
                        </svg>
                    </div>
                    <div class="stats-up">{{ score.up }}</div>
                    <div class="score">{{ score.up - score.down }}</div>
                    <div class="stats-down">{{ score.down }}</div>
                    <div
                        class="vote-down"
                        :class="getScoreStatus('down')"
                        v-on:click="onScoreDown()"
                    >
                        <svg
                            width="1em"
                            height="1em"
                            viewBox="0 0 16 16"
                            class="bi bi-caret-down-fill"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="card-content" v-if="loadCard">
                <h3 class="mt-4 d-block d-sm-none">{{ review.title }}</h3>
                <span>{{ review.content }}</span>
            </div>
            <div class="card-content" v-else>
                <div class="mt-4 title-load placeholdershimmer d-block d-sm-none"></div>
                <div class="content-load placeholdershimmer"></div>
            </div>
        </div>
    </article>
</template>

<script>
export default {
    name: "ProductReview",
    props: {
        review: {
            type: Object,
            default: function () {
                return {
                    user: {
                        name: "",
                        image: "",
                    },
                    created_at: "",
                    title: "",
                    content: "",
                    rating: 0,
                };
            },
        },
        loadCard: {
            type: Boolean,
            default: true,
        },
    },
    data() {
        return {
            score: {
                up: 0,
                down: 0,
                action: null,
            },
            loadImage: false,
        };
    },
    methods: {
        getScoreStatus: function (type) {
            if (this.score.action == null) {
                return "";
            } else {
                if (this.score.action == "up") {
                    return type == "up" ? "active" : "";
                } else {
                    return type == "up" ? "" : "active";
                }
            }
        },
        onScoreUp: function () {
            if (this.score.action == null) this.score.up += 1;
            else if (this.score.action == "down") {
                this.score.down -= 1;
                this.score.up += 1;
            }

            this.score.action = "up";
        },
        onScoreDown: function () {
            if (this.score.action == null) this.score.down += 1;
            else if (this.score.action == "up") {
                this.score.down += 1;
                this.score.up -= 1;
            }

            this.score.action = "down";
        },
        dateFormat: function () {
            const date = new Date(this.review.created_at);
            const mesList = [
                "janeiro",
                "fevereiro",
                "março",
                "abril",
                "maio",
                "junho",
                "julho",
                "agosto",
                "setembro",
                "outubro",
                "novembro",
                "dezembro",
            ];

            return `${date.getDay()} de ${
                mesList[date.getMonth() - 1]
            } de ${date.getFullYear()}`;
        },
        getRating: function () {
            return `background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(255, 204, 51) ${
                (this.review.rating / 5) * 100
            }%, rgb(204, 204, 204) ${
                (this.review.rating / 5) * 100 - 20
            }%) repeat scroll 0% 0% padding-box text;`;
        },
        onImgLoad: function () {
            this.loadImage = true;
        },
    },
};
</script>

<style lang="scss" scoped>
.image-load {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #f0f0f0;
}
.username-load {
    width: 120px;
    height: 18px;
}
.rating-load {
    width: 80px;
    height: 15px;
    margin-top: 10px;
}
.timer-load {
    width: 110px;
    height: 15px;
    margin-top: 10px;
    margin-left: 10px;
}
.card-title-load {
    width: 20vw;
    height: 27px;
}
.content-load {
    width: 50vw;
    height: 140px;
    margin-top: 10px;
}
@media (max-width: 571px) {
    .title-load {
        width: 100%;
        margin-left: initial;
    }
}
</style>
