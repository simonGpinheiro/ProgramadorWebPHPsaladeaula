<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">
            Procedimentos, Funções e Métodos.
        </h1>
        <h4 style="text-align: center;">Funções com String</h4>
        <hr>
        <br>
        <?php
        
        require_once "funcoes_string.php";
        
        echo "Teste de quebra linha com wordwrap";
        pularLinha(0);
        $texto = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores consequuntur repudiandae harum deleniti deserunt est ratione doloremque. Illo eos, natus quo voluptatem modi numquam consectetur itaque sunt. Dolorem, ratione.";
        $resposta = wordwrap($texto, 10, "<br>", false); // quebra por palavras
        $resposta = wordwrap($texto, 10, "<br>", true); //Quebra por letras 
        $resposta = wordwrap($texto, 10, "<br>");
        echo  $resposta;
        pularLinha(2);

        echo "Quantidade de letras no texto com a função strlen" . strlen($texto);
        pularLinha(2);

        echo "Utilização do: trim() - para remoção de espaços...";
        $nome = "   Marcio de Oliveira Velasco   ";
        pularLinha(0);
        echo "Quantidade de letras: " . strlen($nome);
        pularLinha(0);
        echo "Quantidade de letras: " . strlen($nome);
        pularLinha(0);
        //$nome_sem_espacos = trim($nome);
        echo "Quantidade de letras depois do strlen(): " . strlen(trim($nome));


        echo "Quantidade de palavras em uma string com: str_word_count()";
        pularLinha(0);
        $teste = str_word_count($nome, 0);
        echo "Quantidade de palavras  - com a opção 0: ";
        pularLinha(0);
        pularLinha(0);
        $teste = str_word_count($nome, 1);
        echo "Quantidade de palavras 2: str_word_count()";
        pularLinha(0);
        $teste = str_word_count($nome, 2);

        echo "Função explode()";
        $data_nascimento = "15/12/1978";
        $vetor = explode ("/", $data_nascimento);
        pularLinha(0);
        print_r($vetor);
        pularLinha(2); 


        echo "Função explode()";
        $data_nascimento2 = implode("-", $vetor);
        $vetor = explode ("/", $data_nascimento);
        pularLinha(0);
        echo $data_nascimento2;
        pularLinha(2); 

        echo "Função str_split()";
        $novo_vetor = str_split("Marcio");
        pularLinha(0);
        print_r($novo_vetor);
        pularLinha(2);

        echo "Função chr()";
        pularLinha(0);
        echo "A letra de código 77 é " . chr(77);
        pularLinha(2);

        echo "Função ord()";
        pularLinha(0);
        echo "O código da letra A é " . ord("A");
        pularLinha(2);

        echo "Função strolower()";
        pularLinha(0);
        echo "Formatação de texto com strolower " . strolower($nome);
        pularLinha(2);

        echo "Função strolower()";
        pularLinha(0);
        echo "Formatação de texto com strolower " . strolower($nome);
        pularLinha(2);

        echo "Função ucfirst()";
        pularLinha(0);
        echo "Formatação de texto com ucfirst " . ucfirst($nome);
        pularLinha(2);

        echo "Função ucwords()";
        pularLinha(0);
        echo "Formatação de texto com ucwords " . ucwords($nome);
        pularLinha(2);

        echo "Função strpos()";
        pularLinha(0);
        echo "Formatação de texto com strpos " . strpos($nome, "Velasco");
        pularLinha(2);

        echo "Função substr_count()";
        pularLinha(0);
        echo "Formatação de texto com substr_count " . substr_count($nome, "Velasco"); 
        pularLinha(2);

        echo "Função substr()";
        pularLinha(0);
        echo "Formatação de texto com substr " . substr($nome_sem_espaço, 0, 6); 
        pularLinha(2);
        echo "Formatação de texto com substr " . substr($nome_sem_espaço, 6); 
        pularLinha(2);

        echo "Função str_replace()";
        pularLinha(0);
        echo "Retorna um novo texto alteranco a palavra:  " . str_replace("Oliveira", "O.", $nome);
        pularLinha(2);

        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>
