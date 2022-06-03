<html>
    <body>
        <?php
            $codigo = $_GET['txt_codigo'];
            $nombre = $_GET['txt_nombre'];
            $apellido = $_GET ['txt_apellido'];
            $sueldo = $_GET['txt_sueldos'];
            $bonificacion = $_GET['txt_bonificacion'];
            $horas1 = $_GET['txt_horas1'];
            $descuento = $_GET['txt_descuento'];

            $igss = ($sueldo*0.0483);
            $horasextra = ($sueldo + $bonificacion)/30/8 * ($horas1);
            $totalingresos = ($sueldo + $bonificacion + $horasextra);
            $totaldes = ($descuento + $igss);
            $sueldoliquido = ($totalingresos - $totaldes);


        ?>
        
        <table border = "1" width = "20%" align = "center">
            <tr>
                <td colspan ="2" align = "center">DATOS GENERALES</td> 
            </tr>
            <tr>
                <td align = "center" width = 50%>Código</td>
                <td align = "center"><?php	echo $codigo; ?></td>
            </tr>
            <tr>
                <td align = "center">Nombre Completo</td>
                <td align = "center"><?php	echo "$nombre "; echo $apellido; ?></td>
            </tr>
            
            <tr>
                <td colspan = "2 "align = "center">INGRESOS</td>
            </tr>

            <tr>
                <td align = "center">Sueldo base</td>
                <td align = "center"><?php	echo $sueldo; ?></td>
            </tr>

            <tr>
                <td align = "center">Bonificación</td>
                <td align = "center"><?php	echo $bonificacion; ?></td>
            </tr>

            <tr>
                <td align = "center">Horas extra</td>
                <td align = "center"><?php echo $horasextra; ?> </td>
            </tr>

            <tr>
                <td colspan = "2 "align = "center">DESCUENTOS</td>
            </tr>

            
            <tr>
                <td align = "center">Descuentos</td>
                <td align = "center"><?php echo $descuento; ?> </td>
            </tr>

            <tr>
                <td align = "center">IGSS</td>
                <td align = "center"><?php echo $igss; ?> </td>
            </tr>

            <tr>
                <td colspan = "2 "align = "center">TOTAL A RECIBIR</td>
            </tr>
            
            <tr>
                <td align = "center">Total de Ingresos</td>
                <td align = "center"><?php echo $totalingresos; ?> </td>
            </tr>

            <tr>
                <td align = "center">Total de Descuentos</td>
                <td align = "center"><?php echo $totaldes; ?> </td>
            </tr>

            <tr>
                <td align = "center">Sueldo Líquido</td>
                <td align = "center"><?php echo $sueldoliquido; ?> </td>
            </tr>
        </table>    
    </body>
</html>