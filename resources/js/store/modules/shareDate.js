export default{
    namespaced: true,
    state: {
        date: {
            title: 'Compare preços de livros e melhores ofertas e descontos',
            summary: 'No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!',
            link: 'http://vendomeulivro.local',
            image: 'http://vendomeulivro.local/img/logos/logo-site-vendomeulivro-top.png',
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

            axios.get(`http://vendomeulivro.local/api/product/find/${id}`).then((result) => {
                context.commit('setShareData', result.data)
            }).catch(() => {
                context.commit('setShareData', {
                    title: 'Compare preços de livros e melhores ofertas e descontos',
                    summary: 'No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!',
                    link: 'http://vendomeulivro.local',
                    image: 'http://vendomeulivro.local/img/logos/logo-site-vendomeulivro-top.png',
                })
            }).finally(() => {
                context.commit('setLoad', true)
            })
        },
    },
}
