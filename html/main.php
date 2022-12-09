<!DOCTYPE html>
<html lang="pt-br">
</html>
<?php
    require('../database/conexao.php');

    $tipoDoacao = implode(" ",tipoDoacao());
    $doacao = tratarDoacao($_POST);

    session_start();

    if(tipoDoacaoValido(tipoDoacao())){
        $name = $doacao["nome"];
        $tel = $doacao["tel"];
        $email = $doacao["email"];
        $sql = "INSERT INTO doacao (nome, email, telefone, tipoDoacao) VALUES('$name','$email','$tel','$tipoDoacao')";
        $result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        var_dump($result);
        $_SESSION["mensagem"]= "Entraremos em contato";
        mysqli_close($conexao);
        header("Location: home.php");
        die();
    
    }else{
        $_SESSION["mensagem"]= "Preencha o tipo de doação";
        header("Location: doacao.php");
        die();
    }

    function tratarDoacao($array){
        if(isset($array['name'])){
            $nome = $array['name'];
        }
        if(isset($array['tel'])){
            $tel = $array['tel'];
        }
        if(isset($array['email'])){
            $email = $array['email'];
        }

        return array('nome'=>$nome,"tel"=>$tel, "email"=>$email);
    }

    function tipoDoacao(){
        $result = array();
        if(isset($_POST['typeMoney'])){
            $result['money'] = "dinheiro";
        }
        if(isset($_POST['typeFood'])){
            $result['food']= "comida/material";
        }
        if(isset($_POST['typeServices'])){
            $result['service'] = "serviço";
        }
        return $result;
    }

    function tipoDoacaoValido($array){
        return !empty($array);
    }

?>