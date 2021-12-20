<?php

    /* Você deve fazer o isset por variável, e não em expressão como vc fez */
    // if(isset($_POST['email'] && !empty($_POST['email'])){

    if( isset($_POST['email']) && !empty($_POST['email']) ){
        
    $nome = addcslashes($_POST['name'],"");
    $email = addcslashes($_POST['email'], "");
    $mensagem = addcslashes($_POST['message'], "");

    $to      = "visualimoveissocorro@gmail.com";
    $subject = "Site - Visual - Socorro";
    $body    = "Nome: ".$nome. "\r\n".
                "Email: ".$email."\r\n".
                "Mensagem: ".$mensagem;
    $header = "from:visualimoveissocorro@gmail.com"."\r\n".
            "Reply-To:".$email."\e\n".
                "X=Mailer:PHP/" .phpversion();

    /* Aqui não é função "main", o correto é a função "mail" */
    if(mail($to,$subject,$body,$header)){
        // Método "encho" não existe. O correto é "echo"
        echo("Email eviado com sucesso!");
    }else{
        echo("O Email não pode ser enviado!");
    }
}
?>