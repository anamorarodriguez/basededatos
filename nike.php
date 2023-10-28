<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> base de datos</h3>
    <h3>TIENDA</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
        </tr>

    <?php 
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda");
    $consulta="SELECT*FROM ropa WHERE marca= 'nike'";
    $datos=mysqli_query($conexion,$consulta);

    while ($registro=mysqli_fetch_array($datos)) { ?>
        <tr> 
            <td><?php echo $registro["id"];?></td>
            <td><?php echo $registro["prenda"];?></td>
            <td><?php echo $registro["marca"];?></td>
            <td><?php echo $registro["talle"];?></td>
            <td><?php echo $registro["precio"];?></td>
        </tr>
        <?php } ?>
    
    </table>

</body>
</html>