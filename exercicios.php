<?php
//Exercicio 1
$dados = new stdClass();
$dados -> items = [
    (object)[
        'id' => '1',
        'nome' => 'João',
        'nascimento' => '2016-10-02',
        'cpf' => '123.456.789-10'
    ],
    (object)[
        'familia' => '{"parente1":{"nome":"José", "parentesco": "Pai"}, "parente2": {"nome": "Maria", "parentesco": "Mãe"}}'
    ]
];

$nome =  $dados->items[0]->nome;
$familia = json_decode($dados-> items[1] -> familia);
$nomeParente = $familia -> parente1 -> nome;
$parentesco = $familia -> parente1 -> parentesco;

echo "Meu nome é ".$nome.". ".$nomeParente." é o meu ".$parentesco;

//Exercicio 2
echo "\n";

class BalaCanhao{
    public $velocidadeInicial; //  m/s
    public $AnguloTiro;//  graus

    public function __construct($velocidadeInicial,$AnguloTiro){
        $this->velocidadeInicial = $velocidadeInicial;
        $this->AnguloTiro = $AnguloTiro;
    }
    public function calcAlcance(){
        $anguloRadianos = deg2rad($this->AnguloTiro);
        return (($this->velocidadeInicial ** 2) * sin(2 * $anguloRadianos)) / 9.8;
    }
    public function hitTarget(){
        return $this->calcAlcance() >= 300 && $this->calcAlcance()<= 350;
    }
}
//Exemplo de uso
$bala1 = new BalaCanhao(56.57, 50);
$alcance1 = $bala1->calcAlcance();
$resultado1 = $bala1->hitTarget();
echo "O alcance do tiro é: " . round($alcance1, 2) . " metros\n";
echo "O tiro acertou o alvo? " . ($resultado1 ? "Sim" : "Não");
?>
