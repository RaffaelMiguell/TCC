<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo</title>
</head>
<body>
    <?php
        /********** EFETUANDO O REQUERIMENTO DO ARQUIVO QUE CONTÉM VALIDAÇÕES DO CADASTRO **********/         
        require_once('validacoes_cadastro/validacoes.php');
        
        if(isset($_POST['cpf'])&&($_POST['nome'])&&($_POST['idade']))
        {
            echo"pegou";
        }else{
            echo"não pegou";
        }
    
    ?>
</body>
</html>
