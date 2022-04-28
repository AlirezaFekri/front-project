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
        unset($_SESSION['role']);
    }

}
class Authorization{
    static function getRole($role){
            $_SESSION['role'] = $role;
    }
    static function checkRole(){
       if ($_SESSION['role'] == "admin"){
           return true;
       }
       else{
           return false;
       }
    }
}