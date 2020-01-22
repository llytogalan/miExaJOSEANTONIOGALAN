<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <?php 

    session_start();

        if (isset($_POST['enviar'])) {
            $modulo=$_POST['modulo'];
            $interes=$_POST['interes'];
            $calificacion=$_POST['calificacion'];
            $_SESSION['modulo']=$_POST['modulo'];
            $_SESSION['interes']=$_POST['interes']; 
            
            if ($calificacion <= 4) {?>
                <h1>Resultado:</h1>
                <p>El modulo a evaluar es <?php echo $modulo?></p>
                <p>El grado de interes es <?php echo $interes?></p>
                <p>No puede ver los datos almacenados en session</p>
            <?php } else {?>
                <h1>Resultado: </h1>
                <p>El modulo a evaluar es <?php echo $modulo?></p>
                <p>El grado de interes es <?php echo $interes?></p>
                <a href=".\Ej2Sesion.php">Ver datos en session</a>
            <?php }?>

        


<?php
        } else { ?>
            <h1>Formulario de Evaluacion</h1>
            <form action=".\Ej2JoseAntonioGalan.php" method="POST">
                <p>Modulo: <?php $modulo = array('IAW', 'ASO', 'SAD', 'EIE', 'HLC' ); ?>
                <select name="modulo">
                    <?php foreach ($modulo as $val) { ?>
                        <option value="<?php echo $val ?>"><?php echo $val ?></option>
                <?php } ?>
                </select></p>
        
                <p>Grado de Interes: <?php $interes = array('bajo', 'medio', 'alto'); ?><br>
                <?php foreach ($interes as $val) {?>
                    <input type="radio" name="interes" value="<?php echo $val ?>"><?php echo $val ?><br>
                <?php }?></p>
        
                <p>Calificacion: 
                    <input type="text" name="calificacion" required>
                </p>
        
                <input type="submit" name="enviar" value="Evaluar" >
            
            </form>
            <?php
        }
        
    ?>


</body>
</html>