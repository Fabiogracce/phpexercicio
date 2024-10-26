<?php
    namespace PHP\Modelo;//definir local do projeto
    require_once('Cliente.php');//requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    use PHP\Modelo\Cliente;//define a classe 
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;

    $endCliente = new Endereco("Avenida senador vergueiro","400","centro","sbc","Sp","brasil","03756-080");

    $cliente = new cliente("12345","fabio","11975371325",$endCliente,560,60);//criar um objeto
    $clienteDois = new cliente("12","joao","1325",$endCliente, 1020,25);//criar um objeto
    $Funcionario = new Funcionario("1","buganza","696","Assitente", 1200,$endCliente);//criar um objeto
    

    echo $cliente->imprimir();
    echo $endCliente->imprimir()."<br>";

    echo $clienteDois->imprimir();
    echo $endCliente->imprimir()."<br>";
    
    echo $Funcionario->imprimir();
    echo $endCliente->imprimir();


?>