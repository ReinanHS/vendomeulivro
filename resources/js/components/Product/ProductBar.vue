<template>
    <div class="product-bar">
        <a class="product-toggler">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10">
                <path
                    d="M19.081.5l-8.407 7.57a1.319 1.319 0 0 1-1.769 0L.5.5"
                    fill="none"
                    stroke="#000"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </a>
        <div class="container-fluid mt-2 mb-2">
            <div class="product-inner d-flex align-items-center">
                <div class="product-image d-none d-md-block">
                    <img
                        src="http://lojasaraiva.vteximg.com.br/arquivos/ids/12109069/1006574337.jpg?v=637142248039070000"
                    />
                </div>
                <div class="product-content d-none d-md-block">
                    <h3 class="product-title">A Garota do Lago Estou feliz otimista, determinada</h3>
                </div>
                <div class="product-details">
                    <p class="product-category">
                        Vendido e entregue por:
                        <b>Vendomeulivro.com</b>
                    </p>
                    <del class="product-price-old">R$ 39,90</del>
                    <strong class="product-price">R$ 14,90</strong>
                    <span class="product-quantity"></span>
                </div>
                <div class="product-actions mr-0 mr-md-4">
                    <a href="#" class="btn btn-outline-info btn-lg">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductBar",
    data() {
        return {};
    },
};
</script>

<style lang="scss" scoped>
.product-bar {
    position: fixed;
    width: 100vw;
    height: 90px;
    bottom: 0;
    z-index: 3;
    border-top: 3px solid #31acb4;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.6);
    background-color: #fff;
    .product-toggler {
        width: 40px;
        height: 40px;
        background-color: #fff;
        position: absolute;
        right: 40px;
        top: -40px;
        border-left: 3px solid #31acb4;
        border-top: 3px solid #31acb4;
        border-right: 3px solid #31acb4;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-inner {
        .product-image {
            img {
                max-height: 64px;
            }
        }
        .product-content {
            width: 45%;
            display: flex;
            justify-content: flex-start;
            margin-left: 10px;

            .product-title {
                font-size: 20px;
                font-weight: 700;
                color: #414141;
                text-transform: uppercase;
            }
        }
        .product-details {
            display: flex;
            flex-direction: column;
            align-items: flex-start;

            .product-category {
                display: block;
                font-size: 12px;
                margin-bottom: 5px;
            }
            .product-price-old {
                display: block;
            }
            .product-price {
                font-size: 23px;
                font-weight: 700;
                line-height: 1;
                color: #000;
            }
        }
        .product-actions {
            margin-left: auto;
            text-transform: uppercase;
        }
    }
}
</style>
