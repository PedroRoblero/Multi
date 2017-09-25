<?php 
	 $mysqli = new  mysqli('localhost','root','','tarjeta');

	$rut=$_REQUEST['id'];
	$query = "SELECT * FROM alumno WHERE rut=$rut";
	$result= $mysqli->query($query);
	?>
	<html>
		<body>
			<tr>
        <th>rut</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>carrera</th>
        <th>promocion</th>
        <th>correo</th>
        <th>foto</th>
      </tr>
      <?php
            foreach($result as $fila){
    ?> 
      
        <td><?php echo $fila['rut']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['apellido']; ?></td>
        <td><?php echo $fila['carrera']; ?></td>
        <td><?php echo $fila['promocion']; ?></td>
        <td><?php echo $fila['correo']; ?></td>
       </tr>
     <?php }  
    ?>
		</body>
	</html>
	<?php 
	require_once("dompdf/dompdf_config.inc.php");
	$dompdf = new DOMPDF();
	$dompdf -> load_html(ob_get_clean());
	$dompdf -> render();
	$pdf = $dompdf ->  output();
	$filename = 'rut.pdf';
	$dompdf -> stream($filename,array("Attachment" => 0));	
?>