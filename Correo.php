
<?php

    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Asunto = $_POST['Asunto'];
    $Mensaje = $_POST['Mensaje'];

    $header = 'From: ' . $Email . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $Mensaje = "Este mensaje fue enviado por: " . $Nombre . " \r\n";
    $Mensaje .= "Su e-mail es: " . $Email . " \r\n";
    $Mensaje .= "Teléfono de contacto: " . $Telefono . " \r\n";
    $Mensaje .= "Mensaje: " . $_POST['Mensaje'] . " \r\n";
    $Mensaje .= "Enviado el: " . date('d/m/Y', time());

    $para = 'ing_edgar_mtz_casta92@hotmail.com';

    mail($para, $Asunto, utf8_decode($Mensaje), $header);

    echo "<script>alert('Correo Enviado Exitosamente!!!')</script>";

    header("Location:index.html");
?>
