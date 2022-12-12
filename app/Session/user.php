<?php

namespace App\Session;



class User{
   /*  método responsavel por iniciar a sessão dentro da aplicação

     @return boolean
     */
    

    private static function init(){
        return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;

    }

    public static function login ($name, $email, $picture){
      // inicia a  sessão da aplicação
      self::init(); 
        // Define sessão do usuário
         $_SESSION['user'] = [
            'name' => $name,
            'email' => $email,
            'picture' => $picture,
        ];
    }

    // método responsavel por verificar se o usuario está logado 
    public static function isLogged(){
        self::init();

        //returna a existencia do indice user na sessão
        return $_SESSION['user'];
    }

     //returna as informações guardadas dentro do user
    public static function getInfo(){
        self::init();

       
        return $_SESSION['user'] ?? [];
    }

    public static function logout(){
        self::init();
        //remove a sessão do usuario
        unset($_SESSION['user']);
    }

    
}

?>