<?php

$mysqli = new  mysqli('localhost','root','','tarjeta');
	$rut=$_REQUEST['id'];
	$query = "SELECT * FROM alumno WHERE rut=$rut";
	$result= $mysqli->query($query);
//============================================================+
// File name   : example_004.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 004 for TCPDF class
//               Cell stretching
//
// Author: Nicolas Frias
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Cell stretching
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 004');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 004', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}




// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 11);

// add a page
$pdf->AddPage();

//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

// test Cell stretching
$pdf->Ln(5);
foreach($result as $fila){
$pdf->Cell(45, 0,'rut:'.$fila['rut'], 1, 1, 'C', 0, '', 1);
$pdf->Cell(45, 0,'nombre:'.$fila['nombre'], 1, 1, 'C', 0, '', 1);
$pdf->Cell(45, 0,'apellido:'.$fila['apellido'], 1, 1, 'C', 0, '', 1);
$pdf->Cell(45, 0, 'carrera:'.$fila['carrera'], 1, 1, 'C', 0, '', 1);
$pdf->Cell(45, 0, 'promocion:'.$fila['promocion'], 1, 1, 'C', 0, '', 1);
$pdf->Cell(45, 0, 'telefono:'.$fila['numero'], 1, 1, 'C', 0, '', 1);
$pdf->Cell(45, 0, 'dirrecion'.$fila['direccion'], 1, 1, 'C', 0, '', 1);
$pdf->Cell(45, 0, 'correo:'.$fila['correo'], 1, 1, 'C', 0, '', 1);
}


// example using general stretching and spacing

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
