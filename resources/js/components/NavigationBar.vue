<template>
    <div class="navigation-box">
        <div class="navigation-btn" v-on:click="showNav = true">
            <svg
                width="2em"
                height="2em"
                viewBox="0 0 16 16"
                class="bi bi-list"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                />
            </svg>
        </div>
        <transition name="fade">
            <div v-show="showNav" class="navegation-container">
                <div v-on:click="showNav = false" class="navegation-close">
                    <svg
                        v-if="showNav"
                        width="3em"
                        height="3em"
                        viewBox="0 0 16 16"
                        class="bi bi-x"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                    >
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
                <div class="navegation-menu" :class="{'open': showNav}">
                    <div class="nav-user-info">
                        <div class="d-flex justify-content-center">
                            <div class="user-photo">
                                <img :src="`/img/users/padrao.png`" alt="Foto do usuário" />
                            </div>
                            <div class="user-info ml-4">
                                <h3 class="user-title">Bem-vindo</h3>
                                <p
                                    class="user-text"
                                >Entra na sua conta para ver suas compras, favoritos etc.</p>
                            </div>
                        </div>
                        <div class="nav-user-buttons">
                            <a :href="`/login`" class="btn btn-vml">Entrar</a>
                            <a :href="`/register`" class="btn btn-outline-vml">Crie a sua conta</a>
                        </div>
                    </div>
                    <div class="sub-menus">
                        <ul v-for="(menu, index) in menus" :key="index">
                            <li
                                v-for="(item, index) in menu.items"
                                :class="{'active': validateLink(item.link)}"
                                :key="index"
                            >
                                <a :href="item.link">
                                    <div class="icon-menu" :style="`background-image: url('/img/icons/${item.icon}');`"></div>
                                    <span>{{ item.title }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "NavigationBar",
    data() {
        return {
            showNav: false,
            menus: [
                {
                    title: "",
                    items: [
                        {
                            title: "Início",
                            link: "/",
                            icon: "icons8-casa-50.png",
                        },
                        {
                            title: "Histórico",
                            link: "historico",
                            icon: "icons8-hora-extra-50.png",
                        },
                        {
                            title: "Categorias",
                            link: "categorias",
                            icon: "icons8-sacola-de-compras-50.png",
                        },
                        {
                            title: "Atendimento ao Cliente",
                            link: "atendimento-ao-cliente",
                            icon: "icons8-suporte-on-line-50.png",
                        },
                    ],
                },
                {
                    title: "",
                    items: [
                        {
                            title: "Notificações",
                            link: "/me/notificacoes",
                            icon: "icons8-alarme-50.png",
                        },
                        {
                            title: "Sua conta",
                            link: "/me",
                            icon: "icons8-editar-usuário-masculino-50.png",
                        },
                        {
                            title: "Produtos salvos",
                            link: "/me/produtos-salvos",
                            icon: "icons8-fita-de-bookmark-50.png",
                        },
                        {
                            title: "Rastrear produtos",
                            link: "/me/rastrear-produtos",
                            icon: "icons8-entrega-50.png",
                        },
                        {
                            title: "Painel do vendedor",
                            link: "/me/painel-do-vendedor",
                            icon: "icons8-gráfico-positivo-50.png",
                        },
                        {
                            title: "Sair",
                            link: "#logout",
                            icon: "icons8-sair-50.png",
                        },
                    ],
                },
            ],
        };
    },
    methods: {
        validateLink: function (link) {
            return window.location.pathname == link;
        },
    },
};
</script>

<style lang="scss" scoped>
.navegation-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100000;
    cursor: initial;

    .navegation-menu {
        z-index: 1;
        width: 365px;
        position: fixed;
        background-color: #eeeeee;
        flex-direction: column;
        height: 100%;
        box-shadow: 4px 0 10px 0 rgba(0, 0, 0, 0.4);

        .nav-user-info {
            padding: 18px 14px;
            border-bottom: solid 3px #e3e2e2;

            .user-photo {
                width: 64px;
                height: 64px;

                img {
                    width: 100%;
                    border-radius: 50%;
                }
            }

            .user-info {
                color: #393e46;

                h3 {
                    color: #222831;
                    font-size: 16px;
                    font-weight: 600;
                }

                P {
                    font-size: 14px;
                }
            }
        }

        .sub-menus {
            overflow-y: scroll;
            max-height: 69%;

            ul {
                list-style: none;
                padding: 8px 0;
                font-size: 14px;
                border-bottom: solid 3px #e3e2e2;

                li {
                    padding: 4px 0;

                    &.active,
                    &:hover {
                        background: #f7f7f7;
                    }

                    &.active a {
                        color: #31acb4;
                    }

                    a {
                        display: block;
                        padding: 4px 8px 8px 15px;
                        color: #393e46;
                        font-size: 20px;
                        display: flex;

                        .icon-menu {
                            margin-right: 10px;
                            height: 36px;
                            width: 36px;
                            background-position: bottom;
                            background-size: cover;
                        }
                    }
                }
            }
        }
    }

    .navegation-close {
        background-color: rgba(0, 0, 0, 0.8);
        position: absolute;
        will-change: opacity;
        height: 100%;
        width: 100%;

        svg {
            margin-left: 375px;
            margin-top: 8px;
            cursor: pointer;
        }
    }
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.8s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active em versões anteriores a 2.1.8 */ {
    opacity: 0;
    left: -400px;
}
</style>
