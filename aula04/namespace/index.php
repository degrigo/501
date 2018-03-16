<?php 
// Serve pra organizar nossas classes
namespace Site;

echo "<pre>";

require 'view.php';
require 'model.php';

// Chamando as classes de outros namespaces
// Passando nome do arquivo e a Classe relativa dentro dela
// Ex: Model (que é o model.php) e Classe Pessoa que está dentro do Model
// EX: View (que é o view.php) e Classe Pessoa que esta dentro de View
// Usado quando possuo duas classes diferentes

// apelidos são setados para criação dos objetos

use Model\Pessoa as ModelPessoa;
use View\Pessoa as ViewPessoa;
use DateTime as Data;

$viewPessoa = new ViewPessoa();
$modelPessoa = new ModelPessoa();

print_r($viewPessoa);

echo "<hr>";

print_r($modelPessoa);

echo "<hr>";

$data = new Data();
print_r($data);