<?php
include 'acesso_com.php';
include '../conn/conect.php';
if($_POST) {
 
    if(isset($_POST['enviar'])){
        //verifica de o btn "enviar" foi acionado
     $nome_img = $_FILES['imagemfile'] ['name'];
     $tmp_img = $_FILES['imagemfile'] ['tmp_name'];
     $rand = rand(100001, 999999);
     $dir_img = "../images/".$rand.$nome_img;
    }
 
 
 
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Produto - Insere</title>
</head>
<body>
<?php include "menu_adm.php";?>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="produtos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo tipos
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="produtos_insere.php" method="post"
                    name="form_insere" enctype="multipart/form-data"
                    id="form_insere">
                        <label for="id_tipo">Tipo:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <select name="id_tipo" id="id_tipo" class="form-control" required>
                               
                                    <option value="">
                                    bebidas
                                    </option>
                                    <option value="">
                                    churrasco
                                    </option>
                                    <option value="">
                                    sobremesa
                                    </option>
                               
                            </select>
                  
                      
                        </div>  
                        <label for="imagem">Imagem:</label>    
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                           </span>
                           <img src="" name="imagem" id="imagem" class="img-responsive">
                           <input type="file" name="imagemfile" id="imagemfile" class="form-control" accept="image/*">
                        </div>
 
                        <br>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
 
<!-- Script para imagem -->
<script>
document.getElementById("imagem").onchange = function(){
    var reader = new FileReader();
    if(this.files[0].size>512000){
        alert("A imagem deve ter no máximo 500KB");
        $("#imagem").attr("src", "blank");
        $("#imagem").hide();
        $("#imagem").wrap('<form>').closest('form').get(0).reset();
        $("#imagem").unwrap();
        return false
    }
    if(this.files[0].type.indexOf("image")==-1){
        alert("formato inválido, escolha uma imagem!");
        $("#imagem").attr("src", "blank");
        $("#imagem").hide();
        $("#imagem").wrap('<form>').closest('form').get(0).reset();
        $("#imagem").unwrap();
        return false
    }
    reader.onload = function(e){
        document.getElementById("imagem").src = e.target.result
        $("#imagem").show();
    }
    reader.readAsDataURL(this.files[0])
}    
</script>
 
</body>
</html>
 