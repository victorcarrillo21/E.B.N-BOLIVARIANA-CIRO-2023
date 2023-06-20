<?php

namespace Ciro\Bolivariana\baseData\ciro;



class baseData {

    protected function conexion() {
        try{
        $dbuser = 'root'; 
        $dbpass = '';
        $pdo = new PDO('mysql:host=localhost;dbname=basedata', $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->query("SET NAMES 'utf8'");
        return $pdo;
        }
        catch (PDOExection $e){
            print "ERROR!: ". $e->getmessage() . "<br/>";
            die();
        }
    
    }
    
}