<template>
    <div>
        <flickity ref="flickity" :options="flickityOptions">
            <slot></slot>
        </flickity>
    </div>
</template>
<script>
import Flickity from 'vue-flickity';
export default {
    name: 'CategoryList',
    components: {
        Flickity
    },
    data () {
        return {
            flickityOptions: {
                pageDots: false,
                groupCells: true,
            }
        }
    },

    methods: {
        next() {
            this.$refs.flickity.next();
        },

        previous() {
            this.$refs.flickity.previous();
        }
    }
}
</script>
<style lang="css" scope>
.carousel {
  background: #EEE;
}

.carousel-cell {
  width: 20%;
  margin-right: 10px;
}

/* cell number */
.carousel-cell:before {
  display: block;
  text-align: center;
  line-height: 200px;
  font-size: 80px;
  color: white;
}

@media (max-width: 1151px){
    .carousel-cell {
        width: 25%;
    }
}

@media (max-width: 930px){
    .carousel-cell {
        width: 30%;
    }
}

@media (max-width: 760px){
    .carousel-cell {
        width: 40%;
    }
}

@media (max-width: 540px){
    .carousel-cell {
        width: 80%;
    }
}

@media (max-width: 380px){
    .carousel-cell {
        width: 95%;
    }
}
</style>
