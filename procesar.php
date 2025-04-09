<?php include("header.php"); ?>
<?php include("aranceles.php"); ?>

<div class="containerCalculator">
<?php
// Cotización del dólar
$dolarHoy = 1300;

// Función personalizada para calcular el total en pesos
function calcularTotalPesos($cursosSeleccionados, $aranceles) {
    $total = 0;
    foreach ($cursosSeleccionados as $curso) {
        if (isset($aranceles[$curso])) {
            $total += $aranceles[$curso];
        }
    }
    return $total;
}

// Verifica si el formulario fue enviado y si hay cursos seleccionados
if (isset($_GET['cursos'])) {
    $cursosSeleccionados = $_GET['cursos']; // Captura los cursos seleccionados

    // Llama a la función personalizada para calcular el total en pesos
    $totalPesos = calcularTotalPesos($cursosSeleccionados, $aranceles);

    // Convierte el total a dólares utilizando función nativa round
    $totalDolares = round($totalPesos / $dolarHoy);

    // Muestra el resultado
    echo "<h3>Total a pagar:</h3>";
    echo "<p><strong>En pesos argentinos: </strong>$$totalPesos</p>";
    echo "<p><strong>En dólares: </strong>USD $totalDolares</p>";
} else {
    echo "<p>No seleccionaste ningún curso.</p>";
}
?>
</div>
<?php include("footer.php"); ?>