<?php
if(isset($_POST['email']) && !empty($_POST['email'])){



$nome = addcslashes($_POST['name']);
$nome = addcslashes($_POST['email']);
$nome = addcslashes($_POST['message']);


$to = "abimeleque15@gmail.com";
$subject = "Contato - BolosDaJu";

$body = "Nome: ".$nome. "\n ".
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem; 
$header = "from: abimeleque15@gmail.com"."\r\n"."Reply-To: ".$email."\e\n"."X=Mailer:PHP/".phpversion
if(mail($to,$subject,$body,$header)){

    echo("email enviado com sucesso! ");
}else{
    echo("o email não pode ser enviado"); 
}

}
?>