<template>
    <form class="header-search-form">
        <div class="nav-search-type">
            <div class="nav-search-box">
                <span class="nav-search-label">{{ searchTypeLabel }}</span>
                <svg
                    width="0.5em"
                    height="0.5em"
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
            <select
                ref="selectSearchType"
                v-model="searchType"
                @change="onChangeSearchType($event)"
                class="search-select-type"
                title="Pesquisar em"
            >
                <option selected="selected" value="s-todos">Todos os departamentos</option>
                <option value="s-eletronicos">Eletrônicos</option>
                <option value="s-esportes">Esportes e Aventura</option>
                <option value="s-ferramentas">Ferramentas e Materiais de Construção</option>
                <option value="s-videogames">Games</option>
                <option value="s-livros">Livros</option>
                <option value="s-papelaria">Material para Escritório e Papelaria</option>
            </select>
        </div>
        <input
            @focus="(() => this.focusInput(this) )"
            @blur="(() => this.blurInput(this))"
            ref="search_input"
            v-model="search"
            type="search"
            name="q"
            autocomplete="off"
            placeholder="Digite sua busca aqui"
        />
        <button v-on:click.stop.prevent="buscar(search)">
            <svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-search"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"
                />
                <path
                    fill-rule="evenodd"
                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"
                />
            </svg>
        </button>
        <div class="search-suggestion" v-if="suggestion.length > 0" v-show="elementSuggestion">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" v-for="(item, index) in suggestion" :key="index">
                    <div class="search-item">
                        <a
                            v-on:click.stop="buscar(item.title)"
                            :href="siteUrl+'/busca/'+item.title"
                            :class="item.cache == true ? 'search-item' : 'search-item-new'"
                        >
                            <svg
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                class="bi bi-search mr-2"
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"
                                />
                                <path
                                    fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"
                                />
                            </svg>
                            {{ item.title }}
                        </a>
                    </div>
                    <div
                        class="search-remove-item"
                        v-if="item.cache"
                        v-on:click.stop="remove(item.title)"
                    >
                        <svg
                            width="1em"
                            height="1em"
                            viewBox="0 0 16 16"
                            class="bi bi-x-circle"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"
                            />
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</template>
<script>
export default {
    name: "SearchBar",
    mounted() {
        const data = this.getSuggestionCache().reverse();
        this.suggestion = data.slice(0, 10);
    },
    props: ["siteUrl"],
    data: () => {
        return {
            search: "",
            suggestion: [],
            elementSuggestion: false,
            searchType: "",
            searchTypeLabel: "Todos",
        };
    },
    methods: {
        onChangeSearchType: function (event) {
            console.log(event.target.value);
            if (event.target.value == "s-todos") {
                return (this.searchTypeLabel = "Todos");
            } else if (event.target.value == "s-eletronicos") {
                return (this.searchTypeLabel = "Eletrônicos");
            } else if (event.target.value == "s-esportes") {
                return (this.searchTypeLabel = "Esportes e Aventura");
            } else if (event.target.value == "s-ferramentas") {
                return (this.searchTypeLabel = "Ferramentas");
            } else if (event.target.value == "s-videogames") {
                return (this.searchTypeLabel = "Games");
            } else if (event.target.value == "s-livros") {
                return (this.searchTypeLabel = "Livros");
            } else if (event.target.value == "s-papelaria") {
                return (this.searchTypeLabel = "Escritório e Papelaria");
            }
        },
        buscar: function (text) {
            if (text.length > 0) {
                let suggestion = this.getSuggestionCache();

                if (
                    suggestion.find((item) => item.title == text) == undefined
                ) {
                    suggestion.push({ title: text, cache: true });

                    localStorage.setItem(
                        "search_suggestion",
                        JSON.stringify(suggestion)
                    );
                }

                this.$refs.search_input.focus();
                window.location.href = `${this.siteUrl}/busca/${text}`;
            }
        },
        remove: function (text) {
            let suggestion = this.getSuggestionCache();

            if (suggestion.find((item) => item.title == text)) {
                suggestion = suggestion.filter((item) => item.title != text);
            }

            localStorage.setItem(
                "search_suggestion",
                JSON.stringify(suggestion)
            );

            if (this.search.length > 0) {
                this.suggestion = this.suggestion.filter(
                    (item) => item.title != text
                );
            } else {
                const data = suggestion.reverse();
                this.suggestion = data.slice(0, 10);
            }

            this.$refs.search_input.focus();
        },
        getSuggestionCache: () => {
            let suggestion = localStorage.getItem("search_suggestion");

            if (suggestion != null) {
                suggestion = JSON.parse(suggestion);

                return suggestion;
            } else return [];
        },
        blurInput: (e) => {
            setTimeout(() => {
                e.elementSuggestion = false;
            }, 100);
        },
        focusInput: (e) => {
            // e.elementSuggestion = true
            setTimeout(() => {
                e.elementSuggestion = true;
            }, 100);
        },
    },
    watch: {
        search: function (value) {
            console.log(value);

            if (value.length <= 0) {
                this.suggestion = [];
            } else {
                axios(`/search-autocomplete/${encodeURIComponent(value)}`).then(
                    (result) => {
                        this.suggestion = [];

                        result.data.map((livro) => {
                            if (livro != "" && this.search.length > 0) {
                                let cache =
                                    this.getSuggestionCache().find(
                                        (item) => item.title == livro
                                    ) == undefined
                                        ? false
                                        : true;
                                this.suggestion.push({
                                    title: livro,
                                    cache: cache,
                                });
                            }
                        });
                    }
                );
            }
        },
    },
};
</script>
<style lang="scss" scoped>
.header-search-form {
    width: 100%;
    position: relative;
    padding: 0 10px;
    display: flex;
    justify-content: center;
    align-items: center;

    .nav-search-type {
        display: flex;

        .nav-search-box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 44px;
            border-radius: 10px 0px 0px 10px;
            background-color: #eeeeee;

            .nav-search-label {
                color: #393e46;
                font-size: 13px;
                line-height: 33px;
                margin-left: 10px;
                white-space: nowrap;
            }

            svg {
                color: #393e46;
                margin-left: 5px;
            }
        }

        .search-select-type {
            position: absolute;
            top: 0px;
            height: 45px;
            cursor: pointer;
            opacity: 0;
            border: 0;
        }
    }

    input {
        width: 100%;
        height: 44px;
        font-size: 14px;
        border-radius: 0px 10px 10px 0px;
        border: none;
        padding: 0 19px;
        background: #f0f0f0;
        transition: border-radius 0.3s linear;
        z-index: 2;
    }

    button {
        position: absolute;
        height: 100%;
        right: 9px;
        font-size: 18px;
        color: #eee;
        border: none;
        cursor: pointer;
        background-color: #31acb4;
        z-index: 2;
        border-radius: 0px 10px 10px 0px;
        min-width: 2.5em;
    }

    .search-suggestion {
        position: absolute;
        width: 88.1%;
        background-color: #f0f0f0;
        padding-bottom: 5px;
        border-radius: 0px 0px 25px 25px !important;
        transition: 0.3s;
        z-index: 1001;
        top: 35px;
        left: 0px;
        margin-left: 10px;

        .list-group-item {
            background-color: transparent;
            display: flex;

            .search-item {
                width: 95%;

                .search-item-new {
                    color: #212529;

                    &:hover {
                        color: #2ea7b9;
                    }
                }
            }

            .search-remove-item {
                cursor: pointer;
                color: #393e46;

                &:hover {
                    color: #2ea7b9;
                }
            }
        }
    }

    @media (max-width: 768px) {
        .search-suggestion {
           width: 87.5%;
        }
    }

    @media (max-width: 576px) {
        .nav-search-type {
            display: none;
        }

        input {
            border-radius: 10px 10px 10px 10px;
        }

        .search-suggestion {
            width: 80%;
        }
    }
}
</style>
