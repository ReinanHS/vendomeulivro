<template>
    <div
        class="modal fade"
        id="modalAvaliacao"
        tabindex="-1"
        aria-labelledby="modalAvaliacaoLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAvaliacaoLabel">{{ getModalTitle() }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container" v-show="indexForm == 0">
                        <div class="row">
                            <div class="col-12 col-md-3 d-flex justify-content-center">
                                <img :src="product.image" width="115" />
                            </div>
                            <div class="col-12 col-md-8 mt-3 mt-md-0">
                                <h5>{{ product.title }}</h5>
                                <p>Você está avaliando o produto (Cód.{{ product.id }})</p>
                            </div>
                            <div class="col-12 mt-3">
                                <h5>Qual é a sua avaliação para este produto?</h5>
                                <div class="d-flex justify-content-center mt-3 mb-2">
                                    <star-rating v-model="avaliacao.rating" :show-rating="false"></star-rating>
                                </div>
                                <p class="text-center text-muted">{{ getRatingInfo() }}</p>
                            </div>
                        </div>
                    </div>
                    <form v-show="indexForm == 1">
                        <div class="form-group">
                            <label for="inputTitulo">Título da avaliação*</label>
                            <input
                                type="text"
                                class="form-control"
                                id="inputTitulo"
                                maxlength="50"
                                min="12"
                                name="title"
                                placeholder="Exemplo: Gostei muito do produto!"
                                required
                                v-model="avaliacao.title"
                                aria-describedby="inputTituloHelpBlock"
                                :class="validation('title')"
                            />
                            <small
                                v-if="validation('title') == '' || validation('title') == 'is-invalid'"
                                id="inputTituloHelpBlock"
                                class="form-text text-muted"
                            >O título deve ter de 12 a 50 caracteres, no momento possui {{ avaliacao.title.length }} caracteres.</small>
                            <div
                                v-else
                                class="valid-feedback"
                            >O título que você escreveu ficou muito bom</div>
                        </div>
                        <div class="form-group">
                            <label for="textareaOpiniao">Escreva sua opinião*</label>
                            <textarea
                                class="form-control"
                                id="textareaOpiniao"
                                rows="3"
                                placeholder="Escreva aqui sobre o produto"
                                minlength="50"
                                maxlength="1500"
                                name="opiniao"
                                v-model="avaliacao.opiniao"
                                aria-describedby="inputOpiniaoHelpBlock"
                                :class="validation('opiniao')"
                            ></textarea>
                            <small
                                v-if="validation('opiniao') == '' || validation('opiniao') == 'is-invalid'"
                                id="inputOpiniaoHelpBlock"
                                class="form-text text-muted"
                            >A Opinião deve ter de 50 a 1500 caracteres - ({{ avaliacao.opiniao.length }}/1500)</small>
                            <div v-else class="valid-feedback">A sua opinião ficou muito bom!</div>
                        </div>
                    </form>
                    <div class="container" v-show="indexForm == 2">
                        <div class="row">
                            <div class="col-12 mt-3 mt-md-0">
                                <p>Por razões de segurança, é necessário revisar os dados antes de salvar.</p>
                                <div class="d-flex justify-content-center">
                                    <star-rating
                                        :inline="true"
                                        :star-size="24"
                                        :read-only="true"
                                        :show-rating="false"
                                        :rating="avaliacao.rating"
                                    ></star-rating>
                                </div>
                                <p class="text-center text-muted">{{ getRatingInfo() }}</p>
                            </div>
                            <div class="col-12 mt-4">
                                <form>
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <label for="inputTituloDisable">Título da avaliação*</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="inputTituloDisable"
                                                :value="avaliacao.title"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="textareaOpiniaoDisable">Opinião</label>
                                            <textarea
                                                class="form-control"
                                                id="textareaOpiniaoDisable"
                                                rows="3"
                                                :value="avaliacao.opiniao"
                                            ></textarea>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        v-show="indexForm <= 0"
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >Fechar</button>
                    <button
                        v-show="indexForm > 0"
                        type="button"
                        class="btn btn-secondary"
                        v-on:click="voltar()"
                    >Voltar</button>
                    <button
                        :disabled="getStatusBtn()"
                        type="button"
                        class="btn btn-primary"
                        v-on:click="submit()"
                    >{{ getBtnTitle() }}</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import StarRating from "vue-star-rating";
export default {
    name: "ModalAvaliacao",
    components: {
        StarRating,
    },
    props: {
        product: {
            type: Object,
            default: function () {
                return {
                    title: "Game Grand Theft Auto V - Xbox 360",
                    id: "113150136",
                    image:
                        "https://images-americanas.b2w.io/produtos/01/00/offers/01/00/item/113150/1/113150136P1.jpg",
                };
            },
        },
        avaliacao: {
            type: Object,
            default: function () {
                return {
                    title: "",
                    opiniao: "",
                    rating: 0,
                };
            },
        },
        edit: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            indexForm: 0,
        };
    },
    watch: {
        "avaliacao.title": function (newValue) {
            if (newValue.length < 50) {
                this.avaliacao.title = newValue.replace(
                    /[&\/\\#,+()$~%.'":*?<>{}]/g,
                    ""
                );
            } else {
                this.avaliacao.title = newValue.substr(0, 50);
            }
        },
        "avaliacao.opiniao": function (newValue) {
            if (newValue.length < 1500) {
                this.avaliacao.opiniao = newValue.replace(
                    /[&\/\\#,+()$~%.'":*?<>{}]/g,
                    ""
                );
            } else {
                this.avaliacao.opiniao = newValue.substr(0, 1500);
            }
        },
    },
    methods: {
        submit: function () {
            if (this.indexForm >= 0 && this.indexForm < 2) {
                this.indexForm++;
            } else {
                if (this.$props.edit == false) {
                    axios
                        .post("/user", {
                            title: this.avaliacao.title,
                            opiniao: this.avaliacao.opiniao,
                            rating: this.avaliacao.rating,
                        })
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                } else {
                    axios
                        .post("/edit", {
                            title: this.avaliacao.title,
                            opiniao: this.avaliacao.opiniao,
                            rating: this.avaliacao.rating,
                        })
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            }
        },
        getStatusBtn: function () {
            if (this.indexForm == 0 && this.avaliacao.rating > 0) {
                return false;
            } else if (this.indexForm == 1 && this.validation("full")) {
                return false;
            } else if (this.indexForm == 2) {
                return false;
            }

            return true;
        },
        voltar: function () {
            if (this.indexForm > 0) {
                this.indexForm--;
            }
        },
        getBtnTitle: function () {
            return this.indexForm < 2 ? "Próximo" : "Avaliar";
        },
        getRatingInfo: function () {
            if (this.avaliacao.rating == 0) {
                return "Clique nas estrelas para avaliar o produto!";
            } else if (this.avaliacao.rating == 1) {
                return "Ruim";
            } else if (this.avaliacao.rating == 2) {
                return "Regular";
            } else if (this.avaliacao.rating == 3) {
                return "Bom";
            } else if (this.avaliacao.rating == 4) {
                return "Ótimo";
            } else if (this.avaliacao.rating == 5) {
                return "Excelente";
            }
        },
        validation: function (input) {
            if ("title" == input) {
                if (this.avaliacao.title.length == 0) {
                    return "";
                } else if (
                    this.avaliacao.title.length >= 12 &&
                    this.avaliacao.title.length <= 50
                ) {
                    return "is-valid";
                } else {
                    return "is-invalid";
                }
            } else if ("opiniao" == input) {
                if (this.avaliacao.opiniao.length == 0) {
                    return "";
                } else if (
                    this.avaliacao.opiniao.length >= 50 &&
                    this.avaliacao.opiniao.length <= 1500
                ) {
                    return "is-valid";
                } else {
                    return "is-invalid";
                }
            } else if ("full" == input) {
                if (this.avaliacao.title.length < 12) {
                    return false;
                } else if (this.avaliacao.title.length > 50) {
                    return false;
                } else if (this.avaliacao.opiniao.length < 50) {
                    return false;
                } else if (this.avaliacao.opiniao.length > 1500) {
                    return false;
                } else return true;
            }
        },
        getModalTitle: function () {
            if (this.$props.edit) {
                return this.indexForm < 2
                    ? "Editar sua avaliação"
                    : "Confirme os dados andes de editar:";
            } else {
                return this.indexForm < 2
                    ? "Avalie este produto"
                    : "Confirme os dados:";
            }
        },
    },
};
</script>

<style>
</style>
