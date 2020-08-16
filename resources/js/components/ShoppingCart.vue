<template>
    <div>
        <div class="shopping-card" v-on:click="open()">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
            <span>{{ length }}</span>
        </div>
        <transition name="fade">
            <div class="cart-menu" v-show="isOpen">
                <transition name="slide-fade">
                    <div class="cart">
                        <div class="cartbar-title">
                            <h5 class="m-0 text-white">Carrinho de compras</h5>
                            <div class="cart-icon">
                                <div class="shopping-card">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                    <span>{{ length }}</span>
                                </div>
                            </div>
                            <button class="close-cart-menu" v-on:click="close()">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                                    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                                </svg>
                            </button>
                        </div>

                        <div class="scroll-menu cart-menu-content">
                            <div class="content-cart" v-if="length > 0">
                                <div class="cart-items">
                                    <div class="cart-item" v-for="(item, index) in items" :key="index">
                                        <div class="item-image">
                                            <a :href="item.link">
                                                <img :src="item.image" :alt="item.title">
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-name pr-2">
                                                <a :href="item.link">{{ item.title }}</a>
                                            </div>
                                            <div class="item-quantity">
                                                <a v-on:click="quantidadeAction(index,'diminuir')"  title="Diminuir a quantidade" class="item-quantity-change item-quantity-change-decrement">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                    </svg>
                                                </a>
                                                <input type="text" :placeholder="item.quantidade" disabled="disabled">
                                                <a v-on:click="quantidadeAction(index, 'aumentar')" title="Aumentar a quantidade" class="item-quantity-change item-quantity-change-increment">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="item-price">
                                                <div class="cart-price ml-3">
                                                    <span class="item-price-top">Unidade R$ {{ item.price }}</span>
                                                    <span class="item-price-buttom">
                                                        <span>Total R$</span>{{ getSubTotalItem(item.price, item.quantidade) }}
                                                    </span>
                                                </div>
                                                <div class="item-remove">
                                                    <a class="item-remove-text" v-on:click="updateData(item)">Excluir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-buttom">
                                    <div class="sub-total">
                                        <p>Sub-total</p>
                                        <p class="valor">R$ {{ subTotal }}</p>
                                    </div>
                                    <div class="total">
                                        <p>Desconto</p>
                                        <p class="valor">R$ 0,00</p>
                                    </div>
                                    <div class="desconto">
                                        <p>Total</p>
                                        <p class="valor">R$ {{ subTotal }}</p>
                                    </div>
                                    <div class="botao">
                                        <a href="/checkout/#/cart">Finalizar pedido</a>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-cart" v-else>
                                <h2>SEU CARRINHO ESTÁ VAZIO</h2>
                                <p>Para continuar comprando, navegue pelas categorias do site ou faça uma busca pelo seu produto.</p>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
        </transition>
    </div>
