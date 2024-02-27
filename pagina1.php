<?php
include "dados.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetinho PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="CSS.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar bg-dark navbar-expand-sm">
        <div class="container">
            <i href="" class="navbar-brand">Manipulação com arrays</i>
            <div class="collapse navbar-collapse">
            <div class="navbar-nav">
            <a class="nav-link" href="index.html">Inicio</a>
            <a class="nav-link"  href="pagina1.php">Página 1</a>
            <a class="nav-link" href="pagina2.php">Página 2</a>
            <a class="nav-link" href="pagina3.php">Página 3</a>
            <a class="nav-link" href="pagina4.php">Página 4</a>
             </div>
            </div>
        </div>
      <span class="navbar-text">SITE BRABO!</span>
   </nav>
   <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col-3">Nome</th>
      <th scope="col-3">Idade</th>
      <th scope="col-3">Estilo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($dados as $row =>$item):?>
    <tr>
      <th scope="row"><?php echo $item['Nome'] ?></th>
      <td><?php echo $item['Idade']?></td>
      <td><?php echo $item['Estilo']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>