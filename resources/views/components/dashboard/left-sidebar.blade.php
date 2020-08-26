<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer" style="background-color: #393e46 !important;">
        <!-- Aplication Brand -->
        <div class="app-brand" style="background-color: #222831 !important;">
            <a href="{{ url('/') }}" title="Vendomeulivro Dashboard">
                <img src="{{ url('/img/logos/76x76-precomposed.png') }}" alt="logo do vendomeulivro" style="width: 20%;">
                <span class="brand-name text-truncate">Vendo meu livro</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub expand">
                    <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#compras" aria-expanded="false" aria-controls="compras">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                        </svg>
                        <span class="ml-2 nav-text">Compras</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="compras" data-parent="#sidebar-menu" style="">
                        <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#compras" aria-expanded="false" aria-controls="compras"></a>
                        <div class="sub-menu">
                            <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#compras" aria-expanded="false" aria-controls="compras"></a>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#compras" aria-expanded="false" aria-controls="compras"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/compras') }}">
                                    <span class="nav-text">Compras</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#compras" aria-expanded="false" aria-controls="compras"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/perguntas') }}">
                                    <span class="nav-text">Perguntas</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#compras" aria-expanded="false" aria-controls="compras"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/lista-de-desejos') }}">
                                    <span class="nav-text">Lista de desejos</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#compras" aria-expanded="false" aria-controls="compras"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/mercado') }}">
                                    <span class="nav-text">Mercado</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <!-- Vendas -->
                <li class="has-sub expand">
                    <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#vendas" aria-expanded="false" aria-controls="vendas">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z"/>
                            <path d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z"/>
                            <path d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                            <path fill-rule="evenodd" d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z"/>
                        </svg>
                        <span class="ml-2 nav-text">Vendas</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="vendas" data-parent="#sidebar-menu" style="">
                        <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#vendas" aria-expanded="false" aria-controls="vendas"></a>
                        <div class="sub-menu">
                            <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#vendas" aria-expanded="false" aria-controls="vendas"></a>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#vendas" aria-expanded="false" aria-controls="vendas"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/resumo') }}">
                                    <span class="nav-text">Resumo</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#vendas" aria-expanded="false" aria-controls="vendas"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/anuncios') }}">
                                    <span class="nav-text">Anúncios</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#vendas" aria-expanded="false" aria-controls="vendas"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/publicidade') }}">
                                    <span class="nav-text">Publicidade</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/perguntas') }}">
                                    <span class="nav-text">Vendas</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/perguntas') }}">
                                    <span class="nav-text">Reputação</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/perguntas') }}">
                                    <span class="nav-text">Central</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <!-- Pagamentos -->
                <li class="has-sub expand">
                    <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#pagamentos" aria-expanded="false" aria-controls="pagamentos">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                        </svg>
                        <span class="ml-2 nav-text">Pagamentos</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="pagamentos" data-parent="#sidebar-menu" style="">
                        <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#pagamentos" aria-expanded="false" aria-controls="pagamentos"></a>
                        <div class="sub-menu">
                            <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#pagamentos" aria-expanded="false" aria-controls="pagamentos"></a>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#pagamentos" aria-expanded="false" aria-controls="pagamentos"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/pagamentos') }}">
                                    <span class="nav-text">Pagamentos</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#pagamentos" aria-expanded="false" aria-controls="pagamentos"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/pagamentos') }}">
                                    <span class="nav-text">Resumo</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#pagamentos" aria-expanded="false" aria-controls="pagamentos"></a>
                                <a class="sidenav-item-link" href="{{ url('dashboard/pagamentos') }}">
                                    <span class="nav-text">Assinatura</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
