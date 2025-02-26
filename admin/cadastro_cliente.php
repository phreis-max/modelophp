<?php
include '../conn/conect.php';
// inicia a verificação do email
 
if($_POST){
$email = $_POST['email'];
$senha = $_POST['senha'];
$emailResult = $conn->query("select * from usuarios where email = '$email' and senha = md5('$senha')");
$rowemail = $emailResult->fetch_assoc();
// var_dump($rowemail);
// die();
$numRow = $emailResult->num_rows;
if(!isset($_SESSION)){
    $sessaoAntiga = session_name('chulettaaa');
    session_start();
    $session_name_new = session_name();
}
if($numRow > 0){
    $_SESSION['email_usuario'] = $email;
    $_SESSION['nivel_usuario'] = $rowemail['nivel'];
    $_SESSION['nome_da_sessao'] = session_name();
    if ($rowemail['nivel'] == 'sup'){
        echo "<script>window.open('index.php','_self')</script>";
    }else{
        echo "<script>window.open('../cliente/index.php?cliente=".$email."','_self')</script>";
    }
}
 
 
}
 
?>
<!DOCTYPE html>
<html lang="pt-BR">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="30;URL=../index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2495680ceb.js" crossorigin="anonymous"></script>
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
   
    <title>Chuleta Quente - email</title>
</head>
 
<body>
    <main class="container">
        <section>
            <article>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <h1 class="breadcrumb text-info text-center">Faça seu cadastro</h1>
                        <div class="thumbnail">
                            <p class="text-info text-center" role="alert">
                                <i class="fas fa-users fa-10x"></i>
                            </p>
                            <br>
                            <div class="alert alert-info" role="alert">
                                <form action="email.php" name="form_email" id="form_email" method="POST" enctype="multipart/form-data">
                                    <label for="email_usuario">Email:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="email" id="email" class="form-control" autofocus required autocomplete="off" placeholder="Digite seu email.">
                                    </p>
                                    <label for="senha">Senha:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="password" name="senha" id="senha" class="form-control" required autocomplete="off" placeholder="Digite sua senha.">
                                    </p>
                                    <p class="text-right">
                                        <input type="submit" value="Entrar" class="btn btn-primary">
                                    </p>
                                </form>
                                <p class="text-center">
                                    <small>
                                        <br>
                                        Caso não faça uma escolha em 30 segundos será redirecionado automaticamente para página inicial.
                                    </small>
                                </p>
                            </div><!-- fecha alert -->
                        </div><!-- fecha thumbnail -->
                    </div><!-- fecha dimensionamento -->
                </div><!-- fecha row -->
            </article>
        </section>
    </main>
 
 
    <!-- Link arquivos Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
 
</html>
 