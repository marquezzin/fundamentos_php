<?php
    //Variaveis:
    $nome = 'Gabriel';
    $Gabriel = 'Bla bla';

    echo $nome;
    echo "\nO meu nome é ".$nome ;// 
    echo "\nO meu nome é ".$nome." Marques" ;// .para concatenação
    echo "\nO meu nome é ".$$nome ; //Variavel de Variavel "O meu nome é Bla bla"

    //Condicionais 
    if ($nome == 'Guilherme') {
        echo "\nVerdadeiro";
    }else{
        echo "\nFalso";
    }

    //Operadores de comparação
    $idade = "18";
    if ($idade == 18) {
        echo "\nVerdadeiro"; //so compara o valor
    }else{
        echo "\nFalso";
    }
    if ($idade === 18) {
        echo "\nVerdadeiro"; 
    }else{
        echo "\nFalso"; //compara o tipo tambem vale para != e !==
    }

    //Looping
    for($i = 0; $i<10;$i++){
        echo $i;
    }
    $i = 10;
    while ($i <= 20) {
        echo $i;
        $i++;
    }
    echo "\n";
    //Funções
    printNumer(30);
    function printNumer($n){
        echo $n;
    }
    echo "\n";
    //Objetos
    class Pessoa{
        public $nome;
        public $idade;
        public function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }
    
        public function PrintNomeIdade(){
            echo $this->nome;
            echo $this->idade;
        }

    }
    $pessoa = new Pessoa("Gabriel",21);
    $pessoa->PrintNomeIdade(); //utilizando método 
    //se nao tivesse construtor:
    //$pessoa->nome = "Gabriel";
    //$pessoa->idade = 21;
    //OBS: -> acessar/definir propriedades de um objeto, 
    //     => define pares chave-valor em arrays.

    //Array
    $arr = ["gabriel","joao"];
    echo $arr[0]; //gabriel
    var_dump($arr); //
//saida:array(2) {
    //   [0]=>
    //   string(7) "gabriel"
    //   [1]=>
    //   string(4) "joao"
    // }

    //Arrays com chaves e valor
    $dados = [
        'nome' => 'Maria', //adiciona o valor maria na chave nome
        'idade' => 30,
        'ativo' => true
    ];

    //acessando
    echo 'Nome: ' . $dados['nome'];
    echo 'Idade: ' . $dados['idade'];
    echo 'Ativo: ' . $dados['ativo'];
    //OBS: ao botar (object) o modo de acessar muda , no caso seria $dados->nome;
    //Convertendo o array associativo em um objeto: $dados_obj = (object) $dados;
    //inicializando:
    //$dados = (object)[
    //     'nome' => 'Maria', // Adiciona o valor 'Maria' na propriedade 'nome'
    //     'idade' => 30,
    //     'ativo' => true
    // ];
    var_dump($dados);
    // array(3) {
    //     ["nome"]=> string(5) "Maria"
    //     ["idade"]=> int(30)
    //     ["ativo"]=> bool(true)
    //   }
?>