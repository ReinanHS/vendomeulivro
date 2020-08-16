export default{
    namespaced: true,
    state: {
        books: [],
    },
    getters: {
        length: state => {
            if(state.books == [] && localStorage.getItem('shoppingCart') != null){
                return JSON.parse(localStorage.getItem('shoppingCart')).length
            }
            return state.books.length
        },
        items: state => {
            if(state.books == [] && localStorage.getItem('shoppingCart') != null){
                return JSON.parse(localStorage.getItem('shoppingCart'))
            }
            return state.books
        },
    },
    mutations: {
        update: (state, items) => {
            state.books = items
            localStorage.setItem('shoppingCart', JSON.stringify(items))
        },
    },
    actions: {
        updateData: (context, item) => {
            let items = context.getters.items

            if(items.find(book => book.id == item.id) != undefined){
                items = items.filter(book => book.id != item.id)

                context.commit('update', items)
                localStorage.setItem('shoppingCart', JSON.stringify(items))
            }else {
                axios.get(`/product/find/${item.id}`).then((result) => {
                    items.push({
                        ...result.data,
                        quantidade: 1,
                    })

                    context.commit('update', items)
                })

            }
        },
        getItem: (context, id) => {
            let items = context.getters.items

            if(items && localStorage.getItem('shoppingCart') != null){
                items = JSON.parse(localStorage.getItem('shoppingCart'))
                context.commit('update', items)
            }

            return items.find(book => book.id == id) != undefined
        }
    },
}
