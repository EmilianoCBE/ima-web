<?php
// Verificamos que el formulario se haya enviado por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recogemos los datos del formulario
    $nombre = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["phone"]));
    $mensaje = trim($_POST["message"]);

    // Validamos que no vengan vacíos
    if (empty($nombre) || empty($mensaje) || empty($telefono) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Si hay error, lo regresamos a la página
        header("Location: contact.php?estado=error");
        exit;
    }

    // --- CONFIGURACIÓN DEL CORREO ---
    // A este correo llegará la información
    $destinatario = "admin@imaexpressllc.com";
    $asunto = "Nuevo mensaje web de: $nombre";

    // Así se verá el correo que recibas
    $contenido = "Has recibido un nuevo mensaje de contacto desde la web de IMA EXPRESS:\n\n";
    $contenido .= "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Teléfono: $telefono\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Cabeceras (Para que no se vaya a Spam)
    // Nota: El "From" idealmente debe ser un correo de tu dominio (ej. noreply@imaexpressllc.com)
    $headers = "From: admin@imaexpressllc.com\r\n"; 
    $headers .= "Reply-To: $email\r\n";

    // Enviamos el correo
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        // Éxito: Redirigimos a contacto con mensaje de éxito
        header("Location: contact.php?estado=exito");
    } else {
        // Error del servidor
        header("Location: contact.php?estado=error");
    }
} else {
    // Si alguien intenta entrar directamente al archivo, lo regresamos
    header("Location: contact.php");
}
?>