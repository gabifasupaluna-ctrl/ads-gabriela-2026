<?php 
ini_set('display_errors',1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST') {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $user = $_POST['user'];
    $email = $_POST['email'];

    $pessoa = new Pessoa($id, $nome, $user, $email);
    if ($pessoa->inserir()) {
        echo "<p>Cadastro feito com sucesso</p><br/>";
        echo '<a href="index.html">Voltar para home</a><br/>';
        header('refresh:3; url=index.html');
        echo 'Redirecionando a página principal em 3 segundos...';
    } else {
        echo "Erro, não foi possível inserir no banco de dados<br/>";
        header('refresh:3; url=index.html');
        echo 'Redirecionando a página principal em 3 segundos...';
    }
}else{
    header('Location: index.php');
    exit();
}
?>