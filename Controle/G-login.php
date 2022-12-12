<?php

include_once '../vendor/autoload.php';

//dependencias
use Google\Client as GoogleClient;
use \App\Session\User as SessionUser;
//Validação principal do Token 
// verifica os campos obrigatórios do Token

if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){
    header('location:../index.html');
    exit;
}

//Cookie CSRF 

$cookie = $_COOKIE['g_csrf_token'] ?? '';

//Verifica o valor do Post e do Cookie Para o CSRF
if($_POST['g_csrf_token'] != $cookie){
    header('location:../index.php');
    exit;
}

//Validação Secundaria Do Token


$client = new GoogleClient(['client_id' => '637678568849-4v62gemkpgb64le03l3vnjrckpr0g1n7.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend

//Obtém os dados do usuario Com base no JWT
$payload = $client->verifyIdToken($_POST['credential']);

//Verifica dados do Payload
if (isset($payload['email'])){
  SessionUser::login($payload['name'], $payload['email'], $payload['picture']);
  header('location:../index.php');
  
} else {
   die ('problemas ao consultar API');

}
?>