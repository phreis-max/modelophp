<?php 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Chuleta quente</title>
</head>
<body class="fundofixo">
    <!-- area de menu -->
<?php include 'menu_publico.php'; ?>
     <a name="home">&nbsp;</a>
     <main class="container">
        <!-- are de carrosel -->
     <?php include 'carrosel.php?'?>
     </main>
     <!-- area de destaque -->
      <a class="pt-6" name="destaques">&nbsp;</a>
      <?php include 'produtos_deataque.php' ?>
        <!-- area de destaque -->
      <a class="pt-6" name="produtos">&nbsp;</a>
      <?php include 'produtos_geral.php' ?>
<!-- rodape -->
 <footer class="panel-footer" style="background-color: none;"></footer>
 <a name="contato"></a>
</body>
</html>