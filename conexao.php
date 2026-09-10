<?php

class Conexao{
    private static $instancia=null;
public static function getConexao(){
    if (self::$instancia===null){

    try { 
         self::$instancia= new PDO(
           "mysql:host=localhost;dbname=novo; 
            charset=utf8",
           "gabriela",
            "123456" 
     );
      self::$instancia -> setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

}catch  (PDOException $e){
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
      }

        return self::$instancia;
    }
}
?>
