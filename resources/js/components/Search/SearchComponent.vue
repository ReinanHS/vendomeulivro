<template>
    <section class="search-box">
        <div class="container-fluid">
            <div class="row">
                <div class="d-none col-lg-2 order-2 order-lg-1 mt-4">
                    <div class="filter-widget filter-preco mb-0">
                        <h2 class="fw-title">Preço</h2>
                        <div class="slider-wrapper">
                            <input
                                class="input-range"
                                data-slider-id="ex12cSlider"
                                type="text"
                                data-slider-step="1"
                                data-slider-value="10, 90"
                                data-slider-min="0"
                                data-slider-max="100"
                                data-slider-range="true"
                                data-slider-tooltip_split="true"
                            />
                        </div>
                        <p class="pt-4">R$ 10 até R$ 80</p>
                    </div>
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">Filtrar por Editora</h2>
                        <ul class="category-menu filter-scroll">
                            <li>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value
                                        id="defaultCheck1"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="defaultCheck1"
                                    >Default checkbox</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h2 class="fw-title">Condição</h2>
                        <ul class="category-menu">
                            <li>
                                <a href="#">Novo</a>
                            </li>
                            <li>
                                <a href="#">Usado</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0 mt-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="main-menu">
                                <div class="genre">
                                    1-16 de mais de 10.000 resultados para
                                    <b>"{{ q.charAt(0).toUpperCase() + q.slice(1) }}"</b>
                                </div>
                            </div>
                        </div>
                        <div v-if="produtos.length > 0" class="container-fluid">
                            <div class="row">
                                <div v-for="(produto, index) in produtos" :key="index" class="col-12 col-md-3 item-book mb-4">
                                    <book-card  :book="produto" :load="true" />
                                </div>
                            </div>
                        </div>
                        <div v-else v-for="index in 9" :key="index" class="col-3 item-book mb-4">
                            <book-card :load="false" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "SearchComponent",
    props: {
        q: {
            type: String,
        }
    },
    mounted(){
        axios(`/search/${this.$props.q}`).then((result) => {
            this.produtos = result.data
        }).catch((err) => {
            console.log(err)
        });
    },
    data(){
        return {
            produtos: [],
        }
    }
};
</script>

<style>
</style>
