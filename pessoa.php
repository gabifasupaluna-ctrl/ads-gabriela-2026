<?php
require_once 'conexao.php';

 class Pessoa{
    private $id;
    private $nome;
    private $user;
    private $email;

    public function __construct($nome, $user, $email){
        $this->nome = $nome;
        $this->user = $user;
        $this->email = $email;
    }
     //metodo cadastrar 
    public function inserir() {
       try {
            $pdo = Conexao::getConexao();
            $sql = "INSERT INTO pessoa (nome, user, email) VALUES (:id, :nome, :user, :email)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':nome' => $this->nome,
                ':user' =>$this->user,
                ':email' => $this->email
     ]);
            return $stmt->rowCount() > 0;
       } catch (PDOException $e) { 
            return false;
       }
  }
  //metodo consultar
    public static function listarTodos() {
    try{
          $pdo = Conexao::getConexao();
          $sql = "SELECT * FROM pessoa";
          $stmt = $pdo->query(sql);

    //retorna uma array com todos os registros
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 } catch (PDOException $e){
      return[];
 }

 }
 }
 
?>