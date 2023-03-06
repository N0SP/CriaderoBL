<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">
                <h1>Datos del Cliente</h1>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px;">
                <table border="1" cellpadding="10" cellspacing="0" width="100%" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                    <tr>
                        <td width="30%" style="background-color: #f2f2f2;">
                            <strong>
                                <h3>Nombre:</h3>
                            </strong>
                        </td>
                        <td width=" 70%">
                            <h4>{{ $info['nombre'] }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" style="background-color: #f2f2f2;">
                            <strong>
                                <h3>Email:</h3>
                            </strong>
                        </td>
                        <td width="70%">
                            <h4>{{ $info['email'] }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" style="background-color: #f2f2f2;">
                            <strong>
                                <h3>Teléfono:</h3>
                            </strong>
                        </td>
                        <td width="70%">
                            <h4>{{ $info['telefono'] }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" style="background-color: #f2f2f2;">
                            <strong>
                                <h3>Asunto:</h3>
                            </strong>
                        </td>
                        <td width="70%">
                            <h4>{{ $info['asunto'] }}<h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" style="background-color: #f2f2f2;">
                            <strong>
                                <h3>Mensaje:</h3>
                            </strong>
                        </td>
                        <td width="70%">
                            <h4>{{ $info['mensaje'] }}<h4>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>