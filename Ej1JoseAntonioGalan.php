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
    
        if (isset($_POST['enviar'])) {
            $desde=$_POST['desde'];
            $hasta=$_POST['hasta'];
            
    ?>        
    <h1>Resultado</h1>
    <?php 
        while ($desde <= $hasta) {
            if ($desde%2==0) {?>
            <p>El resultado  <?php echo $desde ?> es par y su cuadrado es <?php echo $desde*$desde ?></p>
            <?php 
            }
            $desde++;
        }?>
        <a href=".\Ej1JoseAntonioGalan.php">Volver</a> <?php //Te lo he puesto como extra ?>
    
    <?php
        }
        else {
        ?>
            <h1>Obtencion de Cuadrados</h1>
            <form action=".\Ej1JoseAntonioGalan.php" method="POST">
                <table>
                    <tr>
                        <td>Desde nº</td>
                        <td><input type="text" name="desde"></td>
                    </tr>
                    <tr>
                        <td>Hasta nº</td>
                        <td><input type="text" name="hasta"></td>
                    </tr>
                </table>
                <input type="submit" name="enviar" value="enviar">
            </form>
    <?php
        }
    ?>

</body>
</html>