</template>
<script>
import { mapGetters, mapActions, mapMutations } from 'vuex'
export default {
    name: 'ShoppingCart',
    computed: {
        ...mapGetters('shoppingCart', ['length', 'items'])
    },
    mounted(){
        setTimeout(() => {
            this.subTotal = this.getSubTotal()
        }, 1500)
    },
    data() {
        return {
            isOpen: false,
            subTotal: 0.0,
        }
    },
    methods: {
        close: function(){
            this.isOpen = false
        },
        open: function(){
            this.isOpen = true
        },
        getSubTotal: function(){
            let y = 0.0

            this.items.map(item => {
                let n = parseFloat(item.price.replace(',', '.'))
                y += n * parseInt(item.quantidade)
            })

            const total = y.toFixed(2)

            return total
        },
        getSubTotalItem: function(price, quantidade){
            let valor = price.replace(',', '.')
            valor = parseFloat(valor)

            valor = valor * quantidade

            return valor.toFixed(2);
        },
        quantidadeAction: function(index, action){
            const book = this.items[index];

            if(action == 'diminuir' && book.quantidade > 1){
                book.quantidade -= 1;
            }else if(action == 'aumentar' && book.quantidade < 10){
                book.quantidade += 1;
            }

            this.update(this.items);
            this.subTotal = this.getSubTotal()
        },
        ...mapActions('shoppingCart', ['updateData']),
        ...mapMutations('shoppingCart', ['update']),
    },
}
</script>
<style lang="scss" scope>
.shopping-card {
    display: inline-block;
    position: relative;
    cursor: pointer;

    span {
        position: absolute;
        top: -4px;
        left: 100%;
        height: 16px;
        min-width: 16px;
        color: #fff;
        font-size: 11px;
        background: #31acb4;
        text-align: center;
        border-radius: 30px;
        padding: 0 2px;
        margin-left: -7px;
    }
}
.cart-menu {
	background-color: rgba(0, 0, 0, 0.7);
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	display: flex;
	z-index: 9999;
	width: 100vw;
	height: 100vh;
	justify-content: flex-end;

    .cart {
	    background-color: #fff;
	    box-shadow: 0 0 24px 0 rgba(0,0,0,.06),0 1px 0 0 rgba(0,0,0,.02);
	    display: flex;
	    width: 25%;
        margin-right: .7em;
	    flex-wrap: wrap;

        .cartbar-title {
            background-color: #000;
            padding: 20px 25px;
            color: #fff;
            display: flex;
            align-items: center;
            width: 100%;
            height: 84px;

            h5{
                padding: 5px;
                display: flex;
                width: 100%;
                justify-content: center;
            }

            .shopping-card{
                cursor: initial !important;
            }

            .close-cart-menu {
                background: #000;
                display: flex;
                font-size: 27px;
                margin: 0 15px;
                color: #fff;
                border: 0;
            }
        }

        .cart-menu-content{
            padding: 20px;
            height: 100%;
            width: 100%;

            .empty-cart {
                text-align: center;
                margin: 30% auto;

                h2 {
                    font-weight: 700;
                    font-size: 2.5rem;
                    color: #24282b;
                }

                p{
                    font-size: 14px;
                }
            }

            .content-cart{
                .cart-items{
                    max-height: 400px;
                    overflow: auto;

                    .cart-item{
                        margin: 10px 0 20px 0;
                        display: flex;
                        align-items: center;

                        .item-image a img{
                            width: 100%;
                            height: auto;
                            max-height: 100px;
                        }

                        .item-info{
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: center;

                            .item-name{
                                width: 60%;
                                display: flex;
                                justify-content: flex-start;
                                align-items: center;
                            }

                            .item-quantity {
                                height: 40px;
                                display: flex;
                                border: 1px solid #ccc;
                                border-radius: 5px;

                                input{
                                    font-size: 14pt;
                                    background: #fff;
                                    border: none;
                                    width: 45px;
                                    text-align: center;
                                }

                                .item-quantity-change {
                                    padding: 5px;
                                    cursor: pointer;
                                }
                            }

                            .item-price{
                                width: 100%;
                                display: flex;

                                .cart-price{
                                    display: flex;
                                    flex-wrap: wrap;

                                    .item-price-top {
                                        font-size: 11px;
                                        width: 100%;
                                    }

                                    .item-price-buttom {
                                        font-size: 14px;
                                        width: 100%;
                                    }
                                }
                            }

                            .item-remove {
                                width: 100%;
                                display: flex;
                                justify-content: flex-end;
                                margin-top: 8px;

                                a{
                                    margin-right: 13px;
                                    cursor: pointer;
                                    color: #c8c8c8;
                                }
                            }

                        }
                    }
                }

                .cart-buttom{
                    font-size: 14px;
                    display: flex;
                    flex-wrap: wrap;
                    margin-top: 15px;

                    & > div {
                        width: 100%;
                        display: flex;

                        p{
                            font-size: 14px;
                            color: #333;
                        }

                        p:first-child{
                            width: 20%;
                        }

                        .valor {
                            width: 70%;
                            display: flex;
                            justify-content: flex-end;
                        }
                    }

                    .total p{
                        font-weight: bold;
                    }

                    .botao a{
                        background: #31acb4;
                        border-radius: 5px;
                        box-shadow: none;
                        color: #fff;
                        font-size: 11px;
                        font-weight: 900;
                        padding: 0;
                        text-transform: uppercase;
                        width: 100%;
                        text-align: center;
                        height: 40px;
                        line-height: 40px;
                        display: block;
                    }
                }
            }
        }
    }

    @media (max-width: 1356px){
        .cart{
             width: 45%;
        }
    }
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .9s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active em versões anteriores a 2.1.8 */ {
  opacity: 0;
}
/* Animações de entrada e saída podem utilizar diferentes  */
/* funções de duração e de tempo.                          */
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .6s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active em versões anteriores a 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>
