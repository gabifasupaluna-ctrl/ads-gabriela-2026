<? php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1);error_reporting(E_ALL);
 
//verifica se existe conexao com bd, caso não tenta criar uma nova 
$conexao = mysqli_connect ("localhost", "root", "" ) //porta, usuario e senha
or die("Erro na conexao com banco de dados"); //caso nao consiga conectar
                                             //mostra a mensagem 
$select_db = mysqli_select_db($conexao,"novo"); //seleciona o banco de dados

//abaixo atribuimos os valores provenientes do formulário pelo metodo POST 
$nome = $_POST["nome"];
$user = $_POST["user"];
$email = $_POST["email"];

$string_sql = "INSERT INTO pessoa (id,nome,user,email) VALUES (null,'$nome','$user','$email')";

mysqli_query($conexao, $string_sql); //realiza consulta

if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso
    echo "<p>Cadastro feito com sucesso<p>";
    echo '<a href="index.html">Voltar para a página principal da empresa</a>';
} else {
    echo "Erro, não foi possivel inserir no banco de dados";
}
 mysqli_close($conexao); //fecha conexao com banco de dados 
 

?>