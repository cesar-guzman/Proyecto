<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
        <input type="text" value="buscar" id="">
        <input type="sumbit" value="Buscar">
        <a href="nuevo.php">Nuevo</a>
    </div>
    <div>
        <table>
            <tr>
                <td>IDPACIENTE</td>
                <td>NOMBRE</td>
                <td>APELLIDO_M</td>
                <td>APELLIDO_P</td>
                <td>TIPO_SANGRE</td>
                <td>INTERNADO</td>
            </tr>
            <?php
                $cnx = mysqli_connect("database-1.cxngcexswuut.us-east-1.rds.amazonaws.com", "admin", "Plumas008&", "sys");
                $sql = "SELECT idPacientes, Nombre, Apellido_M, Apellido_P, Tipo_Sangre, Internado from Pacientes order by idPacientes desc";
                $rta = mysqli_query($cnx, $sql);
                while($mostrar == mysqli_fetch_row($rta)){
                ?>
                    <tr>
                        <td><?php echo $mostrar['0']?></td>
                        <td><?php echo $mostrar['1']?></td>
                        <td><?php echo $mostrar['2']?></td>
                        <td><?php echo $mostrar['3']?></td>
                        <td><?php echo $mostrar['4']?></td>
                        <td><?php echo $mostrar['5']?></td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
    </form>
</body>
</html>