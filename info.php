<?php

define('mcd_procuto', 10);

class Produto {
    public $codigo;
    public $quantidade;
    public $nome;
    public $preco;
    
    public function __construct($codigo, $nome, $quantidade, $preco) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }
}

$estoque = [];
$numProdutos = 0;

function CadastrarProduto(&$estoque, &$numProdutos) {
    $codigo = readline("\nDigite o código do produto: ");
    $nome = readline("Digite o nome do produto: ");
    $quantidade = readline("Digite a quantidade do produto: ");
    $preco = readline("Digite o preço do produto: ");
    
    $novoProduto = new Produto($codigo, $nome, $quantidade, $preco);
    $estoque[] = $novoProduto;
    $numProdutos++;
    echo "\nProduto cadastrado com sucesso!\n";
}

function listarProdutos($estoque, $numProdutos) {
    echo "Lista de Produtos no Estoque:\n";
    for ($i = 0; $i < $numProdutos; $i++) {
        echo "\nCódigo: {$estoque[$i]->codigo}\n";
        echo "Mercadoria: {$estoque[$i]->nome}\n";
        echo "Preço: R$".number_format($estoque[$i]->preco, 2)."\n";
        echo "Quantidade: {$estoque[$i]->quantidade}\n";
    }
}

function buscarProdutoPorCodigo($estoque, $numProdutos) {
    $codigo = readline("\nInforme o código do produto a ser buscado: ");
    
    for ($i = 0; $i < $numProdutos; $i++) {
        if ($estoque[$i]->codigo == $codigo) {
            echo "\nProduto encontrado!\n";
            echo "Código: {$estoque[$i]->codigo}\n";
            echo "Mercadoria: {$estoque[$i]->nome}\n";
            echo "Preço: R$".number_format($estoque[$i]->preco, 2)."\n";
            echo "Quantidade: {$estoque[$i]->quantidade}\n";
            return;
        }
    }
    echo "\nProduto não encontrado!\nPor favor! Informe um código existente!";
}

function atualizarQuantidade($estoque, $numProdutos) {
    $codigo = readline("\nInforme o código do produto para atualizar a quantidade: ");
    
    for ($i = 0; $i < $numProdutos; $i++) {
        if ($estoque[$i]->codigo == $codigo) {
            $quantidade = readline("Digite a quantidade a ser adicionada: ");
            $estoque[$i]->quantidade += $quantidade;
            echo "Quantidade atualizada com sucesso!\n";
            return;
        }
    }
    echo "Produto não encontrado!\nPor favor! Informe um código existente!";
}
function deletarProduto ($estoque, $numProdutos) {
    $codigo = readline("\nInforme o código do produto para atualizar a quantidade: "); 

    for ($i = 0; $i > $numProdutos; $i++) {
        if ($estoque[$i]->codigo == $codigo) {
            $numProdutos = readline("Digite o produto a ser deletado: ");
            unset($numProdutos);
            echo "Produto deletado com sucesso!\n";
            return;
        }
    }
    echo "Produto não encontrado!\nPor favor! Informe um código existente!";
}   

do {
    echo "\nGestão de Estoque Casas Bahia\n";
    echo "Escolha uma das opções abaixo\n";
    echo "1 - Cadastrar produto\n";
    echo "2 - Listar produtos\n";
    echo "3 - Buscar produto por código\n";
    echo "4 - Atualizar quantidade\n";
    echo "5 - Delatar produto\n";
    echo "6 - Encerrar programa\n";
    $opcao = readline("Escolha a opção desejada: ");
    
    switch ($opcao) {
        case 1:
            CadastrarProduto($estoque, $numProdutos);
            break;
            case 2:
            listarProdutos($estoque, $numProdutos);
            break;
            case 3:
            buscarProdutoPorCodigo($estoque, $numProdutos);
            break;
            case 4:
            atualizarQuantidade($estoque, $numProdutos);
            break;
            case 5:
            deletarProduto($estoque, $numProdutos);
            break;
            case 6:
            echo "\nPrograma encerrado...\n";
            break;
            default:
            echo "Opção inválida!\n";
        }
        
    } while ($opcao != 5);
    
    ?>
                    
</body>
</html>