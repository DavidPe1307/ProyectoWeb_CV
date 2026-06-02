<php?
    include "conexion.php";
    require_once('fpdf186/fpdf.php');

    $pdf = new PDF();
    $pdf->addPage();
    $pdf -> setFont('Arial', 'B', 16);

    $sqlSelect = "SELECT * FROM productos where proID = '".$_GET["proID"]."'";
    $respuesta = $conn->query($sqlSelect);

?>