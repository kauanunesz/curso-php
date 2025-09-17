<?php 
    $idade = 300;

    echo "Você tem $idade anos!"; 
    // print pode ser usado no lugar de echo também

    var_dump($idade);
    // mostra o tipo e o valor da variável

    /* Há uma diferença entre '' e "" no php;
    Não posso colocar aspas simples dentro de simples, nem aspas duplas dentro de aspas duplas;
    
    '' Não há uma interpretação do conteúdo em si da variável, já "", há a interpretação do conteúdo*/

    $nome = "Rodrigo";
    $sobrenome = "Nogueira";

    echo "$nome \"Minotauro\" $sobrenome";

    // Nesse caso, quero colocar "" dentro de "", então coloco contra-barra(\) para dizer ao navegador, que são aspas dentro das aspas sem problemas, não um erro

    // Sequências de escape, pesquisar depois
    // 
?>