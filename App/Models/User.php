<?php

    namespace App\Models;
    
    class User{

        private $table = 'usuarios';

        public function select($id){

            $con = Connection::connect();
            $query = "SELECT * FROM $this->table WHERE id = :id";
            $resultQuery = $con->prepare($query);
            $resultQuery->bindParam(':id', $id, \PDO::PARAM_INT);
            $resultQuery->execute();

            if($resultQuery->rowCount() > 0){
                return $resultQuery->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum usuário encontrado");
                
            }

        }

    }