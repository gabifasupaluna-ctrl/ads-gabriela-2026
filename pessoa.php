<?php
require_once 'conexao.php';

 class Pessoa{
    private $id;
    private $nome;
    private $user;
    private $email;

    public function __construct($id, $nome, $user, $email){
        $this->id = $id;
        $this->nome = $nome;
        $this->user = $user;
        $this->email = $email;
    }

    public function inserir() {
       try {
            $pdo = Conexao::getConexao();
            $sql = "INSERT INTO pessoa (id, nome, user, email) VALUES (:id, :nome, :user, :email)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':id' => $this->id,
                ':nome' => $this->nome,
                ':user' =>$this->user,
                ':email' => $this->email
     ]);
            return $stmt->rowCount() > 0;
       } catch (PDOException $e) { 
            return false;
       }
    }
}

?>