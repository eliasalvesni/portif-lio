<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);

$para = "eliasbentoferreira@gmail.com"
$assunto = "preenchiment do formulario - portifolio.";

$corpo = "Nome: ".$nome. "\n". "E-mail: ".$email."\n"."Telefone: ".$telefone;

$cabeca = "From:e90107433@gmail.com"."\n"."Reply-to: ". $email. "\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assusnto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}

?>