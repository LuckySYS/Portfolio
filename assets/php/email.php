<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = $_POST(['telefone']);

    $para = "luckydevsys@gmail.com";
    $assunto = "Coleta de dados - portfolio";

    $corpo = "nome: ".$nome."\n"."E-mail: ".$email."\n". "Telefone: ".$telefone;

    $cabeca = "From lg91539@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o E-mail");
    }

?>