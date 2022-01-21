<?php

    //if: validação de botão
    if(isset($_GET['botaoSalvar'])) { 
       
        print_r('RESULTADO'.'<br>');

        //recuperação de dados via GET
        $nome=$_GET['labelNome'];
        $cidade=$_GET['selectCidade'];
        $sexo=$_GET['radioSexo'];
        $observacao=$_GET['textoObservacao'];
        
        //inicialização com valor padrão
        $idiomaPortugues =null;
        $idiomaEspanhol =null;
        $idiomaIngles =null;

        //inserindo dados das variaveis e concatenando quebra de linha 
        echo('<strong>Nome: </strong>'.$nome.'<br>');
        echo('<strong>Cidade: </strong>'.$cidade.'<br>');
        echo('<strong>Sexo: </strong>'.$sexo.'<br>');
        echo('<strong>Observação: </strong>'.$observacao.'<br>');
        echo('<strong>Idioma: </strong>'.$idiomaPortugues.'<br>'.$idiomaEspanhol.'<br>'.$idiomaIngles);

        //recuperação de dados do checkbox idioma
        if (isset($_GET['checkboxPortugue'])) {
            $idiomaPortugues = $_GET['checkboxPortugues'];
        }
        if (isset($_GET['checkboxEspanhol'])) {
            $idiomaEspanhol = $_GET['checkboxEspanhol'];
        }
        if (isset($_GET['checkboxIngles'])) {
            $idiomaIngles = $_GET['checkboxIngles'];
        }
    
    }  
    

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01</title>
    <style>
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <form nome="formularioCadastro" method="GET" action="formulario.php">
    
      <h1>Formulário</h1> 

      <strong>Nome: </strong> 
      <input type="text" name="labelNome" size="60" maxlength="30">
      
      <p><strong>Cidade: </strong></p> 
      <select name="selectCidade" >
        <option value="" selected>Selecione um item </option>
        <option value="jandira">Jandira</option>
        <option value="barueri">Barueri</option>
        <option value="itapevi">Itapevi</option>
        <option value="osasco">Osasco</option>
      </select>

      <p><strong>Sexo: </strong></p>
      
      <input type="radio" name="radioSexo" value="feminino"> Feminino
      <input type="radio" name="radioSexo" value="masculino"> Masculino
      <input type="radio" name="radioSexo" value="outro"> Outro
      
     <p><strong>Idioma:</strong></p>
      <input type="checkbox" name="checkboxPortugues" value="pt"> Português
      <input type="checkbox" name="checkboxEspanhol" value="es"> Espanhol
      <input type="checkbox" name="checkboxIngles" value="en"> Inglês

      <p><strong>Observação:</strong></p>
      <textarea name="textoObservacao" cols="60" rows="10"></textarea> 
      <br><input type="submit" name="botaoSalvar" value="salvar">
</body>
</html>