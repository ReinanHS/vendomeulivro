<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function ofertas(){
        print('ofertas');
    }

    public function lancamentos(){
        print('lancamentos');
    }

    public function historico(){
        print('Historico');
    }

    public function lojasOficiais(){
        print('oi');
    }

    /**
     * Função para renderizar a página com informações para vender no site.
     *
     * @return view
    */
    public function vender(){
        return view('pages.store.vender');
    }

    public function categorias(){
        print('oi');
    }

    /**
     * Função para renderizar a página de atendimento ao cliente.
     *
     * @return view
    */
    public function atendimento(){

        $duvidas = [
            [
                'id' => 'pagamentos',
                'title' => 'Pagamento',
                'items' => [
                    [
                        'id' => 0,
                        'title' => 'Quais formas de pagamento eu posso utilizar?',
                        'body' => 'Você poderá escolher por pagar suas compras por boleto bancário e Cartões de Crédito. Você paga seu pedido diretamente no app ou site, sem nem precisar colocar a mão no bolso.'
                    ],
                    [
                        'id' => 1,
                        'title' => 'Posso pagar meu boleto, mesmo após vencimento?',
                        'body' => 'Após o vencimento do seu boleto a sua compra é cancelada automaticamente e você deverá fazer um novo pedido.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Como faço para imprimir meu boleto?',
                        'body' => 'Você poderá imprimir o seu boleto, acessando o seu pedido em nosso site em “minha conta” no canto superior direito de nossa loja online por meio da opção “meus pedidos”.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Não consigo pagar online ',
                        'body' => 'O primeiro passo a ser feito é verificar se os dados inseridos estão corretos. Se estiver tudo certo e mesmo assim não consegue finalizar a compra, recomendo que entre em contato com a emissora do cartão para entender o que está acontecendo. Se mesmo assim não conseguir finalizar o pedido, entre em contato com minha equipe.'
                    ],
                ],
            ],
            [
                'id' => 'vender',
                'title' => 'Vender',
                'items' => [
                    [
                        'id' => 0,
                        'title' => 'Como vender um produto?',
                        'body' => 'Você quer começar a vender no site? Nós preparamos algumas dicas para você levar em conta quando receber uma pergunta ou uma compra.'
                    ],
                    [
                        'id' => 1,
                        'title' => 'Como entregar ou enviar o produto',
                        'body' => 'Caso envie o produto por sua conta para o endereço fornecido pelo comprador, aconselhamos você a: Enviar o produto em nome do comprador para ter certeza de que ele o recebará diretamente.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Como o painel de vendas funciona',
                        'body' => 'Na seção de vendas você verá que, além da lista, há um painel onde organizamos suas vendas em 4 etapas.'
                    ],
                ],
            ],
            [
                'id' => 'parceiro',
                'title' => 'Parceiro',
                'items' => [
                    [
                        'id' => 'como-cadastrar-meu-estabelecimento-no-vendomeulivro',
                        'title' => 'Como cadastrar meu estabelecimento no Vendomeulivro?',
                        'body' => 'Para se tornar meu parceiro e comercializar seus produtos, basta responder algumas perguntinhas aqui no site (clique aqui) e em até 24 horas minha equipe entrará em contato com você. Ou se desejar, ligue para o número (79)99897-3746. Logo em seguida, você será direcionado ao representante comercial da sua cidade.'
                    ],
                    [
                        'id' => 'cadastre-se-como-empresa',
                        'title' => 'Cadastre-se como empresa',
                        'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'
                    ]
                ],
            ],
        ];

        return view('pages.store.atendimento', ['duvidas' => $duvidas]);
    }
}
