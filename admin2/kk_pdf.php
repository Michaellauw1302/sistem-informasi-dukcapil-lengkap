<?php  
require_once('TCPDF-main/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Kartu Keluarga');

$pdf->setFont('times', '', 11, '', true);
$pdf->AddPage('L');
$html = file_get_contents("http://localhost/dukcapil/admin/Kartu_keluarga.php");
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 5, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Data Siswa.pdf', 'I');
?>