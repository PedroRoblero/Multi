<?php
 $mysqli = new  mysqli('localhost','root','','tarjeta'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumnos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table table-bordered">
    <thead>

        <?php
          $query="SELECT * FROM alumno";
          $result= $mysqli-> query($query);
          ?>
      <tr>
        <th>RUT</th>
        <th>DV</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Carrera</th>
        <th>Promocion</th>
        <th>Numero</th>
        <th>Direccion</th>
        <th>Correo</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
      <?php
            foreach($result as $fila){
    ?> 
      <tr>
        <td><?php echo $fila['rut']; ?></td>
        <td><?php echo $fila['dv']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['apellido']; ?></td>
        <td><?php echo $fila['carrera']; ?></td>
        <td><?php echo $fila['promocion']; ?></td>
        <td><?php echo $fila['numero']; ?></td>
        <td><?php echo $fila['direccion']; ?></td>
        <td><?php echo $fila['correo']; ?></td>
       <?php echo "<td>"."<img src='".$fila['foto']."' width='50 px' height='50 px' class='img-responsive'>"."</td>";?>
        <td><a href="example_004.php?id=<?php echo $fila['rut'] ?>"> Generar Tarjeta</td>
      </tr>
     <?php }  
    ?>
    </tbody>
  </table>
</div>

</body>
</html>