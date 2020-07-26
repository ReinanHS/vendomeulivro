<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="{{ url('/') }}" class="site-logo img-fluid">
                        <img src="{{ url('/img/logos/logo-site-vendomeulivro-top.png') }}" alt="logo do site vendomeulivro.com">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <!-- Formulário de busca -->
                    <search-bar site-url="{{ url('/') }}"></search-bar>
                </div>
                <div class="col-xl-4 col-lg-5 d-none d-lg-flex justify-content-end">
                    <div class="painel-do-usuario">
                        <div class="up-item mr-4">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            <a href="{{ url('login') }}">Entrar</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                                <span>0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark p-0">
        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Indicações de Livros
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-down ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                            </svg>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu" id="dropdown-menu1" aria-labelledby="navbarDropdown1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                            <div class="menu-icon text-center" style="background-image: url('{{ url('/img/livros/indicacoes/expandir-a-sua-mente.jpg') }}')">
                                                <span class="fa fa-shopping-cart"></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a class="dropdown-item" href="{{ url('livros/expandir-a-sua-mente') }}">
                                                    <h6 class="mb-0">Expandir a sua mente</h6>
                                                    <small class="text-light">10 livros</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                            <div class="menu-icon text-center" style="background-image: url('{{ url('/img/livros/indicacoes/dia-das-mulheres.jpg') }}')">
                                                <span class="fa fa-gamepad"></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a class="dropdown-item" href="{{ url('livros/dia-das-mulheres') }}">
                                                    <h6 class="mb-0">Dia das Mulheres</h6>
                                                    <small class="text-light">Seleção dos melhores</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                            <div class="menu-icon text-center" style="background-image: url('{{ url('/img/livros/indicacoes/no-espaco.jpg') }}')">
                                                <span class="fa fa-video-camera"></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a class="dropdown-item" href="{{ url('livros/sobre-o-espaco') }}">
                                                    <h6 class="mb-0">No Espaço</h6>
                                                    <small class="text-light">Melhores livros pela crítica</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                            <div class="menu-icon text-center" style="background-image: url('{{ url('/img/livros/indicacoes/literatura-brasileira.jpg') }}')">
                                                <span class="fa fa-comment"></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a class="dropdown-item" href="{{ url('livros/literatura-brasileira') }}">
                                                    <h6 class="mb-0">Literatura Brasileira</h6>
                                                    <small class="text-light">Os melhores livros</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                            <div class="menu-icon text-center" style="background-image: url('{{ url('/img/livros/indicacoes/livros-antigos-e-raros.jpg') }}')">
                                                <span class="fa fa-briefcase"></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a class="dropdown-item" href="{{ url('livros/antigos-e-raros') }}">
                                                    <h6 class="mb-0">Livros antigos e raros </h6>
                                                    <small class="text-light">Os clássicos</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                            <div class="menu-icon text-center" style="background-image: url('{{ url('/img/livros/indicacoes/auto-ajuda.jpg') }}')">
                                                <span class="fa fa-bolt"></span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a class="dropdown-item" href="{{ url('livros/auto-ajuda') }}">
                                                    <h6 class="mb-0">Seleção Auto Ajuda</h6>
                                                    <small class="text-light">15 livros</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Novidades
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-down ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                            </svg>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu" id="dropdown-menu2" aria-labelledby="navbarDropdown2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                        <div class="menu-icon text-center">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.261 13.666c.345.14.739-.105.739-.477V2.5a.472.472 0 0 0-.277-.437c-1.126-.503-5.42-2.19-7.723.129C5.696-.125 1.403 1.56.277 2.063A.472.472 0 0 0 0 2.502V13.19c0 .372.394.618.739.477C2.738 12.852 6.125 12.113 8 14c1.875-1.887 5.262-1.148 7.261-.334z"/>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item" href="#">
                                                <h6 class="mb-0">Lançamentos</h6>
                                                <small class="text-light">2020</small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                        <div class="menu-icon text-center">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item" href="#">
                                                <h6 class="mb-0">Pré-venda</h6>
                                                <small class="text-light">Lista de Livros</small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                        <div class="menu-icon text-center">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M1.018 7.5h2.49c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5zM2.255 4H4.09a9.266 9.266 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.024 7.024 0 0 0 2.255 4zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-.5 1.077c-.67.204-1.335.82-1.887 1.855-.173.324-.33.682-.468 1.068H7.5V1.077zM7.5 5H4.847a12.5 12.5 0 0 0-.338 2.5H7.5V5zm1 2.5V5h2.653c.187.765.306 1.608.338 2.5H8.5zm-1 1H4.51a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm1 2.5V8.5h2.99a12.495 12.495 0 0 1-.337 2.5H8.5zm-1 1H5.145c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12zm-2.173 2.472a6.695 6.695 0 0 1-.597-.933A9.267 9.267 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM1.674 11H3.82a13.651 13.651 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm8.999 3.472A7.024 7.024 0 0 0 13.745 12h-1.834a9.278 9.278 0 0 1-.641 1.539 6.688 6.688 0 0 1-.597.933zM10.855 12H8.5v2.923c.67-.204 1.335-.82 1.887-1.855A7.98 7.98 0 0 0 10.855 12zm1.325-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm.312-3.5h2.49a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.91 4a9.277 9.277 0 0 0-.64-1.539 6.692 6.692 0 0 0-.597-.933A7.024 7.024 0 0 1 13.745 4h-1.834zm-1.055 0H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z"/>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item" href="#">
                                                <h6 class="mb-0">Destaques</h6>
                                                <small class="text-light">Os livros mas recentes</small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row d-flex tab">
                                        <div class="menu-icon text-center">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                                                <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item" href="#">
                                                <h6 class="mb-0">Mais vendidos</h6>
                                                <small class="text-light">Mês de janeiro</small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Livros usados
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-down ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                            </svg>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu" id="dropdown-menu3" aria-labelledby="navbarDropdown3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row d-flex tab">
                                        <div class="menu-icon text-center">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item" href="{{ url('mapa-de-troca') }}">
                                                <h6 class="mb-0">Livros próximos</h6>
                                                <small class="text-light">Troque seu livro</small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row d-flex tab">
                                        <div class="menu-icon text-center">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-left-quote-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm7.194 2.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a class="dropdown-item" href="{{ url('perguntas-frequentes') }}">
                                                <h6 class="mb-0">Como funciona?</h6>
                                                <small class="text-light">Perguntas frequentes</small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categorias') }}">
                            Categorias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item d-initial d-lg-none">
                        <a class="nav-link" href="{{ url('/login') }}">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
