<header class="header-section border-bottom shadow-sm">
    <div class="header-submenu">
        <navigation-bar></navigation-bar>
    </div>
    <div class="shopping-cart">
        <shopping-cart></shopping-cart>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 text-center mb-lg-3 text-xl-left">
                    <!-- logo -->
                    <a href="{{ url('/') }}" class="site-logo img-fluid">
                        <img src="{{ url('/img/logos/logo-site-vendomeulivro-top.png') }}" alt="logo do site vendomeulivro.com">
                    </a>
                </div>
                <div class="col-xl-8">
                    <!-- Formulário de busca -->
                    <search-bar site-url="{{ url('/') }}"></search-bar>
                </div>
                {{--  <div class="col-xl-4 col-lg-5 d-none d-lg-flex justify-content-end">
                    <div class="painel-do-usuario">
                        <div class="up-item mr-4">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            <a href="{{ url('login') }}">Entrar</a>
                        </div>
                    </div>
                </div>  --}}
            </div>
        </div>
    </div>
    <div class="container-lg container-fluid header-scroller">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2" href="{{ url('ofertas-do-dia') }}">Ofertas do dia</a>
                <a class="p-2" href="{{ url('lancamentos') }}">Lançamentos</a>
                <a class="p-2" href="{{ url('historico') }}">Histórico</a>
                <a class="p-2" href="{{ url('lojas-oficiais') }}">Lojas oficiais</a>
                <a class="p-2" href="{{ url('vender') }}">Vender</a>
                <a class="p-2" href="{{ url('categorias') }}">Categorias</a>
                <a class="p-2" href="{{ url('atendimento-ao-cliente') }}">Atendimento ao Cliente</a>
            </nav>
        </div>
    </div>
</header>
