import Vue from 'vue'
import Vuex from 'vuex'

import shoppingCart from './modules/shoppingCart'
import shareDate from './modules/shareDate'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        shoppingCart: shoppingCart,
        shareDate: shareDate,
    }
})
