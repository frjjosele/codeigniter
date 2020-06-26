<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../assets/img/icono.png',10,8,33);
    // Movernos a la derecha
    $this->Cell(80);
    // Salto de línea
    $this->Ln(20);
}

}

if(isset($_POST["inputNombre"]) && isset($_POST["inputEmail"]) && isset($_POST['base64'])){
    $nombre=$_POST["inputNombre"];
    $email=$_POST["inputEmail"];
    $img = $_POST['base64'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $fileData = base64_decode($img);
    $fileName = 'imagen.png';
    
    file_put_contents($fileName, $fileData);

    // Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,"Email:");
$pdf->Cell(50,10,$email);
$pdf->Ln(20);
$pdf->Cell(40,10,"Nombre:");
$pdf->Cell(50,10,$nombre);
$pdf->Ln(20);
$pdf->Cell(40,10,"Firma:");
$pdf->Image('imagen.png',null,null,60);
$pdf->Output();
print_r("perfecto");
}


?>