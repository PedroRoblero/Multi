<?php 
		function guardar_alumno($rut ,$dv ,$nombre ,$apellido ,$carrera, $promocion, $numero, $direccion, $correo, $foto)
	{
		require 'conexion.php';
		$sql="INSERT INTO alumno (rut ,dv, nombre, apellido, carrera, promocion, numero, direccion, correo, foto) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$smt = $conn -> prepare($sql);
		$smt -> bindparam(1,$rut);
		$smt -> bindparam(2,$dv);
		$smt -> bindparam(3,$nombre);
		$smt -> bindparam(4,$apellido);
		$smt -> bindparam(5,$carrera);
		$smt -> bindparam(6,$promocion);
		$smt -> bindparam(7,$numero);
		$smt -> bindparam(8,$direccion);
		$smt -> bindparam(9,$correo);
		$smt -> bindparam(10,$foto);
		$smt -> execute();
		$conn = null;
	}
	$rut=$_REQUEST['rut'];
	$r=$rut;
	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$carrera=$_REQUEST['carrera'];
	$promocion=$_REQUEST['promocion'];
	$numero=$_REQUEST['numero'];
	$direccion=$_REQUEST['direccion'];
	$correo=$_REQUEST['correo'];
	$foto="img/".$_FILES['foto']['name'];
   if ($_FILES['foto']['error']>0) {
      echo "error con el archivo ";
      //echo $_FILES ['foto']['error'];
   }else{
      move_uploaded_file($_FILES['foto']['tmp_name'],$foto);
      echo "foto movida";
      //echo $foto;
   }
    $s=1;
     for($m=0;$r!=0;$r/=10)
         $s=($s+$r%10*(9-$m++%6))%11;
     //echo 'El digito verificador es: ',chr($s?$s+47:75);
     $dv=chr($s?$s+47:75);
     echo $dv;
     $dv;
     guardar_alumno($rut ,$dv, $nombre,$apellido, $carrera,$promocion,$numero,$direccion,$correo,$foto);
     //guardar_alumno($rut, $dv, $nombre, $apellido, $carrera, $promocion, $correo ,$celular, $direccion, $foto);
     //echo $rut, $dv, $nombre,$apellido,$carrera,$promocion,$correo,$celular,$dirrecion,$foto;

?>