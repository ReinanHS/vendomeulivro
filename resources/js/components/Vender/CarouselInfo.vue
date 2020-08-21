<template>
    <div>
        <flickity ref="flickity" :options="flickityOptions">
            <div class="carousel-cell">
                <img
                    class="img-fluid"
                    src="https://i.pinimg.com/originals/c0/03/cf/c003cf1995bcc07151a4c37df19d16c9.png"
                />
            </div>
            <div class="carousel-cell">
                <img
                    class="img-fluid"
                    src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/119633452/original/dc9113881028e0fadf817da5283e5f93f3e98083/do-a-unique-web-ui-and-psd-xd-template-design.jpg"
                />
            </div>
            <div class="carousel-cell">
                <img
                    class="img-fluid"
                    src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/0630d467691533.5b433ddf0f239.jpg"
                />
            </div>
            <div class="carousel-cell">
                <img
                    class="img-fluid"
                    src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/896baa67691533.5b433ddf101a4.jpg"
                />
            </div>
            <div class="carousel-cell">
                <img
                    class="img-fluid"
                    src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/9c6dcc67691533.5b433ddf0f7f4.jpg"
                />
            </div>
        </flickity>

        <button @click="previous()" class="carousel-button carousel-previous">
            <svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-chevron-left"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"
                />
            </svg>
        </button>
        <button @click="next()" class="carousel-button carousel-next">
            <svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
            </svg>
        </button>

        <div class="carousel-item-text text-md-center text-left mt-4 sv-card">
            <h3
                class="carousel-title"
                data-aos="fade-right"
                data-aos-id="carousel-title"
            >{{ infos[indexInfo].title }}</h3>
            <div class="carousel-body d-flex justify-content-center">
                <div class="col-md-12 col-xl-5">
                    <p data-aos="fade-right" data-aos-id="carousel-body">{{ infos[indexInfo].body }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Flickity from "vue-flickity";
export default {
    name: "CarouselInfo",
    components: {
        Flickity,
    },
    mounted() {
        const flkty = this.$refs.flickity;
        const imgs = flkty.$el.querySelectorAll(".carousel-cell img");

        const docStyle = document.documentElement.style;
        const transformProp =
            typeof docStyle.transform == "string"
                ? "transform"
                : "WebkitTransform";

        flkty.on("scroll", () => {
            flkty.$flickity.slides.forEach((slide, i) => {
                let img = imgs[i];
                let x = ((slide.target + flkty.$flickity.x) * -1) / 3;
                img.style[transformProp] = "translateX(" + x + "px)";
            });

            this.indexInfo = flkty.selectedIndex();
        });
    },
    data() {
        return {
            flickityOptions: {
                initialIndex: 0,
                prevNextButtons: false,
                pageDots: false,
                freeScroll: true,
                imagesLoaded: true,
                percentPosition: false,

                // any options from Flickity can be used
            },
            infos: [
                {
                    title: "Como Começar",
                    body:
                        "Crie a sua conta aqui. Tudo que você precisa é um endereço de e-mail válido e um nome. Após se cadastrar na platafroma verifique seu email para ativar sua conta.",
                },
                {
                    title: "Painel do vendedor",
                    body:
                        "Esqueça o papel e a caneta. Tenha uma visão geral das vendas dos seus produtos, graças ao nosso painel você tem todas as informações da venda e do seu cliente.",
                },
                {
                    title: "Divulgação gratuita",
                    body:
                        "Os seus produtos serão expostos a milhares de pessoas através das nossas plataformas e redes sociais para que a sua empresa tenha mais visibilidade.",
                },
                {
                    title: "Cadastre seus produtos",
                    body:
                        "Crie seu catálogo de produtos com suas próprias imagens, informações, preços e agrupe em categorias.",
                },
                {
                    title: "Plataforma já pronta",
                    body:
                        "Não é preciso perder tempo com códigos para criar uma loja virtual. Ou seja, sem conhecimento de programação e design e sem custos iniciais, você tira sua ideia do papel e começa a vender.",
                },
                {
                    title: "Sistema de pagamentos",
                    body:
                        "Além da autonomia para fazer os anúncios, o Vendomeulivro conta com as principais formas de pagamento e envio adotadas pelos lojistas tradicionais.",
                },
            ],
            indexInfo: 0,
        };
    },

    methods: {
        next() {
            this.$refs.flickity.next();
            this.indexInfo = this.$refs.flickity.selectedIndex();
        },

        previous() {
            this.$refs.flickity.previous();
            this.indexInfo = this.$refs.flickity.selectedIndex();
        },
    },
};
</script>

<style lang="scss" scoped>
.carousel-item-text {
    .carousel-title {
        text-align: center;
        font-size: 30px;
        color: #222831;
    }
}
/* Carousel */

.carousel {
    background: #eee;
}

.carousel-cell {
    width: 60%;
    margin-right: 20px;
    overflow: hidden;
}

.carousel-cell img {
    display: block;
    height: 200px;
}

@media screen and (min-width: 768px) {
    .carousel-cell img {
        height: 400px;
    }
}

@media (max-width: 576px) {
    .carousel-cell {
        width: 95%;
    }

    .carousel-item-text{
        padding-top: 4em;
    }
}

/* end carousel */
.carousel-button {
    position: absolute;
    background: hsla(0, 0%, 100%, 0.75);
    background-position: center;
    transition: background-color 0.8s ease;
    border: none;
    color: #333;
    top: 50%;
    width: 64px;
    height: 64px;
    border-radius: 50%;
    transform: translateY(-50%);
    box-shadow: 0 0 4px #999;

    &:active {
        background-color: #eeeeee;
        background-size: 100%;
        transition: background-color 0s;
    }
}
.carousel-previous {
    left: 10px;
}
.carousel-next {
    right: 10px;
}
</style>
