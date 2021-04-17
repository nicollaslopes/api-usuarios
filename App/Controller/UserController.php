<?php

    namespace App\Controller;

    use App\Models\User;

    class UserController{

        public function get($id = null){
            
            $user = new User();
            
            if(isset($id)){
                $user = $user->select($id);
                return $user;
            } else {
                $user = $user->selectAll();
                return $user;
            }
        }


    }