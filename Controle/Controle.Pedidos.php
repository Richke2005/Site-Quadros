<?php
session_start();


$formMachine = new FormMachine;

$Qtd = $_POST['quadros'];
$i = 0;
$forms = '<form action="" method="post">
<label for="Nome">Nome:</label><br>
<input type="text" name="nome" id="" placeholder="Nome a colocar no quadro"><br>
</form>';

if (empty($_POST['quadros'])){
   header('location:../Pages/Catálogo.php');
 }

if($Qtd == true){
    $formMachine->machine($i, $Qtd, $forms);
}



class FormMachine{
    public $i;
    

    // métodos

    public function machine($i, $Qtd, $forms){
        for ($i=0; $i <= $Qtd; $i++) {
              if($forms == $Qtd){
                break;
              }
              echo $forms;
        }
        
    }
    
}



?>