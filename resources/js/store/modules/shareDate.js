export default{
    namespaced: true,
    state: {
        date: {
            title: 'Compare preços de livros e melhores ofertas e descontos',
            summary: 'No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!',
            link: window.location.origin,
            image: `${window.location.origin}/img/logos/logo-site-vendomeulivro-top.png`,
        },
        load: false,
    },
    getters: {
        social: state => state.date,
        load: state => state.load,
    },
    mutations: {
        setShareData: (state, social) => {
            state.date = social
        },
        setLoad: (state, load) => {
            state.load = load
        },
    },
    actions: {
        getShareData: (context, id) => {
            context.commit('setLoad', false)

            axios.get(`/product/find/${id}`).then((result) => {
                context.commit('setShareData', result.data)
            }).catch(() => {
                context.commit('setShareData', {
                    title: 'Compare preços de livros e melhores ofertas e descontos',
                    summary: 'No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!',
                    link: window.location.origin,
                    image: `${window.location.origin}/img/logos/logo-site-vendomeulivro-top.png`,
                })
            }).finally(() => {
                context.commit('setLoad', true)
            })
        },
    },
}
