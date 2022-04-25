<?php
session_start();
class Authentication{
    static function login($id){
        $_SESSION['id'] = $id;
    }
    static function check(){
        return isset($_SESSION['id']);
    }
    static function id(){
        return $_SESSION['id'];
    }
    static function logout(){
        unset($_SESSION['id']);
    }

}
class Authorization{
    static function checkRole($role){
        if (!Authentication::check()){
            return false;
        }else if ($role == "role"){

                return true;

        }

    }
}