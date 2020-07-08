<?php
    
    session_start();
    /*
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    //remover indices do array de sessão
    //unset() //para remover o indice apena se existir


    //destruir a variável de sessão
    session_destroy() //sera destruida
    //forçar um redirecionamento
    */
    session_destroy();
    header('Location: index.php');

?>