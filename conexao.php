<?php

class Conexao{
    private static $instancia=null;
public static function getConexao(){
    if (self::$instancia===null){

    }try { 
        self::$instancia=new $pdo()
"mysql:host=localhost; dbname=novo;","Denisson","123456"; 
      self::instancia -> setAttribut(pdo::attr::errmode).
                          pdo::errmode_exception;
}catch (pdoexception $e){
    die("erro na conexão ao bd: .$e ->get Message()");
}return self::$instancia;
}

?>