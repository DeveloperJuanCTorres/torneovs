<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contactanos</title>
    </head>
    <body>

        <table width='700' height='222' border='0' align='center' cellpadding='5' cellspacing='0'>
            <tr>
                <td width='700' align='center' valign='middle'>
                    <img src="https://www.test.torneosversus.com/assets/images/logonegro.png" width='420' height='160' />
                </td>
            </tr>
            <tr>
                <td align='center' valign='middle' style='color:#000; font-size:18px; font-weight:bold'>LIBRO DE RECLAMACIONES</td>
            </tr>
            <tr>
                <td align='center' valign='middle'>&nbsp;</td>
            </tr>
        </table>

        <table width='700' border='1' cellpadding='8' cellspacing='0' align='center'>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Fecha Nacimiento</td>
                <td align='center' >{{$reclamo['fecha_nac']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Tipo Documento</td>
                <td align='center' >{{$reclamo['tipo_doc']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Número Documento</td>
                <td align='center'>{{$reclamo['numero_doc']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Nombres</td>
                <td align='center'>{{$reclamo['nombres']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Apellido Paterno</td>
                <td align='center'>{{$reclamo['apellido_pat']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Apellido Materno</td>
                <td align='center'>{{$reclamo['apellido_mat']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Email</td>
                <td align='center'>{{$reclamo['email']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Teléfono</td>
                <td align='center'>{{$reclamo['phone']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Departamento</td>
                <td align='center'>{{$reclamo['departamento']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Provincia</td>
                <td align='center'>{{$reclamo['provincia']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Distrito</td>
                <td align='center'>{{$reclamo['distrito']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Dirección</td>
                <td align='center'>{{$reclamo['direccion']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Orden de compra</td>
                <td align='center'>{{$reclamo['orden_compra']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Producto/Servicio</td>
                <td align='center'>{{$reclamo['producto']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Reclamo</td>
                <td align='center'>{{$reclamo['reclamo']}}</td>
            </tr>
            <tr>
                <td align='center' colspan="1" style='font-weight:bold'>Pedido</td>
                <td align='center'>{{$reclamo['pedido']}}</td>
            </tr>
        </table>

    </body>
</html>