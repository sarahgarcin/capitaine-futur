<?php 
session_start();

//include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>'.$page->title().'</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css" /> 
	</head>
	<body class="toPrint">     
	  <div class="inner-content">
	    <div class="text-wrapper">'.
	    	$page->text()->kirbytext().
	    '</div> 
		</div>'.

  '</body></html>';

$dompdf->loadHtml($html ,'UTF-8');

//(Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();


// Output the generated PDF to Browser
$dompdf->stream($page->title(), array("Attachment" => 0));


?>