<!--Fazendo a conexao do banco com o projeto-->
<?php

$dbHost = 'localhost'; 
$dbUsername = 'root';
$dbPassword = ''; //SENHA
$dbName = 'projebd'; //NOME DO BANCO


//fazendo do modo orientado a objetos 

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//if($conexao-> connect_errno){

  //  echo "Erro";
//}
//else {
  //  echo "Conexao efetuada";
//}





  
?>

