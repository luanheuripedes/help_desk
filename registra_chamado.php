<?php  
    
    session_start();
    /*
    //recebe os dados do formulario abrir_chamado.php
    echo '<pre>';
        print_r($_POST);//é um array que sao objetos manipulados pela linguagem
    echo '</pre>';
    */
    //trabalhando na montagem do texto
    foreach ($_POST as $indice => $valor) {
        $_POST[$indice] = str_replace('#', '-', $valor);
    }
    //implode('#', $_POST)
    $texto = $_SESSION['id'] . '#' . implode('#', $_POST) . PHP_EOL;


    //Persistir os dados atraves de um arquivo txt
    $arquivo = fopen('../../app_help_desk/arquivo.txt','a');  //dois parametros('nome do arquivo.txt', 'o que faremos com o arquivo ') //abrindo o arquivo

    fwrite($arquivo, $texto); //dois parametros (o arquivo que abrimos, o que queremos escrever nesse arquivo); //escrevendo o texto

    fclose($arquivo); //fecha o arquivo

    //echo $texto;

    header('Location: abrir_chamado.php');
?>