<?php
//creamos una clase 
class Database{

  
    //creamos un metodo estatico o tambien conocido como una funcion
    public static function connect(){

        $servidor='localhost';
        $usuario='root';
       $password='';
       $basededatos='tienda_master';

    //    para infinity
    //    $servidor='sql209.epizy.com';
    //    $usuario='epiz_28857635';
    //   $password='9FFnOmhg8j';
    //   $basededatos='epiz_28857635_tienda_master	';

        $db = new mysqli($servidor,$usuario,$password,$basededatos);
        //ejecutamos una consulta que va permitir que los resultados que saque de la base de datos sean en castellano totalmente(tildes,eñe,etc) 
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}