<html>
  <head>
    <title>Tela</title>
    <link href="css.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <header></header>
  <main>
  <form method="post" action="index.php">
  <center>
    <label class="registro" for="nome">Nome:</label><br>
       <input type="text" id="nome" name="nome" >
  <br>
  <br>
    <label class="registro" for="sobrenome">Sobrenome:</label><br>
       <input type="text" id="sobrenome" name="sobrenome" >
  <br>
  <br>
    <label class="registro" for="data">Data de nascimento:</label><br>
       <input type="date" id="data" name="data" >
  <br>
  <br>
    <label class="registro" for="endereco">Endereço:</label><br>
       <input type="text" id="endereco" name="endereco" >
  <br>
  <br>  
    <label class="registro" for="cep">CEP:</label><br>
       <input type="text" id="cep" name="cep" >
  <br>
  <br> 
    <label class="registro" for="numero">Número:</label><br>
       <input type="tel" id="numero" name="numero" >
  <br>
  <br>
     <input class="botao" type="submit" value="cadastrar">
  </center>
  </form>
  </main> 




    
  






    <?php
       $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
       $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
       $data = isset($_POST['data']) ? $_POST['data'] : '';
       $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
       $cep = isset($_POST['cep']) ? $_POST['cep'] : '';
       $numero = isset($_POST['numero']) ? $_POST['numero'] : '';

       $erro = false;
       $nomeErro = "";
       $sobrenomeErro = "";
       $dataErro = "";
       $enderecoErro = "";
       $cepErro = "";
       $numeroErro = "";

       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           if (empty($nome)) {
               $erro = true;
               $nomeErro = "O nome é obrigatório!";
           }

           if (empty($sobrenome)) {
               $erro = true;
               $sobrenomeErro = "O sobrenome é obrigatório!";
           }

           if (empty($data)) {
               $erro = true;
               $dataErro = "A data é obrigatória!";
           }

           if (empty($endereco)) {
               $erro = true;
               $enderecoErro = "O endereço é obrigatório!";
           }  

           if (empty($cep)) {
               $erro = true;
               $cepErro = "O cep é obrigatório!";
           }  

           if (empty($numero)) {
               $erro = true;
               $numeroErro = "O número é obrigatório!";
           }  

           if (!$erro) {
               echo "Informações salvas com sucesso";
           } else {
               echo "<p class='erro'>";
               echo $nomeErro . "<br>";
               echo $sobrenomeErro . "<br>";
               echo $dataErro . "<br>";
               echo $enderecoErro . "<br>";
               echo $cepErro . "<br>";
               echo $numeroErro . "<br>";
               echo "</p>";
           }
       }
    ?> 



 
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>