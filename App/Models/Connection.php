<?php   

    namespace App\Models;

    use PDOException;

    class Connection{

            private static $con = '';

            public static function connect(){

                try{
                    self::$con = new \PDO(DB.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
                } catch(PDOException $e){
                    echo "Erro: " . $e->getMessage();
                }

                return self::$con;
        }
}