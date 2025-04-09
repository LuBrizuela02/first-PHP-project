<?php include("header.php"); ?>
<?php include("aranceles.php"); ?>

<?php 

# Definiendo variables para Curso de PHP
$phpUnidades = 6;
$phpInicio = '10/04/2025';

# Definiendo variables para Curso de JS
$jsUnidades = 8;
$jsInicio = '07/04/2025';

# Definiendo variables para Curso de HTML
$htmlUnidades = 4;
$htmlInicio = '14/04/2025';
?>

<main>
<h2 class="welcomeSubtitle">Bienvenido/a al Portal de Cursos</h2>
<h3 class="coursesSubtitle">Conocé nuestros cursos destacados</h3>   
    
    <div id="inicio" class="container">  
        <section class="phpCourse">
            <h3>Curso de Desarrollo Web con PHP y WordPress</h3>
            <img src="img/php-logo.png" alt="logo-php" class="logo">
            <p>Aprendé a desarrollar sitios web dinámicos con PHP y WordPress desde cero.</p>
            <p><strong>Arancel: </strong>$<?php echo $aranceles['php']; ?><br>
            <strong>Unidades: </strong><?php echo $phpUnidades; ?> <br>
            <strong>Fecha de Inicio: </strong><?php echo $phpInicio; ?></p>
        </section>
        
        <section class="jsCourse">
            <h3>Curso de JavaScript desde Cero</h3>
            <img src="img/JavaScript-logo.png" alt="logo-js" class="logo">
            <p>Domina JavaScript y crea aplicaciones web interactivas y dinámicas.</p>
            <p><strong>Arancel: </strong>$<?php echo $aranceles['js']; ?><br>
            <strong>Unidades: </strong><?php echo $jsUnidades; ?> <br>
            <strong>Fecha de inicio: </strong><?php echo $jsInicio; ?></p>
        </section>
        
        <section class="htmlCourse">
            <h3>Curso de HTML5 y CSS3</h3>
            <img src="img/HTML-CSS-logo.png" alt="logo-html-css" class="logo">
            <p>Aprendé a crear sitios web modernos con las últimas tecnologías de HTML5 CSS3.</p>
            <p><strong>Arancel: </strong>$<?php echo $aranceles['html']; ?><br>
            <strong>Unidades: </strong><?php echo $htmlUnidades; ?> <br>
            <strong>Fecha de inicio: </strong><?php echo $htmlInicio; ?></p>
        </section>
    </div>

    <div id="form">
        <h2>Calculá el arancel total en pesos y dólares</h2>
        <form action="procesar.php" method="get">
            <fieldset>
                <legend>COMBINALOS COMO DESEES</legend>
                <label><input type="checkbox" name="cursos[]" value="php"> Curso de Desarrollo Web con PHP y WordPress</label><br>
                <label><input type="checkbox" name="cursos[]" value="js"> Curso de JavaScript desde cero</label><br>
                <label><input type="checkbox" name="cursos[]" value="html"> Curso de HTML5 y CSS3</label><br>
                <input class="btn" type="submit" value="Calcular total">
            </fieldset>
        </form>

    </div>
</main>

<?php include("footer.php"); ?>